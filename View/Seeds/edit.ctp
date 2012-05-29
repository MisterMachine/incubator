<section class="single clearfix">
	<article>
	<h1><?php echo __('Edit Seed'); ?></h1>
	<?php echo $this->Form->create('Seed', array('action' => 'edit'));
	echo $this->Form->input('name');
	echo $this->Form->input('technology');
	echo $this->Form->input('cost');
	echo $this->Form->input('content');
	echo $this->Form->input('url');
	echo $this->Form->input('repository');
	echo $this->Form->end(__('Save Seed'));
	?>
	</article>

	<ul class="clippings">
		<?php foreach($terms as $term) : ?>
		<li><a href="#"><?php echo $term['Term']['name']; ?> <span class="count">12</span></a></li>
		<?php endforeach; ?>
	</ul>

</section>

<section class="single clearfix">
	<article>
	<h1><?php echo __('Add Term Relationships'); ?></h1>
	<?php echo $this->Form->create('TermRelationship', array('action' => 'add'));?>
		<fieldset>
			<?php echo $this->Form->input('object_id', array('options' => $objects)); ?>
		</fieldset>
		<fieldset>
			<?php echo $this->Form->input('term_taxonomy_id', array('options' => $taxonomies));?>
		</fieldset>
		</article>
	<?php echo $this->Form->end(__('Submit'));?>
</section>