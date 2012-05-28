<section class="single clearfix">
	<article>
		<h1><?php echo $termRelationships['TermRelationship']['id']; ?></h1>
		<p><?php echo $termRelationships['TermRelationship']['object_id']; ?></p>
		<p><?php echo $termRelationships['TermRelationship']['term_relationship_id']; ?></p>
		<p><?php echo $this->Html->link(__('Edit'), array('controller' => 'termrelationships', 'action' => 'edit',$termRelationships['TermRelationship']['id'])); ?></p>
	</article>
</section>