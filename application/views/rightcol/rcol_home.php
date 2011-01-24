<div id="right_content_home"><!--content within right hand column-->
 
 <!--Report a Sighting-->
    <div class="report_sighting_promo">
    Have you just seen a whale? You can add it to our database here.
    <p class="link_line"><img src="<?=base_url();?>images/more.png" alt="Go" width="10" height="10" /> <?=anchor('sightings/report_sighting', 'GO') ;?></p>
    </div>
<!--end of Report a Sighting-->
    	
<!--Join Promo-->    
    <div class="join_promo">
     Become part of the Blue Whale Study
community. Keep in touch with
whale activity and contribute too!
       <p class="link_line"><img src="<?=base_url();?>images/more.png" alt="Join now" width="10" height="10" /> <?=anchor('bws/join_us', 'JOIN NOW') ;?></p>
   </div>
<!--end of Join Promo-->

<!--BWS News-->  
      <div class="promo1">
        <p class="rightcol_ttl">BWS NEWS</p>
       <b><?=$this->load->view('/content/news_side_topic') ;?></b>
      <span class="link_line"><img src="<?=base_url();?>images/more.png" width="13" height="11" border="0" /> <?=anchor('news/get_news_topic', 'VIEW ALL');?></span>
      
       <!--<br class="clear">--> 
<div class="promo_endline"></div></div>
<!--end of BWS News-->  

<!--Donations-->
    <div class="promo1">
        <p class="rightcol_ttl">DONATIONS</p>
        <img src="<?=base_url();?>images/donations_th.jpg" class="floatLeft"> If you would like to support our ongoing research and community education programs, you can do so here
				<p class="link_line"><img src="<?=base_url();?>images/more.png" width="13" height="11" border="0" /> <?=anchor('bws/donations', 'MORE');?></a></p>
        <br class="clear">
    <div class="promo_endline"></div></div>
<!--end of Donations-->
 
</div><!--end of right column content-->