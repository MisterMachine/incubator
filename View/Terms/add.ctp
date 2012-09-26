<section class="top clearfix">
<?php echo $this->Form->create('Term');?>
	<fieldset>
		<legend><?php echo __('Add Term'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('slug');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</section>