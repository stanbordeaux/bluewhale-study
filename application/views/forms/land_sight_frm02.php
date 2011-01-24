<!DOCTYPE html >
<head>
   
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title></title>
       
    <!-- Load the jQuery and javaScript calls-->
    <?=$this->load->view('/templates/header'); ?> 
    <?=$this->load->view('/templates/bws_map_js'); ?>
    <?=$this->load->view('/templates/bws_functions_js'); ?> 

</head>

<!-- Remember to get the page ready to put the google map -->
<body onload="initialize()">

<div>

<form name="sighting_form"  id="sighting_form" action="<?=base_url(); ?>index.php/sightings/add_sighting" method="post">
    <div>
        <img src="<?=base_url(); ?>crir/crir/bws_step_2.gif" style="float: left;"/>
        <h1 style="margin-left: 60px;">Land based sighting</h1>
        <p style="margin-left: 60px;">Whale sightings are recorded by storing the estimated latitude and longitude of the whale based on the position of the observer, the direction of the whales relative to the observation point and the estimated distance of the whale from the observer at the time of the sighting.<br /><br />
        To record your sighting mark your location on the map below. Use the zoom tools to place the marker as accurately as posible. <a class="basic" href="<?=base_url(); ?>cluetip/tooltips/map_tips.php" rel="<?=base_url(); ?>cluetip/tooltips/map_tips.php" title="Map instructions">More instructions</a>.</p>
    </div>                    
                 
    <div id="map_canvas" style="width: 500px; height: 300px; margin-top: 20px; margin-bottom: 20px; margin-left: 60px; border: solid #0080C0;"></div>
    
    <!-- date and time  -->    
    <div>
        <img src="<?=base_url(); ?>crir/crir/bws_step_3.gif" style="float: left;"/>
        
        <h1 style="margin-left: 60px;">Complete the following form</h1>
        
       	<h5 style="margin-top: 20px; margin-left: 60px" class="">What was the date and time of the whale sighting?</h5>
        
       	<label for = 'ob_date'>Date</label>
        <input type="text" class="datepicker" name="obDate" id="ob_date" style="background: url(<?=base_url(); ?>images/calendar.gif) no-repeat 3px;" value=""/>
        
        <label for = "ob_time">Time</label>
        <input type="text" name="obTime" id="ob_time" value=""/>
    </div>

</form>
</div>
</body>
