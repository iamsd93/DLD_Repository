<?php
session_start();
$con=mysqli_connect('127.0.0.1','root');
/*if($con){
    echo "conn success";

}
else{
    echo "not connected";
}*/

$db=mysqli_select_db($con, 'dataleakage');
if(isset($_POST['submit']))
{
    $username=$_POST['user'];
    $password=$_POST['pass'];

    $sql="select * from admin where user='$username' and pass='$password' ";

    $query= mysqli_query($con, $sql);

    $row= mysqli_num_rows($query);
        if($row == 1)
        {
            echo "Login Success";
            $_SESSION['user']=$username;
            header('location: admin/admin.php');
        }
        else{
            echo "login failed";
            header('location: myadmin.php');
        }
    
}
?>
