<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ingredient $ingredient
 */
?>
<section style="padding-top: 10%">
  <?php if ($currentRole === 'admin'): ?>
<div class="ingredients form large-9 medium-8 columns content">
    <!-- <h3>Edit Ingredient</h3><br> -->
    <?= $this->Form->create($ingredient) ?>
    <fieldset>
      <legend><?= __('Edit Ingredient') ?></legend>
        <?php
            echo $this->Form->control('common_name');
            echo $this->Form->control('scientific_name');
            echo $this->Form->control('chinese_name');
            echo $this->Form->control('pinyin');
            echo $this->Form->control('nature');
            echo $this->Form->control('flavor');
            echo $this->Form->control('functions');
            echo $this->Form->control('symptoms_key');
            echo $this->Form->control('img');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <button type="submit" class="cta-button"><?= $this->Form->postLink(
            __('Delete'),
            ['action' => 'delete', $ingredient->id],
            ['confirm' => __('Are you sure you want to delete {0}?', $ingredient->common_name)]
        )
    ?></button>
    <?= $this->Form->end() ?>
</div>
<?php else: ?>
  <h3>You are not authorized for this action</h3>
<?php endif ?>
</section>
