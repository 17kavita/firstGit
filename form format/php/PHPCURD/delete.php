<?php

include'connect.php';

if(isset($_POST['deletesend'])){
    $unique=$_POST['deletesend'];
   // print_r($unique);
    
    $sql="delete from `crud` where id=$unique";
    //echo$sql;
    $result=mysqli_query($conn,$sql);
}

?>