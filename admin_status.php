<html>
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
<h1>Appoinment Report </h1>
<table border="3" bgcolor="#E0E0E0">
<tr>
<td>Appid</td>
<td>Timing</td>
<td>Days</td>
<td>Patientname</td>
</tr>
</td>

<?php
include("database.php");

$sql="select * from admin_status";
$query=mysqli_query($conn,$sql);
$row = [];
while($row = mysqli_fetch_array($query))
{?>
<tr>
<td><?php echo $row[0]; ?></td>
<td><?php echo $row[1]; ?></td>
<td><?php echo $row[2]; ?></td>
<td><?php echo $row[3]; ?></td>
<td><button class="Approved">Approved</button></td>
<td><button class="Pending">Pending</button></td>
</tr>
</tr>

<?php }?>
</table>
</center>
</body>
</html>
