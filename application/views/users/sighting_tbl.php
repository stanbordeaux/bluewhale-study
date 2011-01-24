<div>
    <?php
        //if returning from updating or inserting display message
        if ($this->session->flashdata('login'))
        {
        	echo "<div class='message'>" .$this->session->flashdata('message'). "</div>";
        }
        
        echo "<table>";
        echo "<tr align='left'><th>ID</th><th>Sighting Type</th><th>Number Seen</th><th>Actions</th></tr>";
        
        foreach ($sighting as $key => $sight)
        {
            echo "<tr>";
            echo "<td>" .$sight['incidentalId']. "</td>";
            echo "<td>" .$sight['reportType']. "</td>";
            echo "<td>" .$sight['numWhale']. "</td>";
            echo "<td>" .anchor('users/edit_sighting/'. $sight['incidentalId'], 'edit'). " | " .anchor('users/delete_sighting/'. $sight['incidentalId'], 'delete'). "</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
 </div>