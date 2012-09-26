<section class="single vertical-10 clearfix">
	<article>
	<h1><?php echo __('Edit Seed'); ?></h1>
	<?php echo $this->Form->create('Seed', array('action' => 'edit')); ?>
	<?php echo $this->Form->input('name'); ?>
	<?php echo $this->Form->input('cost'); ?>
	<?php echo $this->Form->input('content'); ?>
	<?php echo $this->Form->input('url'); ?>
	<?php echo $this->Form->input('repository'); ?>
	</article>
</section>
<section class="single clearfix">
	<article>
		<h1><?php echo __('Tags'); ?></h1>
		<ul class="taxonomies">
			<?php foreach($taxonomies as $taxonomy) : ?>
			<li class="clearfix">
				<?php echo $taxonomy['Taxonomy']['name']; ?>
				<ul class="clippings">
				<?php foreach($taxonomy['Terms'] as $term) : ?>
					<li><a href="#"><?php echo $this->Form->checkbox($term['Term']['name'], array('class' => 'checkbox', 'hiddenField' => false)); ?><?php echo $term['Term']['name']; ?>&nbsp;<span class="count"></span></a></li>
				<?php endforeach; ?>
				</ul>
			</li>
			<?php endforeach; ?>
		</ul>
	</article>
</section>