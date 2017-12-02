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
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
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
      </fieldset>
      <?= $this->Form->button(__('Submit')) ?>
      <button type="submit" class="cta-button"><?= $this->Form->postLink(
              __('Delete'),
              ['action' => 'delete', $user->id],
              ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
          )
      ?></button>
      <?= $this->Form->end() ?>
</div>
<?php endif ?>
</section>
