<section class="container_12">
<?php echo $this->Form->create('Seed');?>
	<fieldset>
		<legend><?php echo __('Add Seed'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('cost');
		echo $this->Form->input('content');
		echo $this->Form->input('url');
		echo $this->Form->input('repository');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</section>