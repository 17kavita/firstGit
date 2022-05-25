<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP bootsrap model curd</title>
  <!-- bootstrap css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
 
</head>
<body>



<!-- Modal -->
<div class="modal fade" id="completeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New user</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- select form from bootstrap -->
          <div class="form-group">
             <label for="completename">Name</label>
            <input type="text" class="form-control" id="completename"  placeholder="Enter your name">
          
          </div>
           <div class="form-group">
             <label for="completeemail">Email</label>
            <input type="email" class="form-control" id="completeemail"  placeholder="Enter your email">
          
          </div>
           <div class="form-group">
             <label for="completmobile">Mobile</label>
            <input type="email" class="form-control" id="completemobile"  placeholder="Enter your Mobile number">
          
          </div>
           <div class="form-group">
             <label for="completeplace">Place</label>
             <input type="text" class="form-control" id="completePlace"  placeholder="Enter your Place">
          
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" onclick="adduser()">Submit</button>
        <button type="button" class="btn btn-danger">close</button>
        <!-- <input type="text"value="1"> -->
      </div>
    </div>
  </div>
</div>

<!-- update modal -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">update details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- select form from bootstrap -->
          <div class="form-group">
             <label for="updatename">Name</label>
            <input type="text" class="form-control" id="updatename"  placeholder="Enter your name">
          
          </div>
           <div class="form-group">
             <label for="updateemail">Email</label>
            <input type="email" class="form-control" id="updateemail"  placeholder="Enter your email">
          
          </div>
           <div class="form-group">
             <label for="updatemobile">Mobile</label>
            <input type="email" class="form-control" id="updatemobile"  placeholder="Enter your Mobile number">
          
          </div>
           <div class="form-group">
             <label for="updateplace">Place</label>
             <input type="text" class="form-control" id="updateplace"  placeholder="Enter your Place">
          
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark"onclick="updateDetails()" >Update</button>
        <button type="button" class="btn btn-danger">close</button>
        <input type="hidden" id="hiddendata">
      </div>
    </div>
  </div>
</div>
<div class="contener my-3">    
     <h1 class="text-center">PHP CRUD operation  with bootsrap Model</h1>
     <!-- Button trigger modal -->
     <button type="button" class="btn btn-dark my-3" data-toggle="modal" data-target="#completeModal">
      Add new users
      </button>
      <div id="displayDataTable"></div>
</div>


<!-- bootstrap javascript -->
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>

<!-- insert data in dbms -->
  <script>
    $(document).ready(function(){
      displayData();
    });
    //display funtion
    function displayData(){
      var displayData="true";
      $.ajax({
        url:"display.php",
        type:'post',
        data:{
          displaySend:displayData
        },
         success:function(data,status){
           $('#displayDataTable').html(data);
          }
      });
    }
    function adduser(){
    var nameAdd=$('#completename').val();
    var emailAdd=$('#completeemail').val();
    var mobileAdd=$('#completemobile').val();
    var placeAdd=$('#completePlace').val();

     // use get the data to insert data so use ajax cqury
      $.ajax({
        url:"insert.php",
        type:'post',
        data:{
          nameSend:nameAdd,
          emailSend:emailAdd,
          mobileSend:mobileAdd,
          placeSend:placeAdd,


        },
          success:function(data,status){
          //function to display data;
         // console.log(data,status);
         
           $('#completeModal').modal('hide');
            displayData();
        }
      });
    }
    //delete record
     function DeleteUser(deleteid){
       console.log(deleteid);
       $.ajax({
        url:"delete.php",
        type:`post`,
        data:{
          deletesend:deleteid
        },
        success:function(data,status){
           // console.log(data,status);
           displayData();
        }
        
      });
    }
    //update function
    function GetDetails(updateid){
      
      $('#hiddendata').val(updateid);
    

      $.post("update.php",{updateid:updateid},function(data,status){
        console.log(updateid,data);
        
      var userid=JSON.parse(data);//using jawasript object topas data
      
      $('#updatename').val(userid.name);
      $('#updateemail').val(userid.email);
      $('#updatemobile').val(userid.mobile);
      $('#updateplace').val(userid.place);

      });


      $('#updateModal').modal("show");

    }
//onclik update event function
    function updateDetails(){
    var updatename=$('#updatename').val();
    var updateemail=$('#updateemail').val();
    var updatemobile=$('#updatemobile').val();
    var updateplace=$('#updateplace').val();
    var hiddendata=$('#hiddendata').val();

    $.post("update.php",{
     updatename:updatename,
     updateemail:updateemail,
     updatemobile:updatemobile,
     updateplace:updateplace,
     hiddendata:hiddendata
    },function(data,status){

    $('#updateModal').modal('hide');
      displayData();
    });
    }



  </script>
</body>
</html>