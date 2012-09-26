<section class="container_12">
<?php echo $this->Form->create('Seed');?>
	<fieldset>
		<legend><?php echo __('Add Seed'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('cost');
		echo $this->Form->input('content');
		echo $this->Form->input('url');
		echo $this->Form->input('repository');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
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
					<li><a href="#"><?php echo $this->Form->checkbox(); ?><?php $term['Term']['name']; ?>&nbsp;<span class="count"></span></a></li>
				<?php endforeach; ?>
				</ul>
			</li>
			<?php endforeach; ?>
		</ul>
	</article>
</section>