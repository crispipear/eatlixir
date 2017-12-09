<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<section class="gradient">
<h3 class="formTitle">Configure admin account</h3>
<?= $this->Form->create($user) ?>
<?= $this->Form->input('username') ?>
<?= $this->Form->input('email') ?>
<?= $this->Form->input('password') ?>
<p id="errorMsg"></p>
<?= $this->Form->button('configure') ?>
<?= $this->Form->end() ?>
</section>
