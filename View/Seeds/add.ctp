<section class="container_12">
<?php echo $this->Form->create('Seed');?>
	<fieldset>
		<legend><?php echo __('Add Seed'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('cost');
		echo $this->Form->input('content');
		echo $this->Form->input('url');
		echo $this->Form->input('repository');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</section>

<section class="single clearfix">
	<article>
		<h1><?php echo __('Tags'); ?></h1>
		<ul class="taxonomies">
			<?php foreach($taxonomies as $taxonomy) : ?>
			<li class="clearfix">
				<?php echo $taxonomy['Taxonomy']['name']; ?>
				<ul class="clippings">
				<?php foreach($taxonomy['Terms'] as $term) : ?>
					<li><a href="#"><?php echo $this->Form->checkbox($term['Term']['name'], array('hiddenField' => false)); ?><?php echo $term['Term']['name']; ?>&nbsp;<span class="count"></span></a></li>
				<?php endforeach; ?>
				</ul>
			</li>
			<?php endforeach; ?>
		</ul>
	</article>
</section>
<section>
	<article>
		<input type="checkbox" id="check" /><label for="check">Toggle</label>
		<div id="format">
			<input type="checkbox" id="check1" /><label for="check1">B</label>
			<input type="checkbox" id="check2" /><label for="check2">I</label>
			<input type="checkbox" id="check3" /><label for="check3">U</label>
		</div>
	</article>
</section>