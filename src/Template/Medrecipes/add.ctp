<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medrecipe $medrecipe
 */
?>
<section style="padding-top: 10%">
<?php if ($currentRole === 'admin'): ?>
<div class="medrecipes form large-9 medium-8 columns content">
    <?= $this->Form->create($medrecipe) ?>
    <fieldset>
      <legend><?= __('Add Medrecipe') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('chinese_name');
            echo $this->Form->control('functions');
            echo $this->Form->control('indications');
            echo $this->Form->control('ingredients');
            echo $this->Form->control('instructions');
            echo $this->Form->control('uses');
            echo $this->Form->control('img');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<?php else : ?>
  <h3>You are not authorized for this action</h3>
<?php endif ?>
</section>
