<?php $title = 'Eatlixir';?>
<title>
    <?= $this->assign('title', 'Eatlixir'); ?>
</title>
<section id="home">
  <img class="right" src="img/herb.png">
  <h1>EATLIXIR</h1>
  <h5>improve your health through medicinal diet</h5>
  <?php
   echo $this->Html->link('LEARN MORE',array('controller' => 'pages', 'action' => 'display', 'about'),array('class' => 'cta-button'));
  ?>
</section>
