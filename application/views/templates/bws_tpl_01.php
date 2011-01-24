<!DOCTYPE html>

<head>
    
    <meta name="description" content="Blue Whale Study: conducting ecological research and education
to understand and help conserve Endangered blue whales and their feeding habitat, southern Australia." />
<meta name="keywords" content="Blue Whale Study, blue whale, whales, Balaenoptera musculus, Pete Gill, Margie Morrice, australia, southern australia, Victoria, Portland, ecology, whale ecologogists, endangered, bonney upwelling, the big blue" />
<meta name="author" content="www.bluewhalestudy.org" /><title>Blue Whale Study: Balaenoptera musculus</title>

    <?=$this->load->view('/templates/header'); ?>   
    <?=$this->load->view('/templates/bws_functions_js'); ?>  
    <title>About | Blue Whale Study</title>
        
</head>
	
<body>
<div class="container " ><!--main container-->
		
		
			<div class="span-24 last"><!--header container-->

				<div id="logo_section">
				</div>			
						<div id="logo_small">
					<img src="images/bws_logo_section.jpg">
				</div>		
			</div><!--end of header-->
			
			 
			<!--navigation-->
			<div class="span-24 last">
				<div class="span-8">
				&nbsp;
				</div>
				<div class="span-16 last" id="navbg"><!--blue nav bar bg etc-->
					<?=$this->load->view($navlist);?>
				
				 </div><!--end of blue nav bar-->
				 </div>
				 
		<div class="span-24" id="mainContent"><!--2col rule etc -->
					<div class="span-24 last" id="subnav">
						
						
							<p id="subnav_items">About us  |  <a href="#">What we do</a>  |  <a href="#">Our partners</a>  |  <a href="#">Donations</a>  |  <a href="#">Contact us</a></p>
							
					</div><!--end of subnav-->


<!--Content-->
				<div class="span-16"><!--main content-->
					<?=$this->load->view($main_content);?>
				</div><!--end of main content-->
			
<!-- Right col-->		

				<div class="span-8 last"><!--right hand column-->
					<div id="right_content"><!--content within right hand column-->
						<?=$this->load->view($promo1);?>
						<div id="join_promo">
							Become part of the Blue Whale Study community. Keep in touch with whale activity and contribute too!
							<p class="link_line"><img src="images/more_reverse.gif" width="10" height="10" /><a href="#"> FIND OUT MORE </a> &nbsp;<img src="images/icon_join.gif" alt="Join now" width="10" height="10" /> <a href="#">JOIN NOW</a></p>
						</div><!--end of Join promo-->
						
					</div><!--end of right content-->
				</div><!--end of right col-->
			
			</div><!--end of 2col rule etc-->	
			
			
<!--footer-->			
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
				</div><!--end of footer colour-->
			</div><!--end of footer-->
			
		</div><!--end of container"-->
		
		
	</body>
</html>