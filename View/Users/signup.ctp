<section class="single clearfix">
<?php
echo $this->Form->create('User', array('action' => 'signup'));
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->input('password_confirm', array('type' => 'password'));
echo $this->Form->submit();
echo $this->Form->end();
?>
</section>
