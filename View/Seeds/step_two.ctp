<section class="container_12">
	<article class="top grid_12">
		<h3 class="bottom-30"><?php echo __('Step Two: Design Priorities'); ?></h3>
		<?php echo $this->Form->create('Seed', array('class' => 'madlib'));?>
		<ul class="clippings">
		<?php foreach($terms as $term) : ?>
			<li><a href="#"><?php echo $term['Term']['name']; ?> <span class="count"></span></a></li>
		<?php endforeach; ?>
		</ul>
		<?php echo $this->Form->end(__('Next')); ?>
	</article>
</section>