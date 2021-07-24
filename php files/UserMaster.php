<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Master</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="css/alertify.css">
    <link rel="stylesheet" href="css/themes/bootstrap.css">
   


</head>
<body>
<?php include 'adminNavbar.php';?>
<div class="container">
    <div class="admin-wraper">
    <?php include 'adminSidebar.php';?>
<div class="admin-mainContent">
    <h1>User Master</h1>
    <div class="admin-form">
        <div class="form-row">
            <label>Customer id:</label><br>
            <input type = "text" name="txtCustomerId" enabled = "false">
            </div>
        <div class="form-row">
        <label> Name:</label><br>
        <input type = "text" name="txtName">
        </div> 
        <div class="form-row">
            <label>DOB:</label><br>
            <input type = "date" name="txtDOB" class = "form-element">
            </div>  
        
            <div class="form-row">
                <label>Email:</label><br>
                <input type = "text" name="txtEmail">
                </div>  
                
        <div class="form-row">
            <label>Address:</label><br>
            <textarea class = "form-element" name = "txtAddress"> </textarea>
            </div> 

            <div class="form-row">
                <label>City:</label><br>
                <input type = "text" name="txtCity">
                </div>  

            <div class="form-row">
            <label>Contact No:</label><br>
            <input type = "text" name="txtContactNo">
            </div>

            <div class="form-row text-center">
                <input type = "submit" name="btnSubmit" >
                <input type = "reset" name="btnReset">
                 </div>  
    </div>

    <div class="admin-table">
        <table>
            <tr>
                <th>Customer Id</th>
                <th>Name</th>
             <!----  <th>DOB</th>
                <th>Email</th
                <th>Address</th>-->
                <th>City</th>
                <th>Contact No</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <tr>
                <td>1</td>
                <td>xyz</td>
                <td>Sanawad</td>
                <td>8461823898</td>
                <td><a href="#">Edit</a></td>
                <td><a href="#">Delete</a></td>
            </tr>

            <tr>
                <td>2</td>
                <td>xyz</td>
                <td>Los Angeles</td>
                <td>8461823899</td>
                <td><a href="#">Edit</a></td>
                <td><a href="#">Delete</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>xyz</td>
                <td>Auckland</td>
                <td>98971666554</td>
                <td><a href="#">Edit</a></td>
                <td><a href="#">Delete</a></td>
            </tr>
        </table>

        <button onclick="alertDemo()">Okk </button>    
    
    </div>
</div>

 
    
</div>
    
</div>

<?php include 'footer.php';?> 
    <script src="alertify.js"></script>
    <script>
        function alertDemo()
        {
            alertify.confirm("are u sure u want to delete.",
  function(){
    alertify.success('Record Deleted');
  },
  function(){
    alertify.error('Action Cancelled');
  });
        }
    </script>
</body>
</html>