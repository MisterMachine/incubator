<section class="container_12">
<?php echo $this->Form->create('Seed');?>
	<fieldset class="grid_12 top">
		<h1><?php echo __('Add Seed'); ?></h1>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('cost');
		echo $this->Form->input('content');
		echo $this->Form->input('url');
		echo $this->Form->input('repository');
	?>
	</fieldset>
	<fieldset class="grid_12">
		<?php echo $this->Form->end(__('Submit'));?>
	</fieldset>
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