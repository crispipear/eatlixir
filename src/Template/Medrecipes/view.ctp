<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medrecipe $medrecipe
 */
?>
<section>
  <?php if ($currentRole === 'admin'): ?>
    <div class="box-wrapper">
    <button class="cta-button settings"><?= $this->Html->link(__('Edit'), ['action' => 'edit', $medrecipe->id]) ?></button>
    <button class="cta-button settings"><?= $this->Html->link(__('New'), ['action' => 'add']) ?></button>
    <button class="cta-button settings"><?= $this->Html->link(__('List'), ['action' => 'index']) ?></button>
    <button class="cta-button settings"><?= $this->Form->postLink(
      __('Delete'),
      ['action' => 'delete', $user->id],
      ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
      )
      ?></button>
    </div>
<div class="medrecipes view large-9 medium-8 columns content">
    <h3><?= h($medrecipe->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($medrecipe->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Chinese Name') ?></th>
            <td><?= h($medrecipe->chinese_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Functions') ?></th>
            <td><?= h($medrecipe->functions) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Indications') ?></th>
            <td><?= h($medrecipe->indications) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ingredients') ?></th>
            <td><?= h($medrecipe->ingredients) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Instructions') ?></th>
            <td><?= h($medrecipe->instructions) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Uses') ?></th>
            <td><?= h($medrecipe->uses) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Img') ?></th>
            <td><?= h($medrecipe->img) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($medrecipe->id) ?></td>
        </tr>
    </table>
</div>
<?php else : ?>
<h3>You are not authorized for this action</h3>
<?php endif ?>
</section>
