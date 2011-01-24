<!--Admin Sightings Validation-->


<h1>Validate Sightings</h1>


<?php
/*if ($this->session->flashdata('message'))
{
	echo "<div class='message'>" .$this->session->flashdata('message'). "</div>";
}
*/

echo '<table>';
echo '<tr align="left"> <th>ID</th><th>Date</th><th>Time</th><th>NearestLocn</th><th>Direction</th><th>Distance</th><th>NumWhale</th><th>OthWildFeat</th></tr>';

 foreach ($res as $row)
{
//	$row_class = empty($row_class)? "alt" : "";

//	echo '<tr class="' .$row_class. '" >';
	echo '<tr><td>' .$row->incidRN. '</td>';
	echo '<td>' .$row->obDate. '</td>';
	echo '<td>' .$row->obTime. '</td>';
	echo '<td>' .$row->nearestLocn. '</td>';
	echo '<td>' .$row->direction. '</td>';
	echo '<td>' .$row->distance. '</td>';
    echo '<td>' .$row->numWhale. '</td>';
    echo '<td>' .$row->othWildFeat. '</td>';
	echo '<td>' .anchor('sightings/inc_edit_sighting/' .$row->incidRN, 'Edit');
	echo " | ";
	echo anchor('sightings/delete_sighting/' .$row->incidRN, 'Delete');
	echo '</td></tr>';
}

echo '</table>';
?>
</div>