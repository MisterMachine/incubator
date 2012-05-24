<section class="single clearfix">
	<article>
	<h1><?php echo __('Edit Taxonomy'); ?></h1>
	<?php echo $this->Form->create('Taxonomy', array('action' => 'edit'));
	echo $this->Form->input('term_id');
	echo $this->Form->input('name');
	echo $this->Form->end(__('Save Taxonomy'));
	?>
	</article>
</section>
