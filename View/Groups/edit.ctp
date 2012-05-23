<section class="single clearfix">
	<article>
	<h1><?php echo __('Edit Group'); ?></h1>
	<?php echo $this->Form->create('Group', array('action' => 'edit'));
	echo $this->Form->input('name');
	echo $this->Form->input('content');
	echo $this->Form->input('sequence');
	echo $this->Form->end(__('Save Group'));
	?>
	</article>
</section>
