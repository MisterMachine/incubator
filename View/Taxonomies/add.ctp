<section class="single clearfix">
<?php echo $this->Form->create('Taxonomy');?>
	<fieldset>
		<legend><?php echo __('Add Taxonomy'); ?></legend>
	<?php
		echo $this->Form->input('term_id', array(
			'options' => $terms
		));
		echo $this->Form->input('name', array(
			'options' => array('design' => 'Design', 'technology' => 'Technology')
		));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</section>