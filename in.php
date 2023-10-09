<?php
$server = "localhost";
$username = "root";
$password = "";
$database_name= "test";

$conn = mysqli_connect($server,$username,$password,$database_name);

if(!$conn){
    die("connection to database error" .mysqli_connect_error());

}
else{
    echo "Connection Succesfull";
}
?>
