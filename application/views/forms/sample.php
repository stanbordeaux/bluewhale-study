<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BIR - Boolean Input Replacement Sample</title>

<link href="<?=base_url();?>crir/crir/crir.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" type="text/javascript" src="<?=base_url();?>crir/crir/crir.js"></script>

</head>

<body>
	
	<h1>CRIR: Checkbox Radio Input Replacement</h1>
	
	<form action="" method="get">
	
		<h2>Checkboxes</h2>
		
		<label for="checkbox1">Normal (not replaced)</label>
			<input name="checkbox1" id="checkbox1" type="checkbox" value="true" />				
		
		<label for="checkbox2">This is the Label</label>
			<input name="checkbox2" id="checkbox2" type="checkbox" value="true" class="crirHiddenJS" />						
		
		<label for="checkbox3">This is the Label with a long name</label>
			<input name="checkbox3" id="checkbox3" type="checkbox" value="true" class="crirHiddenJS" checked="checked" />				
		
		<label for="checkbox4">This is the Label</label>
			<input name="checkbox4" id="checkbox4" type="checkbox" value="true" class="crirHiddenJS" />				
		
		<br />	

		<h2>Radio Buttons - <i>all in the same group</i></h2>		
		
		<label for="radio1">Normal (not replaced)</label>
			<input name="radio_group" id="radio1" type="radio" value="true" />
		
		<label for="radio2">This is the Label</label>
			<input name="radio_group" id="radio2" type="radio" value="true" class="crirHiddenJS" />					
		
		<label for="radio3">This is the Label with a long name</label>
			<input name="radio_group" id="radio3" type="radio" value="true" class="crirHiddenJS" checked="checked" />
		
		<label for="radio4">This is the Label</label>
			<input name="radio_group" id="radio4" type="radio" value="true" class="crirHiddenJS" />	
                        <p class="introduction">The Blue Whale Study is interested in hearing about your sightings, it helps us get a sense of where and when the whales are moving around their feeding grounds.</p>
            <div>
                <h5 style="margin-top: 20px;" class="">Did you see the whales while you were on a boat or on land?</h5>
                <label for="vessel">Vessel</label><input type="radio"  align="ABSMIDLE" name="reportType" id="reportType1" value="vessel" class="crirHiddenJS" checked="checked"/>
                <label for="land" style="margin-left: 80px;">Land</label><input type="radio"  align="ABSMIDLE" name="reportType" id="reportType2" value="land" class="crirHiddenJS"/>
            </div>
					
		
	</form>	

	<a href="http://www.chriserwin.com/scripts/crir/">Documentation</a>

</body>
</html>
