<?php $title = 'Eatlixir';?>
<?php header('Access-Control-Allow-Origin: localhost'); ?>
<title>
  <?php $this->assign('title', 'Eatlixir'); ?>
</title>
<section>

</section>
<script>
$.ajax({
    method: "GET",
    url: "https://wsearch.nlm.nih.gov/ws/query?db=healthTopics&term=asthma",
    dataType: "jsonp",
    success: function(response){
        console.log($.parseXML(response));
    }
});
</script>
