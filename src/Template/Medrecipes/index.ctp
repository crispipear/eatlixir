<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medrecipe[]|\Cake\Collection\CollectionInterface $medrecipes
 */
?>
<section class="foodDir">
  <h3 class="formTitle">Medicinal Diet Recipes Directory</h3>
  <div class="filter">
    <label for="functions">functions</label>
    <select id="functions">
      <option>moisten lungs</option>
      <option>tonify</option>
      <option>soothe mind</option>
    </select>
    <label for="indications">indications</label>
    <select id="indications">
      <option>cough</option>
      <option>insomnia</option>
      <option>diarrhea</option>
      <option>indigestion</option>
      <option>loss of appetite</option>
    </select>
    <label for="name">type</label>
    <select id="name">
      <option>soup</option>
      <option>tea</option>
      <option>stew</option>
      <option>congee</option>
    </select>
    <input id="keyword" type="text" placeholder="&#xf002; search by keyword">
    <button class="cta-button" id="search">search</button>
    <button class="cta-button" id="showall">show all</button>
  </div>
<?php if ($currentRole === 'admin'): ?>
  <?= '<button class="cta-button settings" style="margin-top: 2%">' . $this->Html->link(__('New Recipe'), ['action' => 'add']) . '</button>'?>
<?php endif ?>
<?php foreach ($medrecipes as $medrecipe): ?>
<div class="foodinfo" id=<?= h($medrecipe->id)?>>
  <div class="left">
    <?= $this->Html->image($medrecipe->img, ['alt' => 'Eatlixir'])?>
  <?php if ($currentRole === 'admin'): ?>
  <h3><?= h($medrecipe->name) ?> <?=  $this->Html->link('<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', ['action' => 'view/'.$medrecipe->id], array('escape' => false))?></h3>
<?php else :?>
  <h3><?= h($medrecipe->name) ?></h3>
<?php endif ?>
  <h5><span>Chinese name: </span> <?= h($medrecipe->chinese_name) ?></h5>
  </div>
  <div class="right">
    <p><span>Functions: </span><?= h($medrecipe->functions) ?></p>
    <p><span>Indications: </span><?= h($medrecipe->indications) ?></p>
    <p><span>Ingredients: </span><?= h($medrecipe->ingredients) ?></p>
    <p><span>Instructions: </span><?= h($medrecipe->instructions) ?></p>
    <p><span>Usage: </span><?= h($medrecipe->uses) ?></p>
  </div>
</div>
<?php endforeach; ?>
</section>
<script>
var url;
if (location.hostname === "localhost" || location.hostname === "127.0.0.1"){
 url = '/eatlixir/medrecipes/all';
}else{
  url = 'https://students.washington.edu/rice74/IMD351/eatlixir/medrecipes/all';
}
var recipeData=[];
var results=[];
$.ajax({
  url: url,
  dataType: "json",
  contentType: "application/json",
  success: (function(data){
    recipeData = data.Medrecipes;
  })
});

$('select').change(function(){
  var category = this.id;
  var value = $(this).val();
  recipeData.forEach(function(data){
    var id = JSON.stringify(data['id']);
    var result = JSON.stringify(data[category]);
    if (result.indexOf(value) !== -1) {
        results.push(id);
    }
  });
  renderResults();
});

$('#showall').click(function(){
  $('.foodinfo').fadeOut(100);
  $('.foodinfo').fadeIn(100);
});
$('#search').click(function(){
  console.log(recipeData);
  var keyword = $('#keyword').val();
  recipeData.forEach(function(data){
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
