default_run_options[:pty] = true  # Must be set for the password prompt from git to work

set :domain, "mistermachineshop.com"
set :user, "root"
set :application, "heart"
set :repository,  "git@github.com:menslow/heart.git"
set :branch, "master"
set :scm, :git

# Tell Capistrano to use agent forwarding with this command. uses your local keys instead of keys installed on the server.
ssh_options[:forward_agent] = true

# Deploy settings
set :deploy_to, "/var/www/#{application}"

# Fetch only the changes since the last.
set :deploy_via, :remote_cache

# Exclude the following files
set :copy_exclude, [".git", ".DS_Store", ".gitignore", ".gitmodules"]
 
set :copy_compression, :gzip
 
# Options
set :use_sudo, false
set :keep_releases, 5
 
# Roles & servers
role :app, "#{domain}"
 
server "#{domain}", :app, :primary => true
 
# Environments
task :production do
	set :deploy_to, "/var/www/#{application}"
end
 
# Deployment tasks
namespace :deploy do
  desc "Override the original :restart"

  task :finalize_update, :roles => :app do
 
    # add any additional deploy tasks here.
 
  end
 
end

namespace(:customs) do
  task :config_core, :roles => :app do
    run <<-CMD
      ln -nfs #{shared_path}/Config/core.php #{release_path}/Config/core.php
    CMD
  end
  task :config_database, :roles => :app do
    run <<-CMD
      ln -nfs #{shared_path}/Config/database.php #{release_path}/Config/database.php
    CMD
  end
  task :symlink_tmp, :roles => :app do
    run <<-CMD
      ln -nfs #{shared_path}/tmp #{release_path}/tmp
    CMD
  end
  task :symlink_plugin, :roles => :app do
    run <<-CMD
      ln -nfs #{shared_path}/Plugin #{release_path}/Plugin
    CMD
  end
end

after "deploy:symlink", "customs:config_core"
after "deploy:symlink", "customs:config_database"
after "deploy:symlink","customs:symlink_tmp"
after "deploy:symlink","customs:symlink_plugin"
after "deploy", "deploy:cleanup"