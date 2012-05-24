<section class="container_12">
	<article class="grid_12">
		<h3><?php echo __('Plant a Seed'); ?></h3>
		<?php echo $this->Form->create('Seed', array('class' => 'madlib'));?>
			<fieldset>
				<label>
					<span><?php echo __('I want to make a'); ?></span> 
					<?php echo $this->Form->input('name', array('div' => false, 'label' => false, 'class' => 'text', 'placeholder' => __('Super dope App'))); ?>
				</label>
				<label>
					<span><?php echo __('with'); ?></span> 
					<?php echo $this->Form->input('technology', array('div' => false, 'label' => false, 'class' => 'text', 'placeholder' => __('WordPress'))); ?>
				</label>
				<label>
					<span><?php echo __('for'); ?></span> 
					<?php echo $this->Form->input('cost', array('div' => false, 'label' => false, 'class' => 'text', 'placeholder' => __('$5,000'))); ?><?php echo __('!'); ?>
				</label>
			</fieldset>
		<?php echo $this->Form->end(__('Save')); ?>
	</article>
</section>
