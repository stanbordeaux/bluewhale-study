<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
<title>
	 
	Blue Whale Study - Administration panel</title>
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
		<div class="title"> <span class="sitename"> <a href="http://cit3.ldl.swin.edu.au/~vital/blueblog/index.php/admin/dashboard">Blue Whale Study</a></span>
<div class="slogan">Administration panel</div>	</div>
    </div>
    <div class="top">
    	 
   		Logged in as <a href="http://cit3.ldl.swin.edu.au/~vital/blueblog/user/view/pgill">pgill</a> (administrator) | <a href="http://cit3.ldl.swin.edu.au/~vital/bws/">View site</a> | <a href="http://cit3.ldl.swin.edu.au/~vital/blueblog/user/logout">Log out</a>    </div>
    <div class="main">
      <div class="content">
      	
		<!-- TinyMCE -->
		<script type="text/javascript" src="http://cit3.ldl.swin.edu.au/~vital/blueblog/application/views/admin/static/javascript/tiny_mce/tiny_mce.js"></script>
		<script type="text/javascript">
			tinyMCE.init({
				// General options
				mode : "textareas",
				theme : "advanced",
				plugins : "emotions, insertdatetime, media",
				relative_urls : false,
				remove_script_host : false,
				document_base_url : "http://cit3.ldl.swin.edu.au/~vital/blueblog/",
				theme_advanced_toolbar_location : "top",
				theme_advanced_toolbar_align : "left",
				theme_advanced_buttons1 : "bold, italic, underline, strikethrough, |, justifyleft, justifycenter, justifyright, justifyfull, |, formatselect, fontselect, fontsizeselect",
				theme_advanced_buttons2: "bullist, numlist, outdent, indent, blockquote, |, link, unlink, image, media, emotions, cleanup, code, |, insertdate, inserttime, |, undo, redo, removeformat",
				theme_advanced_buttons3 : ""	
			});
		</script>
		<!-- /TinyMCE -->
		<div class="post">
		<div class="post_title">
			<h1>Create a post</h1>
		</div>
		<div class="post_body">
			<p>Here you can create a new post.</p>
			
						
				<table width="100%">
				<tr>
					 <td colspan="2">
					 	<fieldset id="main">
					 		<legend>Main</legend>
					 		<table>
					 			<tr>
					 				<form action="<?=base_url(); ?>/index.php/posts/create" method="post">					 				<td width="150px">Title</td>
					 				<td><input type="text" name="title" value="" id="title" class="styled" size="50"  /></td>
					 			</tr>
					 			<tr>
					 				<td width="150px" valign="top">Excerpt</td>
					 				<td><textarea name="excerpt" cols="100" rows="10" id="excerpt" ></textarea></td>
					 			</tr>
					 			<tr>
					 				<td width="150px" valign="top">Content</td>
					 				<td><textarea name="content" cols="100" rows="20" id="content" ></textarea></td>
					 			</tr>
					 		</table>
					 	</fieldset>
					 </td>
				</tr>
				<tr>
					 <td colspan="2">&nbsp;</td>
				</tr>
				<tr>
					 <td colspan="2">
					 	<fieldset id="settings">
					 		<legend>Categories</legend>
					 		<table>
					 								 			<tr>
					 				<td width="150px"><input type="checkbox" name="categories[]" value="1" id="categories"  /> Uncategorized</td>
					 			</tr>
					 								 		</table>
					 	</fieldset>
					 </td>
				</tr>
				<tr>
					 <td colspan="2">&nbsp;</td>
				</tr>
				<tr>
					 <td colspan="2">
					 	<fieldset id="settings">
					 		<legend>Tags</legend>
					 		<table>
					 			<tr>
					 				<td width="150px" valign="top">Tags</td>
					 				<td><input type="text" name="tags" value="" id="tags" class="styled" size="30"  /> <a title="Post tags|Think of a tag as a simple category name. Tags make your posts more easy to find and recognize.<br /><br />

Tags must be seperated with commas, for example: <strong>blog</strong>, <strong>php</strong>, <strong>codeigniter</strong>" class="tip">[?]</a></td>
					 			</tr>
					 		</table>
					 	</fieldset>
					 </td>
				</tr>
				<tr>
					 <td colspan="2">&nbsp;</td>
				</tr>
				<tr>
					 <td colspan="2">
					 	<fieldset id="settings">
					 		<legend>Settings</legend>
					 		<table>
					 			<tr>
					 				<td width="150px" valign="top">Publish date</td>
					 				<td><input type="text" name="publish_date" value="" id="publish_date" class="styled date_current" size="30"  /> <a title="Publish date|You can set the publish date here.<br /><br />

If you set the date in the future, the post won't be visible until then." class="tip">[?]</a></td>
					 			</tr>
					 			<tr>
					 				<td width="150px" valign="top">Status</td>
					 				<td><select name="status">
<option value="published">Published</option>
<option value="draft">Draft</option>
</select> <a title="Post status|Your post can be in two different states:<br /><br />
<strong>Published</strong> - post is published and visible on the website<br />
<strong>Draft</strong> - post is saved as a draft and not visible on the website" class="tip">[?]</a></td>
					 			</tr>
					 			<tr>
					 				<td width="150px" valign="top">Allow comments</td>
					 				<td><input type="checkbox" name="allow_comments" value="1" checked="checked"  /> <a title="Allow comments|If you want to allow users to comment this post, leave this check box <strong>checked</strong>, else <strong>uncheck</strong> it." class="tip">[?]</a></td>
					 			</tr>
					 			<tr>
					 				<td width="150px" valign="top">Sticky</td>
					 				<td><input type="checkbox" name="sticky" value="1"  /> <a title="Sticky post|If you check this check box, your post will become a sticky. This means it will always be displayed first and a little icon will be shown next to the title." class="tip">[?]</a></td>
					 			</tr>
					 		</table>
					 	</fieldset>
					 </td>
				</tr>
				<tr>
					 <td colspan="2">&nbsp;</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" name="submit" value="Create &rsaquo;&rsaquo;" class="styled" />
						</form>					</td>
				</tr>
				</table>
		</div>
</div>      </div>
      <div class="navigation">
     	<h2>Administration</h2>
<ul>
	<li><a href="http://cit3.ldl.swin.edu.au/~vital/blueblog/index.php/admin/dashboard">Dashboard</a></li>
	<li><a href="http://cit3.ldl.swin.edu.au/~vital/blueblog/index.php/admin/settings">Settings</a></li>
	<li><a href="http://cit3.ldl.swin.edu.au/~vital/blueblog/index.php/admin/templates">Templates</a></li>
	<li><a href="http://cit3.ldl.swin.edu.au/~vital/blueblog/index.php/admin/sidebar">Sidebar</a></li>
	<li><a href="http://cit3.ldl.swin.edu.au/~vital/blueblog/index.php/admin/languages">Languages</a></li>
	<li><a href="http://cit3.ldl.swin.edu.au/~vital/blueblog/index.php/admin/feeds">Feeds</a></li>
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
