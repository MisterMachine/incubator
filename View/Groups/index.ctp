<section class="single clearfix">
	<h2><?php __('Groups'); ?></h2>
	<table class="container_12">
		<tr>
			<th><?php echo __('Id'); ?></th>
			<th><?php echo __('Name'); ?></th>
			<th><?php echo __('Sequence'); ?></th>
			<th><?php echo __('Created'); ?></th>
		</tr>
		<?php foreach ($groups as $group): ?>
		<tr>
			<td><?php echo $group['Group']['id']; ?></td>
			<td>
				<?php echo $this->Html->link($group['Group']['name'], array('controller' => 'groups', 'action' => 'view', $group['Group']['id'])); ?>
			</td>
			<td><?php echo $group['Group']['sequence']; ?></td>
			<td><?php echo $group['Group']['created']; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>

	<nav class="grid_8">
		<ul>
			<li><?php echo $this->Html->link(__('Add Group'), array('controller' => 'groups', 'action' => 'add')); ?></li>
		</ul>
	</nav>

</section>