<section class="container_12">
	<article class="grid_12">
		<?php echo $this->Form->create('Term', array('class' => 'tags'));?>
			<h3><?php echo __('Clippings'); ?></h3>
			<fieldset>
				<ul class="clippings">
					<li><a href="#">WordPress <span class="count">12</span></a></li>
					<li><a href="#">Responsive <span class="count">34</span></a></li>
					<li><a href="#">HTML 5 <span class="count">28</span></a></li>
				</ul>
			</fieldset>
			
			<fieldset class="inline">
				<label class="width2 first field-first"><?php echo __('Add a tag'); ?>
					<?php echo $this->Form->input('name', array('div' => false, 'label' => false, 'class' => 'text')); ?>
				</label>
				<button><?php echo __('Add'); ?></button>
			</fieldset>
			
		<?php echo $this->Form->end();?>
	</article>
</section>
