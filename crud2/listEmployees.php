<?php
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

    if ($result = $conn -> query("SELECT * FROM employee")) {
        // Free result set

        $rows = $result->fetch_all();
        foreach($rows as $row){?>
          <tr class="table-success">
        <td><?php echo $row[1];?></td>
        <td><?php echo $row[2];?></td>
        <td><?php echo $row[3];?></td>
        <td><?php echo $row[4];?></td>
        <td>
          <button data='<?php echo implode(",",$row)?>' type="button" class="btn btn-primary updateButton">Edit</button>
          <button data="<?php echo $row[0];?>" style="margin-left: 10px;" type="button" class="btn btn-danger deleteButton">Delete</button>
      </td>
      </tr>
       <?php   
        }
        
      }
      

    $conn->close();

?>