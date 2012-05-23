<section class="single clearfix">
	<article>
	<h1><?php echo __('Edit Seed'); ?></h1>
	<?php echo $this->Form->create('Seed', array('action' => 'edit'));
	echo $this->Form->input('name');
	echo $this->Form->input('content');
	echo $this->Form->input('technology');
	echo $this->Form->input('url');
	echo $this->Form->input('repository');
	echo $this->Form->end(__('Save Seed'));
	?>
	</article>
</section>
