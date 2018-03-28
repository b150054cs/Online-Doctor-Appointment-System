<?php
   include("database.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($conn,$_POST['user']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['pass']);

      $sql = "SELECT * FROM `registration` WHERE Username = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
         header("location:appoinment.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body bgcolor="#E0E0E0">
	<nav class="navbar navbar-default" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
  <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right">
    </ul>
  </div>
</nav>
<h1 align="center"><u>Login</u></h1>
	<form action="login.php" method="POST">
        <center >
	Name:<input  type="text" name="user"></br></br>
	Password:<input type="password"  name="pass"></br></br>
	<input type="submit" name="submit" value="submit">
</center>
	</form>
</body>
</html>
