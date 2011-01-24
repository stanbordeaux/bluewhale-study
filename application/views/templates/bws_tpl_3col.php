<!DOCTYPE html>
<html lang="en">

<head>
        <?=$this->load->view('/templates/header'); ?>	
        <?=$this->load->view('/templates/bws_nav_js'); ?>
      				
</head>
	
	<body >
	
		<div class="container main"><!--text align left-->
		
			
			<div class="container"><!--Header-->
				<div id="logo">	<!--waves-->
				</div><!--end of banner-->
				<div id="logo_home">
					<img src="<?=base_url();?>images/bws_logo_home.gif">
				</div><!--end of logo-->
			</div><!--end of header-->
			
			
			<div class="container" id="mainContent_home"><!--3col rule etc-->
			
				<div class="span-24" id="navbg"><!--navigation-->
					
					<div class="span-8">
					&nbsp;
					</div>
						
					<div class="span-16 nav last"><!--Nav bar--><!--middle column-->
						<?=$this->load->view('/templates/top_nav3');?>
						<!--
                        <script type="text/javascript">
							var menu=new menu.dd("menu");
							menu.init("menu","menuhover");
						</script>
                        -->
					</div><!--end of nav bar-->
				</div><!--end of navigation-->
			
				<div class="container"><!--main content area-->
					<div class="span-8" id="leftcol_home"><!--left column-->								
					<!--Content block-->
						<div id="left_content">
							<div id="under_logo">
								&nbsp;
							</div>
							<p>Since 1998 the Blue Whale Study has been investigating the ecology of blue whales <i>(Balaenoptera musculus)</i>, the largest animal on Earth, in their feeding habitat in waters off south-west Victoria and south-east South Australia. The Blue Whale Study, conducted by whale ecologists Dr Peter Gill and Margie Morrice, has unraveled and described the fundamental ecology  underlying the  presence of blue whales in this feeding area.</p>
							<img src="<?=base_url();?>images/map_aust.gif">
						</div><!--end of left content-->
					</div><!--end of left column-->

					<div class="span-8"><!--midcol-->
						<div id="home_midcol">
							
							<p><img src="<?=base_url();?>images/home_slimblue.jpg"></p>
							<p id="floatLeft">
							Find out more about the Blue Whale <i>(Balaenoptera musculus)</i> and its habitat. <br />
							<img src="<?=base_url();?>images/more.png" alt="more" width="13" height="11" border="0" /><?=anchor('bws/habitat', ' MORE');?> 
							</p>
						  <br /><p><img src="<?=base_url();?>images/home_bonney.jpg" id="img"></p>
							<p>We use many different methods in our research from aerial surveys, boat based studies and satellite tagging.<br />
						<img src="<?=base_url();?>images/more.png" alt="more" width="13" height="11" border="0" /> <?=anchor('bws/methods', 'MORE');?><br />
							<br />
							</p>
						</div>
					</div><!--end of midcol-->
				
					<div class="span-8 last"><!--right column-->
						<?=$this->load->view('/rightcol/rcol_home');?>
					</div><!--end of right column-->
				</div><!--end of main content area-->
			
			</div><!--end of main content 3colrule-->
		
			<div class="span-24 last footer">
				<div class="span-24 last" id="footer_colour">
			
			<!--<img src="images/footer_bg2.png">-->
					<div class="span-8" id="footer_left">Blue Whale Study is a charitable organisation <br />
						© Blue Whale Study 2009
					</div>
					<div class="span-8" id="footer_middle" ><div class="footerlinks">c/- Post Office Narrawong VIC 3285 Australia <br />
			    Web hosting services sponsored by <a href="http://www.flexihostings.net.au" >Flexihostings.net.au</a>
					</div></div>
					<div class="span-8 last footer_right">
                    <div class="footerlinks">
				 	<a href="mailto:enquiries@bluewhalestudy.org" title="mailto:enquiries@bluewhalestudy.org">enquiries@bluewhalestudy.org </a><br />
 
					<div ><?=anchor('bws/terms', 'Site Terms of Use ');?> | 
                    <?=anchor('user/login_frm', 'Admin login'); ?> </div>
					</div>
				</div><!--end of footer-->
			</div>
		</div><!--end of container-->
		
	
	</body>
</html>