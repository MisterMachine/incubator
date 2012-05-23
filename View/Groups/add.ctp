<section class="single clearfix">
<?php echo $this->Form->create('Group');?>
	<fieldset>
		<legend><?php echo __('Add Group'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('content');
		echo $this->Form->input('sequence');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</section>
