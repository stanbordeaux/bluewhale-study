<div class="post">
		<div class="post_title">
			<h1><?php echo lang('users'); ?></h1>
		</div>
		<div class="post_body">
			<p><?php echo lang('users_description'); ?></p>
				
				<?php if($this->session->flashdata('message')): ?>
				<div class="message">
					<?php echo $this->session->flashdata('message'); ?>
				</div>
				<?php endif; ?>
				
				<table class="admin">
				<tr>
					<th class="admin">Title</td>
					<th class="admin">Excerpt</td>
					<th class="admin">Date Posted</td>
					<th class="admin">Actions</td>
				</tr>
				<?php if ($posts): ?>
					<?php foreach ($posts as $post): ?>
					<tr>
						<td class="admin"><?php echo $post['title']; ?></td>
						<td class="admin"><?php echo $post['excerpt']; ?></td>
						<td class="admin"><?php echo date('d-m-Y', strtotime($post['date_posted'])); ?></td>
						<td class="admin">
						<?php echo anchor('news/edit_post/' . $post['id'], '<img src="' . base_url() . 'assets/static/images/icons/edit.png" title="' . lang('edit') . '" border="0">'); ?>
						<?php echo anchor('news/delete' . $post['id'], '<img src="' . base_url() . 'assets/static/images/icons/delete.png" title="' . lang('delete') . '" border="0">', array ('onClick' => "return confirm('" . lang('delete_confirmation') . "')")); ?></td>
					</tr>
					<?php endforeach; ?>
				<?php else: ?>
					<tr>
					<td colspan="4"><?php echo "No News"; ?></td>
					</tr>
				<?php endif; ?>
				</table>
				<br />
		</div>
</div>