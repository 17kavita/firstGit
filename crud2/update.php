<?php
if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['id'])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crud";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
       $id =$_POST['id'];
    $sql = "UPDATE employee
     SET first_name = '$first_name', last_name = '$last_name',email='$email',phone='$phone'
    WHERE id='$id' ";
    echo $sql;
 
    if ($conn->query($sql) === TRUE) {
    echo " record updated successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;

    }

    $conn->close();
}
?>