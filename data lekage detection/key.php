<?php
// Start a session for error reporting
session_start();





// Get our POSTed variables
$id = $_GET['id'];




 $con = mysqli_connect("127.0.0.1","root");
                                if (!$con)
                                    echo('Could not connect: ' . mysqli_error($con));
                                else
                                {
                                    mysqli_select_db( $con,"dataleakage");
	$sql = "insert into askkey (user, filename, status, reciver,k) values ('$_SESSION[user]','$id','no','admin','')";
	$result = mysqli_query($con,$sql) or die ("Could not insert data into DB: " . mysqli_error($con));
	echo '<script language="javascript">alert("Thank You!! for asking for key")</script>';
	exit;
								}
?>
