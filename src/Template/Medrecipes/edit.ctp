<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medrecipe $medrecipe
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $medrecipe->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $medrecipe->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Medrecipes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="medrecipes form large-9 medium-8 columns content">
    <?= $this->Form->create($medrecipe) ?>
    <fieldset>
        <legend><?= __('Edit Medrecipe') ?></legend>
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
