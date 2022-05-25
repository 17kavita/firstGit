

  @extends('layouts.main')
  @section('titel')
    <h1>employee</h1>
  @stop
  @section('content')
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Employee list</h2>
           
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
         <th>phone</th>
          <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
          <td>7896785543</td>
            <td><button type="Edit" class="btn btn-primary">Edit</button>
            <button type="Delete" class="btn btn-danger">Delete</button></td>

      </tr>
    
  
    </tbody>
  </table>
</div>

</body>
</html>
  @stop
