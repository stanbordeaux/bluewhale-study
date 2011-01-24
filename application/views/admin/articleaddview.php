<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Add Article to Database</</title>

	<?php echo form_open('article/insertemp');  ?>
<!--<form action="http://localhost/CI2/index.php/article/insertemp" method="post">-->
<?//or using form helper //=form_open('blog/insertentry');?>

<h1> Adding Article to Website </h1>

<p>Author:
<input type='text' name='author'></p>

<p>ArticleName:
<input type='text' name='articlename'></p>

<p>Topic:
<input type='text' name='topic'></p>

<p>ArticleContent:
<input type='text' name='articlecontent'></p>

<p>Date:
<input type='text' name='date'></p>


<p><input type='submit' value='Submit'></p>

<?php echo form_close(); ?>
    

</body>
</html>
