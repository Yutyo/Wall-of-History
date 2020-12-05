<?php
    // Four variables for database connection.
	$host = "localhost";
	$username = "jslbrown_user";
	$user_pass = "CallMeChronicler";
	$database_in_use = "jslbrown_wallofhistory";

    // Create a database connection instance.
	$mysqli = new mysqli($host, $username, $user_pass, $database_in_use);
	mysqli_set_charset($mysqli, 'utf8');
?>