<section class="single clearfix">
	<h2><?php __('Term Relationships'); ?></h2>
	<table class="container_12">
		<tr>
			<th><?php echo __('Id'); ?></th>
			<th><?php echo __('Object Id'); ?></th>
			<th><?php echo __('Term Taxonomy Id'); ?></th>
		</tr>
		<?php foreach ($termRelationships as $termRelationship): ?>
		<tr>
			<td><?php echo $termRelationship['TermRelationship']['id']; ?></td>
			<td><?php echo $this->Html->link($termRelationship['TermRelationship']['object_id'], array('controller' => 'termrelationships', 'action' => 'view', $termRelationship['TermRelationship']['id'])); ?></td>
			<td><?php echo $termRelationship['TermRelationship']['term_taxonomy_id']; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>

	<nav class="grid_8">
		<ul>
			<li><?php echo $this->Html->link(__('Add Term Relationship'), array('controller' => 'term_relationships', 'action' => 'add')); ?></li>
		</ul>
	</nav>

</section>