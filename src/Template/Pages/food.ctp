<?php $title = 'Eatlixir';?>
<title>
  <?php $this->assign('title', 'Eatlixir'); ?>
</title>
<style>
footer{
  display: none;
}
</style>
<section>
<div class="box-wrapper" style="margin-top: -2.5%">
  <?= $this->Html->link('<span>INGREDIENTS</span>',array('controller' => 'Ingredients', 'action' => 'index'),array('class'=>'foodcategory', 'escape' => false)) ?>
  <?= $this->Html->link('<span>RECIPES</span>',array('controller' => 'Ingredients', 'action' => 'index'),array('class'=>'foodcategory', 'escape' => false)) ?>
</div>
</section>
