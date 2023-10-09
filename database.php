<?php
include('in.php');


if (isset($_POST['submit'])) { 
   


$stud_name= $_POST ['stud_name'];
$stud_number= $_POST ['stud_number'];
$stud_dob= $_POST ['stud_dob'];
$stud_address= $_POST ['stud_address'];
$stud_gender= $_POST ['stud_gender'];
$user_type= $_POST ['user_type'];


$sql = "INSERT INTO `stud` (`stud_name`, `stud_number`, `stud_dob`, `stud_address`, `stud_gender`, `user_type`) VALUES ('$stud_name','$stud_number','$stud_dob','$stud_address','$stud_gender','$user_type')";



$res = mysqli_query($conn, $sql);

if($res){
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}

$data = "SELECT * FROM `stud` ";


?>

