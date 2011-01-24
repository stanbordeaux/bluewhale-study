<!-- This is the incidental sightings form -->

    <ul>
        <li><?php 
    echo form_open('sightings/add_sighting');
 ?>
           <!--this is radio-button selection for report type vessel-->
           <label>Did you see the whale(s) from a vessel or from land:</label>
        </li>     
        <li>
            <?php 
                //vessel
                $data = array('name' => 'reportType', 'id' => 'reportType', 'style' => 'margin-bottom: 10px;', 'value' => 'vessel', 'checked' => 'FALSE');
                echo "<label  for = 'reportType'  '>Vessel</label> " .form_radio($data);
                
                //land
                $data = array('name' => 'reportType', 'id' => 'reportType', 'value' => 'land', 'checked' => 'TRUE');
                echo "<label  for = 'reportType' style = 'margin-left: 100px; margin-bottom: 10px;'>Land</label> " .form_radio($data);
            ?>
        </li>
        <li>
               <label>What was the date &amp; time of the sighting:</label>
        </li>  
        <li>
            <label for = 'obDate'>Date &nbsp; <img src='"<?=base_url(); ?>"images/calendar.gif' width='16' height='15' /></label>
            <?php
                $data = array('name' => 'obDate', 'id' => 'obDate', 'class' => 'datepicker', 'style' => 'margin-bottom: 10px;');
                echo form_input($data);
            ?>   
                <label for='obTime' style='margin-left: 80px;'>Time </label>
            <?php
                $data = array('name' => 'obTime', 'id' => 'obTime', 'class' => '', 'style' => 'margin-bottom: 10px;');
                echo form_input($data);
            ?>
        </li>
        <li>
            <label for='direction'>Estimated direction to whales?</label>
        </li>
            <?php
                $data = array('name' => 'direction', 'id' => 'direction', 'style' => 'margin-bottom: 10px;');
                $options = array('180' => 'South',
                                 '225' => 'Southwest',
                                 '270' => 'West',
                                 '315' => 'Northwest',
                                 '0' => 'North',
                                 '45' => 'Northeast',
                                 '90' => 'East',
                                 '135' => 'Southeast'
                                   );
                echo form_dropdown('direction', $options, '180', $data);
                
            ?>
        </li>
        <li>
            <label>About how far out were the whales?</label>
        </li>
            <?php
                $data = array('name' => 'distance', 'id' => 'distance', 'style' => 'margin-bottom: 10px;');
                $options = array('500' => 'Very close (&lt; 500mts)',
                                 '1500' => 'Close (500mts - 2km)',
                                 '3000' => 'Far (&gt; 2km)'
                                  );
                echo form_dropdown('distance', $options, '3000', $data);
            ?>
        </li>
        <li>
            <label>How many whales did you see?</label>
        </li>
        <li>
            <?php   
                $data = array('name' => 'numWhale', 'id' => 'numWhale', 'style' => 'margin-bottom: 10px;');
                echo form_input($data);
            ?>
        </li>
        <li>
           <label>What did you see?</label>
        </li>
        <li>
            <?php
                $data = array('name' => 'sightCue[]', 'id' => 'sightCue', 'multiple' => 'multiple' 'style' => 'margin-bottom: 10px;', 'class' => 'asmselect');
                $options = array ('blow/Spout' => 'Blow/Spout'),
                                  'splash' => 'Splash',
                                  'body of whale' => 'Body of whale',
                                  'side fin' => 'Side fin',
                                  'tail/dive' => 'Tail/Dive',
                                  'colour underwater' => 'Colour underwater',
                                  'associated wildlife' => 'Associated wildlife',
                                  'other' => 'other'
                                  );
                echo form_dropdown('sightCue', $options, '', $data);
            ?>
        </li>
        <li>
            <p class="title">Why do you think it was a blue whale?: </p>
            <select multiple="multiple" name="featureCue[]" class="asmselect" size="1" title="Select any that match">
              	<option value="size">Size</option>
               	<option value="body colour">Body colour</option>
               	<option value="position of dorsal fin">Position of dorsal fin</option>
               	<option value="blow shape and size">Blow shape and size</option>
               	<option value="other">Other</option>
            </select><br />
        </li>
        <li>
            <p class="title">How confident are you that it was a blue whale:</p>
            <p class="title">Very Confident</label>&nbsp;&nbsp;<input type="radio" value="confident" align="ABSMIDLE" id="confidence" name="confidence" />
            <label style="margin-left: 30px;">Reasonably Confident</label>&nbsp;&nbsp;<input type="radio" value="probable" align="ABSMIDLE" id="confidence" name="confidence" />
            <label style="margin-left: 30px;">Not at all Confident</label>&nbsp;&nbsp;<input type="radio" value="guess" align="ABSMIDLE" id="confidence" name="confidence" /><br /><br />
        </li>        
        <li>
            <p class="title">How long did you observe the whale(s):</p>
            <p class="title">&lt;15min</label>&nbsp;&nbsp;<input type="radio" value="<10" align="ABSMIDLE" name="lenTime" />
            <label class="mylabel" style="margin-left: 30px;">15min - 30min</label>&nbsp;&nbsp;<input type="radio" value="10-30" align="ABSMIDLE" name="lenTime" />
            <label class="mylabel" style="margin-left: 30px;">30min - 60min</label>&nbsp;&nbsp;<input type="radio" value="30-60" align="ABSMIDLE" name="lenTime" />
            <label class="mylabel" style="margin-left: 30px;">&gt;1 hour</label>&nbsp;&nbsp;<input type="radio" value=">60" align="ABSMIDLE" name="lenTime" /><br /><br />         
        </li>
        <li>
            <p class="title">What were the whales doing:</p>
            <select style="width: 250px;" multiple="multiple" id="behaviour" name="behaviour[]" class="asmselect" size="1" title="Select any that match">
              	<option value="travelling">Travelling</option>
               	<option value="feeding">Feeding</option>
               	<option value="diving">Diving</option>
               	<option value="resting">Resting</option>
                <option value="foraging/milling">Foraging/Milling</option>
               	<option value="other">Other</option>
            </select><br />
        </li>
         <li>
            <p class="title">Please provide a brief description of their behaviour:</p>
            <textarea id="behaviourDesc" cols="5" rows="5">Feel free to add any comments about your observation or experience:</textarea>
        </li> 
        <li>
            <p class="title">Were there any other wildlife or discoloured water seen on the vicinity:</p>
            <select style="width: 250px;" multiple="multiple" id="othWildFeat" name="othWildFeat[]" class="asmselect" size="1" title="Select any that match">
              	<option value="dolphins">Dolphins</option>
               	<option value="seals">Seals</option>
               	<option value="seabirds">Seabirds</option>
               	<option value="krill swarms">Krill swarms</option>
                <option value="fish">Fish</option>
               	<option value="none">None</option>
            </select><br />
        
        </li>
        <li>
            <p class="title">What were the weather conditions like at time of observation:</p>
            <p class="title">Calm</label>&nbsp;&nbsp;<input type="radio" value="calm" align="ABSMIDLE" name="weather" />
            <label style="margin-left: 30px;">Light Wind</label>&nbsp;&nbsp;<input type="radio" value="light" align="ABSMIDLE" name="weather" />
            <label style="margin-left: 30px;">Moderate Wind</label>&nbsp;&nbsp;<input type="radio" value="moderate" align="ABSMIDLE" name="weather" />
            <label style="margin-left: 30px;">Strong Wind</label>&nbsp;&nbsp;<input type="radio" value="strong" align="ABSMIDLE" name="weather" /><br /><br />
        </li>
        <li>
             <p class="title">Using the Beaufort Scale what was the sea state at the time of observation::</p>
            <select style="width: 250px;" multiple="multiple" id="seaState" name="seaState" class="asmselect" size="1" title="Select any that match">
              	<option value="0">Calm</option>
               	<option value="1">Light air</option>
               	<option value="2">Light breeze</option>
               	<option value="3">Gentle breeze</option>
                <option value="4">Moderate breeze</option>
               	<option value="5">Fresh breeze</option>
                <option value="6">Strong breeze to hurricane</option>
            </select><br />
       
        </li>
        <li>
             <p class="title">What was the sea swell at the time of observation::</p>
            <select style="width: 250px;" multiple="multiple" id="swell" name="swell" class="asmselect" size="1" title="Select any that match">
              	<option value="0">0 metres</option>
                <option value="0.5">0.5 metres</option>
               	<option value="1">1 metres</option>
                <option value="1.5">1.5 metres</option>
               	<option value="2">2 metres</option>
                <option value="2.5">2.5 metres</option>
               	<option value="3">3 metres</option>
                <option value="3.5">3.5 metres</option>
                <option value="4">4 metres</option>
                <option value="5">&gt; 4 metres</option>
            </select><br />
       
        </li>              
        <li>
            <p class="title">Please provide any comments or observations regarding your observation:</p>
            <textarea name="comments" id="comments" cols="5" rows="5">Feel free to add any comments about your observation or experience:</textarea>
        </li> 
        <li>
            <input type="hidden" name="latObserver" id="latObserver" value="latObserver"/>
        </li> 
        <li>
            <input type="hidden" name="longObserver" id="longObserver" value="longObserver"/>
        </li> 
        <li>
        <li>
        <?php
                $new_incidentalId = $incidentalId['incidentalId']   + 1;      
        ?>
           id  <input type="hidden" name="new_sightId" id="new_sightId" value="<?php echo $new_incidentalId; ?>"/>
        </li> 
            <?php
                echo form_submit('submit', 'Add Sighting');
            ?>
        </li>
          
</ul>
<?php
    echo form_close();
?>
