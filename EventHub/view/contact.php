<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="contact.css">
</head>

<body>





<header>
        <div class="logo">
            <span>EventHub</span>
        </div>
        <div class="nav" align="left">


            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="signIn.php">Sign In</a></li>
                <li><a href="contact.php" style="color: blue;">Contact</a></li>
            </ul>
<br><br>
<hr>
        </div>

</header> 


  <div class="plane">
    <img src="plane.jpg" alt="">
  </div>




<br><br><br> <br><br><br><br>
 <div class="right" align="center">
  
          <form id="contact" action="mail.php" method="post" onsubmit="return validateForm()">
                <h1>Contact Us</h1>
                <br><br>
                <input placeholder="Please Enter Your Name" name="name" id="name" type="text" tabindex="1" autofocus>
                <span id="nameError" class="error"></span>
                <br> <br>
                <input placeholder="Enter Your Email Address" name="email" id="email" type="email" tabindex="2">
                <span id="emailError" class="error"></span>
                <br> <br>
                <input placeholder="Title" type="text" name="subject" tabindex="4">
                <br> <br>
                <textarea name="message" placeholder="Description" tabindex="5"></textarea>
                <br> <br>

                <button type="submit" name="send" id="contact-submit">Submit</button>
          </form>
 </div><br><br>
  <hr> <br>
 <div class="container">

 <div class="left" align="center">

  <p>we are always therefore for you.</p>
  <address>Address: Bashundhara R/A , Block D, Dhaka, 1200</address>
  
  <br><br><br><br><br><br><br>
 </div>
   



  </div>



  
  <footer>
        <a href="Terms&Conditions.php">Terms & Conditions</a> 
        <a href="elp.php">Help</a> 
        <a href="contact.php">Contact</a> 
        <a href="about.php">About</a>
        
        <p>© 2024 EventHub — The Event Management System made with passion by (Our Group)</p>
            
    </footer>





  <script src="../assets/js/contact.js"> </script>

</body>

</html>