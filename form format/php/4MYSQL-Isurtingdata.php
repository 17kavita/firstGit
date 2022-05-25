<?php
$servername="localhost";
$username="root";
$password="";
$dbname="school";
//i am creating a connection here with Mysql.
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// $conn=mysqli_connect($servername,$username,$password);

// //i am checking connection here..

// if(!$conn){
//   die("connection failed:".mysqli_connect_error());

// }

//sql query to inserting data in student table.
$sql="INSERT INTO student(stname,email,mobile)
values('aarav', 'aarav@gmail.com', '7405209937')";


if(mysqli_query($conn,$sql)){
    echo "new record inserted successfully";
}
else{
    echo "error:". $sql ."<br>". mysqli_error($conn);
}
mysqli_close($conn);
?>