<div id="right_content"><!--content within right hand column-->

<!--Report a Sighting-->
    <div class="report_sighting_promo">
    Have you just seen a whale? You can add it to our database here.
    <p class="link_line"><img src="<?=base_url();?>images/more.png" alt="Go" width="10" height="10" /> <?=anchor('sightings/report_sighting', 'GO') ;?></p>
    </div>
<!--end of Report a Sighting-->

<!--Donations-->
    <div class="promo1">
        <p class="rightcol_ttl">DONATIONS</p>
        <img src="<?=base_url();?>images/donations_th.jpg" class="floatLeft"> If you would like to support our ongoing research and community education programs, you can do so here
				<p class="link_line"><img src="<?=base_url();?>images/more.png" width="13" height="11" border="0" /> <?=anchor('bws/donations', 'MORE');?></a></p>
        <br class="clear">
    <div class="promo_endline"></div></div>
<!--end of Donations-->

<!--Image Gallery-->
    <div class="promo1">
        <p class="rightcol_ttl">IMAGE GALLERY</p>   
        <img src="<?=base_url();?>images/gallery_th.jpg" class="floatLeft">The Blue Whale Study has an extensive gallery of images which are used to record each research trip and for identifying blue whales.             
        <p class="link_line"><img src="<?=base_url();?>images/more.png" width="10" height="10" border="0" /> <?=anchor('bws/image_collection', 'VIEW');?></a></p>
    <br class="clear">
<div class="promo_endline"></div></div> 
<!--end of Image Gallery-->

<!--BWS News-->  
      <div class="promo1">
        <p class="rightcol_ttl">BWS NEWS</p>
       <b><?=$this->load->view('/content/news_side_topic') ;?></b>
      <span class="link_line"><img src="<?=base_url();?>images/more.png" width="13" height="11" border="0" /> <?=anchor('news/get_news_topic', 'VIEW ALL');?></span>
      
       <!--<br class="clear">--> 
<div class="promo_endline"></div></div>
<!--end of BWS News-->  



</div><!--end of right content-->