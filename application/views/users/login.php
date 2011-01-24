<style type="text/css">
    .sendit {     
        display: block;     
        float: left;     
        top: 118px;     
        left: 10px;     
        width: 115px;     
        height: 34px;     
        border: 0;     
        cursor: pointer;    
        background: url(<?=base_url(); ?>crir/crir/but_submit_sml.gif) no-repeat 0 0;     
        text-indent: -9999px;     
        margin: 20px 0; 
    }
    
</style>    

<div class="blue_sq_bg">

<?php
echo $this->session->flashdata('login');
?>
<h1>Login</h1>
<?php echo validation_errors(); 

echo form_open('user/login');
?>
<div><label for="username">Username: </label></div>
<div><input type="text" name="username" id="username" value=""/></div>
<div><label for="password">Password: </label></div>
<div><input type="password" name="password" id="password" value=""/></div>
<div style="margin-left: 60px;"><input class="sendit" type="submit" value=""/>
</div>