<section class="single clearfix">
	<article>
		<h1><?php echo $term['Term']['name']; ?></h1>
		<p><?php echo $term['Term']['slug']; ?></p>
		<p><?php echo $this->Html->link(__('Edit'), array('controller' => 'terms', 'action' => 'edit',$term['Term']['id'])); ?></p>
	</article>
</section>