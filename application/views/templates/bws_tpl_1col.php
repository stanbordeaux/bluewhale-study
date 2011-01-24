<!-- This is the basic 2 column template for the BLUE WHALE STUDY  -->
<html>
	<head>
		<?=$this->load->view('/templates/header'); ?>   
        <?=$this->load->view('/templates/bws_functions_js'); ?>  
	</head>
	
	
	<body>
	<div class="container main" ><!--main container-->
		
		
			<div class="span-24"><!--header container-->

				<div id="logo_section">
				</div>			
				<div id="logo_small">
					<img src="<?=base_url();?>images/bws_logo_section.jpg">
				</div>		
			</div><!--end of header-->
			
			 
			
			<div class="span-24 navarea"><!--navigation area-->
				
				<div class="span-8">
				&nbsp;
				</div>
				
				<div class="span-16 last" id="navbg"><!--blue nav bar bg etc-->
					
					<div class="nav"><!--top navigation bar-->
						<?=$this->load->view('/templates/top_nav3')?>
						
					</div><!--end of topnav-->
				
				</div><!--end of blue nav bar-->
			</div><!--end of navigation area-->
				 
			<div class="span-24 last" id="mainContent1col"><!--1col rule etc-->
				<div class="span-24 last subnav">	<!--subnav-->			
					<background img src="<?=base_url();?>images/subnav_bg.gif" />
					<?=$this->load->view($subnav_items); ?>
				</div><!--end of subnav-->


<!--Content-->
				<div class="span-24" ><!--main content-->
					<div class="mainContent_section">
						<?=$this->load->view($content_main); ?>
					</div><!--end of mainContent_section-->
				</div><!--end of main content-->
			
				
			
			</div><!--end of 1col rule etc-->	
			
			
			
			<div class="span-24 last footer">
				<div class="span-24 last" id="footer_colour">
				
				<!--<img src="images/footer_bg2.png">-->
					<div class="span-8" id="footer_left">Blue Whale Study is a charitable organisation <br />
						© Blue Whale Study 2009
					</div>
					<div class="span-8" id="footer_middle">
						c/- Post Office Narrawong VIC 3285 Australia <br />
					   Ph +61 3 5529 5227   
					</div>
					<div class="span-8 last footer_right">
					<a href="#">enquiry@bluewhalestudy.org </a><br />
					
					
					</div>
				</div><!--end of footer colour-->
			</div><!--end of footer-->
			
	</div><!--end of container-->
		
		
	</body>
</html>