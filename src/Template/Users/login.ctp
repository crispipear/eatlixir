<title>
  <?php $this->assign('title', 'Eatlixir'); ?>
</title>
<section>
<?= $this->Form->create() ?>
<?= $this->Form->input('username') ?>
<?= $this->Form->input('password') ?>
<?= $this->Form->button('Login') ?>
<?= $this->Form->end() ?>
</section>
