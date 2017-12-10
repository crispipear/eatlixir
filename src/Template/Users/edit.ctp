<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<section class="gradient">
<?php if(!($currentRole === 'admin')&&!($currentID == $user->id)) : ?>
<h3 class="formTitle"> You are not authorized for this action</h3>
<?php else : ?>
  <h3 class="formTitle">Edit account info</h3>
    <?= $this->Form->create($user) ?>
        <?php if ($currentRole === 'admin'){
          echo $this->Form->control('username');
          echo $this->Form->control('name');
          echo $this->Form->control('email');
          echo $this->Form->control('password');
          echo $this->Form->control('role');
          echo $this->Form->control('valid_state');
          echo $this->Form->control('fail_count');

        }
        if (($currentRole === 'user')&& ($currentID == $user->id)){
          echo $this->Form->control('username');
          echo $this->Form->control('email');
          echo $this->Form->control('password');
        }
        ?>
      <?= $this->Form->button(__('save')) ?>
      <button type="submit" class="cta-button"><?= $this->Form->postLink(
              __('Delete account'),
              ['action' => 'delete', $user->id],
              ['confirm' => __('Are you sure you want to delete this account?')]
          )
      ?></button>
      <?= $this->Form->end() ?>
<?php endif ?>
</section>
