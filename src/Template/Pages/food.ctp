<title>
  <?php $this->assign('title', 'Eatlixir'); ?>
</title>
<section>
<div>
  <?= $this->Html->link('<span>HERBS</span>',array('controller' => 'Ingredients', 'action' => 'index'),array('id' => 'fc-herbs', 'class'=>'foodcategory', 'escape' => false)) ?>
  <?= $this->Html->link('<span>RECIPES</span>',array('controller' => 'Medrecipes', 'action' => 'index'),array('id' => 'fc-recipes', 'class'=>'foodcategory', 'escape' => false)) ?>
</div>
</section>
