      <div class="content">
      	
		<!-- TinyMCE -->
		<script type="text/javascript" src="<?=base_url(); ?>assets/static/javascript/tiny_mce/tiny_mce.js"></script>
		<script type="text/javascript">
			tinyMCE.init({
				// General options
				mode : "textareas",
				theme : "advanced",
				plugins : "emotions, insertdatetime, media",
				relative_urls : false,
				remove_script_host : false,
				document_base_url : "http://localhost/bws/",
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
			<h1>Add News</h1>
		</div>
		<div class="post_body">
			<p>Here you can add news items.</p>
			
						
				<table width="100%">
				<tr>
					 <td colspan="2">
					 	<fieldset id="main">
					 		<legend>Main</legend>
					 		<table>
					 			<tr>
					 				<form action="<?=base_url(); ?>index.php/news/new_post" method="post">					 				<td width="150px">Title</td>
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
