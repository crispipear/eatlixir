<title>
  <?php $this->assign('title', 'Eatlixir'); ?>
</title>
<style>
footer{
  display: none;
}
</style>
<section class="gradient" style="padding-top: 0%">
<h3 class="formTitle">Login</h3>
<?= $this->Form->create() ?>
<?= $this->Form->input('username') ?>
<?= $this->Form->input('password') ?>
<?= $this->Form->button('Login') ?>
<?= '<button id="signup">' . $this->Html->link('SIGN UP',array('controller' => 'users', 'action' => 'add'),array('escape' => false)).'</button>';?>
<?= $this->Form->end() ?>
</section>
