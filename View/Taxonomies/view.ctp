<section class="single clearfix">
	<article>
		<h1><?php echo $taxonomy['Taxonomy']['name']; ?></h1>
		<p><?php echo $taxonomy['Taxonomy']['term_id']; ?></p>
		<p><?php echo $this->Html->link(__('Edit'), array('controller' => 'taxonomies', 'action' => 'edit',$taxonomy['Taxonomy']['id'])); ?></p>
	</article>
</section>