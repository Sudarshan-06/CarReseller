<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Master</title>
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
    <h1>City Master</h1>
    <div class="admin-form">
        <div class="form-row">
            <label>City id:</label><br>
            <input type = "text" name="txtCityId" enabled = "false">
            </div>
        <div class="form-row">
        <label>City Name:</label><br>
        <input type = "text" name="txtCityId">
        </div> 
        <div class="form-row">
            <label>State:</label><br>
            <input type = "text" name="txtCityId">
            </div>  
        
            <div class="form-row text-center">
                <input type = "submit" name="btnSubmit" >
                <input type = "reset" name="btnReset">
                 </div>  
    </div>

    <div class="admin-table">
        <table>
            <tr>
                <th>City Id</th>
                <th>Name</th>
                <th>State</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Indore</td>
                <td>MP</td>
                <td><a href="#">Edit</a></td>
                <td><a href="#">Delete</a></td>
            </tr>

            <tr>
                <td>2</td>
                <td>Bhopal</td>
                <td>MP</td>
                <td><a href="#">Edit</a></td>
                <td><a href="#">Delete</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Ujjain</td>
                <td>MP</td>
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