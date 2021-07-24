<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<?php include 'navbar.php';?>
        <div class="menu">
            <ul>
                <li><a href="Index.html">Home</a></li>
                <li><a href="#">Sell</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">Sign Up</a></li>
                <li><a href="#">Contact Us</a></li>
             </ul>
        </div>
    </div>
    <div class="container">
  <div class="signup-main">
  <h1>Customer Registration</h1>

  <div class="form-row">
   <label>Name:</label><br>
    <input type = "text" name="txtName" class="form-element">
     </div>

     <div class="form-row">
         <label>Date Of Birth:</label><br>
        <input type = "date" name="txtDOB" class="form-element">
     </div>

       <div class="form-row">
        <label>Email id:</label><br>
       <input type = "text" name="txtEmail" class="form-element">
      </div>

       <div class="form-row">
        <label>Address:</label><br>
        <textarea name="txtAddress" class="form-element"></textarea>
       </div>                
    
     <div class="form-row">
     <label>City:</label><br>
      <input type = "text" name="txtCity" class="form-element">
    </div>

        <div class="form-row">
     <label>Contact Number</label><br>
    <input type = "text" name="txtContactNo" class="form-element">
    </div>

    <div class="form-row">
    <label>Password</label><br>
    <input type = "password" name="txtContactNo" class="form-element">
    </div>
      
     <div class="form-row">
    <label>Re-Type Password</label><br>
    <input type = "password" name="txtContactNo" class="form-element">
    </div>
    
    <div class="form-row text-center">
        <input type = "submit" name="btnSubmit">
    <input type = "reset" name="btnReset">
       </div>

    
    </div>
    </div>
    <?php include 'footer.php';?> 
</body>
</html>