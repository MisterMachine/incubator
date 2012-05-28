<section class="single clearfix">
	<article>
	<h1><?php echo __('Edit Term Relationship'); ?></h1>
	<?php echo $this->Form->create('TermRelationship', array('action' => 'edit'));
	echo $this->Form->input('object_id');
	echo $this->Form->input('term_taxonomy_id');
	echo $this->Form->end(__('Save Term Relationship'));
	?>
	</article>
</section>
