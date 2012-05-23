<section class="single clearfix">
<?php echo $this->Form->create('Pod');?>
	<fieldset>
		<legend><?php echo __('Add Pod'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('group_id', array(
			'options' => $groups
		));
		echo $this->Form->input('content');
		echo $this->Form->input('sequence');
		echo $this->Form->input('complexity', array(
			'options' => array(1,2,3,4,5)
		));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</section>