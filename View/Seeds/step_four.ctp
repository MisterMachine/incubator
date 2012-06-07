<section class="container_12">
	<article class="top grid_12">
		<h3 class="bottom-10"><?php echo __('Step Four: Collaborators'); ?></h3>
		<?php echo $this->Form->create('Seed', array('class' => 'madlib'));?>
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
		
		<?php echo $this->Form->end(__('Next')); ?>
	</article>
</section>
