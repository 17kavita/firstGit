<?php
$servername="localhost";
$username="root";
$password="";
$dbname="school";
//i amcreating a connection here with Mysql.
$conn=mysqli_connect($servername,$username,$password,$dbname);

//i am checking connection here..

if(!$conn){
  die("connection failed:".mysqli_connect_error());

}
//sql quary to creating table in school database.
$sql="CREATE TABLE student(
id int auto_increment primary key,
stname varchar(30) NOT NULL,
email varchar(40),
mobile varchar(10) NOT NULL
)";
if(mysqli_query($conn,$sql)){
    echo"Table student created successfully";
    }
    else {
        echo"error! creating table:".mysqli_error($conn); 

    }
mysqli_close($conn);
?>