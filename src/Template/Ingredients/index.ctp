<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ingredient[]|\Cake\Collection\CollectionInterface $ingredients
 */
?>
<section>
  <?php foreach ($ingredients as $ingredient): ?>
    <div class="foodinfo">
      <div class="left">
      <img src="http://i0.kym-cdn.com/photos/images/facebook/000/674/934/422.jpg">
      <h3><?= h($ingredient->common_name) ?></h3>
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
