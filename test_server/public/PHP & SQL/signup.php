<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['user'])){
    header('Location: index.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="icon" href="./media/tab-logo.jpeg">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
  <link rel="stylesheet" type='text/css' href='./stylesheet/style.css' />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  <title>Template</title>
</head>


<body>
  <div id="header">
  <header>
    <div class="logo-div">
      <h4 class="logo">Lights & <span>Shadows</span></h4>
    </div>
    <nav class="nav-links">
      <li><a class="nav-link" href="/about">About Us</a></li>
      <li><a class="nav-link" href="#">The Game</a></li>
      <li><a class="nav-link" href="/leaderboards">Leaderboards</a></li>
      <li><a class="nav-link" href="/login"><i class="fa fa-sign-in" aria-hidden="true"></i>
      </a></li>
    </nav>
  </header>
  </div>
  <div id= "container">
    <div id="main">
        <button id="gamebutton" type="button" onclick=myFunction()><span>Play Game!</span></button>
     <canvas id="canvas" width="400" height="300">No HTML5 canvas support</canvas>

    </div>
  </div>
  <div id="footer">
  <footer>
    <div class="footer">
      <div class="footer-content">
        <div class="footer-section about">
          <h1 class="logo-text">Lights & Shadows</h1>
          <p> A simple game where there are hiders and seekers. The objective is for the seeker to catch all hiders or
            the hiders evading the seeker till time runs out.</p>
        </div>
        <div class="footer-section links">
          <h1>Quick Links</h1>
          <br>
          <ul>
            <a href="/about">
              <li>About Us</li>
            </a>
            <a href="/leaderboards">
              <li>Leader Boards</li>
            </a>
            <a href="#">
              <li>Terms and Conditions</li>
            </a>
            <a href="#">
              <li>Credits</li>
            </a>
          </ul>
        </div>
        <div class="footer-section social-links">
          <h1>Contact Us</h1>
          <div class="contact">
            <span><i class="fa fa-phone"></i> &nbsp; 0506234176</span>
            <span><i class="fa fa-envelope"></i> &nbsp; lights&shadows@protonmail.com</span>
          </div>
          <div class="socials">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="https://www.twitch.tv/reformedmonty" target="_blank"><i class="fa fa-twitch"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  </div>
  <script src="./js/index.js"></script>
</body>

</html>