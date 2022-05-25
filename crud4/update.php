<?php include "db.php" ;
 $id=$_GET['id'];
 $sql="SELECT * FROM students WHERE id='$id'";
     $result = $conn->query($sql);

   if ($result->num_rows > 0) {
    // // output data of each row
    while($row = $result->fetch_assoc()) {
     ?>

    <div>
        <form action=" " method="post">
          Name:   <input value="<?php echo $row['name']?>" type="text" name="name" placeholde="name"><br><br>
          Email:  <input value="<?php echo $row['email']?>" type="text" name="email" placeholde="email"><br><br>
          Phone:  <input value="<?php echo $row['phone']?>" type="text" name="phone" placeholde="phone"><br><br>

                    <input type="submit" name="update_btn"value="update" >
                    <button><a href = "open.php">back</a></button>
        </form>
    </div>
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

    <!-- update -->
    <?php
  if( isset($_POST['update_btn'])){
  include "db.php" ; 
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $sql =" UPDATE students SET name='$name' , email='$email',phone='$phone' WHERE id='$id'";
      if ($conn->query($sql) === TRUE) {
      echo "New record  successfully";
        header('location:open.php');
      } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();
     
  }
  ?>





