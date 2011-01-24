<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
<title>Blue Whale Study - Administration panel</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="http://cit3.ldl.swin.edu.au/~vital/blueblog/application/views/admin/static/style/main.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="http://cit3.ldl.swin.edu.au/~vital/blueblog/application/views/admin/static/style/date_picker.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="http://cit3.ldl.swin.edu.au/~vital/blueblog/application/views/admin/static/style/tooltips.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="http://cit3.ldl.swin.edu.au/~vital/blueblog/application/views/admin/static/style/jquery.cluetip.css" media="screen"/>
<!--[if lt IE 7.]>
<script defer type="text/javascript" src="http://cit3.ldl.swin.edu.au/~vital/blueblog/application/views/admin/static/javascript/pngfix.js"></script>
<![endif]-->
<script type="text/javascript" src="http://cit3.ldl.swin.edu.au/~vital/blueblog/application/views/admin/static/javascript/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="http://cit3.ldl.swin.edu.au/~vital/blueblog/application/views/admin/static/javascript/date.js"></script>
<script type="text/javascript" src="http://cit3.ldl.swin.edu.au/~vital/blueblog/application/views/admin/static/javascript/jquery.datePicker.js"></script>

<script type="text/javascript" src="http://cit3.ldl.swin.edu.au/~vital/blueblog/application/views/admin/static/javascript/jquery.dimensions.js"></script>
<script type="text/javascript" src="http://cit3.ldl.swin.edu.au/~vital/blueblog/application/views/admin/static/javascript/jquery.cluetip.js"></script>
<script type="text/javascript" src="http://cit3.ldl.swin.edu.au/~vital/blueblog/application/views/admin/static/javascript/main.js"></script>
<script type="text/javascript" src="http://cit3.ldl.swin.edu.au/~vital/blueblog/application/views/admin/static/javascript/dates.js"></script>
<script type="text/javascript" src="http://cit3.ldl.swin.edu.au/~vital/blueblog/application/views/admin/static/javascript/tooltips.js"></script>
</head>
<body>
<div class="outer-container">
  <div class="inner-container">
    <div class="header">

		<div class="title"> <span class="sitename"> <a href="<?=base_url(); ?>/index.php/bws">Blue Whale Study</a></span>
<div class="slogan">Administration panel</div>	</div>
    </div>
    <div class="top">
    	 
   		Logged in as <?=$this->session->userdata('username');?> | <?=anchor('bws/index', 'View Site'); ?> | <?=anchor('user/logout', 'Log out'); ?></div>

    <div class="main">
      <div class="content">
      	<h1>Main Dashboard</h1>
		
	<table class="dashboard">
	  <tr>
	    <td><a href="http://cit3.ldl.swin.edu.au/~vital/blueblog/index.php/admin/settings"><img src="http://cit3.ldl.swin.edu.au/~vital/blueblog/application/views/admin/static/images/icons/settings.png" class="dashboard">Settings</a></td>

	   	<td><a href="<?=base_url(); ?>index.php/news/add_news"><img src="http://cit3.ldl.swin.edu.au/~vital/blueblog/application/views/admin/static/images/icons/posts.png" class="dashboard">Posts</td>
	  	<td><a href="http://cit3.ldl.swin.edu.au/~vital/blueblog/index.php/admin/users"><img src="http://cit3.ldl.swin.edu.au/~vital/blueblog/application/views/admin/static/images/icons/users.png" class="dashboard">Users</td>
    
	  	<td><a href="http://cit3.ldl.swin.edu.au/~vital/blueblog/index.php/admin/navigation"><img src="http://cit3.ldl.swin.edu.au/~vital/blueblog/application/views/admin/static/images/icons/navigation.png" class="dashboard">Navigation</td>
	 </tr>
    <tr>
	  	<td><a href="http://cit3.ldl.swin.edu.au/~vital/blueblog/index.php/admin/links"><img src="http://cit3.ldl.swin.edu.au/~vital/blueblog/application/views/admin/static/images/icons/links.png" class="dashboard">Links</td>
	  	<td><a href="http://cit3.ldl.swin.edu.au/~vital/blueblog/index.php/admin/backup"><img src="http://cit3.ldl.swin.edu.au/~vital/blueblog/application/views/admin/static/images/icons/database.png" class="dashboard">DB Backup</td>
	  	<td><a href="http://cit3.ldl.swin.edu.au/~vital/blueblog/index.php/admin/statistics"><img src="http://cit3.ldl.swin.edu.au/~vital/blueblog/application/views/admin/static/images/icons/statistics.png" class="dashboard">Statistics</td>
	  	<td><a href="http://cit3.ldl.swin.edu.au/~vital/blueblog/index.php/admin/information"><img src="http://cit3.ldl.swin.edu.au/~vital/blueblog/application/views/admin/static/images/icons/info.png" class="dashboard">Information</td>
    </tr>
	</table>      </div>
      <div class="navigation">
     	<h2>Administration</h2>
<ul>
	<li><a href="<?=base_url(); ?>index.php/user/admin_panel">Dashboard</a></li>
	<li><a href="http://cit3.ldl.swin.edu.au/~vital/blueblog/index.php/admin/settings">Settings</a></li>

	<li><a href="http://cit3.ldl.swin.edu.au/~vital/blueblog/index.php/admin/social_bookmarking">Bookmarking</a></li>
	<li><a href="http://cit3.ldl.swin.edu.au/~vital/blueblog/index.php/admin/backup">Database Backup</a></li>

</ul>
<h2>Posts</h2>
<ul>
	<li><a href="http://cit3.ldl.swin.edu.au/~vital/blueblog/index.php/admin/posts/create">New post</a></li>
	<li><a href="http://cit3.ldl.swin.edu.au/~vital/blueblog/index.php/admin/posts">Manage posts</a></li>
</ul>
<h2>Pages</h2>
<ul>
	<li><a href="http://cit3.ldl.swin.edu.au/~vital/blueblog/index.php/admin/pages/create">New page</a></li>

	<li><a href="http://cit3.ldl.swin.edu.au/~vital/blueblog/index.php/admin/pages">Manage pages</a></li>
</ul>
<h2>Navigation</h2>
<ul>
	<li><a href="http://cit3.ldl.swin.edu.au/~vital/blueblog/index.php/admin/navigation/create">New item</a></li>
	<li><a href="http://cit3.ldl.swin.edu.au/~vital/blueblog/index.php/admin/navigation">Manage navigation</a></li>
</ul>
<h2>Links</h2>
<ul>

	<li><a href="http://cit3.ldl.swin.edu.au/~vital/blueblog/index.php/admin/links/create">New link</a></li>
	<li><a href="http://cit3.ldl.swin.edu.au/~vital/blueblog/index.php/admin/links">Manage links</a></li>
</ul>
<h2>Categories</h2>
<ul>
	<li><a href="http://cit3.ldl.swin.edu.au/~vital/blueblog/index.php/admin/categories/create">New category</a></li>
	<li><a href="http://cit3.ldl.swin.edu.au/~vital/blueblog/index.php/admin/categories">Manage categories</a></li>
</ul>

<h2>Comments</h2>
<ul>
	<li><a href="http://cit3.ldl.swin.edu.au/~vital/blueblog/index.php/admin/comments">Manage comments</a></li>
</ul>
<h2>Users</h2>
<ul>
	<li><a href="http://cit3.ldl.swin.edu.au/~vital/blueblog/index.php/user/profile">My profile</a></li>
	<li><a href="http://cit3.ldl.swin.edu.au/~vital/blueblog/index.php/admin/users">Manage users</a></li>
</ul>      </div>

      <div class="clearer">&nbsp;</div>
    </div>
    <div class="footer">
    	 
    	Powered by <a href="http://www.open-blog.info" target="_blank">Open Blog</a> | Template by <a href="http://arcsin.se/" target="_blank">Arcsin</a>
<div class="clearer"></div>    </div>
  </div>

</div>
</body>
</html>
