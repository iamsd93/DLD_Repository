<?php
	session_start();

	if(!isset($_SESSION['user']))
	{
		header('location: ./myadmin.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Lekage Detaction</title>
	<meta charset="utf-8" />
	
	<link rel="stylesheet" href="style.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body class="body">
	
	<header class="mainHeader">
		<img src="img/logo.gif">
		<nav><ul>
			<li class="active"><a href="admin.php">Home</a></li>
			<li><a href="upload.php">Publish Article</a></li>
			<li><a href="view file.php">View File</a></li>
			<li ><a href="leakfile.php">Leak User</a></li>
			
			
			
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
							<table align="center" cellpadding="10" cellspacing="2" width="10"><tr><td ><img src="img/1.PNG"></td><td><img src="img/msg.JPG"></td><td><img src="img/upload.png"></td><td><img src="img/user.JPG"></td></tr>
					<tr><td><a href="m_arti.php">Manage Articles</a></td><td><a href="sendmsg.php">Send Message</a></td><td><a href="upload.php">Upload Articles</a></td><td><a href="m_user.php">Manage User</a></td>
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
