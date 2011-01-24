
<?php 

echo form_open('users/register');
echo form_label('Username: ', 'username');
echo form_input('username', '');

echo form_label('Email: ', 'email');
echo form_input('email', '');

echo form_label('Password: ', 'password');
echo form_password('password', '');
//echo form_label('Confirm password: ', 'confirm_pass');
//echo form_password('confirm_pass', '');
echo form_submit('submit', 'Send!');
echo form_close();
?>