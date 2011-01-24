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
			<h1><?php echo lang('edit_post'); ?></h1>
		</div>
		<div class="post_body">
			<p><?php echo lang('edit_post_description'); ?></p>
			
			<?php if (validation_errors()): ?>
				<div class="error">
				<?php echo validation_errors(); ?>
				</div>
			<?php endif; ?>
			<?php echo $posts['id']. 'id<br />'; ?>
				<table width="100%">
				<tr>
					 <td colspan="2">
					 	<fieldset id="edit">
					 		<legend>News</legend>
					 		<table>
					 			<tr>
					 				<?php echo form_open('news/update_news'); ?>
					 				<td width="150px">Title</td>
					 				<td><?php echo form_input(array('name' => 'title', 'id' => 'title', 'class' => 'styled', 'size' => '60', 'value' => $posts['title'])); ?></td>
					 			</tr>
					 			<tr>
					 				<td width="150px" valign="top">Excerpt</td>
					 				<td><?php echo form_textarea(array('name' => 'excerpt', 'id' => 'excerpt', 'rows' => '10', 'cols' => '100', 'value' => $posts['excerpt'])); ?></td>
					 			</tr>
					 			<tr>
					 				<td width="150px" valign="top">Content</td>
					 				<td><?php echo form_textarea(array('name' => 'content', 'id' => 'content', 'rows' => '20', 'cols' => '100', 'value' => $posts['content'])); ?></td>
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
					 				<td><input type="text" name="date_posted" value="" id="date_posted" class="styled date_current" size="30"  /> <a title="Publish date|You can set the publish date here.<br /><br />

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
					<td colspan="2">
						<?php echo form_hidden('id', $posts['id']) ?>
						<input type="submit" name="submit" value="Update News" class="styled" />
						<?php echo form_close(); ?>
					</td>
				</tr>
				</table>
		</div>
</div>