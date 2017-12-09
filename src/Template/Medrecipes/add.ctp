<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medrecipe $medrecipe
 */
?>
<section>
<?php if ($currentRole === 'admin'): ?>
  <h3 class="formTitle">Add Recipe</h3>
    <?= $this->Form->create($medrecipe) ?>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('chinese_name');
            echo $this->Form->control('functions');
            echo $this->Form->control('indications');
            echo $this->Form->control('ingredients');
            echo $this->Form->control('instructions');
            echo $this->Form->control('uses');
            echo $this->Form->control('img');
        ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
<?php else : ?>
  <h3>You are not authorized for this action</h3>
<?php endif ?>
</section>
