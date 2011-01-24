    <!-- This is the left navigation panel for dashboard -->
    <h2>Administration</h2>
    <ul>
	   <li><a href="<?=base_url(); ?>index.php/user/admin_panel">Dashboard</a></li>
	   <li><a href="<?=base_url(); ?>index.php/settings/get_settings">Settings</a></li>
    </ul>

    <h2>Sightings</h2>
    <ul>
    	<li><a href="<?=base_url(); ?>index.php/sightings/validate_sightings">Validate Sightings</a></li>
    	<li><a href="<?=base_url(); ?>index.php/sightings/manage_sightings">Manage Sightings</a></li>
    </ul>
    
    <h2>News</h2>
    <ul>
    	<li><a href="<?=base_url(); ?>index.php/news/post_news">Add News</a></li>
    	<li><a href="<?=base_url(); ?>index.php/news/manage_news">Manage News</a></li>
    </ul>

    <h2>Users</h2>
    <ul>
    	<li><a href="<?=base_url(); ?>index.php/user/profile">My profile</a></li>
    	<li><a href="<?=base_url(); ?>users/manage_users">Manage users</a></li>
    </ul> 