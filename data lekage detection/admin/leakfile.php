<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Lekage Detection</title>
	<meta charset="utf-8" />
	
	<link rel="stylesheet" href="style.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<?php
session_start(); //Start the session

if (!isset($_SESSION['user'])) {
        //echo "Please Login";
		//$_SESSION['error'] = "Please Login First";
		echo "<script type=\"text/javascript\">"." alert('Please Login'); " ."</script>";
		} //if (!$_SESSION['name']){
		    //  echo  header("Location: http://localhost/data lekage detaction/adminlogin.php");
		//}

		
		else{
		
		define('ADMIN',$_SESSION['user']); //Get the user name from the previously registered super global variable
		//if(!session_is_registered("admin")){ //If session not registered
//header("location:login.php"); // Redirect to login.php page
//}
//else //Continue to current page
header( 'Content-Type: text/html; charset=utf-8' );

 }
 
?>
<body class="body">
	
	<header class="mainHeader">
		<img src="img/logo.gif">
		<nav><ul>
			<li ><a href="admin.php">Home</a></li>
			<li><a href="upload.php">Publish Article</a></li>
			<li ><a href="view file.php">View File</a></li>
			<li class="active"><a href="#">Leak User</a></li>
			<li ><a href="sendkey.php">SendKey</a></li>
			
			
		</ul></nav>
	</header>
		
	<div class="mainContent1">
		<div class="content">	
				<article class="topcontent1">	
					<header>
						<h2><a href="#" rel="bookmark" title="Permalink to this POST TITLE">Admin Menu</a></h2>
					</header>
					
					<footer>
						<p class="post-info">This Admin manu was one time password. </p>
					</footer>
					
					<content>
						<p>
							
<table align="center" cellpadding="9" cellspacing="2" width="10">
							<tr bgcolor="green"><td >id</td><td>Unuthorised User</td><td>Date</td><td>Send msg</td></tr>
		
					<?PHP
				
				$con = mysqli_connect("127.0.0.1","root");
                                if (!$con)
                                    echo('Could not connect: ' . mysqli_error());
                                else
                                {
                                    mysqli_select_db( $con,"dataleakage");
									


$qry="Select * FROM leaker";
$result=mysqli_query($con,$qry);
while($w1=mysqli_fetch_array($result))
{
	echo'			<tr bgcolor="white">
	
	<td>'.$w1["id"].'    </td><td>     '.$w1["name"].'	
					</td><td>'.$w1["time"].'

	</td><td> 
<a href="sendmsg.php?'.$w1["name"].'">Click</a>

					</td>
</tr>

	
	
	';
		
}
								}

?>
					
					
					

					
						</p>
						</content>

</table>					
				</article>



			</div>
<aside class="top-sidebar">
					<article>
					<h2>Welcome: <?php echo $_SESSION['user']/*Echo the username */ ?></h2>
<li><a href="logout.php">Logout</a></li>
					
					<p></p>
				    </article>
				</aside>	
		</div>
			
				
	</div>
	
	<footer class="mainFooter">
	<p>Project Design by:<a href="#">Shraddha,Asiya,Dashrath</a></p>
	</footer>

</body>
</html>
