<section class="single clearfix">
	<h2><?php __('Seeds'); ?></h2>
	<table class="container_12">
		<tr>
			<th><?php echo __('Id'); ?></th>
			<th><?php echo __('Name'); ?></th>
			<th><?php echo __('Created'); ?></th>
		</tr>
		<?php foreach ($seeds as $seed): ?>
		<tr>
			<td><?php echo $seed['Seed']['id']; ?></td>
			<td><?php echo $this->Html->link($seed['Seed']['name'], array('controller' => 'seeds', 'action' => 'view', $seed['Seed']['id'])); ?></td>
			<td><?php echo $seed['Seed']['created']; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>

	<nav class="grid_8">
		<ul>
			<li><?php echo $this->Html->link(__('Add Seed'), array('controller' => 'seeds', 'action' => 'add')); ?></li>
		</ul>
	</nav>

</section>