<?php
// Start a session for error reporting
session_start();





// Get our POSTed variables
$a1 = $_POST['a1'];
$a2 = $_POST['a2'];
$a3 = $_POST['a3'];



 $con = mysqli_connect("127.0.0.1","root");
                                if (!$con)
                                    echo('Could not connect: ' . mysqli_error());
                                else
                                {
                                    mysqli_select_db( $con,"dataleakage");
	$sql = "insert into msg (sender, email, reciver, msg) values ('$_SESSION[user]', '$a1','$a2', '$a3')";
	$result = mysqli_query($con,$sql) or die ("Could not insert data into DB: " . mysqli_error());
	header("Location: admin.php");
	exit;
								}
?>
