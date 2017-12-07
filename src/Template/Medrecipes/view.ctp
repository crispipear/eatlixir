<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medrecipe $medrecipe
 */
?>
<section id="foodinfo">
  <?php if ($currentRole === 'admin'): ?>
    <div class="info">
      <h3><?= h($medrecipe->name) ?></h3>
    <p><span>id</span> <?= h($medrecipe->id) ?></p>
    <p><span>Chinese name</span> <?= h($medrecipe->chinese_name) ?></p>
    <p><span>Indications</span> <?= h($medrecipe->indications)  ?></p>
    <p><span>Ingredients</span> <?= h($medrecipe->ingredients)  ?></p>
    <p><span>Instructions</span> <?= h($medrecipe->instructions)  ?></p>
    <p><span>Usages</span> <?= h($medrecipe->uses)  ?></p>
    <p><span>Img</span> <?= h($medrecipe->img)  ?></p>

        <button class="cta-button settings"><?= $this->Html->link(__('Edit'), ['action' => 'edit', $medrecipe->id]) ?></button>
        <button class="cta-button settings"><?= $this->Html->link(__('New'), ['action' => 'add']) ?></button>
        <button class="cta-button settings"><?= $this->Html->link(__('List'), ['action' => 'index']) ?></button>
        <button class="cta-button settings"><?= $this->Form->postLink(
          __('Delete'),
          ['action' => 'delete', $medrecipe->id],
          ['confirm' => __('Are you sure you want to delete {0}?', $medrecipe->name)]
          )
          ?></button>
    </div>
  <?php else : ?>
    <h3> You are not authorized for this action</h3>
<?php endif ?>
</section>
