<section class="container_12">
	<article class="top grid_12">
		<h3 class="bottom-10"><?php echo __('Step Five: Recent Activity'); ?></h3>
		<?php echo $this->Form->create('Seed', array('class' => 'madlib'));?>

		<fieldset>
			<ul class="clippings">
			<?php foreach($terms as $term) : ?>
				<li><a href="#"><?php echo $term['Term']['name']; ?> <span class="count"></span></a></li>
			<?php endforeach; ?>
			</ul>
		</fieldset>
		
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
	</article>
</section>
