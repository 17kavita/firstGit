<?php
$servername="localhost";
$username="root";
$password="";
//i amcreating a connection here with Mysql.
$conn=mysqli_connect($servername,$username,$password);

//i am checking connection here..

if(!$conn){
  die("connection failed:".mysqli_connect_error());

}
echo"connected successfully";
?>
