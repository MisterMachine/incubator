<section class="single clearfix">
	<article>
		<section class="concept vertical-10">
			<h1><?php echo $seed['Seed']['name']; ?></h1>
			<p class="intro"><?php echo $seed['Seed']['content']; ?></p>
			<p class="edit"><?php echo $this->Html->link(__('Edit'), array('controller' => 'seeds', 'action' => 'edit',$seed['Seed']['id'])); ?></p>
		</section>
		
		<section class="prototype cuffed vertical-10">
			<h3>prototype</h3>
			<p class="major"><a href="#"><?php echo $seed['Seed']['url']; ?></a></p>
			<p class="major"><a href="#"><?php echo $seed['Seed']['repository']; ?></a></p>
		</section>
		
		<div class="clear"></div>
		<section class="feedback vertical-10">
			<h3>feedback</h3>
			<ul>
			<li>
			<bickquote>
			<p>Whatever truffaut accusamus, umami semiotics non narwhal aliquip esse ut velit seitan bushwick. Hoodie fixie thundercats, irony nostrud single-origin coffee jean shorts banh mi quis. Aesthetic shoreditch fugiat trust fund, gluten-free craft beer carles sed nisi placeat ad. High life chambray echo park master cleanse</p>
			</blockquote>
			<cite>Joe Blo</cite>
			</li>
			</ul>
		</section>
		
		<section class="colophon gry vertical-10">
			<h3>colophon</h3>
			<ul>
			<li>
			<p>Photoshop</p>
			<a href="#">url.com</a>
			</li>
			<li>
			<p>Coda</p>
			<a href="#">url.com</a>
			</li>
			<li>
			<p>Stack Overflow</p>
			<a href="#">url.com</a>
			</li>
			</ul>
		</section>
		
		<section class="iterations gry vertical-10">
			<h3>history</h3>
			<p><?php echo $seed['Seed']['created']; ?></p>
		</section>
	</article>
</section>