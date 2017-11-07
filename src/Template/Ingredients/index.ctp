<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ingredient[]|\Cake\Collection\CollectionInterface $ingredients
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ingredient'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ingredients index large-9 medium-8 columns content">
    <h3><?= __('Ingredients') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('common_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('scientific_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('chinese_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pinyin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nature') ?></th>
                <th scope="col"><?= $this->Paginator->sort('flavor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('functions') ?></th>
                <th scope="col"><?= $this->Paginator->sort('symptoms_key') ?></th>
                <th scope="col"><?= $this->Paginator->sort('img') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ingredients as $ingredient): ?>
            <tr>
                <td><?= $this->Number->format($ingredient->id) ?></td>
                <td><?= h($ingredient->common_name) ?></td>
                <td><?= h($ingredient->scientific_name) ?></td>
                <td><?= h($ingredient->chinese_name) ?></td>
                <td><?= h($ingredient->pinyin) ?></td>
                <td><?= h($ingredient->nature) ?></td>
                <td><?= h($ingredient->flavor) ?></td>
                <td><?= h($ingredient->functions) ?></td>
                <td><?= h($ingredient->symptoms_key) ?></td>
                <td><?= h($ingredient->img) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ingredient->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ingredient->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ingredient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ingredient->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
