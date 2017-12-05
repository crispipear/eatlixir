<title>
    <?php $this->assign('title', 'Eatlixir'); ?>
</title>
<section id="home">
  <h1>EATLIXIR</h1>
  <h5>improve your health through medicinal diet</h5>
  <button id="scroll" class="cta-button">LEARN MORE</button>
  <?php
   echo $this->Html->image('herb.png', ['alt' => 'herb', 'class' => 'right']);
  ?>
</section>
<section id="about">
<div id="banner">
  <h5><span>Eatlixir</span> is where you can find medicinal diet information that benefits your health.</h5>
</div>
<p>Unhealthy eating habits often causes health problems such as indigestion, loss of sleep quality and loss of appetite.
   They can also lead to major health issues such as obesity, heart diseases, strokes and more. An addition of an accessible and simple website regarding
    medicinal diet information will be useful in the healthy diet sources. Study has shown that medicinal diet is capable of subtly improving human body health conditions.
    In addition, the Chinese herbology studies believe that some food ingredients have their own characteristics and perform different tasks on the human body.
</section>
<section id="signuptoday">
    <h3>START YOUR JOURNEY ON EATLIXIR</h3>
    <?= $this->Html->link('SIGN UP TODAY','/',array('class' => 'cta-button settings', 'escape'=>false))?>
</section>
<script>
! function() {
    var e = !1;
    $(document).on("mousewheel DOMMouseScroll", function(t) {
        if (t.preventDefault(), !e) {
            e = !0, setTimeout(function() {
                e = !1
            }, 100);
            var n = t.originalEvent.wheelDelta || -t.originalEvent.detail,
                o = document.getElementsByTagName("section");
            if (n < 0)
                for (l = 0; l < o.length && !((i = o[l].getClientRects()[0].top) >= 40); l++);
            else
                for (var l = o.length - 1; l >= 0; l--) {
                    var i = o[l].getClientRects()[0].top;
                    if (i < -20) break
                }
            l >= 0 && l < o.length && $("html,body").animate({
                scrollTop: o[l].offsetTop
            }, 750)
        }
    })
}();
</script>
