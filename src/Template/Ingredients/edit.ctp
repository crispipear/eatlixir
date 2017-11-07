<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ingredient $ingredient
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ingredient->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ingredient->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ingredients'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="ingredients form large-9 medium-8 columns content">
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
    <?= $this->Form->end() ?>
</div>
