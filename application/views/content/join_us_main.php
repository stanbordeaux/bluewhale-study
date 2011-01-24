<!-- Join Us content -->
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
    .resetit {     
        display: block;     
        float: left;     
        top: 118px;     
        left: 10px;     
        width: 115px;     
        height: 34px;     
        border: 0;     
        cursor: pointer;    
        background: url(<?=base_url(); ?>crir/crir/but_reset.gif) no-repeat 0 0;     
        text-indent: -9999px;     
        margin: 20px 0; 
    }
    </style> 
<div class="blue_sq_bg">
<h1>Join Us!</h1>
<p>Be part of the blue whale community, where you can keep in touch with the  
<?php echo anchor('sightings/sighting_archive','latest sightings')?> and 
research news.</p>
<p>You may wish to become involved in our Caring for Blue Whale Country monitoring program, searching for blue whales at Cape Nelson lighthouse this summer. Please <?php echo anchor('bws/contact','contact us')?> for details. 
</p>
<p>You may wish to support our research. Please go to the 
<?php echo anchor('bws/donations','donations')?> page. 
</p>
<p>To join, please enter the following information. Read our <?php echo anchor('bws/terms','privacy statement')?>.</p>

<?php 
$attributes = array('class' => 'jqtransform', 'id' => 'joinus');

form_open('register/insert_reg_record', $attributes);

?>
<div class="rowElem"  style="margin-left: 60px;"><label>username:</label></div>
<div class="rowElem"  style="margin-left: 60px;"><input type='text' name='user_name' /></div>
<div class="rowElem"  style="margin-left: 60px;"><label>email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></div>
<div  style="margin-left: 60px;"><input type='text' name='email' id="email" value=""/></div>
<div style="margin-left: 60px;"><input class="sendit" type="submit" value=""/><input class="resetit" type="reset" value=""/></div>
<?=form_close(); ?>
</div>