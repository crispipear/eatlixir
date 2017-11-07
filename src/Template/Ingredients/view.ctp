<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ingredient $ingredient
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ingredient'), ['action' => 'edit', $ingredient->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ingredient'), ['action' => 'delete', $ingredient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ingredient->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ingredients'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ingredient'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ingredients view large-9 medium-8 columns content">
    <h3><?= h($ingredient->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Common Name') ?></th>
            <td><?= h($ingredient->common_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Scientific Name') ?></th>
            <td><?= h($ingredient->scientific_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Chinese Name') ?></th>
            <td><?= h($ingredient->chinese_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pinyin') ?></th>
            <td><?= h($ingredient->pinyin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nature') ?></th>
            <td><?= h($ingredient->nature) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Flavor') ?></th>
            <td><?= h($ingredient->flavor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Functions') ?></th>
            <td><?= h($ingredient->functions) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Symptoms Key') ?></th>
            <td><?= h($ingredient->symptoms_key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Img') ?></th>
            <td><?= h($ingredient->img) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ingredient->id) ?></td>
        </tr>
    </table>
</div>
