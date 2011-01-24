<div class="post">
    <div class="post_title">
        <h1>Your profile</h1>
    </div>
    
    <div class="post_body">
    <p>Here you can edit your profile.</p>
    <table width="100%">
        <tr>
            <td colspan="2">
		 	    <fieldset id="name">
                <legend>Name</legend>
	 		    <table>
                    <tr>
                        <form action="<?=base_url(); ?>/user/profile" method="post">
                        <td width="150px">Username</td>
                        <td><input name="username" id="username" type="text" value="<?=$this->session->userdata('username'); ?>" size="15" class="styled" disabled /> (username cannot be changed)</td>
                    </tr>
                </fieldset>
			 </td>
        </tr>
        <tr>
            <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2">
		 	<fieldset id="password">
	 		<legend>Password</legend>
	 		<table>
 			    <tr>
				    <td width="150px">Password</td>
                    <td><input name="password" id="password" type="password" size="15" class="styled" /></td>
                </tr>
                <tr>
                    <td width="150px">Retype password</td>
                    <td><input name="password_retype" id="password_retype" type="password" size="15" class="styled" /></td>
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
		 	<fieldset id="contact_info">
	 		<legend>Contat info</legend>
	 		<table>
 			    <tr>
				    <td width="150px">E-mail</td>
				    <td><input name="email" id="email" type="text" value="<?=$this->session->userdata('email'); ?>" size="25" class="styled" /></td>
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
            <input type="submit" name="submit" value="Edit &rsaquo;&rsaquo;" />
            </form>
            </td>
        </tr>
    </table>
   </table> 
</div>
</div>		
