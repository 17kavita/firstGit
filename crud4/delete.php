<?php include "db.php" ;
$id=$_GET['id'];
$sql = "DELETE FROM students WHERE id='$id' ";
 $result = $conn->query($sql);
 print_r($result);

   if ($result ) {
     header('location:open.php');
    // // output data of each row
   
    }
    else{
        ?>
        <tr> no record found</tr>
        <?php
    } 
    
    $conn->close();
    ?>
     