<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
<title>Blue Whale Study - Administration panel</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<?=$this->load->view('/dashboard/dashboard_header'); ?>
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
		
	<?=$this->load->view('/dashboard/dashboard_items'); ?>    
    </div>
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
