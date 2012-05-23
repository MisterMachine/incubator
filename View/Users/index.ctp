<section class="single clearfix">
	<h2><?php __('Users'); ?></h2>
	<table class="container_12">
		<tr>
			<th><?php echo __('Id'); ?></th>
			<th><?php echo __('Username'); ?></th>
			<th><?php echo __('Role'); ?></th>
			<th><?php echo __('Created'); ?></th>
		</tr>
		<?php foreach ($users as $user): ?>
		<tr>
			<td><?php echo $user['User']['id']; ?></td>
			<td>
				<?php echo $this->Html->link($user['User']['username'], array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?>
			</td>
			<td><?php echo $user['User']['role']; ?></td>
			<td><?php echo $user['User']['created']; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</section>
