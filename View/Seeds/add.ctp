<section class="container_12">
	<article class="grid_12">
		<h3>Plant a Seed</h3>
		<form class="madlib">
			<fieldset>
			<label><span>I want to make a</span> <input type="text" name="" value="" class="text" placeholder="Super dope App"></label><label><span>with</span> <input type="text" name="" value="" class="text" placeholder="WordPress"></label><label><span>for</span> <input type="text" name="" value="" class="text" placeholder="$5,000">!</label>
			</fieldset>
		</form>
		
		<form class="tags">
			<h3>Clippings</h3>
			<fieldset>
				<ul class="clippings">
					<li><a href="#">WordPress <span class="count">12</span></a></li>
					<li><a href="#">Responsive <span class="count">34</span></a></li>
					<li><a href="#">HTML 5 <span class="count">28</span></a></li>
				</ul>
			</fieldset>
			
			<fieldset class="inline">
				<label class="width2 first field-first">Add a tag<input type="text" name="first_name" value="" class="text"></label>
				<button>Add</button>
			</fieldset>
			
		</form>
		
	</article>
</section>	
		
<section class="single clearfix">
<?php echo $this->Form->create('Seed');?>
	<fieldset>
		<legend><?php echo __('Add Seed'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('content');
		echo $this->Form->input('technology');
		echo $this->Form->input('url');
		echo $this->Form->input('repository');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</section>