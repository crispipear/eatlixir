<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<section class="gradient" style="padding-top: 0%">
<h3 class="formTitle">Create new account</h3>
<?= $this->Form->create($user) ?>
<?= $this->Form->input('username') ?>
<?= $this->Form->input('email') ?>
<?= $this->Form->input('password') ?>
<?= $this->Form->button('SIGN UP') ?>
<?= '<button id="signup">' . $this->Html->link('LOGIN',array('controller' => 'users', 'action' => 'login'),array('escape' => false)).'</button>';?>
<?= $this->Form->end() ?>
</section>
