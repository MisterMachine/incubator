<section class="single clearfix">
	<article>
		<section class="concept vertical-10">
			<h1><?php echo $seed['Seed']['name']; ?></h1>
			<p><?php echo $seed['Seed']['content']; ?></p>
			<p class="edit"><?php echo $this->Html->link(__('Edit'), array('controller' => 'seeds', 'action' => 'edit',$seed['Seed']['id'])); ?></p>
		</section>
		
		<section class="prototype vertical-10">
			<h3>prototype</h3>
			<p><?php echo $seed['Seed']['url']; ?></p>
			<p><?php echo $seed['Seed']['repository']; ?></p>
		</section>
		
		<section class="technology vertical-10">
			<h3>technology</h3>
			<p><?php echo $seed['Seed']['technology']; ?></p>
		</section>
		
		<section class="feedback vertical-10">
			<h3>feedback</h3>
			
		</section>
		
		<section class="colophon vertical-10">
			<h3>colophon</h3>
			
		</section>
		
		<section class="iterations vertical-10">
			<h3>history</h3>
			<p><?php echo $seed['Seed']['created']; ?></p>
		</section>
	</article>
</section>