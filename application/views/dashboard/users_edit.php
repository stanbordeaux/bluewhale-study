<div class="post">
		<div class="post_title">
			<h1><?php echo lang('edit_user'); ?></h1>
		</div>
		<div class="post_body">
			<p><?php echo lang('edit_user_description'); ?></p>
			
			<?php if($this->session->flashdata('message')): ?>
				<div class="message">
					<?php echo $this->session->flashdata('message'); ?>
				</div>
			<?php endif; ?>
				
			<?php if (validation_errors()): ?>
				<div class="error">
				<?php echo validation_errors(); ?>
				</div>
			<?php endif; ?>

				<table width="100%">
				<tr>
					 <td colspan="2">
					 	<fieldset id="name">
					 		<legend><?php echo lang('form_name'); ?></legend>
					 		<table>
					 			<tr>
					 				<?php echo form_open('users/edit'); ?>
					 				<td width="200px"><?php echo lang('form_username'); ?></td>
					 				<td><?php echo form_input(array('name' => 'username', 'id' => 'username', 'size' => '15', 'class' => 'styled', 'value' => set_value('username', isset($user['username']) ? $user['username'] : '')), null, 'disabled'); ?> (<?php echo lang('form_username_cant_be_changed'); ?>)</td>
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
					 	<fieldset id="Group Id">
					 		<legend><?php echo lang('form_level'); ?></legend>
					 		<table>
					 			<tr>
					 				<td width="200px"><?php echo lang('form_level'); ?></td>
					 				<td><?php echo form_dropdown('group_id', array('101' => 'User', '1' => 'Administrator'), set_value('level', isset($user['level']) ? $user['level'] : '')); ?></td>
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
					 	<fieldset id="contact">
					 		<legend><?php echo lang('form_contact_info'); ?></legend>
					 		<table>
					 			<tr>
					 				<td width="200px"><?php echo lang('form_email'); ?></td>
					 				<td><?php echo form_input(array('name' => 'email', 'id' => 'email', 'size' => '25', 'class' => 'styled', 'value' => set_value('email', isset($user['email']) ? $user['email'] : ''))); ?></td>
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
						<?php echo form_hidden('id', $user['id']) ?>
						<input type="submit" name="submit" value="<?php echo lang('button_edit'); ?>" class="styled" />
						<?php echo form_close(); ?>
					</td>
				</tr>
				</table>
		</div>
</div>