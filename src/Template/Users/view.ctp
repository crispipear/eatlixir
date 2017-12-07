<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<section id="accountinfo" class="gradient">
  <?php if(!($currentRole === 'admin')&& !($currentID == $user->id)) : ?>
  <h3> You are not authorized for this action</h3>
  <?php else : ?>
    <div class="info">
      <h3>Hello, <?= h($user->username) ?></h3>
    <p><span>Email</span> <?= h($user->email) ?></p>
    <p><span>Joined since</span> <?= h($user->created) ?></p>
    <?php if (($currentRole === 'admin')||($currentRole === 'user')&&($currentID == $user->id)): ?>
      <button class="cta-button"><?= $this->Html->link(__('Edit Account'), ['action' => 'edit', $user->id]) ?></button>
    <?php endif; ?>
  </div>
<?php endif ?>
</section>
