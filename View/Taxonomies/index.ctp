<section class="single clearfix">
	<h2><?php __('Taxonomies'); ?></h2>
	<table class="container_12">
		<tr>
			<th><?php echo __('Id'); ?></th>
			<th><?php echo __('Term ID'); ?></th>
			<th><?php echo __('Name'); ?></th>
			<th><?php echo __('Term'); ?></th>
		</tr>
		<?php foreach ($taxonomies as $taxonomy): ?>
		<tr>
			<td><?php echo $taxonomy['Taxonomy']['id']; ?></td>
			<td><?php echo $taxonomy['Taxonomy']['term_id']; ?></td>
			<td><?php echo $this->Html->link($taxonomy['Taxonomy']['name'], array('controller' => 'taxonomies', 'action' => 'view', $taxonomy['Taxonomy']['id'])); ?></td>
			<td><?php echo $this->Html->link($taxonomy['Term']['name'], array('controller' => 'terms', 'action' => 'view', $taxonomy['Taxonomy']['term_id'])); ?></td>
		</tr>
		<?php endforeach; ?>
	</table>

	<nav class="grid_8">
		<ul>
			<li><?php echo $this->Html->link(__('Add Taxonomy'), array('controller' => 'taxonomies', 'action' => 'add')); ?></li>
		</ul>
	</nav>

</section>