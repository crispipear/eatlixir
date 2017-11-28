<title>
  <?php $this->assign('title', 'Eatlixir'); ?>
</title>
<style>
footer{
  display: none;
}
</style>
<section>
<?= $this->Form->create() ?>
<?= $this->Form->input('username') ?>
<?= $this->Form->input('password') ?>
<?= $this->Form->button('Login') ?>
<?= $this->Html->link('SIGN UP',array('controller' => 'users', 'action' => 'add'),array('class' => 'cta-button', 'id' => 'signup', 'escape' => false));
?>
<?= $this->Form->end() ?>
</section>
