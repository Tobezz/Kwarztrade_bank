<?php
    include "header.php";
    include "navbar.php";

    if (isset($_GET['loginFailed'])) {
        $message = "Invalid Credentials ! Please try again.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ABOUT KWARZ TRADE BANK</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/6f6ddd638b.js" crossorigin="anonymous"></script>
</head>
<body>


<!---
<nav>
  <div class="nav-left">
    <a href="Kwarz.html"><img src="./images/logo3.png" class="logo"></a>
    <ul>
        <li><a href="Kwarz.html">HOME</a></li>
        <li><a href="about.html">ABOUT US</a></li>
        <li><a href="contact.html">CONTACT</a></li>
    </ul>
  </div>

  <div class="nav-right">

      <div class="search-box">
        <img src="./images/searchicon2.png">
        <input type="text" placeholder="search">
      </div>
      <div class="home-user-icon">
        <a href="#"><img src="./images/homeicon.jpg" class="homeicon"></a>
        
      </div>
  </div>
</nav>


--->

<h1 class="us">
    CONTACT US
</h1>
<div class="first-dive1">
    <div class="double">
        
        <h5 class="yy">OUR HEAD OFFICE</h5>
        <h2 class="yyy">KWARZ TRADE BANK</h2>
        <p class="dev"><i class="fa-solid fa-location-dot"></i>
            No 98, Jogunosimi street Ikeja, Lagos State, Nigeria.<br> <br>
            </i>Landline Phone number (234) 70352 35719
        </p>
    </div>
    <div class="db">
        <h5 class="yy">CONTACTS</h5>
        <p class="dev">
            If you have any questions, please contact us  <br>using any of the following channels:
        </p>
        <div class="logochat">
            <a href="#"><img src="./images/whatsappicon.png"></a>
            <a href="#"><img src="./images/vibericon.png"></a>
            <a href="#"><img src="./images/telegramicon.png"></a>
            <a href="#"><img src="./images/skypeicon.png"></a>
            <a href="mailto:info@kwarz.com"><img src="./images/mailicon.png"></a>
        </div>
        
    </div>
    
</div>

<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.2918039286214!2d3.3524625422619634!3d6.6106184775544055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b93cb59860de1%3A0x6ddfe483fdd6054!2s20%20Jogunosimi%20St%2C%20Alausa%20101233%2C%20Lagos!5e0!3m2!1sen!2sng!4v1646525246798!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

<div class="first-dive11">
    <div class="double">
        
        <h5 class="yy">CUSTOMER SUPPORT</h5>
        <p class="dev">
            If you experiencing any difficulties using our Services,<br><br> please get in touch by filling in the form below, or by sending<br> us an email at support@kwarztradebank.com
        </p>
    </div>
    <div class="db">
        <h5 class="yy">HELP US IMPROVE OUR SERVICES</h5>
        <p class="dev">
            We are continually striving to provide high quality <br><br>service to every one of our customers. You can provide you feedback by<br> contacting us at info@kwarztradebank.com
        </p>
        
    </div>
    
</div>


</div>
</br>
</br>


  

<div class="question">
  <h2>QUICK CONTACT</h2>
  <h1>Use this form to send us a message and we will get back to you within 24 hours:</h1>
  
<div class="hero">
  <form>
    <div class="row">
      <div class="input-group">
        <input type="text" id="name" required>
        <label for="name"><i class="fa-solid fa-user"></i> Your name</label>
      </div>
      <div class="input-group">
        <input type="email" id="email" required>
        <label for="email"><i class="fa-solid fa-envelope"></i> Email Id</label>
      </div>
    </div>
    <div class="input-group">
      <input type="text" id="name" required>
      <label for="name">Subject</label>
    </div>
    <div class="input-group">
      <textarea id="message" rows="8" required></textarea>
      <label for="message">Your Message</label>
    </div>
    <button type="submit" class="sub">SUBMIT</button>
  </form>
</div>
</div>

<div class="double1">
        
    <h5 class="yy1">CUSTOMER SUPPORT</h5><br>
    <p class="ev">
        If you are dissatisfied with any aspect of our service, you may wish to make a more formal complaint.<br><br>

        We take all the complaints we receive very seriously and do our best to work with our customers to sort them out as soon as possible after they are brought to our attention.<br><br>

        We ask that you give us the details of your complaint within 12 months of the incident, or within 12 months of you becoming aware of the problem, by sending us an email at complaint@kwarztradebank.com. We will respond to your concerns considerately, quickly and as effectively as possible.
    </p>

</div>


<h3 class="futter-h3">KWARZ TRADE BANK </h3>
<h5 class="sub">Subsidiary of THEMISA EXCHANGE</h5>
  

</br>
</br>
<P class="copy">&copy;2020 KWARZ TRADE BANK. All Rights Reserved. Website designed by Tobez. </P>
</br>




</body>
</html>
