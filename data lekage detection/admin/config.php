<?php
/**********************************************************************
 *Contains all the basic Configuration
 *dbHost = Host of your MySQL DataBase Server... Usually it is localhost
 *dbUser = Username of your DataBase
 *dbPass = Password of your DataBase
 *dbName = Name of your DataBase
 **********************************************************************/
$dbHost = '127.0.0.1';
$dbUser = 'root';
$dbPass = '';
$dbName = 'dataleakage';
$dbC = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName)
        or die('Error Connecting to MySQL DataBase');
?>
