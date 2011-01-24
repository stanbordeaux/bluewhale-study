    <!-- Here are the css files for the jQuery apps.  Keep these with the js files for easy porting and file management -->
    
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>includes/jquery-ui-1.7.2.custom.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>includes/superfish.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>includes/superfish-navbar.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>includes/ui.tabs.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>includes/ui.datepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>includes/jquery.asmselect.css" />
    
    <!-- If we need it here is the direct link to google js libraries -->
     <script type="text/javascript">https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js</script>
     <script type="text/javascript">https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js</script>

    <script type="text/javascript" src="<?=base_url();?>includes/ui.core.js"></script>
    
    <!-- This for the multiple select on forms -->
    <script type="text/javascript" src="<?=base_url();?>includes/jquery.asmselect.js"></script>
    <script type="text/javascript" src="<?=base_url();?>includes/ui.datepicker.js"></script>
    
    

    <!-- This is superfish for top nav -->
    <script type="text/javascript" src="<?=base_url();?>includes/hoverIntent.js"></script>
	<script type="text/javascript" src="<?=base_url();?>includes/superfish.js"></script>
    <script type="text/javascript" src="<?=base_url();?>includes/supersubs.js"></script>
    <script type="text/javascript" src="<?=base_url();?>includes/jquery.form.js"></script>  
    <script type="text/javascript" src="<?=base_url();?>includes/ui.tabs.js"></script>
    
<link href="<?=base_url();?>crir/crir/crir.css" rel="stylesheet" type="text/css" /> 

    <link rel="stylesheet" href="<?=base_url(); ?>cluetip/jquery.cluetip.css" type="text/css" />
   <script language="JavaScript" type="text/javascript" src="<?=base_url();?>crir/crir/crir.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>
  <script src="<?=base_url(); ?>cluetip/lib/jquery.hoverIntent.js" type="text/javascript"></script>
  <script src="<?=base_url(); ?>cluetip/lib/jquery.bgiframe.min.js" type="text/javascript"></script>
  <script src="<?=base_url(); ?>cluetip/jquery.cluetip.js" type="text/javascript"></script>
  <script src="<?=base_url(); ?>cluetip/demo/demo.js" type="text/javascript"></script>
    
    <!-- script for jqtransform -->
    <script type="text/javascript">
/*
        $(document).ready(function()
        { 
        $("ul.sf-menu").supersubs({ 
            minWidth:    10,   // minimum width of sub-menus in em units 
            maxWidth:    10,   // maximum width of sub-menus in em units 
            extraWidth:  1     // extra width can ensure lines don't sometimes turn over 
                               // due to slight rounding differences and font-family 
        }).superfish({
            delay:       1000,                            // one second delay on mouseout 
            animation:   {opacity:'show',height:'show'}  // fade-in and slide-down animation 
        });  
        }); 
 

      
		$(document).ready(function()
		{
			$('form#submit').click(function()
			{
				var reportType = $('input[name=reportType]:checked').val();
				var obDate = $('#obDate').val();
				var direction = $('#direction').val();
                var distance = $('#distance').val();
                var numWhales = $('#numWhales').val();
                var sightCue = $('#sightCue').val();
                var idCue = $('#idCue').val();
                var confidence = $('#confidence').val();
                var distance = $('#distance').val();
                var lenTime = $('#lenTime').val();
                var weather = $('#weather').val();
                var comments = $('#comments').val();
                var latObserver = $('#latObserver').val();
                var longObserver = $('#longObserver').val();
                
				$.post( '<?=base_url();?>index.php/sightings/add_sighting', {
					reportType: $('input[name=reportType]:checked').val(),
					obDate: $('#obDate').val(),
					direction: $('#direction').val(),
                    distance: distance,
                    numWhales: numWhales,
                    sightCue: sightCue,
                    idCue: idCue,
                    confidence: confidence,
                    distance: distance,
                    lenTime: lenTime,
                    weather: weather,
                    comments: comments,
                    latObserver: latObserver,
                    longObserver: longObserver
				}, function()
				{
		      		alert('data loaded');
				});
				return false;
			});
			
		});	
  */    
        $(document).ready(function()
        {
                $("select[multiple]").asmSelect({
                         animate: true,
                        addItemTarget: 'top'
                });
        });
        

  $(function() {
		$("#tabs").tabs();
	});

      
	
	</script> 
   <script type="text/javascript">
	$(function() {
		$("#datepicker").datepicker();
	});
	</script>
 
