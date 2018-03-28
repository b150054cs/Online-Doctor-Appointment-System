<?php
$conn=mysqli_connect("localhost","root","","about_doctor");

$name="Nishant";
$sql="INSERT INTO `registration`(`Username`) VALUES ('$name')";


if(mysqli_query($conn,$sql)) {
   echo "done";
}
else {
  echo "not";

}
?>
