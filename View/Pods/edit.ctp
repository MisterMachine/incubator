<section class="single clearfix">
	<article>
	<h1><?php echo __('Edit Pod'); ?></h1>
	<?php echo $this->Form->create('Pod', array('action' => 'edit'));
	echo $this->Form->input('name');
	echo $this->Form->input('content');
	echo $this->Form->input('sequence');
	echo $this->Form->input('complexity', array('options' => array(1,2,3,4,5)));
	echo $this->Form->end(__('Save Pod'));
	?>
	</article>
</section>
