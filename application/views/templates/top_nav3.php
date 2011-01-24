
<div id="myslidemenu" class="jqueryslidemenu">
	 	<ul class="activemenu">
        
            <!-- Begin Nav Item 1 -->
			<li>
				<?=anchor('bws/index','HOME'); ?>
            </li>
            
            <!-- Begin Nav Item 2 -->
            <li>
                <?=anchor('about/about_us','ABOUT');?>
            		
                    <!-- Begin Sub Nav Item 2.1 -->
                    <ul class="activemenu">
                        <li><?=anchor('about/about_us', 'About Us');?></li>
                        <li><?=anchor('about/about_us/what_we_do', 'What We Do');?></li>
                        <li><?=anchor('about/about_us/partners', 'Our Research Partners');?></li>
                        <li><?=anchor('about/about_us/donations', 'Donations');?></li>
                        <li><?=anchor('about/about_us/contact', 'Contact');?></li>
                    </ul>
            </li>
            
            <!-- Begin Nav Item 3 -->
			<li>
                <?=anchor('bws/research', 'RESEARCH'); ?>
						
                <!-- Begin Sub Nav Item 3.1 -->
                    <ul class="activemenu">
                        <li><?=anchor('bws/research/methods', 'Methods');?></li>
                        <li><?=anchor('bws/research/bonney_blue', 'Bonney Blue');?></li>
                    </ul>
			</li>
            
            <!-- Begin Nav Item 4 -->
			<li>
				<?=anchor('sightings/community', 'COMMUNITY'); ?>
                
                <!-- Begin Sub Nav Item 4.1 -->
                    <ul class="activemenu">
                        
                        <li><?=anchor('sightings/community/report_sighting', 'Report a Sighting');?></li>
                        <li><?=anchor('sightings/community/sighting_archive', 'Latest Sightings');?></li>
                        <li><?=anchor('sightings/community/get_news_topic', 'News & Media');?></li>
                        <li><?=anchor('sightings/community/join_us', 'Join Us') ;?></li>
                        <li><a href="http://bluewhalestudy.org/blueblog">The Blue Blog</a></li>
                        
                      
                    </ul>
			</li>
            
            <!-- Begin Nav Item 5 -->    
			<li>
				<?=anchor('bws/bw_info', 'BLUE WHALE INFO'); ?>
                
                <!-- Begin Sub Nav Item 5.1 -->
                    <ul class="activemenu">
                       
                        <li><?=anchor('bws/bw_info/long_range_movements', 'Long Range Movements');?></li>
                        <li><?=anchor('bws/bw_info/feeding', 'Foraging & Feeding');?></li>
                        <li><?=anchor('bws/bw_info/habitat', 'Habitat');?></li>
                        
                        
                    </ul>
			</li>                
            <!-- Begin Nav Item 6 -->    
			<li>
				<?=anchor('bws/image_collection', 'GALLERY'); ?>
                
                <!-- Begin Sub Nav Item 6.1 -->
                    <ul class="activemenu">
                        <li><?=anchor('bws/image_collection', 'Image Collection');?></li>
                    </ul>
			</li>                
		</ul>
  </div>
