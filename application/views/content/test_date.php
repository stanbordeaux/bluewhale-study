<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>includes/jquery-ui-1.7.2.custom.css" />
    
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>includes/demos.css" />
    <script src="http://www.google.com/jsapi"></script>
    
    <script type="text/javascript" src="<?=base_url();?>includes/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>includes/jquery-ui-1.7.2.custom.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>includes/ui.core.js"></script>
    <script type="text/javascript" src="<?=base_url();?>includes/ui.datepicker.js"></script>
    
    
      <script type="text/javascript">
 
  $(document).ready(function(){
    $("#datepicker").datepicker();
  });

  </script>


    <script type="text/javascript">
  
          $(document).ready(function()
        {
        $("a").click(function()
        {
            alert('hello shithead');
        });
		});
    
   </script>	
</head>
<body>
<div class="demo"> 
<a href="">Press Me</a>
<p>Date: <input type="text" id="datepicker" class="datepicker" style="z-index: 100;"/></p> 
 
</div><!-- End demo --> 
 
<div class="demo-description"> 
 
<p>The datepicker is tied to a standard form input field.  Focus on the input (click, or use the tab key) to open an interactive calendar in a small overlay.  Choose a date, click elsewhere on the page (blur the input), or hit the Esc key to close. If a date is chosen, feedback is shown as the input's value.</p> 
 
</div><!-- End demo-description --> 

<div id="accordion">
    <a href="#">First header</a>
    <div>First content</div>
    <a href="#">Second header</a>
    <div>Second content</div>
</div>
</body>
</html>
