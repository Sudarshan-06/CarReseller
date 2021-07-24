<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<?php include 'adminNavbar.php';?>
   <div class="container">
       <div class="contactUsWrapper">
           <div class="contactUsMap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30161.158118147145!2d72.81203422692462!3d19.10130412566088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9bf95d4ba07%3A0x35047c9c36b6cea1!2sJuhu%2C%20Mumbai%2C%20Maharashtra%20400049!5e0!3m2!1sen!2sin!4v1624935503051!5m2!1sen!2sin" width="650" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
           </div>
        <div class="contactUsAddress">
            <h2>Address</h2>
            <hr>
        <h3>Mumbai</h3>
    <h3>244,Satle Mansion,Juhu,New Bombay,Maharashtra </h3>
 <div class="gap-10"></div>
 <h3>Auckland</h3>
    <h3>96,Satle Mansion,infront of Smileson's house ,Auckland,New Zealand </h3>
</div>
</div>

<hr>

<div class="contactUsForm">
    <h2>Write To Us</h2>
    <p>If u have any query plz fill the form and contact us, I will contact u</p>
  
    <div class="form-row">
        <label>Name:</label><br>
        <input type = "text" name="txtName" class="form-element">
    </div>

    <div class="form-row">
        <label>Message:</label><br>
        <textarea name="message"class="form-element"> </textarea>
        </div>
        <div class="form-row text-center">
            <input type = "submit" name="btnSubmit" >
            <input type = "reset" name="btnReset">
             </div>

</div>
   </div>

   <?php include 'footer.php';?>
</body>
</html>