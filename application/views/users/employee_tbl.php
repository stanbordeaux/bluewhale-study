<div>
<?php
//if returning from updating or inserting display message
if ($this->session->flashdata('message'))
{
	echo "<div class='message'>" .$this->session->flashdata('message'). "</div>";
}

echo '<table>';
echo '<tr align="left"><th>ID</th><th>Name</th><th>Last Name</th><th>Department</th><th>Actions</th></tr>';
foreach ($employees as $emp)
{
	$row_class = empty($row_class)? "alt" : "";

	echo("<tr class=\"$row_class\">
	<td>
		$emp->id
	</td>
	<td>
		$emp->fname
	</td>
	<td>
		$emp->lname
	</td>
	<td>
		$emp->dep
	</td>
	
	<td>" .anchor('employee/edit_employee/'. $emp->id, 'edit'). " | " .anchor('employee/delete_employee/'. $emp->id, 'delete'). "</td></tr>");
}
?>
</table>
</div>