<ul>
<?php foreach($res as $row): ?>
    
   <li>
      <?=$row->title?>
      <?=anchor('news/get_news_content/'.$row->id,'view more');?><br /><br />
   </li> 
<?php endforeach; ?>
</ul>
