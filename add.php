<?php
	include("database.php");


$name="Nishant";
$a="Dr A.H Khan";
$b="12:0:0";
$c="Monday";
$d="Dentist"
$sql="INSERT INTO `app_report`(`Patientname`) VALUES ('$name')";


if(mysqli_query($conn,$sql)) {
   echo "done";
}
else {
  echo "not";

}
?>
