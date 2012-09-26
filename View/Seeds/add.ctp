<section class="container_12">
<?php echo $this->Form->create('Seed', array('action' => 'add')); ?>
	<fieldset class="grid_12 top">
		<h1><?php echo __('Add Seed'); ?></h1>
		<?php echo $this->Form->input('name'); ?>
		<?php echo $this->Form->input('cost'); ?>
		<?php echo $this->Form->input('content'); ?>
		<?php echo $this->Form->input('url'); ?>
		<?php echo $this->Form->input('repository'); ?>
	</fieldset>
	<fieldset>
		<h2><?php echo __('Tags'); ?></h2>
		<ul class="taxonomies">
			<?php foreach($taxonomies as $taxonomy) : ?>
			<li class="clearfix">
				<?php echo $taxonomy['Taxonomy']['name']; ?>
				<ul class="clippings">
				<?php foreach($taxonomy['Terms'] as $term) : ?>
					<li><a href="#"><?php echo $this->Form->checkbox('Seed.TermRelationship.'.$term['Term']['name'], array('class' => 'checkbox', 'hiddenField' => false)); ?><?php echo $term['Term']['name']; ?>&nbsp;<span class="count"></span></a></li>
				<?php endforeach; ?>
				</ul>
			</li>
			<?php endforeach; ?>
		</ul>
	</fieldset>
	<fieldset class="grid_12">
		<?php echo $this->Form->end(__('Submit'));?>
	</fieldset>
</section>