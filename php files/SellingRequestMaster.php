<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selling Request</title>
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
    <h1>Selling Request</h1>
    <div class="admin-form">
        <div class="form-row">
            <label>Request id:</label><br>
            <input type = "text" name="txtRequestId">
            </div>
    <div class="form-row">
    <label> Car Name:</label><br>
    <input type = "text" name="txtCarName">
    </div> 
            <div class="form-row">
                <label>Description:</label><br>
                <textarea class = "form-element" name = "txtDescription"> </textarea>
                </div>      
           
        <div class="form-row">
            <label>Model Year:</label><br>
            <input type = "text" name="txtModel">
            </div> 
            
            <div class="form-row">
                <label>Customer Id:</label><br>
                <input type = "text" name="txtCustomerId">
                </div>  
                <div class="form-row">
                    <label>Customer Name:</label><br>
                    <input type = "text" name="txtCustomerName">
                    </div>
                
                    

            <div class="form-row">
                <label>Expected Price:</label><br>
                <input type = "text" name="txtExpectedPrice">
                </div>
                
                <div class="form-row">
                    <label>Engine:</label><br>
                    <input type = "text" name="txtEngine">
                    </div>
        

            <div class="form-row text-center">
                <input type = "submit" name="btnSubmit" >
                <input type = "reset" name="btnReset">
                 </div>  
    </div> 

    <div class="admin-table">
        <table>
            <tr>
                <th>Request Id</th>
                <th>Car Name</th>
                <th>Customer Name</th>
                <th>Expected Price</th>
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