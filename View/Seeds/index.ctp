<section class="single clearfix">
	<h2><?php __('Seeds'); ?></h2>
	
	
	<ul class="planter box container_12">
		<?php foreach ($seeds as $seed): ?>
		<li class="seed cell grid_4">
			<figure><img src="" /></figure>
			<p><?php echo $this->Html->link($seed['Seed']['name'], array('controller' => 'seeds', 'action' => 'view', $seed['Seed']['id'])); ?></p>
			<p class="sm"><?php echo $seed['Seed']['created']; ?></p>
			<div class="scale">
				<div class="progress"></div>
			</div>
		</li>
		<?php endforeach; ?>
	</ul>
	
	<ul class="planter stack container_12">
		<?php foreach ($seeds as $seed): ?>
		<li class="seed">
			<figure><img src="" /></figure>
			<p><?php echo $this->Html->link($seed['Seed']['name'], array('controller' => 'seeds', 'action' => 'view', $seed['Seed']['id'])); ?></p>
			<p class="sm"><?php echo $seed['Seed']['created']; ?></p>
		</li>
		<?php endforeach; ?>
	</ul>
	
	
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