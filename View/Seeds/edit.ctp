<section class="single vertical-10 clearfix">
	<article>
	<h1><?php echo __('Edit Seed'); ?></h1>
	<?php echo $this->Form->create('Seed', array('action' => 'edit'));
	echo $this->Form->input('name');
	echo $this->Form->input('cost');
	echo $this->Form->input('content');
	echo $this->Form->input('url');
	echo $this->Form->input('repository');
	echo $this->Form->end(__('Save Seed'));
	?>
	</article>

</section>

<section class="single clearfix">
	<article>
		<h1><?php echo __('Terms & Taxonomies'); ?></h1>
		<ul class="taxonomies">
			<?php foreach($taxonomies as $taxonomy) : ?>
			<li class="clearfix">
				<?php echo $taxonomy['Taxonomy']['name']; ?>
				<ul class="clippings">
				<?php foreach($taxonomy['Terms'] as $term) : ?>
					<li><a href="#"><?php echo $term['Term']['name']; ?> <span class="count"></span></a></li>
				<?php endforeach; ?>
				</ul>
			</li>
			<?php endforeach; ?>
		</ul>
	</article>
</section>