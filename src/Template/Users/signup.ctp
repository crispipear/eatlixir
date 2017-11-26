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
<?= $this->Form->button('sign up') ?>
<?= $this->Form->end() ?>
</section>
