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
  <title>KWARZ TRADING BANK</title>
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

<div class="first-div">
    <h2>
      WELCOME TO KWARZ TRADE BANK
    </h2>

    <p class="welcome-note">
      We work on financial literacy, online banking and money management. We strive to get them the best interest rate.</br>
Nearly 2.5 billion people - half the world's adult population lack one of the  most basic amenities of modern life: </br>a virtual transactions.
    </p>

    <a href="#">LEARN MORE</a>

</div>

<div class="container">
      <!-- left sidebar -->
    <div class="left-sidebar">
        <img src="./images/handshakeicon.png">
        <h3 class="innovation">Innovation</h3>
        <P>Our business model provides new, better solutions for our clients needs.</P>
    </div>
      <!-- main content -->
    <div class="left-sidebar">
        <img src="./images/connectingicon.png">
        <h3 class="innovation">Efficiency</h3>
        <P>We cut cost and time for our clients by having our own global business network.</P>
    </div>
      <!-- right sidebar -->
    <div class="left-sidebar">
        <img src="./images/watchlisticon.png">
        <h3 class="innovation">Security</h3>
        <P>Our clients must complete all legal requirements, such as KYC and AML/CTF.</P>
    </div>
</div>
<div class="about-kwarz">
    <a href="about.php">LEARN MORE ABOUT KWARZ TRADE</a>
</div>
</br>
</br>

<div class="insite-cost">
  <div class="insite">
    <h4>FOR MTOs</h4>
    <h2>We offer competitive </h2>
    <h2> business solutions for Money</h2> <h2>Transfer Operators</h2>
    
    <ul class="zero-cost">
      <li>Zero Cost Payment Network</li></br>
      <li>No Pre Funding Payout Network</li></br>
      <li>Best Forex Rates</li>
    </ul>
    <a href="#" class="learn-more-second">LEARN MORE</a>
  </div>
  <div class="left-side-humanicon">
      <img src="./images/humanicon.png">
  </div>
</div>

<div class="partners">
  <div>
    <h1>OUR PARTNERS</h1>
  </div class="partners-image">
    <img src="./images/partner1.png">
    <img src="./images/partner2.png">
    <img src="./images/partner5.png">
    <img src="./images/partner4.png">
    <img src="./images/partner3.png">
    <img src="./images/partner6.png">
    <img src="./images/partner7.png">
    <img src="./images/partner8.png">
    <img src="./images/partner10.png">
    <img src="./images/partner11.png">
  </div>
</div>

<div class="insite-cost">
  <div class="left-side-humanicon2">
    <img src="./images/humanicon2.png">
</div>
  <div class="insite">
    <h4>For B2C</h4>
    <h2>Our business solutions for B2C</h2>
    <h2>are superior</h2>
    
    <ul class="zero-cost">
      <li>Payment Hub with low-cost transactions</li></br>
      <li>Competitive exchange rates</li></br>
      <li>Same-day transaction processing</li>
    </ul>
    <a href="#" class="learn-more-second">LEARN MORE</a>
  </div>
</div>
  <img src="./images/sumation.jpg" class="sumation">

<div class="question">
  <h2>HAVE A QUESTION?</h2>
  <h1>Send us a message and we will get back to you within 24 hours:</h1>
  
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


<h3 class="futter-h3">KWARZ TRADE BANK </h3>
<h5 class="sub">Subsidiary of THEMISA EXCHANGE</h5>
  

</br>
</br>
<P class="copy">&copy;2020 KWARZ TRADE BANK. All Rights Reserved. Website designed by Tobez. </P>
</br>




</body>
</html>
