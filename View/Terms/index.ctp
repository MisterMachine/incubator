<section class="single clearfix">
	<h2><?php __('Terms'); ?></h2>
	<table class="container_12">
		<tr>
			<th><?php echo __('Id'); ?></th>
			<th><?php echo __('Name'); ?></th>
			<th><?php echo __('Slug'); ?></th>
			<th><?php echo __('Taxonomy'); ?></th>
		</tr>
		<?php foreach ($terms as $term): ?>
		<tr>
			<td><?php echo $term['Term']['id']; ?></td>
			<td><?php echo $this->Html->link($term['Term']['name'], array('controller' => 'terms', 'action' => 'view', $term['Term']['id'])); ?></td>
			<td><?php echo $term['Term']['slug']; ?></td>
			<td><?php echo $term['TaxonomyList']; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>

	<nav class="grid_8">
		<ul>
			<li><?php echo $this->Html->link(__('Add Term'), array('controller' => 'terms', 'action' => 'add')); ?></li>
		</ul>
	</nav>

</section>