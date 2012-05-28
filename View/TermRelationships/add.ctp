<section class="single clearfix">
<?php echo $this->Form->create('TermRelationship');?>
	<legend><?php echo __('Add Term Relationship'); ?></legend>
	<fieldset>
		<?php echo $this->Form->input('object_id', array('options' => $objects)); ?>
	</fieldset>
	<fieldset>
		<?php echo $this->Form->input('term_taxonomy_id', array('options' => $taxonomies));?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</section>