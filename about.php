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

<div class="first-dive">
    <h1>
      ABOUT KWARZ TRADE BANK THEMISA EXCHANGE
    </h1>
    <h5>KWARZ TRADE BANK</h5>
    <h2>We are a Subsidiary of Themisa Exchange <br>Services organisation</h2>
    <p class="welcome-note">
        Providing our clients with Online banking, international currency exchange and money remittance services since 2021.
        Kwarz Trade Bank registered on 14 June 2021 under registration no. XXXXXXX, having its registered address at: Lagos State, Nigeria.<br> <br>The Company is a licensed Online banking service operator since 2021, providing online banking, remittance and foreign exchange services under Money Service Operator. Kwarz aims to leverage technology to disrupt the existing financial system with a mission to help solving one of the worlds more pressing problem  making financial services more accessible and available to everyone. <br><br>We strive to provide individuals and companies around the globe with an opportunity to send cross-border remittances in cheap, fast and convenient manner.
    </p>


</div>
<img src="./images/currency2.jpg" class="sumation">

<div class="container">
      <!-- left sidebar -->
    <div class="left-side">
        <img src="./images/EUROPE-MAP.png">
        <h3 class="innovations">Europe</h3>
        <div class="list">
          <ul class="sublist">
            <li>Belgium</li>
            <li>England</li>
            <li>Finland</li>
            <li>France</li>
            <li>Germany</li>
            <li>Italy</li>
            <li>Lithuania</li>
            <li>Norway</li>
            <li>Poland</li>
            <li>Portugal</li>
            <li>Spain</li>
            <li>Sweden</li>
          </ul>
        </div>
    </div>
      <!-- main content -->
    <div class="left-side">
        <img src="./images/AFRICA-MAP.png">
        <h3 class="innovations">Africa</h3>
        <div class="list">
          <ul class="sublist">
            <li>Benin</li>
            <li>Burkina Faso</li>
            <li>Cameroon</li>
            <li>Guinea Conakry</li>
            <li>Ivory Coast</li>
            <li>Niger</li>
            <li>Nigeria</li>
            <li>Senegal</li>
            <li>Burkina Faso</li>
          </ul>
        </div>
    </div>
      <!-- right sidebar -->
    <div class="left-side">
        <img src="./images/LATAM-MAP.png">
        <h3 class="innovations">Latin America</h3>
        <div class="list">
          <ul class="sublist">
            <li>Argentina</li>
            <li>Brazil</li>
            <li>Colombia</li>
            <li>Uruguay</li>
          </ul>
        </div>
    </div>
</div>
</br>
</br>

<div class="insite-cost">
  <div class="insite">
    <h4>FOR MTOs</h4>
    <h2>We offer competitive </h2>
    <h2> business solutions for Money</h2> <h2>Transfer Operators</h2>
  </br>
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
  </br>
    <ul class="zero-cost">
      <li>Payment Hub with low-cost transactions</li></br>
      <li>Competitive exchange rates</li></br>
      <li>Same-day transaction processing</li>
    </ul>
    <a href="#" class="learn-more-second">LEARN MORE</a>
  </div>
</div>
  <img src="./images/card transact.jpg" class="sumation">  
  

<div class="question">
  <h2>LOOKING FOR A CAREER?</h2>
  <p>KWARZ TRADE LIMITED is a fast growing global Bank with many exciting job opportunities for professionals around the world.<br><br>
    If you are interested in our open vacancies, please use form below to get in touch with our HR department.</p>
  
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
