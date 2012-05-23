<section class="single clearfix">
	<h2><?php __('Pods'); ?></h2>
	<table class="container_12">
		<tr>
			<th><?php echo __('Id'); ?></th>
			<th><?php echo __('Name'); ?></th>
			<th><?php echo __('Group'); ?></th>
			<th><?php echo __('Sequence'); ?></th>
			<th><?php echo __('Complexity'); ?></th>
			<th><?php echo __('Created'); ?></th>
		</tr>
		<?php foreach ($pods as $pod): ?>
		<tr>
			<td><?php echo $pod['Pod']['id']; ?></td>
			<td><?php echo $this->Html->link($pod['Pod']['name'], array('controller' => 'pods', 'action' => 'view', $pod['Pod']['id'])); ?></td>
			<td><?php echo $pod['Pod']['sequence']; ?></td>
			<td><?php echo $pod['Group']['name']; ?></td>
			<td><?php echo $pod['Pod']['complexity']; ?></td>
			<td><?php echo $pod['Pod']['created']; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>

	<nav class="grid_8">
		<ul>
			<li><?php echo $this->Html->link(__('Add Pod'), array('controller' => 'pods', 'action' => 'add')); ?></li>
		</ul>
	</nav>

</section>