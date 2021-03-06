<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<section id="accountinfo" class="gradient">
  <?php if(!($currentRole === 'admin') && !($currentID == $user->id)) : ?>
  <h3 class="formTitle"> You are not authorized for this action</h3>
  <?php else : ?>
    <div class="info">
      <h3><span id="greetMsg"></span> <?= h($user->username)?></h3>
    <p><span>Email</span> <?= h($user->email) ?></p>
    <?php if(strlen($user->bodytype) == 0):?>
      <p><span>Body constitution type</span> not set, go take the test!</p>
    <?php else: ?>
      <p><span>Body constitution type</span> <?= h($user->bodytype) ?></p>
    <?php endif ?>
    <p><span>Joined since</span> <?= h($user->created) ?></p>
    <?php if (($currentRole === 'admin')||($currentRole === 'user')&&($currentID == $user->id)): ?>
      <button class="cta-button"><?= $this->Html->link(__('Edit Account'), ['action' => 'edit', $user->id]) ?></button>
      <button class="cta-button"><?= $this->Html->link(__('Body Test'), ['controller'=>'pages','action' => 'display','bodytest']) ?></button>
    <?php endif; ?>
    <?php if ($currentRole === 'admin'): ?>
      <button class="cta-button"><?= $this->Html->link(__('Admin Panel'), ['action' => 'index']) ?></button>
    <?php endif; ?>
  </div>
<?php endif ?>
</section>
<script>
var greetmsg;
var normal = ['Hi there,','Hello!','Welcome back,','Hey yo!','How\'s it going?','What\'s up?','What\'s cracking?','Howdy'];
var num = getRandomInt(0, 2);
if(num == 0){
  greetmsg = timedGreeting();
}else{
  var index = getRandomInt(0, normal.length);
  greetmsg = normal[index];
}
$('#greetMsg').text(greetmsg);

function timedGreeting(){
  var msg;
  var morning = ['Mornin\'!','Good morning!','Rise and shine!','Hi early bird', 'Got your coffee yet?', 'What\'s for breakfast?'];
  var afternoon = ['Good afternoon!','Got lunch?', 'Sun\'s still shining?','Good day,','It\'s tea time!'];
  var evening = ['Good evening!','What\'s for dinner?', 'Is it dark out?','Dinner\'s ready?'];
  var lateNight = ['Still awake?', 'Time to sleep!', 'Time for bed!', 'It\'s pretty late!', 'Why staying up?', 'Hey night owl!'];
  var time = new Date();
  var hrs = time.getHours();
  if(hrs >= 0){
    msg = lateNight[getRandomInt(0,lateNight.length)];
  }
  if (hrs > 6){
    msg = morning[getRandomInt(0,morning.length)];
  }
  if (hrs > 12){
    msg = afternoon[getRandomInt(0,afternoon.length)];
  }
  if (hrs > 18){
    msg = evening[getRandomInt(0,evening.length)];
  }
  return msg;
}
function getRandomInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min)) + min;
}
</script>
