<?php
	include("database.php");


$name="Nishant";
$a="Dr A.H Khan";
$b="12:0:0";
$c="Monday";
$d="Dentist"
$sq="INSERT INTO `app_report`(`Doctorname`,`Timing`,`Days`,`Patientname`,`Status`) VALUES ('$a','$b','$c','$name','$d')";


if(mysqli_query($conn,$sq)) {
   echo "done";
}
else {
  echo "not";

}
?>
