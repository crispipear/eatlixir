<title>
    <?php $this->assign('title', 'Eatlixir'); ?>
</title>
<section id="home" class="gradient">
  <h1>Eatlixir</h1>
  <h5>improve your health through medicinal diet</h5>
  <button id="scroll" class="cta-button">LEARN MORE</button>
</section>
<section id="about">
<div id="banner">
  <h5>Eatlixir is where you can find medicinal diet information that benefits your health.</h5>
</div>
<p>Unhealthy eating habits often causes health problems such as indigestion, loss of sleep quality and loss of appetite.
   They can also lead to major health issues such as obesity, heart diseases, strokes and more. Chinese herbology studies believe that
   some food ingredients have their own characteristics and perform different tasks on the human body. Good use of medicinal diets can eventually help the body
   to be subtlely relieved from some health issues.
</p>
</section>
<section id="signuptoday">
    <h3>START YOUR JOURNEY ON EATLIXIR</h3>
    <?= $this->Html->link('SIGN UP TODAY',array('controller' => 'Users', 'action' => 'add'),array('class' => 'cta-button settings', 'escape'=>false))?>
</section>
