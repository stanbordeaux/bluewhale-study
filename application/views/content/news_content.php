<!--News content-->
<div>
<h1>News</h1><br />
<?php foreach($query->result() as $row):?>
<!-- the following lines can be removed, just here for debugging -->


<?php endforeach; ?>


   
   
      <b><?=$row->title?><br /></b><br />
      <p><?=$row->content?></p><br />

      <?=anchor('news/get_news_topic/','back');?><br /><br />
    

</div>


