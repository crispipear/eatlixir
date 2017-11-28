<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<section>
    <?= $this->Form->create($user) ?>
    <?= $this->Form->input('username') ?>
    <?= $this->Form->input('email') ?>
    <?= $this->Form->input('password') ?>
    <?= $this->Form->button('SIGN UP') ?>
    <?= $this->Form->end() ?>
</section>
