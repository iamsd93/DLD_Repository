<?php
session_start();

?>


<!DOCTYPE html>
<html>
<head>
  <title>

  </title>
  <link rel="stylesheet" type="text/css" href="style1.css">
  <?php include 'links.php' ?>
</head>
<body>
  <header>
    <div class="container center-div shadow ">
    <div class="heading text-center mb-5 text-uppercase text-white ">Admin Login</div>
    <div class="container row d-flex flex-row justify-content-center mb-5 ">
    <div class="admin-form" shadow p-2>
    <form action="check_login.php" method="POST">
      <div class="form-group">
      <label>Username</label>
      <input type="text" name="user" value="" class="form-control" autocomplete="off">
      </div>
      <div class="form-group">
      <label>Password</label>
      <input type="password" name="pass" value="" class="form-control" autocomplete="off">
      </div>
      <input type="submit" class="btn btn-success" name="submit">
    </form>
    </div>
    </div>
    
    
    </div>
  </header>

</body>
</html>

