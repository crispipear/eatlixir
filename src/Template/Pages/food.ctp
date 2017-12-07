<title>
  <?php $this->assign('title', 'Eatlixir'); ?>
</title>
<section class="gradient" style="padding-top: 1.25%">
<div class="box-wrapper">
  <?= $this->Html->link('<span>HERBS</span>',array('controller' => 'Ingredients', 'action' => 'index'),array('id' => 'fc-herbs', 'class'=>'foodcategory', 'escape' => false)) ?>
  <?= $this->Html->link('<span>RECIPES</span>',array('controller' => 'Medrecipes', 'action' => 'index'),array('id' => 'fc-recipes', 'class'=>'foodcategory', 'escape' => false)) ?>
</div>
</section>
