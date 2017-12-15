<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ingredient[]|\Cake\Collection\CollectionInterface $ingredients
 */
?>
<section class="foodDir">
  <h3 class="formTitle">Herb Ingredients Directory</h3>
  <div class="filter">
    <div class="row">
      <label for="flavor">flavor</label>
      <select id="flavor">
        <option>sweet</option>
        <option>sour</option>
        <option>bitter</option>
        <option>pungent</option>
        <option>salty</option>
      </select>
      <label for="nature">nature</label>
      <select id="nature">
        <option>hot</option>
        <option>warm</option>
        <option>neutral</option>
        <option>cool</option>
        <option>cold</option>
      </select>
      <label for="functions">functions</label>
      <select id="functions">
        <option>boost immunity</option>
        <option>tonify</option>
        <option>replenish blood</option>
        <option>replenish energy</option>
        <option>detoxification</option>
        <option>pain relief</option>
        <option>soothe mind</option>
      </select>
      <label for="symptoms">symptoms</label>
      <select id="symptoms_key">
        <option>sweats</option>
        <option>cough</option>
        <option>headache</option>
        <option>dizziness</option>
        <option>insomnia</option>
        <option>anxiety</option>
        <option>diarrhea</option>
        <option>indigestion</option>
        <option>blood deficiency</option>
        <option>irregular menstruation</option>
        <option>loss of appetite</option>
      </select>
    </div>
    <div class="row">
      <input id="keyword" type="text" placeholder="&#xf002; search by keyword">
      <button class="cta-button" id="search">search</button>
      <button class="cta-button" id="showall">show all</button>
    </div>
  </div>
  <?php if ($currentRole === 'admin'): ?>
    <?= '<button class="cta-button settings" style="margin-top: 2%">' . $this->Html->link(__('New Herb'), ['action' => 'add']) . '</button>'?>
  <?php endif ?>
  <?php foreach ($ingredients as $ingredient): ?>
    <div class="foodinfo" id=<?= h($ingredient->id)?>>
      <div class="left">
      <?= $this->Html->image($ingredient->img, ['alt' => 'Eatlixir'])?>
      <?php if ($currentRole === 'admin'): ?>
      <h3><?= h($ingredient->common_name) ?> <?=  $this->Html->link('<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', ['action' => 'view/'.$ingredient->id], array('escape' => false))?></h3>
    <?php else :?>
      <h3><?= h($ingredient->common_name) ?></h3>
    <?php endif ?>
      <h5><span>Scientific name: </span> <?= h($ingredient->scientific_name) ?></h5>
      <h5><span>Chinese name: </span> <?= h($ingredient->chinese_name) ?>(<?= h($ingredient->pinyin) ?>)</h5>
      </div>
      <div class="right">
        <p><span>Nature: </span><?= h($ingredient->nature) ?></p>
        <p><span>Flavor: </span><?= h($ingredient->flavor) ?></p>
        <p><span>Functions: </span><?= h($ingredient->functions) ?></p>
        <p><span>Helps with: </span><?= h($ingredient->symptoms_key) ?></p>
      </div>
    </div>
  <?php endforeach; ?>
</section>
<script>
var url;
if (location.hostname === "localhost" || location.hostname === "127.0.0.1"){
 url = '/eatlixir/ingredients/all';
}else{
  url = 'https://students.washington.edu/rice74/IMD351/eatlixir/ingredients/all';
}
var herbData=[];
var results=[];
$.ajax({
  url: url,
  dataType: "json",
  contentType: "application/json",
  success: (function(data){
    herbData = data.Ingredients;
    if(location.search.indexOf("?") !== -1){
      value = location.search.substring(1).toLowerCase();
      getCatData("indications", value);
      renderResults();
    }
  })
});
$('select').change(function(){
  var category = this.id;
  var value = $(this).val();
  getCatData(category, value);
  renderResults();
});
function getCatData(category, value){
  herbData.forEach(function(data){
    var id = JSON.stringify(data['id']);
    var result = JSON.stringify(data[category].toLowerCase());
    if (result.indexOf(value) !== -1) {
      results.push(id);
    }
  });
}
$('#showall').click(function(){
  $('.foodinfo').fadeOut(100);
  $('.foodinfo').fadeIn(100);
});
$('#search').click(function(){
  var keyword = $('#keyword').val();
  herbData.forEach(function(data){
    var id = JSON.stringify(data['id']);
    for (var key in data) {
      var result = JSON.stringify(data[key]);
      if (result.indexOf(keyword) !== -1) {
        results.push(id);
      }
    }
  });
  renderResults();
});

function renderResults(){
  $('.foodinfo').fadeOut(100);
  results.forEach(function(id){
    $('div#'+id).fadeIn(100);
  });
  results = [];
}
</script>
