<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medrecipe $ingredient
 */
?>
<section id="foodinfo">
  <?php if ($currentRole === 'admin'): ?>
    <div class="info">
      <h3><?= h($ingredient->common_name) ?></h3>
    <p><span>id</span> <?= h($ingredient->id) ?></p>
    <p><span>Chinese name</span> <?= h($ingredient->chinese_name) ?></p>
    <p><span>Scientifc name</span> <?= h($ingredient->scientific_name)  ?></p>
    <p><span>Nature</span> <?= h($ingredient->nature)  ?></p>
    <p><span>Flavor</span> <?= h($ingredient->flavor)  ?></p>
    <p><span>Functions</span> <?= h($ingredient->functions)  ?></p>
    <p><span>Symptoms key</span> <?= h($ingredient->symptoms_key)  ?></p>
    <p><span>Img</span> <?= h($ingredient->img)  ?></p>

        <button class="cta-button settings"><?= $this->Html->link(__('Edit'), ['action' => 'edit', $ingredient->id]) ?></button>
        <button class="cta-button settings"><?= $this->Html->link(__('New'), ['action' => 'add']) ?></button>
        <button class="cta-button settings"><?= $this->Html->link(__('List'), ['action' => 'index']) ?></button>
        <button class="cta-button settings"><?= $this->Form->postLink(
          __('Delete'),
          ['action' => 'delete', $ingredient->id],
          ['confirm' => __('Are you sure you want to delete {0}?', $ingredient->name)]
          )
          ?></button>
    </div>
  <?php else : ?>
    <h3> You are not authorized for this action</h3>
<?php endif ?>
</section>
