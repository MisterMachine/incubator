<section class="container_12">
	<article class="top grid_12">
		<h1 class="bottom-10"><strong>Step Four:</strong><br><?php echo __('Collaborators'); ?></h1>
		<?php echo $this->Form->create('Seed', array('class' => 'madlib'));?>

		<fieldset class="madline">
			<div class="junction">
				<span><?php echo __('I could really use someone who is a'); ?></span> 
				<span>
				<?php echo $this->Form->input('name', array('div' => false, 'label' => 'characteristic', 'class' => 'text', 'placeholder' => __('Tech leader'))); ?>
				</span>
			</div>
			<div class="junction">
				<span><?php echo __('and specializes in'); ?></span> 
				<span>
				<?php echo $this->Form->input('technology', array('div' => false, 'label' => 'technology', 'class' => 'text', 'placeholder' => __('Ruby'))); ?>
				</span>
			</div>
			<div class="junction">
				<span><?php echo __('but avoid someone who'); ?></span> 
				<span>
				<?php echo $this->Form->input('cost', array('div' => false, 'label' => 'personality', 'class' => 'text', 'placeholder' => __('hyper'))); ?><?php echo __('<span class="punctum"></span>'); ?>
				</span>
			</div>
		</fieldset>

		<fieldset>
			<ul class="clippings">
			<?php foreach($terms as $term) : ?>
				<li><a href="#"><?php echo $term['Term']['name']; ?> <span class="count"></span></a></li>
			<?php endforeach; ?>
			</ul>
		</fieldset>

		<section class="paginate grid_12 clearfix">
			<ul class="status grid_2">
				<li><a href="#"><?php echo __('Save'); ?></a></li>
				<li><a href="/seeds"><?php echo __('Cancel'); ?></a></li>
			</ul>
			<ul class="pages center">
				<li><a href="/seeds"><?php echo __('Back'); ?></a></li>
				<li><?php echo $this->Form->submit('Next', array('div' => false)); ?></li>
			</ul>
		</section>

		<?php echo $this->Form->end(); ?>
	</article>
</section>
