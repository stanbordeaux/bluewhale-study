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
            	<h5 style="margin-top: 20px; margin-left: 60px; color: #058CBF;" class="">What was the date and time of the whale sighting?</h5>
            	<label for = 'obDate' class="datepicker" style="margin-left: 60px;">Date</label>
                <input type="text" class="datepicker" name="obDate" id="obDate" style="background: url(<?=base_url(); ?>images/calendar.gif) no-repeat 3px;" value=""/>
                <label for = "obTime" style="margin-left: 80px;">Time</label>
                <input type="text" name="obTime" id="obTime" value=""/>
            	
            </div>
            
            <!-- time spent observing -->
            <div>
                <h5 style="margin-top: 20px; margin-left: 60px; color: #058CBF;" class="">For what length of time did you observe the whale?</h5>
                <table style="margin-left: 60px;">
                    <tr>
                    	<td>
                            <label for="<10">Less than 10 min</label>
                            <input type="radio"  align="ABSMIDLE" name="lentime" id="<10" value="<10" class="crirHiddenJS" checked="checked" />
                        </td>
                    	<td>
                            <label for="10-30">Around 30 min</label>
                            <input type="radio"  align="ABSMIDLE" name="lentime" id="10-30" value="10-30" class="crirHiddenJS" />
                        </td>
                    	<td>
                            <label for="30-60">Around 60 min</label>
                            <input type="radio"  align="ABSMIDLE" name="lentime" id="30-60" value="30-60" class="crirHiddenJS" />
                        </td>
                    	<td>
                            <label for=">60">More than 60 min</label>
                            <input type="radio"  align="ABSMIDLE" name="lentime" id=">60" value=">60" class="crirHiddenJS" />
                        </td>
                    </tr>
                </table>                
            </div>
            
            <!-- direction to whale -->
            <div>
                <h5 style="margin-top: 20px; margin-left: 60px; color: #058CBF;" class="">From your position, in what direction were the whales?</h5>
                <table style="margin-left: 60px;">
                    <tr>
                        <td>
                            <label for="south">South</label>
                            <input type="radio"  align="ABSMIDLE" name="direction" id="south" value="180" class="crirHiddenJS" checked="checked" />     
                        </td>
                        <td>
                            <label for="southwest">Southwest</label>
                            <input type="radio"  align="ABSMIDLE" name="direction" id="southwest" value="225" class="crirHiddenJS" />
                        </td>
                        <td>
                            <label for="west">West</label>
                            <input type="radio"  align="ABSMIDLE" name="direction" id="west" value="270" class="crirHiddenJS" />
                        </td>
                        <td>
                            <label for="northwest">Northwest</label>
                            <input type="radio"  align="ABSMIDLE" name="direction" id="northwest" value="315" class="crirHiddenJS" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="north">North</label>
                            <input type="radio"  align="ABSMIDLE" name="direction" id="north" value="0" class="crirHiddenJS" />
                        </td>
                        <td>
                            <label for="northeast">Northeast</label>
                            <input type="radio"  align="ABSMIDLE" name="direction" id="northeast" value="45" class="crirHiddenJS" />
                        </td>
                        <td>
                            <label for="east">East</label>
                            <input type="radio"  align="ABSMIDLE" name="direction" id="east" value="90" class="crirHiddenJS" />
                        </td>
                        <td>
                            <label for="southeast">Southeast</label>
                            <input type="radio"  align="ABSMIDLE" name="direction" id="southeast" value="135" class="crirHiddenJS" />
                        </td>
                    </tr>
                 </table>
            </div>
            
            <!-- distance to whale -->
            <div>
                <h5 style="margin-top: 20px; margin-left: 60px; color: #058CBF;" class="">From your position, approximately how far away were the whales?</h5>
                <table style="margin-left: 60px;">
                    <tr>
                        <td>
                            <label for="vclose">Very close, up to 500mts</label>
                            <input type="radio"  align="ABSMIDLE" name="distance" id="vclose" value="500" class="crirHiddenJS" />
                        </td>
                        <td>
                            <label for="close">Close (500m - 2km)</label>
                            <input type="radio"  align="ABSMIDLE" name="distance" id="close" value="1500" class="crirHiddenJS" />
                        </td>
                        <td>
                            <label for="far">Far off, over 2km</label>
                            <input type="radio"  align="ABSMIDLE" name="distance" id="far" value="3000" class="crirHiddenJS" checked="checked"/>
                        </td>
                    </tr>
                </table>
            </div>
            
            <!-- sight cues -->
            <div>
            	<h5 style="margin-top: 20px; margin-left: 60px; color: #058CBF;" class="">Were there any visual cues to alert you about the presence of a blue whale?</h5>
                <table style="margin-left: 60px;">
                    <tr>
                        <td>
                            <label for="blowspout">Blow/Spout</label>
                            <input type="checkbox" name="sight_cue[]" id="blowspout" class="crirHiddenJS" checked="checked" value="blow/spout" />
                        </td>
                        <td>
                            <label for="splash">Splash</label>
                            <input type="checkbox" name="sight_cue[]" id="splash" class="crirHiddenJS" value="splash" />
                        </td>
                        <td>
                            <label for="bodyofwhale">Body of whale</label>
                            <input type="checkbox" name="sight_cue[]" id="bodyofwhale"  value="body of whale" class="crirHiddenJS"/>
                        </td>
                        <td>
                            <label for="sidefin">Side fin</label>
                            <input type="checkbox" name="sight_cue[]" id="sidefin" class="crirHiddenJS" value="side fin"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="taildive">Tail/Dive</label>
                            <input type="checkbox" name="sight_cue[]" id="taildive" class="crirHiddenJS" value="tail dive"/>
                        </td>
                        <td>
                            <label for="colour">Colour underwater</label>
                            <input type="checkbox" name="sight_cue[]" id="colour" class="crirHiddenJS" value="colour underwater"/>
                        </td>
                        <td>
                            <label for="wildlife">Associated wildlife</label>
                            <input type="checkbox" name="sight_cue[]" id="wildlife" class="crirHiddenJS" value="associated wildlife"/>
                        </td>
                        <td>
                            <label for="othersight">Other</label>
                            <input type="checkbox" name="sight_cue[]" id="othersight" class="crirHiddenJS" value="other" />
                        </td>
                    </tr>
                </table>
            </div>
            
            <!-- number whales seen -->
            <div>
            	<label for="numWhale"><h5 style="margin-top: 20px; margin-left: 60px; color: #058CBF;" >How many whales did you see? <input type="text" name="numWhale" id="numWhale" value=""/></h5></label>
            </div>
                      
            <!-- confidence in observation -->
            <div>
                <h5 style="margin-top: 20px; margin-left: 60px; color: #058CBF;" class="">How confident are you that it was a blue whale?</h5>
                <table style="margin-left: 60px;">
                    <tr>
                        <td>
                            <label for="confident">Very confident</label>
                            <input type="radio"  align="ABSMIDLE" name="confidence" id="confident" value="confident" class="crirHiddenJS" checked="checked" />
                        </td>
                        <td>
                            <label for="probable">Reasonably Confident</label>
                            <input type="radio"  align="ABSMIDLE" name="confidence" id="probable" value="probable" class="crirHiddenJS" />
                        </td>
                        <td>
                            <label for="guess">Not at all confident</label>
                            <input type="radio"  align="ABSMIDLE" name="confidence" id="guess" value="value" class="crirHiddenJS" />
                        </td>
                    </tr>
                </table>
            </div>
            
            <!-- whale behaviour -->
            <div>
            	<h5 style="margin-top: 20px; margin-left: 60px; color: #058CBF;" class="">What were the whales doing?</h5>
                <table style="margin-left: 60px;">
                    <tr>
                        <td>
                            <label for="travelling"><a class="basic" href="<?=base_url(); ?>cluetip/tooltips/travel.php" rel="<?=base_url(); ?>cluetip/tooltips/travel.php" title="Whale Behaviour">Travelling</a></label>
                            <input type="checkbox" name="behaviour[]" id="travelling" class="crirHiddenJS" checked="checked" value="travelling" />
                        </td>
                        <td>
                            <label for="feeding"><a class="basic" href="<?=base_url(); ?>cluetip/tooltips/feed.php" rel="<?=base_url(); ?>cluetip/tooltips/feed.php" title="Whale Behaviour">Feeding</a></label>
                            <input type="checkbox" name="behaviour[]" id="feeding" class="crirHiddenJS" value="feeding" />
                        </td>
                        <td>
                            <label for="diving"><a class="basic" href="<?=base_url(); ?>cluetip/tooltips/dive.php" rel="<?=base_url(); ?>cluetip/tooltips/dive.php" title="Whale Behaviour">Diving</a></label>
                            <input type="checkbox" name="behaviour[]" id="diving"  value="diving" class="crirHiddenJS"/>
                        </td>
                        <td>
                            <label for="resting"><a class="basic" href="<?=base_url(); ?>cluetip/tooltips/rest.php" rel="<?=base_url(); ?>cluetip/tooltips/rest.php" title="Whale Behaviour">Resting</a></label>
                            <input type="checkbox" name="behaviour[]" id="resting" class="crirHiddenJS" value="resting"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="foraging"><a class="basic" href="<?=base_url(); ?>cluetip/tooltips/forage.php" rel="<?=base_url(); ?>cluetip/tooltips/forage.php" title="Whale Behaviour">Foraging/Milling</a></label>
                            <input type="checkbox" name="behaviour[]" id="foraging" class="crirHiddenJS" value="foraging/milling"/>
                        <td>
                            <label for="racing"><a class="basic" href="<?=base_url(); ?>cluetip/tooltips/racing.php" rel="<?=base_url(); ?>cluetip/tooltips/racing.php" title="Whale Behaviour">Racing</a></label>
                            <input type="checkbox" name="behaviour[]" id="racing" class="crirHiddenJS" value="foraging/milling"/>
                        </td>
                        <td>
                            <label for="otherbeh"><a class="basic" href="<?=base_url(); ?>cluetip/tooltips/other.php" rel="<?=base_url(); ?>cluetip/tooltips/other.php" title="Whale Behaviour">Other</a></label>
                            <input type="checkbox" name="behaviour[]" id="otherbeh" class="crirHiddenJS" value="other"/>
                        </td>
                    </tr>
                </table>
            </div>
            
            <!-- other wildlife -->
            
            <!-- weather conditions -->
            <div>
            	<h5 style="margin-top: 20px; margin-left: 60px; color: #058CBF;" class="">What was the weather like at the time?</h5>
                <table style="margin-left: 60px;">
                    <tr>
                        <td>
                            <label for="calm">Calm</label>
                            <input type="radio"  align="ABSMIDLE" name="weather" id="calm" value="calm" class="crirHiddenJS" checked="checked"/>
                        </td>
                        <td>
                            <label for="lightwind">Light Wind</label>
                            <input type="radio"  align="ABSMIDLE" name="weather" id="lightwind" value="light wind" class="crirHiddenJS" />
                        </td>
                        <td>
                            <label for="moderatewind">Moderate Wind</label>
                            <input type="radio"  align="ABSMIDLE" name="weather" id="moderatewind" value="moderate wind" class="crirHiddenJS" />
                        </td>
                        <td>
                            <label for="strongwind">Strong Wind</label>
                            <input type="radio"  align="ABSMIDLE" name="weather" id="strongwind" value="strong wind" class="crirHiddenJS" />
                        </td>
                    </tr>
                </table>
            </div>
 
            <!-- other comments -->
            <div>
                <h5 style="margin-top: 20px; margin-left: 60px; color: #058CBF;" class="">We are interested in any other observations of the whale's behaviour.  You can provide a brief description of their behaviour here.</h5>
                <textarea style="margin-left: 60px;" id="behaviourDesc" cols="5" rows="5"  class="styled">        Comments:</textarea>
            </div>
            <input type="hidden" name="latObserver" id="latObserver" value="latObserver"/>
            <input type="hidden" name="longObserver" id="longObserver" value="longObserver"/>
            <?php
                $new_incidentalId = $incidentalId['incidentalId']   + 1;      
            ?>
           <input type="hidden" name="new_sightId" id="new_sightId" value="<?php echo $new_incidentalId; ?>"/>
           <input type="submit" value="Add your sighting"/>
 </form>
</div>
</body>
</html>