<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ingredient $ingredient
 */
?>
<section>
  <?php if ($currentRole === 'admin'): ?>
    <h3 class="formTitle">Add Ingredient</h3>
    <?= $this->Form->create($ingredient) ?>
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
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
<?php else: ?>
  <h3>You are not authorized for this action</h3>
<?php endif ?>
</section>
