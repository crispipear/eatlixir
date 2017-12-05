<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<section>
  <?php if(!($currentRole === 'admin')&& !($currentID == $user->id)) : ?>
  <h3> You are not authorized for this action</h3>
  <?php else : ?>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table" width="500px">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td>******</td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valid State') ?></th>
            <td><?= h($user->valid_state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fail Count') ?></th>
            <td><?= $this->Number->format($user->fail_count) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Login') ?></th>
            <td><?= h($user->last_login) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <?php if ($currentRole === 'admin'): ?>
    <button class="cta-button settings"><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?></button>
    <button class="cta-button settings"><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></button>
    <button class="cta-button settings"><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></button>
    <button class="cta-button settings"><?= $this->Form->postLink(
            __('Delete'),
            ['action' => 'delete', $user->id],
            ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
        )
    ?></button>
    <?php endif; ?>
    <?php if (($currentRole === 'user')&&($currentID == $user->id)): ?>
      <button class="cta-button settings"><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?></button>
      <button class="cta-button settings"><?= $this->Form->postLink(
              __('Delete'),
              ['action' => 'delete', $user->id],
              ['confirm' => __('Are you sure you want to delete this account?')]
          )
      ?></button>
    <?php endif; ?>
</div>
<?php endif ?>
</section>
