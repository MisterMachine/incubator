<section class="container_12">
	<article class="top grid_12">
		<h3 class="bottom-10"><?php echo __('Step Four: Collaborators'); ?></h3>
		<?php echo $this->Form->create('Seed', array('class' => 'madlib'));?>

			<fieldset class="madline">
				<div class="junction">
					
					<span>
					<?php echo $this->Form->input('name', array('div' => false, 'label' => 'characteristic', 'class' => 'text', 'placeholder' => __('Tech leader'))); ?>
					</span>
				</div>
				<div class="junction">
					
					<span>
					<?php echo $this->Form->input('technology', array('div' => false, 'label' => 'technology', 'class' => 'text', 'placeholder' => __('Ruby'))); ?>
					</span>
				</div>
				<div class="junction">
					
					<span>
					<?php echo $this->Form->input('cost', array('div' => false, 'label' => 'personality', 'class' => 'text', 'placeholder' => __('hyper'))); ?><?php echo __('<span class="punctum"></span>'); ?>
					</span>
				</div>
			</fieldset>


			<fieldset>
				<ul class="clippings">
				<?php foreach($terms as $term) : ?>
					<li><a href="#"><?php echo $term['Term']['name']; ?> <span class="count"></span></a></li>
				<?php endforeach; ?>
				</ul>
			</fieldset>

		<?php echo $this->Form->end(__('Next')); ?>
	</article>
</section>
