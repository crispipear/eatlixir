<title>
    <?php $this->assign('title', 'Eatlixir'); ?>
</title>
<style>
footer{
  display: none;
}
</style>
<section id="home">
  <h1>EATLIXIR</h1>
  <h5>improve your health through medicinal diet</h5>
  <?php
   echo $this->Html->link('LEARN MORE',array('controller' => 'pages', 'action' => 'display', 'about'),array('class' => 'cta-button','escape'=>false));
   echo $this->Html->image('herb.png', ['alt' => 'herb', 'class' => 'right']);
  ?>
</section>
