
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
<h1 align="center"><u>Registration</u></h1>

        <center>
	<form action="reg.php" name="form" method="POST" onsubmit="return validatecontactform();">
	       Name:<input  type="text" id="username" name="username"></br></br>
        email:<input  type="text" id="email" name="email"></br></br>
	Password:<input type="password" id="password" name="password"></br></br>
	<input type="submit" name="submit" value="submit">

	<center>
	</form>
</body>
</html>


<?php

        include("database.php");

	if(isset($_POST['submit']))
{
$name=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['password'];




$sql="insert into registration(Username,Email,Password) values('$name','$email','$pass')";
if($conn->query($sql))
{
echo "done successfully";
}
header("location:index.php");

}
