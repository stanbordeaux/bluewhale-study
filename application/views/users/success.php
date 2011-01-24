<?php

echo $this->session->flashdata('login');
echo $this->session->flashdata('logout');

echo "<br />";

echo anchor('sightings/validate_sighthing', 'View Latest Addition');

echo "<br />";

echo anchor('users/logout', 'Logout Here');


?>