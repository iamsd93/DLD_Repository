<?php
// Start a session for error reporting
session_start();

// Call our connection file
require("includes/conn.php");


//}


// Get our POSTed variables

if(isset($_POST['s']))
{
    $username=$_POST['usr'];
    $password=$_POST['pwd'];

    $sql="select * from register where username='$username' and password='$password' ";

    $query= mysqli_query($conn, $sql);

    $row= mysqli_num_rows($query);
        if($row == 1)
        {
            echo "Login Success";
            $_SESSION['user']=$username;
            header('location: user.php');
        }
        else{
            header('location: userlogin.php');
        }
    
}

?>
