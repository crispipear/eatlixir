<title>
  <?php $this->assign('title', 'Eatlixir'); ?>
</title>
<div>

<h1>Login</h1>
<?= $this->Form->create() ?>
<?= $this->Form->input('username') ?>
<?= $this->Form->input('password') ?>
<?= $this->Form->button('Login') ?>
<?= $this->Form->end() ?>
</div>
