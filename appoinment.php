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
  <a href ="a_report.php" ><h4>View Appointment status<h4></a>
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
  <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right">

      <li><a href="aboutdoctor.php">About Doctor</a></li>

    </ul>
  </div>
</nav>
<h1 align="center"><u>Appoinment</u></h1>
	<form action="appoinment.php" method="post">
        <center >
  <label>Name:</label><input  type="text" name="name" required></br></br>
	<label>Age:<input type="text"  name="age" required></br></br>
	<label>Mobile:<input type="text" name="mobile" required></br></br>
	Email:<input  type="text" name="email" required></br></br>
  Specialisation:<input type="text"  name="specialisation"  required</br></br>
	<input type="submit" name="submit" value="submit">
	<center>
	</form>


</body>
</html>
<?php
	include("database.php");
	if(isset($_POST['submit']))
{
$name=$_POST['name'];
$age=$_POST['age'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$specialisation=$_POST['specialisation'];

$sql="INSERT INTO `appoinment`(`Name`, `Specialisation`, `Age`, `Mobile`, `Email`) VALUES ('$name', '$specialisation','$age', '$mobile','$email')";


if(mysqli_query($conn,$sql)) {
   header("location: after_app.php");
}else {
   $error = "Invalid Entry";
}
}
?>
