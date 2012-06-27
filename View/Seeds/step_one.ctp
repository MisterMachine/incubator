<section class="container_12">
	<!--section class="top progress grid_12 clearfix">
		<ul class="clearfix">
			<li class="current"><a href="#">1. The Big Idea</a></li>
			<li><a href="#">2. Design Priorities</a></li>
			<li><a href="#">3. Technology Focus</a></li>
			<li><a href="#">4. Collaborators</a></li>
			<li><a href="#">Activity</a></li>
			<li class="right"><a href="#">Preview</a></li>
		</ul>
	</section-->
	<div class="clear"></div>
	<?php echo $this->Form->create('Seed', array('class' => 'madlib'));?>
	<article class="top grid_12">
		<h1 class="big-type bottom-10"><strong>Step 1:</strong><br><?php echo __('Fill in the blanks'); ?></h1>
		<p class="help">Dolor +1 sriracha stumptown, food truck dolore aliqua commodo keffiyeh vinyl mollit aesthetic wayfarers DIY. Gluten-free odd future consequat bespoke chambray, helvetica sustainable bushwick mumblecore dolor. Messenger bag pariatur velit, minim excepteur polaroid raw denim ea delectus. </p>
		<fieldset class="madline">
			<div class="junction">
				<span><?php echo __('I want to make a'); ?></span> 
				<span>
				<?php echo $this->Form->input('name', array('div' => false, 'label' => 'idea', 'class' => 'text', 'placeholder' => __('Super dope App'))); ?>
				</span>
			</div>
			<div class="junction">
				<span><?php echo __('with'); ?></span> 
				<span>
				<?php echo $this->Form->input('technology', array('div' => false, 'label' => 'technology', 'class' => 'text', 'placeholder' => __('WordPress'))); ?>
				</span>
			</div>
			<div class="junction">
				<span><?php echo __('for'); ?></span> 
				<span>
				<?php echo $this->Form->input('cost', array('div' => false, 'label' => 'budget', 'class' => 'text', 'placeholder' => __('$5,000'))); ?><?php echo __('<span class="punctum"></span>'); ?>
				</span>
			</div>
		</fieldset>
	</article>
	<section class="paginate grid_12 clearfix">
		<ul class="status grid_2">
			<li><a href="#">Save</a></li>
			<li><a href="#">Cancel</a></li>
		</ul>
		<ul class="pages center">
			<li><a href="#">Back</a></li>
			<li><a href="#">Next</a></li>
		</ul>
	</section>
	<?php echo $this->Form->end(); ?>
</section>