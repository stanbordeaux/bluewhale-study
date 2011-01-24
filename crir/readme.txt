=========================================================================================
Implementation Instructions 
=========================================================================================

1. Using CRIR is fairly simple and you should be able to get it up and running in a couple 
minutes. You will need to include the crir.js javascript file and the crir.css stylesheet 
in the head of your page. To do so place these lines of code somewhere between the <head> 
and </head> tags

example:
-----------------------
<link href="crir/crir.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" type="text/javascript" src="crir/crir.js"></script>
-----------------------
			
You will need to change the path to the files according to your particular setup.

		
2. You then need to specify which Checkboxes and Radio Buttons you would like to replace. 
Add class="crirHiddenJS" to the input tag for the element you want to replace.

example:
-----------------------
<input name="turtleDoves" id="checkbox1" type="checkbox" value="true" class="crirHiddenJS" />
-----------------------
	
			
3. Your input will also need a label tag. The Label tag is the standard way of... well... 
labelling a field!. To add a label tag you simply need to add the label tag before the 
input element.

example:
-----------------------			
<label for="checkbox1">Turtle Doves</label>
<input name="turtleDoves" id="checkbox1" type="checkbox" value="true" class="crirHiddenJS" />
-----------------------	
			
Note: the "for" attribute needs to be specified in the label tag. This tells the browser which
input element the label is for. Simply set the "for" attribute of the label equal to the 
value of the "id" attribute of the input element.


4. That's all there is to it. Now all you have to do is modify the CSS stylesheet file 
crir.css to meet your needs. The CSS gets applied to the Label tag for each of the hidden 
input elements. The class names used are:
			
			
	checkbox_checked
	checkbox_unchecked
	radio_checked
	radio_unchecked
			
			
Take a look at the the CSS I've created to get started creating your own.