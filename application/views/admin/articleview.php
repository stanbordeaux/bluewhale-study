<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Add Article Form</title>


<table class='table'>

<tr>
<th>Author</th>
<th>ArticleName</th>
<th>Topic</th>
<th>ArticleContent</th>
<th>Date</th>
</tr>

<?php foreach($res as $row): ?>
    <tr>
    <td><?=$row->Author?></td>
    <td ><?=$row->ArticleName?></td>
    <td ><?=$row->Topic?></td>
    <td ><?=$row->ArticleContent?></td> 
	<td><?=$row->Date?></td>
    </tr>
<?php endforeach; ?>

</table>	
    <p><?=anchor('article/addarticle', 'Add Article');?>
      <?//if using url helper//=anchor('emps/addarticle','Add Article');?>
</p></td>

</body>
</html>
