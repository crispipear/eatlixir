<title>
    <?php $this->assign('title', 'Eatlixir'); ?>
</title>
<section id="bodytest">
  <?php if(!($currentRole === 'admin')&&!($currentRole === 'user')):?>
    <h3 class="formTitle">Please log in to take the body constitution test</h3>
<?php else: ?>
  <h3 class="formTitle">9 Body Constitutions Test</h3>
  <?= $this->Html->link('Learn about the 9 body constitutions',array('controller' => 'pages', 'action' => 'display', 'about'),array('class'=>'cta-button')) ?>
<?php endif ?>
<div id="bctest">
  <ul>
    <span>**Please answer the following questions based on your experience and feelings within one year. Answer repeated questions and do not skip any questions.</span>
  </ul>
  <button id="getscore" class="cta-button">submit</button>
  <p id="resultMsg">
    <span>Your result (closest match): <span id="highestScore"></span></span>
    <p id="result"></p>
    <button id="linktoEdit" class="cta-button"><?= $this->Html->link(__('Update your type!'), ['controller'=>'users','action' => 'edit/'.$currentID]) ?></button>
  </p>
</div>
</section>
<script>
$('#linktoEdit').hide();
var typeA = ['Are you energetic?', 'Do you feel tired easily?', 'Do you sound like you are lack of strength when you talk?', 'Do you feel depressed or emotionally down?', 'Are you less durable than the others under cold air?(Winter, AC, fans)','Are you able to adapt environment and social changes?','Do you have trouble falling asleep?','Do you forget things easily?'];
var typeB = ['Do you feel tired easily?', 'Do you have trouble breathing easily?', 'Do you feel flustered(anxious) easily?', 'Do you feel dizzy or get dizzy easily when you stand up?', 'Do you catch a cold easier than the others?','Do you prefer silence, speak less?','Do you sound like you are lack of strength when you talk?','Do you sweat easily even when you have only worked out a little bit?'];
var typeC = ['Do your hands or feet get cold?', 'Are your stomach, back, waist and knee areas sensitive to coldness?', 'Are you afraid of cold and wear more layers than others?', 'Are you less durable than the others under cold air?(Winter, AC, fans)', 'Do you catch a cold easier than the others?','Do you feel uncomfortable or avoid eating(drinking) cold food(drinks)?','Do you get diarrhea easily when you eat(drink) cold food(drinks)?'];
var typeD = ['Do your hands or feet get hot?','Do your body and face get hot?','Do you have dry skin or dry lips?','Is your natural lip color more red than others?','Are you constipated easily?','Are you cheeks pink or red?','Do your eyes get dried?','Do you feel thirsty and need water?'];
var typeE = ['Do you feel stuffy in the chest or bulging in the stomach?','Do you feel weighted on your body?','Does your stoamch get plumped?','Do you have excess oil on your forehead?','Are your upper eyelids lightly swollen?','Does your inner mouth area feel sticky?','Do you have lots of phlegm or feel like there are substances stuck in your throat area?','Do you have thick tongue coating?'];
var typeF = ['Do your face or nose get oily?','Do you get acnes or boils easily?','Do you get a bitter taste or get a weird taste in your mouth?','Does your defecation has a sticky stagnation and feels endless?','Is your urine heated and dark color?','(Female only)Does your leucorrhea	get yellow?'];
var typeG = ['Does your skin get bruises(subcutaneous bleeding) out of nowhere?','Do you have visible/fine blood vessels on your cheeks?','Do you get bodyache somewhere?','Do you have dull skin or get brown spots easily?','Do you get dark eye circles easily?','Do you forget things easily?','Do you have natural dark lip color?'];
var typeH = ['Do you feel depressed or emotionally down?','Do you feel flustered(anxious) easily?','Are you sentimental and emtionally fragile?','Do you get frightened or scared easily?','Do you get swelling pain in your lateral thorax or breasts?','Do you sigh for no reason?','Do you feel like there are substances stuck in your throat area that you cannot spit out or swallow?'];
var typeI = ['Do you sneeze even when you don\'t have a flu or cold?','Do you get runny nose or congested nose even when you don\'t have a flu or cold?','Do you have coughing conditions because of weather change, temperature change or weird odor?','Are you easily allergic to medicines, food, smell, pollen or weather/temperature change?','Does your skin get nettle rash easily?','Do you get purpura(purple/red bruise spots) on your skin due to allergies?','Does your skin get red and scratches easily when it was scraped/scratched?'];

var testBank = [typeA, typeB, typeC, typeD, typeE, typeF, typeG, typeH, typeI];
var typeAScore=typeBScore=typeCScore=typeDScore=typeEScore=typeFScore=typeGScore=typeHScore=typeIScore=0;
var scores =[typeAScore, typeBScore, typeCScore, typeDScore, typeEScore, typeFScore, typeGScore, typeHScore, typeIScore];
var types = ['Neutral', 'Qi Deficient', 'Yang Deficient', 'Yin Deficient', 'Phlegm&Dampness', 'Damp-heat', 'Blood Stasis', 'Qi Stagnation', 'Special Constitution'];
testBank.forEach(function(test, i){
  var index = parseInt(i)+1;
  var bctQ = "bctQ"+index;
  for (var i in test) {
    var index = parseInt(i)+1;
    var subbctQ = bctQ+"bctQ"+index;
    var item = "<li class='bctQ "+bctQ+"'>"+test[i]+"<p><input name='"+subbctQ+"' value='1' type='radio'>~never<input name='"+subbctQ+"' value='2' type='radio'>occasionally"
    +"<input name='"+subbctQ+"' value='3' type='radio'>sometimes<input name='"+subbctQ+"' value='4' type='radio'>often<input name='"+subbctQ+"' value='5' type='radio'>always"
    +"</p></li>";
    $('#bctest ul').append(item);
  }
});
$('#getscore').click(function(){
  typeAScore=typeBScore=typeCScore=typeDScore=typeEScore=typeFScore=typeGScore=typeHScore=typeIScore=0;
  scores =[typeAScore,typeBScore,typeCScore,typeDScore,typeEScore,typeFScore,typeGScore,typeHScore,typeIScore];
  calcResult();
})
function calcResult(){
  var result = "";

  scores.forEach(function(score, i){
    var index = parseInt(i)+1;
    var bctQ = "bctQ"+index;
    var total = $('.'+bctQ).size()*5;

    $('.'+bctQ).each(function(index){
      var subbctQ = bctQ+"bctQ"+(index+1);
      if($(this).find("input[name='"+subbctQ+"']:checked").length !== 0){
        score += parseInt($("input[name='"+subbctQ+"']:checked").val());
      }else{
        score += 0;
      }
    });
    score = score/total*100;
    score = score.toFixed();
    scores[i] = parseInt(score);
    result += types[i]+': '+score+'; ';
  });

  $('#result').text(result);
  $('#linktoEdit').show();

  var maxVal = Math.max.apply(Math, scores);
  var highest = scores.indexOf(maxVal);
  $('#highestScore').text(types[highest]+', score: '+scores[highest]);
}
</script>
