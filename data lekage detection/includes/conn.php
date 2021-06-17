<?php

// Input your information for the database here

// Host name
$host = "localhost";

// Database username
$username = "root";

// Database password
$password = "";

// Name of database
$database = "dataleakage";

$conn = mysqli_connect('127.0.0.1', 'root') or die ("Could not connect");
if($conn){
$db = mysqli_select_db($conn,$database) or die ("Could not select DB");

}
else{
	echo '<h1>error in conn</h1>';
}

?>
