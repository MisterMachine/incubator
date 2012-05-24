<section class="single clearfix">
	<article>
	<h1><?php echo __('Edit Term'); ?></h1>
	<?php echo $this->Form->create('Term', array('action' => 'edit'));
	echo $this->Form->input('name');
	echo $this->Form->input('slug');
	echo $this->Form->end(__('Save Term'));
	?>
	</article>
</section>
