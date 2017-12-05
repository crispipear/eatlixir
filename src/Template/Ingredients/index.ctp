<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ingredient[]|\Cake\Collection\CollectionInterface $ingredients
 */
?>
<section style="padding-top:10%">
  <?php if ($currentRole === 'admin'): ?>
    <?= '<button class="cta-button settings">' . $this->Html->link(__('New Herb'), ['action' => 'add']) . '</button>'?>
  <?php endif ?>
  <?php foreach ($ingredients as $ingredient): ?>
    <div class="foodinfo">
      <div class="left">
      <?= $this->Html->image('http://i0.kym-cdn.com/photos/images/facebook/000/674/934/422.jpg', ['alt' => 'CakePHP'])?>
      <?php if ($currentRole === 'admin'): ?>
      <h3><?= h($ingredient->common_name) ?> <?=  $this->Html->link('<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', ['action' => 'view/'.$ingredient->id], array('escape' => false))?></h3>
    <?php else :?>
      <h3><?= h($ingredient->common_name) ?></h3>
    <?php endif ?>
      <h5><span>Scientific name: </span> <?= h($ingredient->scientific_name) ?></h5>
      <h5><span>Chinese name: </span> <?= h($ingredient->chinese_name) ?>(<?= h($ingredient->pinyin) ?>)</h5>
      </div>
      <div class="right">
        <p><span>Nature: </span><?= h($ingredient->nature) ?></p>
        <p><span>Flavor: </span><?= h($ingredient->flavor) ?></p>
        <p><span>Functions: </span><?= h($ingredient->functions) ?></p>
        <p><span>Helps with: </span><?= h($ingredient->symptoms_key) ?></p>
      </div>
    </div>
  <?php endforeach; ?>
</section>
