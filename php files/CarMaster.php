<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Master</title>
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
    <h1>Car Master</h1>
<div style="display: flex;">


    <div class="admin-form">
        <div class="form-row">
            <label>Car id:</label><br>
            <input type = "text" name="txtCarId" >
            </div>
            
            
            
    <div class="form-row">
 <label>Name:</label><br>
  <input type = "text" name="txtName">
      </div>


            
        <div class="form-row">
        <label> Model:</label><br>
        <input type = "text" name="txtModel">
        </div> 
        <div class="form-row">
            <label>Description:</label><br>
            <textarea class = "form-element" name = "txtDescription"> </textarea>

            </div>  
        
            <div class="form-row">
                <label>Engine:</label><br>
                <input type = "text" name="txtEngine">
                </div>  
                
        <div class="form-row">
            <label>Run:</label><br>
            <textarea class = "form-element" name = "txtRun"> </textarea>
            </div> 

         <div class="form-row">
        <label>Price:</label><br>
        <input type = "text" name="txtPrice">
        </div>  

        <div class="form-row">
        <label>Brand:</label><br>
         <input type = "text" name="txtBrand">
         </div>

         <div class="form-row">
         <label>Owner No.:</label><br>
        <input type = "text" name="txtOwnerNo">
        </div>

        <div class="form-row">
       <label>Accidental Check:</label><br>
        <input type="radio" name="rbtAccidental" value="Yes">Yes &nbsp;
        <input type="radio" name="rbtAccidental" value="No">No
        </div>

 <div class="form-row">
  <label>Milage:</label><br>
 <input type = "text" name="txtMilage">
 </div>

  <div class="form-row">
    <label>Fuel Type:</label><br>
    <input type = "text" name="txtFuelType">
    </div>


    <div class="form-row">
    <label>Expert View:</label><br>
    <textarea class = "form-element" name = "txtExpertView"> </textarea>
      </div>

      <div class="form-row">
        <label>Insurance:</label><br>
        <input type="radio" name="rbtInsurance" value="Yes">Yes &nbsp;
        <input type="radio" name="rbtInsurance" value="No">No
         </div>

         <div class="form-row">
            <label>Seating Capacity:</label><br>
             <input type = "text" name="txtSeating">
             </div>
 <div class="form-row">
     <label>Category id:</label><br>
      <select name="ddlCategory" class="form-element"></select>
      </div>
          <div class="form-row">
                    <label>Brand:</label><br>
                     <input type = "text" name="txtBrand">
                     </div>
    

            <div class="form-row text-center">
                <input type = "submit" name="btnSubmit" >
                <input type = "reset" name="btnReset">
                 </div>  
    </div>


    <div class="signup-image">
        <div class="car-image">

        </div>
        <div class="gap-10"></div>
        <input type="file" name="fldcarImage">
</div>
</div>





    
    <div class="admin-table">
        <table>
            <tr>
                <th>Car Id</th>
                <th>Name</th>
             <!----  <th>DOB</th>
                <th>Email</th
                <th>Address</th>-->
                <th>Model</th>
                <th>Run</th>
                <th>Price</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Bobby</td>
                <td>Sanawad</td>
                <td>8461823898</td>
                <td>9090</td>
                <td><a href="#">Edit</a></td>
                <td><a href="#">Delete</a></td>
            </tr>

            <tr>
                <td>2</td>
                <td>Sud</td>
                <td>Los Angeles</td>
                <td>8461823899</td>
                <td>9090</td>
                <td><a href="#">Edit</a></td>
                <td><a href="#">Delete</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Buzu</td>
                <td>Auckland</td>
                <td>98971666554</td>
                <td>9090</td>
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