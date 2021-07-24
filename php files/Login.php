<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<?php include 'adminNavbar.php';?>
    <div class="container">
        <div class="login-main">
            <h1>Customer Login</h1>
    <div class="form-row">
    <label>Login id:</label><br>
    <input type = "text" name="txtLoginId">
    </div>
    <div class="form-row">
        <label>Password</label><br>
        <input type = "password" name="txtPassword">
    </div>
    <div class="form-row text-center">
    <input type = "submit" name="btnSubmit" >
    <input type = "reset" name="btnReset">
     </div>   
    
        </div>
        <div class="gap-10"></div>
        <?php include 'footer.php';?>
</body>
</html>