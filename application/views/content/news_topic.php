<!--News topic-->
<div>
    <h1>News</h1><br />
        <?php foreach($news_topic as $item): ?> 
            <h2><?=$item['title'];?></h2>
            <p><?=$item['excerpt'];?>
            <span style="font-size: smaller; color: gray;"><?=anchor('news/get_news_content/'.$item['id'],'...more');?></span></p>
        <?php endforeach; ?>
</div>


