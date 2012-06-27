<section class="container_12">
	<article class="top grid_12">

		<h1 class="bottom-10"><strong>Step Two:</strong><br><?php echo __('Design Priorities'); ?></h1>
		<?php echo $this->Form->create('Seed', array('class' => 'madlib'));?>
			<fieldset class="madline">
				<div class="junction">
					<span><?php echo __('I respect'); ?></span> 
					<span>
					<?php echo $this->Form->input('name', array('div' => false, 'label' => 'brand', 'class' => 'text', 'placeholder' => __('Groupon'))); ?>
					</span>
				</div>
				<div class="junction">
					<span><?php echo __('and like'); ?></span> 
					<span>
					<?php echo $this->Form->input('technology', array('div' => false, 'label' => 'style', 'class' => 'text', 'placeholder' => __('Gothic'))); ?>
					</span>
				</div>
				<div class="junction">
					<span><?php echo __('more than'); ?></span> 

					<span>
					<?php echo $this->Form->input('cost', array('div' => false, 'label' => 'trend', 'class' => 'text', 'placeholder' => __('Twitter'))); ?><?php echo __('<span class="punctum"></span>'); ?>
					</span>
				</div>
			</fieldset>

			<?php if(!empty($terms)) : ?>
			<fieldset class="fancytags">
				<ul class="fancytag">
				<?php foreach($terms as $term) : ?>
					<li><input id="TermRelationship<?php echo $term['Taxonomy']['id']; ?>" type="checkbox" name="data[Seed][TermRelationship][]" value="<?php echo $term['Taxonomy']['id']; ?>" /> <label for="TermRelationship<?php echo $term['Taxonomy']['id']; ?>"><?php echo __($term['Term']['name']); ?></label></li>
				<?php endforeach; ?>
				</ul>
			</fieldset>
			<?php endif; ?>

		<?php echo $this->Form->end(__('Next')); ?>
	</article>
</section>