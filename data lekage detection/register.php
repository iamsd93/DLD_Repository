<?php
// Start a session for error reporting
session_start();
header('location: register.html');
// Call our connection file
require("includes/conn.php");


//}


// Get our POSTed variables
$fname = $_POST['usr'];
$lname = $_POST['a2'];
$image = $_POST['a5'];
$password=$_POST['pwd'];

$fname = mysqli_real_escape_string($conn,$fname);
$lname = mysqli_real_escape_string($conn,$lname);

$q= "select * from register where username='$fname' and password='$password' ";
$res= mysqli_connect($conn,$q);
$num= mysqli_num_rows($res);

if($num == 1)
{
	echo "duplicate data";
}
else{



	$sql = "insert into register ( username, userid, password, emailid) values ('$fname', '$lname', '$password','$image')";
	$result = mysqli_query($conn,$sql) or die ("Could not insert data into DB: " . mysqli_error($conn));
	header("Location:userlogin.php");
	exit;
}

?>
