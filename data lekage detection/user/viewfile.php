<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Lekage Detaction</title>
	<meta charset="utf-8" />
	
	<link rel="stylesheet" href="style.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<?php
session_start(); //Start the session

if (!isset($_SESSION['user'])) {
        echo "Please Login";
		//$_SESSION['error'] = "Please Login First";
		echo "<script type=\"text/javascript\">"." alert('Please Login'); " ."</script>";
		} //if (!$_SESSION['name']){
		    //  echo  header("Location: http://localhost/data leakage/data lekage detaction/adminlogin.php");
		//}

		
		else{
		
		define('ADMIN',$_SESSION['user']); //Get the user name from the previously registered super global variable
		//if(!session_is_registered("admin")){ //If session not registered
//header("location:login.php"); // Redirect to login.php page
//}
//else //Continue to current page
header( 'Content-Type: text/html; charset=utf-8' );
//include'includes/conn.php';
 }
 
?>
<body class="body">
	
	<header class="mainHeader">
		<img src="img/logo.gif">
		<nav><ul>
			<li ><a href="user.php">Home</a></li>
			<li><a href="viewmsg.php">View msg</a></li>
			<li class="active"><a href="user/viewfile.php">View Articles</a></li>
			<li ><a href="viewkey.php">View Key</a></li>
			
			
		</ul></nav>
	</header>
		
	<div class="mainContent1">
		<div class="content">	
				<article class="topcontent1">	
					<header>
						<h2><a href="#" rel="bookmark" title="Permalink to this POST TITLE">Admin Menu</a></h2>
					</header>
					
					<footer>
						<p class="post-info">This Admin menu was one time password. </p>
					</footer>
					
					<content>
						<p>
							<table align="center" cellpadding="9" cellspacing="2" width="10" ><tr bgcolor="green">
							<td >Article Name</td><td>Date</td><td>Detail</td><td>View</td><td>Ask KEY</td></tr>
					<?php
                            {
                                $row="";
                                $con = mysqli_connect("127.0.0.1","root","");
                                if (!$con)
                                    echo('Could not connect: ' . mysqli_error());
                                else
                                {
                                    mysqli_select_db( $con,"dataleakage");
                                    $sql = 'SELECT * FROM presentation';
                                    $retval = mysqli_query( $con ,$sql);
                                    if(! $retval )
                                    {
                                        die('Could not get data: ' . mysqli_error());
                                    }
                                    while($row = mysqli_fetch_assoc($retval))
                                    {
                                           echo "<tr bgcolor='white'><td> {$row['subject']} </td> " .
                                               
												"<td> {$row['time']} </td> " .
												"<td> {$row['fname']} </td> " .
												
												"<td>Download:</br><a href='user/detail.php?id=". "{$row['subject']}'>{$row['subject']}</a>" .
												"<td></br><a href='user/key.php?id=". "{$row['subject']}'?f=". "{$row['fname']}'>Click To ask</a> " .
											    "</td>" ;
                                    } 
                                }
                                mysqli_close($con);
                            }
                        ?> 
					
					
					
					
					                          
</tr>

</table>

						</p>
						</content>
					
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
