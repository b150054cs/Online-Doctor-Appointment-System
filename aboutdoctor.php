<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
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
<br><br><br><br>
<center>
<h1>All Doctors Detail's </h1>
<table border="3" bgcolor="#E0E0E0">
<tr>
<td>ID</td>
<td>NAME</td>
<td>DESIGNATION</td>
<td>SPECIALISATIOM</td>
<td>TIMING</td>
<td>DAYS</td>
<td>Mobile</td>
<td>Email</td>
</tr>
<?php
include("database.php");

$sql="select * from onlydoctor";
$query=mysqli_query($conn,$sql);
$row = [];
while($row = mysqli_fetch_array($query))
{?>
<tr>
<td><?php echo $row[0]; ?></td>
<td><?php echo $row[1]; ?></td>
<td><?php echo $row[2]; ?></td>
<td><?php echo $row[3]; ?></td>
<td><?php echo $row[4]; ?></td>
<td><?php echo $row[5]; ?></td>
<td><?php echo $row[6]; ?></td>
<td><?php echo $row[7]; ?></td>

</tr>

<?php }?>
</table>
</center>
</body>
</html>
