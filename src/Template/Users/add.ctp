<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<section class="gradient">
<h3 class="formTitle2">Create new account</h3>
<?= $this->Form->create($user) ?>
<?= $this->Form->input('username') ?>
<?= $this->Form->input('email') ?>
<?= $this->Form->input('password') ?>
<p id="errorMsg"></p>
<?= $this->Form->button('Sign up') ?>
<?= '<button id="signup">' . $this->Html->link('Login',array('controller' => 'users', 'action' => 'login'),array('escape' => false)).'</button>';?>
<?= $this->Form->end() ?>
</section>
