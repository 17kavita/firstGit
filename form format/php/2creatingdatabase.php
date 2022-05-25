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
//sql qurey to creating a database in mysql.
$sql="CREATE DATABASE SCHOOL";
if(mysqli_query($conn,$sql)){
    echo"database created successfully";
}
else{
    echo"error! creating database:".mysqli_error($conn);

}
mysqli_close($conn);
?>