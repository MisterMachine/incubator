<section class="single clearfix">
	<article>
		<h1><?php echo $seed['Seed']['name']; ?></h1>
		<p><?php echo $seed['Seed']['created']; ?></p>
		<p><?php echo $seed['Seed']['content']; ?></p>
		<p><?php echo $seed['Seed']['technology']; ?></p>
		<p><?php echo $seed['Seed']['url']; ?></p>
		<p><?php echo $seed['Seed']['repository']; ?></p>
		<p><?php echo $this->Html->link(__('Edit'), array('controller' => 'seeds', 'action' => 'edit',$seed['Seed']['id'])); ?></p>
	</article>
</section>