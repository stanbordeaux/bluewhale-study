<div id="right_content"><!--content within right hand column-->



<!--Latest Sightings-->
	<div class="promo1">
	<p class="rightcol_ttl">LATEST SIGHTINGS</p>
	<img src="<?=base_url();?>images/sightings_1.jpg" class="floatLeft"> View the latest whale activity here
	<p class="link_line"><img src="<?=base_url();?>images/more.png" width="13" height="11" border="0" /> <?=anchor('sightings/sightings_archive', 'MORE');?> </p>
    </div>
<!--end of Latest Sightings-->
 
  <br class="clear"/> 
 <div class="promo_endline"></div>
 
 <!--Join Promo-->    
    <div class="join_promo">
     Become part of the Blue Whale Study
community. Keep in touch with
whale activity and contribute too!
       <p class="link_line"><img src="<?=base_url();?>images/icon_join.gif" alt="Join now" width="10" height="10" /> <?=anchor('bws/join_us', 'JOIN NOW') ;?></p>
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

</div><!--end of right content-->