<?php include "db.php" ; ?>
<a href="index.php" >Home</a>
<!DOCTYPE html>
                        
<style>
table, th, td {
  border:1px solid black;
}
</style>


<h2>Students Table</h2>
     
<table style="width:50%">
  <tr>
    <td>name</td>
    <td>email</td>
    <td>phone</td>
    <td>Action</td>
  </tr>

   <?php
    $sql="SELECT * FROM students";
     $result = $conn->query($sql);

   if ($result->num_rows > 0){
      // echo "display";//
     while($row = $result->fetch_assoc()){
     ?>
        <tr>
            <td><?php echo $row ['name'];?></td>
            <td><?php echo $row ['email'];?></td>
            <td><?php echo $row ['phone'];?></td>
            <td><a href="update.php?id=<?php echo $row ['id'];?>">Edit</a></td>
            <td><a href="delete.php?id=<?php echo $row ['id'];?>">Delete</a></td>
        </tr>
     <?php
      }
    }
    else{
        ?>
        <tr> no record found</tr>
        <?php
    } 
    
    $conn->close();
    ?>
</table>



