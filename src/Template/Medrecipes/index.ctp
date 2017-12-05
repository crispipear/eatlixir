<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medrecipe[]|\Cake\Collection\CollectionInterface $medrecipes
 */
?>
<section>
<?php if ($currentRole === 'admin'): ?>
  <?= '<button class="cta-button settings">' . $this->Html->link(__('New Recipe'), ['action' => 'add']) . '</button>'?>
<?php endif ?>
<?php foreach ($medrecipes as $medrecipe): ?>
<div class="foodinfo">
  <div class="left">
    <?= $this->Html->image($medrecipe->img, ['alt' => 'CakePHP'])?>
  <?php if ($currentRole === 'admin'): ?>
  <h3><?= h($medrecipe->name) ?> <?=  $this->Html->link('<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', ['action' => 'view/'.$medrecipe->id], array('escape' => false))?></h3>
<?php else :?>
  <h3><?= h($medrecipe->name) ?></h3>
<?php endif ?>
  <h5><span>Chinese name: </span> <?= h($medrecipe->chinese_name) ?></h5>
  </div>
  <div class="right">
    <p><span>Functions: </span><?= h($medrecipe->functions) ?></p>
    <p><span>Indications: </span><?= h($medrecipe->indications) ?></p>
    <p><span>Ingredients: </span><?= h($medrecipe->ingredients) ?></p>
    <p><span>Instructions: </span><?= h($medrecipe->instructions) ?></p>
    <p><span>Usage: </span><?= h($medrecipe->uses) ?></p>
  </div>
</div>
<?php endforeach; ?>
</section>
