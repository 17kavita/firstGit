<?php
if (isset($_POST['save'])) {
    print_r($_POST);
    $name=$_POST['s_name'];
    $address=$_POST['s_address'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

//connecting database
$servername="localhost";
$username="root";
$password="";
$dbname="dbkavita";


//create a connection with database
$conn=mysqli_connect($servername,$username,$password,$dbname);

//use of "die" function when connection not success.

if(!$conn){
    die("connection not succesfully:".mysqli_connect_error());
}else{
    echo"connection successfully<br>";
}

//create DATABASE
$sql = "CREATE DATABASE IF NOT EXISTS dbkavita";

if (mysqli_query($conn, $sql)) {
  echo "Database created successfully<br>";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}

//create STUDENT TABLE

$sql = "CREATE TABLE IF NOT EXISTS mystudents (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    s_name  VARCHAR(30) NOT NULL,
    s_address VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    phone int(10)


    )";
    
    if (mysqli_query($conn, $sql)) {
      echo "Table mystudents created successfully<br>";
    } else {
      echo "Error creating table: " . mysqli_error($conn);
    }
    
//     //insert data in mystudents table

$sql = "INSERT INTO mystudents ( s_name,s_address,email,phone)
 VALUES ('$name', '$address', '$email','$phone')";

if (mysqli_query($conn, $sql)) {
  echo "New insert data  created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

    
   
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
  <label for="s_name"> Name:</label><br>
  <input type="text" id="s_name" name="s_name"><br>
  <label for="s_address">Address:</label><br>

<textarea id="s_address" name="s_address" rows="4" cols="50">

</textarea><br>
<label for="email"> Email:</label><br>
  <input type="text" id="email" name="email"><br>
  <label for="phone"> Phone:</label><br>
  <input type="text" id="phone" name="phone"><br>


  <input type="submit" name="save" value ="save">
</form>


</body>
</html>