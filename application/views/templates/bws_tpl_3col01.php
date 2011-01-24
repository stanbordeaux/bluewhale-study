<!DOCTYPE html>

	<head>
		<!-- Load the basic head and meta tag info -->
		<?=$this->load->view('/templates/header');	 ?>				
	</head>
	
	<body>
		<!--Here we load the main container Remember this is 950px wide-->
		<div class="container" >
		
			<!--Banner-->
			<div class="container"> <!--DOES THIS NEED A SPAN CLASS FOR THE ROW?? -->
				<div id="logo">	<!--waves-->
				</div>
				<div id="logo_home">
					<img src="images/bws_logo_home.gif">
				</div><!--end of logo-->
			</div><!--end of banner-->
			
			<div class="container" id="mainContent_home">
			<!--navigation-->
				<?php  $this->load->view('/templates/top_nav3');?>
			</div><!--end of navigation-->
			
			<div class="container">
				<div class="span-8" id="leftcol_home"><!--left column-->								
					<!--Content block-->
					<div id="left_content">
						<div id="under_logo">
						&nbsp;
						</div>
						<h1>Try this</h1>
						<p>Since 1998 the Blue Whale Study has been investigating the ecology of blue whales 	(Balaenoptera musculus), the largest animal on Earth, in their feeding habitat in waters off south-west Victoria and south-east South Australia. The Blue Whale Study, conducted by whale ecologists Dr Peter Gill and Margie Morrice, has unraveled and described the fundamental ecology  underlying the  presence of blue whales in this feeding area.</p>
						<img src="images/map_aust.gif">
					</div><!--end of left content-->
				</div><!--end of left column-->

				<div class="span-8"><!--midcol-->
					<div id="home_midcol">
						<h1>&nbsp;</h1>
						<img src="images/bluewhale_temp.jpg"><br/>
						<p id="floatLeft">
						Find out more about the Blue Whale,<br />
						  Balaenoptera musculus. <a href="#"><img src="images/more.png" alt="" width="13" height="13" border="0" /> MORE </a><br />
    </p><br />
						<br/><br/><img src="images/rubber_ducky.jpg" id="img"><br/>
						<p>Interested in working in a marine research<br />
      environment? Find  out what it’s all about.<br />
      <a href="#"><img src="images/more.png" alt="" width="13" height="13" border="0" /> MORE </a><br />
      <br />
    </p>
					</div>
				</div><!--end of midcol-->
				
				<div class="span-8 last">
				<div id="right_content"><!--content within right hand column-->
					<div id="promo1"><!--first promo-->
						<p id="rightcol_ttl">LATEST SIGHTINGS</p>
						<img src="images/sightings_1.jpg" id="floatLeft"> 02.03.09<br />Blue whale located at Cape Nelson...
						<p id="link_line"><a href="#"><img src="images/more.png" width="13" height="11" border="0" /> MORE     </a></p>
					</div><!--end of first promo-->
				</div><!--end of right content-->
				</div><!--end of right column-->
			</div>
			
		</div><!--end of main content-->
		
			<div class="span-24 last" id="footer">
			<div class="span-24 last" id="footer_colour">
			
			<!--<img src="images/footer_bg2.png">-->
				<div class="span-8" id="footer_left">Blue Whale Study is a charitable organisation <br />
					© Blue Whale Study 2009
				</div>
				<div class="span-8" id="footer_middle">
					c/- Post Office Narrawong VIC 3285 Australia <br />
				   Ph +61 3 5529 5227   
				</div>
				<div class="span-8 last" id="footer_right">
				<a href="#">enquiry@bluewhalestudy.org </a><br />
				Privacy | Terms | 
				
				</div>
			</div><!--end of footer-->
			</div>
		</div><!--end of container-->
		
	
	</body>
</html>