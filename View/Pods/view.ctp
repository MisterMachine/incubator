<section class="single clearfix">
	<article>
		<h1><?php echo $pod['Pod']['name']; ?></h1>
		<p><?php echo $pod['Pod']['created']; ?></p>
		<p><?php echo $pod['Pod']['content']; ?></p>
		<p><?php echo $pod['Pod']['complexity']; ?></p>
		<p><?php echo $this->Html->link(__('Edit'), array('controller' => 'pods', 'action' => 'edit',$pod['Pod']['id'])); ?></p>
	</article>
</section>