<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ingredient $ingredient
 */
?>
<section>
  <?php if ($currentRole === 'admin'): ?>
    <div class="box-wrapper">
    <button class="cta-button settings"><?= $this->Html->link(__('Edit'), ['action' => 'edit', $ingredient->id]) ?></button>
    <button class="cta-button settings"><?= $this->Html->link(__('New'), ['action' => 'add']) ?></button>
    <button class="cta-button settings"><?= $this->Html->link(__('List'), ['action' => 'index']) ?></button>
    <button class="cta-button settings"><?= $this->Form->postLink(
      __('Delete'),
      ['action' => 'delete', $user->id],
      ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
      )
      ?></button>
    </div>
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
<?php else :?>
<h3>You are not authorized for this action</h3>
<?php endif ?>
</section>
