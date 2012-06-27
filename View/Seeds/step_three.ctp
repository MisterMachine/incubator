<section class="container_12">
	<article class="top grid_12">

		<h3 class="bottom-10"><?php echo __('Step Three: Technology Environment'); ?></h3>
		<?php echo $this->Form->create('Seed', array('class' => 'madlib'));?>
			<fieldset class="madline">
				<div class="junction">
					<span><?php echo __('I want to run'); ?></span> 
					<span>
					<?php echo $this->Form->input('name', array('div' => false, 'label' => 'technology', 'class' => 'text', 'placeholder' => __('PHP'))); ?>
					</span>
				</div>
				<div class="junction">
					<span><?php echo __('as well as'); ?></span> 
					<span>
					<?php echo $this->Form->input('technology', array('div' => false, 'label' => 'software', 'class' => 'text', 'placeholder' => __('WordPress'))); ?>
					</span>
				</div>
				<div class="junction">
					<span><?php echo __('but want to avoid'); ?></span> 
					
					<span>
					<?php echo $this->Form->input('cost', array('div' => false, 'label' => 'tech headline', 'class' => 'text', 'placeholder' => __('Bill Gates sucks'))); ?><?php echo __('<span class="punctum"></span>'); ?>
					</span>
				</div>
			</fieldset>

			<?php if(!empty($terms)) : ?>
			<fieldset class="fancytags">
				<ul class="fancytag">
				<?php foreach($terms as $term) : ?>
					<li>
						<input id="TermRelationship<?php echo $term['Taxonomy']['id']; ?>" type="checkbox" name="data[Seed][TermRelationship][]" value="<?php echo $term['Taxonomy']['id']; ?>" /> 
						<label for="TermRelationship<?php echo $term['Taxonomy']['id']; ?>">
						<?php echo __($term['Term']['name']); ?>
						</label>
					</li>
				<?php endforeach; ?>
				</ul>
			</fieldset>
			<?php endif; ?>

		<?php echo $this->Form->end(__('Next')); ?>
	</article>
</section>
