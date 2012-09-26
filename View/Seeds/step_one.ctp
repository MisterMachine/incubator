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
	
	<article class="top grid_12 clearfix">
		<h1 class="big-type bottom-10"><strong>Step 1:</strong><br><?php echo __('Fill in the blanks'); ?></h1>
		<p class="help">Dolor +1 sriracha stumptown, food truck dolore aliqua commodo keffiyeh vinyl mollit aesthetic wayfarers DIY. Gluten-free odd future consequat bespoke chambray, helvetica sustainable bushwick mumblecore dolor. Messenger bag pariatur velit, minim excepteur polaroid raw denim ea delectus. </p>
		<fieldset class="madline">
			<div class="junction">
				<span class="note"><?php echo __('I want to make a'); ?></span> 
				<span>
				<?php echo $this->Form->input('name', array('div' => false, 'label' => 'idea', 'class' => 'text', 'placeholder' => __('Super dope App'))); ?>
				</span>
			</div>
			<div class="junction">
				<span class="note"><?php echo __('with'); ?></span> 
				<span>
				<?php echo $this->Form->input('technology', array('div' => false, 'label' => 'technology', 'class' => 'text', 'placeholder' => __('WordPress'))); ?>
				</span>
			</div>
			<div class="junction">
				<span class="note"><?php echo __('for'); ?></span> 
				<span>
				<?php echo $this->Form->input('cost', array('div' => false, 'label' => 'budget', 'class' => 'text', 'placeholder' => __('$5,000'))); ?><?php echo __('<span class="punctum"></span>'); ?>
				</span>
			</div>
		</fieldset>
	</article>
	
	<div class="clear"></div>
	<section class="paginate clearfix">
		<ul class="status grid_2">
			<li><a href="#"><?php echo __('Save'); ?></a></li>
			<li><a href="/seeds"><?php echo __('Cancel'); ?></a></li>
		</ul>
		<ul class="pages center">
			<li><a href="/seeds"><?php echo __('Back'); ?></a></li>
			<li><?php echo $this->Form->submit('Next', array('div' => false)); ?></li>
		</ul>
	</section>
	<?php echo $this->Form->end(); ?>

</section>