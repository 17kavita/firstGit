<?php
//connecting database
$servername="localhost";
$username="root";
$password="";
//$database="dbkavita";

//create a connection with database
$conn=mysqli_connect($servername,$username,$password);

//use of "die" function when connection not success.

if(!$conn){
    die("connection not succesfully:".mysqli_connect_error());
}else{
    echo"connection successfully<br>";
}


//create databse in mysqli
$sql="CREATE DATABASE dbkavita";
$result= mysqli_query($conn,$sql);

//check the data base creation successfully or not
 if($result){
    echo"the db was created successfully!<br>";
 } 
 else{
     echo"the db was not successfully because of this error...>".mysqli_error($conn);
 }
//create table in mysql database
// $sql="CREATE TABLE students details(
//     s_no UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     Name varchar(20),
//     address varchar(20),
//     e_mail varchar(20),
//     phone varchar(20)
//     primary key ('s_no'))";
//  $result=mysqli_query($conn,$sql)  ;

//  //check the table connection sucees or not
//  if($result){
//     echo"the db was created successfully!<br>";
// } 
// else{
//     echo"the db was not successfully because of this error...>".mysqli_error($conn);
// }




?>