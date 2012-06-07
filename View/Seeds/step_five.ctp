<section class="container_12">
	<article class="top grid_12">
		<h3 class="bottom-10"><?php echo __('Step Five: Recent Activity'); ?></h3>
		<?php echo $this->Form->create('Seed', array('class' => 'madlib'));?>
		<ul class="clippings">
		<?php foreach($terms as $term) : ?>
			<li><a href="#"><?php echo $term['Term']['name']; ?> <span class="count"></span></a></li>
		<?php endforeach; ?>
		</ul>
		<?php echo $this->Form->end(__('Next')); ?>
	</article>
</section>
