<title>
  <?php $this->assign('title', 'Eatlixir'); ?>
</title>
<section id="food">
  <?= $this->Html->link('',array('controller' => 'Ingredients', 'action' => 'index'),array('id' => 'fc-herbs', 'class'=>'foodcategory', 'escape' => false)) ?>
  <?= $this->Html->link('',array('controller' => 'Medrecipes', 'action' => 'index'),array('id' => 'fc-recipes', 'class'=>'foodcategory', 'escape' => false)) ?>
</section>
