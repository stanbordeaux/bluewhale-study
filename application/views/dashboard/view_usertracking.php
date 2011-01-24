<div class="post_body">
    <div class="post">
		<div class="post_body">
        <div class="post_title">
			<h1>View User Statistics</h1>
		</div>
			<p>Here you can view reports about users</p>
				
				<?php if($this->session->flashdata('message')): ?>
				<div class="message">
					<?php echo $this->session->flashdata('message'); ?>
				</div>
				<?php endif; ?>
				
				<table class="admin">
				<tr>
					<th class="admin"><?php echo "ID"; ?></th>
					<th class="admin"><?php echo "User Identifier"; ?></th>
					<th class="admin"><?php echo "Requested Page"; ?></th>
					<th class="admin"><?php echo "Date Requested"; ?></th>
					<th class="admin"><?php echo "Client IP"; ?></th>
					<th class="admin"><?php echo "Browser Type"; ?></th>
                    <th class="admin"><?php echo "Referrer"; ?></th>
				</tr>
				<?php if ($userstracked): ?>
					<?php foreach ($userstracked as $tracked): ?>
					<tr>
                    
                        <td class="admin"><?php echo $tracked['id']; ?></td>
						<td class="admin"><?php echo $tracked['user_identifier']; ?></td>
						<td class="admin"><?php echo $tracked['request_uri']; ?></td>
                        <td class="admin"><?php echo date('d-m-Y', strtotime($tracked['timestamp'])); ?></td>
                        <td class="admin"><?php echo $tracked['client_ip']; ?></td>
                        <td class="admin"><?php echo $tracked['client_user_agent']; ?></td>
                        <td class="admin"><?php echo $tracked['referer_page']; ?></td>
					</tr>
					<?php endforeach; ?>
				<?php else: ?>
					<tr>
					<td colspan="4"><?php echo "No Records"; ?></td>
					</tr>
				<?php endif; ?>
				</table>
                <?php echo $this->pagination->create_links(); ?>
				<br />
		</div>
</div>
</div>
