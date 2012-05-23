<section class="single clearfix">
	<article>
		<h1><?php echo $group['Group']['name']; ?></h1>
		<p><?php echo $group['Group']['created']; ?></p>
		<p><?php echo $group['Group']['content']; ?></p>
		<p><?php echo $this->Html->link(__('Edit'), array('controller' => 'groups', 'action' => 'edit',$group['Group']['id'])); ?></p>
	</article>
</section>