<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <title>JQuery Geogoer VChecks Plugin</title>
        <link rel="stylesheet" type="text/css" href="<?=base_url();?>vchecks/css/geogoer.vchecks.css" />
		<script type="text/javascript" src="<?=base_url();?>vchecks/latest-jquery.js"></script>
		<script type="text/javascript" src="<?=base_url();?>vchecks/jquery.vchecks.js"></script>
		<style type="text/css">
			body{
				color: black;
				font-family: arial, verdana;
				font-size:12px;
			}
			.text{
				color: #777777;
			}
			.code{
				background-color: #F2F2F2;
				border: 1px solid #AAAAAA;
				display: block;
				padding: 10px 10px 10px 10px;
			}
			a{
				color: #0075ce;
			}
		</style>
	<head>
	<body>
		<script type="text/javascript">
			$(function(){
				$("#custom_list").vchecks();
			});
		</script>
		<h1>JQuery Geogoer VChecks Plugin</h1>
		<h3>How it works?</h3>
		<font class="text">Well, having simple list:</font>
		<pre class="code">
&lt;ul id="custom_list" style="width: 300px"&gt;
	&lt;li&gt;&lt;input name="first" type="checkbox"&gt;&lt;span&gt;First checkbox&lt;/span&gt;&lt;/li&gt;
	&lt;li&gt;&lt;input name="second" type="checkbox" checked&gt;&lt;span&gt;Simple checkbox is checked&lt;/span&gt;&lt;/li&gt;
	&lt;li&gt;&lt;input name="third" type="checkbox"&gt;&lt;span&gt;Another simple&lt;/span&gt;&lt;/li&gt;
	&lt;li&gt;&lt;input name="last" type="checkbox" checked&gt;&lt;span&gt;Last checkbox is checked&lt;/span&gt;&lt;/li&gt;
&lt;/ul&gt;</pre>
		<font class="text">Just add simple javascript:</font>
		<pre class="code">
$(function(){
	$("#custom_list").vchecks();
});</pre>
		<font class="text">And here is a result:</font>
		<br>
		<br>
		<ul id="custom_list" style="width: 300px;">
			<li><input type="checkbox"><span>First checkbox</span></li>
			<li><input type="checkbox" checked><span>Simple checkbox is checked</span></li>
			<li><input type="checkbox"><span>Another simple</span></li>
			<li><input type="checkbox" checked><span>Last checkbox is checked</span></li>
		</ul>
		
		<h3>Source files:</h3>
		<a href="jquery.vchecks.js">jquery.vchecks.js</a> - js plugin file<br>
		<a href="css/geogoer.vchecks.css">geogoer.vchecks.css</a> - css source<br>
		<a href="images.zip">images.zip</a> - images zip file<br>
		or
		<a href="geogoer vChecks">geogoer_vchecks.zip</a> - download plugin pack<br>
	</body>
</html>