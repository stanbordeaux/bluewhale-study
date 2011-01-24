
<script>
    $(document).ready(function()
    {
        $('#submit').click(function()
        {
            var fname1 = $('#fname1').val();
            var lname1 = $('#lname1').val();
            var obLat = $('#latitude').val();
            var obLng = $('#longitude').val();
            $.post( 'index.php/mapapp/add_sighting', {
                fname: fname1,
				lname: lname1,
				obLat: obLat,
                obLng: obLng
				}, function()
				{
		      		alert('data loaded');
				});
				return false;
			});
			
		});	
		
</script>    
    <style type="text/css">