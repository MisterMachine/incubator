<section class="container_12">
	<article class="grid_12 top">
		<?php echo $this->Form->create('Term', array('class' => 'tags'));?>
			<h3><?php echo __('Clippings'); ?></h3>
			<fieldset>
				<ul class="clippings">
					<?php foreach($terms as $term) : ?>
					<li><a href="#"><?php echo $term['Term']['name']; ?> <span class="count">12</span></a></li>
					<?php endforeach; ?>
				</ul>
			</fieldset>
			
			<fieldset class="inline">
				<label class="width2 first field-first"><?php echo __('Add a tag'); ?>
					<?php echo $this->Form->input('name', array('div' => false, 'label' => false, 'class' => 'text')); ?>
				</label>
				<button><?php echo __('Add'); ?></button>
			</fieldset>
			
		<?php echo $this->Form->end();?>
	</article>
</section>
