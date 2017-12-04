<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ingredient $ingredient
 */
?>
<section>
  <?php if ($currentRole === 'admin'): ?>
    <div class="ingredients form large-9 medium-8 columns content">
      <h3>Add new herb</h3>
      <br>
    <?= $this->Form->create($ingredient) ?>
    <fieldset>
        <?php
            echo $this->Form->control('common_name');
            echo $this->Form->control('scientific_name');
            echo $this->Form->control('chinese_name');
            echo $this->Form->control('pinyin');
            echo $this->Form->control('nature');
            echo $this->Form->control('flavor');
            echo $this->Form->control('functions');
            echo $this->Form->control('symptoms_key');
            echo $this->Form->control('img');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<?php else: ?>
  <h3>You are not authorized for this action</h3>
<?php endif ?>
</section>
