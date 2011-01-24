<div class="post_body">
    <div class="post">
		<div class="post_body">
        <div class="post_title">
			<h1>Validate Sightings</h1>
		</div>
			<p>Here you can validate sightings</p>
				
				<?php if($this->session->flashdata('message')): ?>
				<div class="message">
					<?php echo $this->session->flashdata('message'); ?>
				</div>
				<?php endif; ?>
				
				<table class="admin">
				<tr>
					<th class="admin"><?php echo "Report Type"; ?></th>
					<th class="admin"><?php echo "Sighting Date"; ?></th>
					<th class="admin"><?php echo "Number Seen"; ?></th>
					<th class="admin"><?php echo "Latitude"; ?></th>
					<th class="admin"><?php echo "Longitude"; ?></th>
					<th class="admin"><?php echo "Validated"; ?></th>
                    <th class="admin"><?php echo "Actions"; ?></th>
				</tr>
				<?php if ($sightings): ?>
					<?php foreach ($sightings as $sighting): ?>
					<tr>
                        <td class="admin"><?php echo $sighting['reportType']; ?></td>
						<td class="admin"><?php echo date('Y-m-d', strtotime($sighting['obDate'])); ?></td>
						
						<td class="admin"><?php echo $sighting['numWhale']; ?></td>
						<td class="admin"><?php echo $sighting['latWhale']; ?></td>
                        <td class="admin"><?php echo $sighting['longWhale']; ?></td>
                        <td class="admin"><?php echo $sighting['validated']; ?></td>
						<td class="admin">
							<?php echo anchor('/sightings/edit_sighting/' . $sighting['incidentalId'], '<img src="' . base_url() . 'assets/static/images/icons/edit.png" title="' . lang('edit') . '" border="0">'); ?>
							<?php echo anchor('/sightings/drop_sighting/' . $sighting['incidentalId'], '<img src="' . base_url() . 'assets/static/images/icons/delete.png" title="' . lang('delete') . '" border="0">', array ('onClick' => "return confirm('" . lang('delete_confirmation') . "')")); ?>
                        </td>
					</tr>
					<?php endforeach; ?>
				<?php else: ?>
					<tr>
					<td colspan="4"><?php echo lang('no_users'); ?></td>
					</tr>
				<?php endif; ?>
				</table>
				<br />
		</div>
</div>
</div>
