<!DOCTYPE html>
<html lang="en">
<head>
  <title>Crud App</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
<button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addModal">Add</button>
<div class="modal fade" id="addModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Employee</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form id="addEmployee">
        <div class="mb-3 mt-3">
            <label for="last_name" class="form-label">First Name:</label>
            <input type="text" class="form-control" id="first_name" placeholder="First Name" name="first_name" required>
        </div>
        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name:</label>
            <input type="text" class="form-control" id="last_name" placeholder="Last Name" name="last_name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone:</label>
            <input type="text" class="form-control" id="phone" placeholder="Enter Phone" name="phone" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
  <h2>List Employees</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php include 'listEmployees.php';?>
    </tbody>
  </table>
  <div class="modal fade" id="editModal">
    <div class="modal fade" id="deleteModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Update Employee</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form id="updateEmployee">
       
        <div class="mb-3 mt-3">
            <label for="last_name" class="form-label">First Name:</label>
            <input type="text" class="form-control" id="firstName" placeholder="First Name" name="first_name" required>
        </div>
        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name:</label>
            <input type="text" class="form-control" id="lastName" placeholder="Last Name" name="last_name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="emailAddress" placeholder="Enter email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone:</label>
            <input type="text" class="form-control" id="phoneNumber" placeholder="Enter Phone" name="phone" required>
            <input type="hidden" class="form-control" id="empId" name="id" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#addEmployee").submit(function(e){
    e.preventDefault();
    var values = {};
    $.each($("#addEmployee").serializeArray(), function(i, field) {
        values[field.name] = field.value;
    });
    console.log(values);
    $.post("insert.php",
    values,
    function(data,status){
     console.log("Data: " + data + "\nStatus: " + status); 
     $('#addModal').modal('toggle');
    });
  });

   $("#updateEmployee").submit(function(e){
    e.preventDefault();
    var values = {};
    $.each($("#updateEmployee").serializeArray(), function(i, field) {
        values[field.name] = field.value;
    });
    console.log(values);
    $.post("update.php",
    values,
    function(data,status){
     console.log("Data: " + data + "\nStatus: " + status); 
     $('#editModal').modal('toggle');
     window.location.reload();
    });
  });

  //delete
  
   $(".deleteButton").on('click', function (e) {
    e.preventDefault();
    var id = $(this).attr('data')
    console.log(id);
    $.post("delete.php",
   { 
     id : id 
   },
    function(data,status){
     console.log("Data: " + data + "\nStatus: " + status); 
    //  $('#deleteModal')modal('toggle').;
     window.location.reload();
    });
  });

  $( ".updateButton" ).on('click', function (e) {
    e.preventDefault;
    var emp = $(this).attr('data');
    var empId = emp.split(",")[0];
    var firstName = emp.split(",")[1];
    var lastName = emp.split(",")[2];
    var emailAddress = emp.split(",")[3];
    var phoneNumber = emp.split(",")[4];
    $("#firstName").val(firstName);
    $("#lastName").val(lastName);
    $("#emailAddress").val(emailAddress);
    $("#phoneNumber").val(phoneNumber);
    $("#empId").val(empId);

    $("#editModal").modal('show');
  });
});
</script>
</body>
</html>