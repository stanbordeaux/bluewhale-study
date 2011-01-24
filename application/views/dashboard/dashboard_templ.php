<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
<title>Blue Whale Study - Administration panel</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<?=$this->load->view('/dashboard/dashboard_header'); ?>
</head>
<body>
<div class="outer-container">
  <div class="inner-container">
    <div class="header">

		<div class="title"> <span class="sitename"> <a href="<?=base_url(); ?>/index.php/bws">Blue Whale Study</a></span>
<div class="slogan">Administration panel</div>	</div>
    </div>
    <div class="top">
    	 
   		Logged in as <?=$this->session->userdata('username');?> | <?=anchor('bws/index', 'View Site'); ?> | <?=anchor('user/logout', 'Log out'); ?></div>

    <div class="main">
    <div class="content">
		  <?=$this->load->view($main_content); ?>
    </div>
        
    <div class="navigation">
        <?=$this->load->view('/dashboard/navigation'); ?>
    </div>
        
      <div class="clearer">&nbsp;</div>
    </div>
    <div class="footer">
    	 
    	Powered by <a href="http://www.bluewhalestudy.org.au" target="_blank">Blue Whale Study</a> | Template by <a href="http://www.stan.bordeaux.com" target="_blank">Stan Bordeaux</a>
<div class="clearer"></div>    </div>
  </div>

</div>
</body>
</html>
