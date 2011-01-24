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

<div>   
    <!-- need to check which heading is used here -->
    <h1>Report a Sighting</h1>  
    <p>The Blue Whale Study is interested in hearing about your sightings, it helps us get a sense of where and when the whales are moving around their feeding grounds.</p>
    <p>Please begin by filling in our sighting form below and - if you are happy for us to - we will contact you if there’s a need to clarify any information.</p>

<p>There are 4 steps to Report a Sighting:</p>
<div style="border-top: solid 1px #bfe2f6; border-bottom: solid 1px #bfe2f6;">

<table width="80%">
    <tr>
        <td rowspan="2">
            <img src="<?=base_url(); ?>crir/crir/bws_step_1.gif" />
        </td>
        <td colspan="2">
            <h5 style="margin-top: 20px;" class="">Did you see the whales while you were on a boat or on land?</h5>
        </td>
    </tr>
        
    <tr>
        <td>
            <a href="<?=base_url(); ?>index.php/sightings/get_vessel_form"><label for="reportType1">Vessel</label>
            <input type="radio"  align="ABSMIDLE" name="reportType" id="reportType1" value="vessel" class="crirHiddenJS" /></a>
        </td>
        <td>
            <a href="<?=base_url(); ?>index.php/sightings/get_land_form"><label for="reportType2">Land</label>
            <input type="radio"  align="ABSMIDLE" name="reportType" id="reportType2" value="land" class="crirHiddenJS"/></a>
        </td>
    </tr>
</table>

</div>
    
</div>  
<div style="clear: both">

</div>        
</div>
</body>
</html>