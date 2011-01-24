  
    <?=$this->load->view('/templates/bws_map_js'); ?>
  
 <script type="text/javascript" src="<?=base_url();?>assets/development-bundle/jquery-1.4.4.js"></script>
<script type="text/javascript" src="<?=base_url(); ?>includes/jqueryslidemenu.js"></script>

	<script type="text/javascript" src="<?=base_url();?>assets/development-bundle/ui/jquery.ui.core.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/development-bundle/ui/jquery.ui.widget.js"></script>
	<script src="<?=base_url();?>assets/development-bundle/ui/jquery.ui.datepicker.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    
	<!--<link rel="stylesheet" href="<?=base_url();?>assets/development-bundle/demos/demos.css">-->
	<script type="text/javascript">
	$(function() {
		$( '#datepicker' ).datepicker();
	});
	</script>

	

<div>
   
        <div>
            <img src="<?=base_url(); ?>crir/crir/bws_step_2.gif" style="float: left;"/>
            <h1 style="margin-left: 60px;">Land based sighting</h1>
            <p style="margin-left: 60px;">Whale sightings are recorded by storing the estimated latitude and longitude of the whale based on the position of the observer, the direction of the whales relative to the observation point and the estimated distance of the whale from the observer at the time of the sighting.<br /><br />
                To record your sighting mark your location on the map below. Use the zoom tools to place the marker as accurately as posible. <a class="basic" href="<?=base_url(); ?>cluetip/tooltips/map_tips.php" rel="<?=base_url(); ?>cluetip/tooltips/map_tips.php" title="Map instructions">More instructions</a>.</p>
        </div>
            
        <div id="map_canvas" style="width: 500px; height: 300px; margin-top: 20px; margin-bottom: 20px; margin-left: 60px; border: solid #0080C0;"></div>
        
            <!-- date and time  -->    
            

                <img src="<?=base_url(); ?>crir/crir/bws_step_3.gif" style="float: left;"/>
                <h1 style="margin-left: 60px;">Complete the following form</h1>
                <form name="sighting_form"  id="sighting_form" action="<?=base_url(); ?>index.php/sightings/add_sighting" method="post">
            	<h5 style="margin-top: 20px; margin-left: 60px" >What was the date and time of the whale sighting?</h5>
            	<p>Date:
                
                <input type="text" id="datepicker"/>
                </p>
                <!--
<label for = "obTime" style="margin-left: 80px;">Time</label>
-->
                <input type="text" name="obTime" id="obTime" value=""/>        </div>
            <!-- time spent observing -->
            <div>
                <h5 style="margin-top: 20px; margin-left: 60px;" class="">For what length of time did you observe the whale?</h5>
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
                <h5 style="margin-top: 20px; margin-left: 60px;" class="">From your position, in what direction were the whales?</h5>
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
                <h5 style="margin-top: 20px; margin-left: 60px;" class="">From your position, approximately how far away were the whales?</h5>
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
            	<h5 style="margin-top: 20px; margin-left: 60px;" class="">Were there any visual cues to alert you about the presence of a blue whale?</h5>
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
            	<label for="numWhale"><h5 style="margin-top: 20px; margin-left: 60px;" >How many whales did you see? <input type="text" name="numWhale" id="numWhale" value=""/></h5></label>
            </div>
            
            <!-- other features observed -->
            <div>
            	<h5 style="margin-top: 20px; margin-left: 60px;" class="">What other identifying features did you see that led you to think you saw a blue whale?</h5>
                <table style="margin-left: 60px; width: 550px">
                    <td>
                        <label for="size">Size</label>
                        <input type="checkbox" name="id_cue[]" id="size" class="crirHiddenJS" checked="checked" value="size" />
                    </td>
                    <td>
                        <label for="bodycolour">Body colour</label>
                        <input type="checkbox" name="id_cue[]" id="bodycolour" class="crirHiddenJS" value="bodycolour" />
                    </td>
                    <td>
                        <label for="dorsalfin">Position of dorsal fin</label>
                        <input type="checkbox" name="id_cue[]" id="dorsalfin"  value="dorsalfin" class="crirHiddenJS"/>
                    </td>
                    <td>
                        <label for="blowshape">Blow shape or size</label>
                        <input type="checkbox" name="id_cue[]" id="blowshape" class="crirHiddenJS" value="blowshape"/>
                    </td>
                    <td>
                        <label for="othercue">Other</label>
                        <input type="checkbox" name="id_cue[]" id="othercue" class="crirHiddenJS" value="other"/>
                    </td>
                </table>
            </div>
            
            <!-- confidence in observation -->
            <div>
                <h5 style="margin-top: 20px; margin-left: 60px;" class="">How confident are you that it was a blue whale?</h5>
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
            	<h5 style="margin-top: 20px; margin-left: 60px;" class="">What were the whales doing?</h5>
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
            <div>
            	<h5 style="margin-top: 20px; margin-left: 60px;" class="">Was there any other wildlife or discoloured water seen in the vicinity?</h5>
                <table style="margin-left: 60px; width: 570px;">
                    <tr>
                        <td>
                            <label for="dolphins">Dolphins</label>
                            <input type="checkbox" name="oth_wild_feat[]" id="dolphins" class="crirHiddenJS" value="dolphins" checked="checked" />
                        </td>
                        <td>
                            <label for="seals">Seals</label>
                            <input type="checkbox" name="oth_wild_feat[]" id="seals" class="crirHiddenJS" value="seals" />
                        </td>
                        <td>
                            <label for="seabirds">Seabirds</label>
                            <input type="checkbox" name="oth_wild_feat[]" id="seabirds" class="crirHiddenJS" value="seabirds" />
                        </td>
                        <td>
                            <label for="krill">Krill swarms</label>
                            <input type="checkbox" name="oth_wild_feat[]" id="krill" class="crirHiddenJS" value="krill" />
                        </td>
                        <td>
                            <label for="fish">Other fish</label>
                            <input type="checkbox" name="oth_wild_feat[]" id="fish" class="crirHiddenJS" value="fish" />
                        </td>
                        <td>
                            <label for="none">None</label>
                            <input type="checkbox" name="oth_wild_feat[]" id="none" class="crirHiddenJS" value="none" />
                        </td>
                    </tr>
                </table>
            </div>
            
            <!-- weather conditions -->
            <div>
            	<h5 style="margin-top: 20px; margin-left: 60px;" class="">What was the weather like at the time?</h5>
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
            
            <!-- weather conditions using beaufort scale -->
            <div>
            	<h5 style="margin-top: 20px; margin-left: 60px;" class="">Now, using the Beaufort Scale, what was the sea state at the time of the sighting?</h5>
                <table style="margin-left: 60px;">
                    <tr>
                        <td>
                            <label for="bscalm"><a class="basic" href="<?=base_url(); ?>cluetip/tooltips/bs_calm.php" rel="<?=base_url(); ?>cluetip/tooltips/bs_calm.php" title="Beaufort Scale: Calm">Calm</a></label>
                            <input type="radio"  align="ABSMIDLE" name="sea_state" id="bscalm" value="calm" class="crirHiddenJS" checked="checked"/>
                        </td>
                        <td>
                            <label for="bslightair"><a class="basic" href="<?=base_url(); ?>cluetip/tooltips/bs_light.php" rel="<?=base_url(); ?>cluetip/tooltips/bs_light.php" title="Beaufort Scale: Light Air">Light air</a></label>
                            <input type="radio"  align="ABSMIDLE" name="sea_state" id="bslightair" value="light air" class="crirHiddenJS" />
                        </td>
                        <td>
                            <label for="bslightbreeze"><a class="basic" href="<?=base_url(); ?>cluetip/tooltips/bs_breeze.php" rel="<?=base_url(); ?>cluetip/tooltips/bs_breeze.php" title="Beaufort Scale: Light Breeze">Light breeze</a></label>
                            <input type="radio"  align="ABSMIDLE" name="sea_state" id="bslightbreeze" value="light air" class="crirHiddenJS" />
                        </td>
                        <td>
                            <label for="bsgentlebreeze"><a class="basic" href="<?=base_url(); ?>cluetip/tooltips/bs_gentle.php" rel="<?=base_url(); ?>cluetip/tooltips/bs_gentle.php" title="Beaufort Scale: Gentle breeze">Gentle breeze</a></label>
                            <input type="radio"  align="ABSMIDLE" name="sea_state" id="bsgentlebreeze" value="gentle breeze" class="crirHiddenJS" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="bsmoderatebreeze"><a class="basic" href="<?=base_url(); ?>cluetip/tooltips/bs_moderate.php" rel="<?=base_url(); ?>cluetip/tooltips/bs_moderate.php" title="Beaufort Scale: Moderate breeze">Moderate breeze</a></label>
                            <input type="radio"  align="ABSMIDLE" name="sea_state" id="bsmoderatebreeze" value="moderate breeze" class="crirHiddenJS" />
                        </td>
                        <td>
                            <label for="bsfreshbreeze"><a class="basic" href="<?=base_url(); ?>cluetip/tooltips/bs_fresh.php" rel="<?=base_url(); ?>cluetip/tooltips/bs_fresh.php" title="Beaufort Scale: Fresh breeze">Fresh breeze</a></label>
                            <input type="radio"  align="ABSMIDLE" name="sea_state" id="bsfreshbreeze" value="fresh breeze" class="crirHiddenJS" />
                        </td>
                        <td>
                            <label for="bsstrongbreeze"><a class="basic" href="<?=base_url(); ?>cluetip/tooltips/bs_strong.php" rel="<?=base_url(); ?>cluetip/tooltips/bs_strong.php" title="Beaufort Scale: Strong breeze">Strong breeze</a></label>
                            <input type="radio"  align="ABSMIDLE" name="sea_state" id="bsstrongbreeze" value="strong breeze" class="crirHiddenJS" />
                        </td>
                    </tr>
                </table>
            </div>
            
            <!-- what was the swell -->
            <div>
            	<h5 style="margin-top: 20px; margin-left: 60px;" class="">What was the sea swell at the time of the sighting?</h5>
                <table style="margin-left: 60px;">
                    <tr>
                        <td>
                            <label for="0m">0 mts</label>
                            <input type="radio"  align="ABSMIDLE" name="swell" id="0m" value="0" class="crirHiddenJS" checked="checked"/>
                        </td>
                        <td>
                            <label for="05m">0.5 mts</label>
                            <input type="radio"  align="ABSMIDLE" name="swell" id="05m" value="0.5" class="crirHiddenJS" />
                        </td> 
                        <td>
                            <label for="1m">1 mt</label>
                            <input type="radio"  align="ABSMIDLE" name="swell" id="1m" value="1" class="crirHiddenJS" />
                        </td>
                        <td>
                            <label for="15m">1.5 mts</label>
                            <input type="radio"  align="ABSMIDLE" name="swell" id="15m" value="1.5" class="crirHiddenJS" />
                        </td>
                        <td>
                            <label for="2m">2 mts</label>
                            <input type="radio"  align="ABSMIDLE" name="swell" id="2m" value="2" class="crirHiddenJS" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="25m">2.5 mts</label>
                            <input type="radio"  align="ABSMIDLE" name="swell" id="25m" value="2.5" class="crirHiddenJS" />
                        </td>
                        <td>
                            <label for="3m">3 mts</label>
                            <input type="radio"  align="ABSMIDLE" name="swell" id="3m" value="3" class="crirHiddenJS" />
                        </td>
                        <td>
                            <label for="35m">3.5 mts</label>
                            <input type="radio"  align="ABSMIDLE" name="swell" id="35m" value="3.5" class="crirHiddenJS" />
                        </td>
                        <td>
                            <label for="4m">4.5 mts</label>
                            <input type="radio"  align="ABSMIDLE" name="swell" id="4m" value="4" class="crirHiddenJS" />
                        </td>
                        <td>
                            <label for="5m">&gt;4mts</label>
                            <input type="radio"  align="ABSMIDLE" name="swell" id="5m" value="5" class="crirHiddenJS" />
                        <td>
                    </tr>
                </table>
            </div>
            
            <!-- other comments -->
            <div>
                <h5 style="margin-top: 20px; margin-left: 60px;" class="">We are interested in any other observations of the whale's behaviour.  You can provide a brief description of their behaviour here.</h5>
                <textarea style="margin-left: 60px;" id="behaviourDesc" cols="5" rows="5"  class="styled">        Comments:</textarea>
            </div>
           <div>
                <img src="<?=base_url(); ?>crir/crir/bws_step_4.gif" style="float: left;" />
                <h1 style="margin-left: 60px; margin-top: 20px;">Contact Details</h1>
                <p style="margin-left: 60px;">Please enter your email address here as we may need to contact you to clarify some information in your sighting report. We will not use your email address for any other purpose. <a href="#">Read our privacy statement</a></p>
                <label for="email" style="margin-left: 60px;">Your email</label>
                <input type="text"  align="ABSMIDLE" name="email" id="email" value="" class="" />
            </div>
            <div>
                <input type="hidden" name="latObserver" id="latObserver" value=""/>
                <input type="hidden" name="longObserver" id="longObserver" value=""/>
                <input type="hidden" name="reportType" id="reportType" value="land"/>
                <?php
                    $new_incidentalId = $incidentalId['incidentalId']   + 1;      
                ?>
                <input type="hidden" name="new_sightId" id="new_sightId" value="<?php echo $new_incidentalId; ?>"/>
                <div style="margin-left: 60px;"><input class="sendit" type="submit" value=""/></div>
            </div>
           </form>
  </body>
  </html>