<?php

echo '<!DOCTYPE html>
<html>
  <head>
      
    <title>'.$name.'</title>
  
    <link rel="stylesheet" href="includes/header_style.css">
    <link rel="shortcut icon" type="image/svg" href="images/icon.svg">

    <meta charset="UTF-8">    <meta name="description" content="Personal Webpage">
    <meta name="keywords" content="Emerson, Schnipke">
    <meta name="author" content="Emerson Schnipke">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
  </head>

  <body>
    <div class="head-nav">

    <header> 

      <a class="logo" href="index.php">
        <h1 class="title header-title">Emerson Schnipke</h1>
        <h1 class="title header-title-short">Emerson</h1>
      </a>


      <nav> 
        <ul class="navbar-menu">
          <li> <a class="navbar-item" href="index.php">About Me</a> </li>
          <li> <a class="navbar-item" href="work.php">Resume</a> </li>
          <li> <a class="navbar-item" href="mailto:schnipke.90@buckeyemail.osu.edu">Email</a> </li>
        </ul>
        <a class="hamburger" onclick="navFunction()"><img src="images/hamburger.png"></a>
      </nav>

    </header>

    <ul class="verticle-nav" id="vnav">
      <li> <a class="verticle-navbar-item" href="index.php">About Me</a> </li>
      <li> <a class="verticle-navbar-item" href="work.php">Resume</a> </li>
      <li> <a class="verticle-navbar-item" href="mailto:schnipke.90@buckeyemail.osu.edu">Email</a> </li>
    </ul>

    </div>

    <script>
      function navFunction() {
        var x = document.getElementById("vnav");
        if (x.className === "verticle-nav") {
          x.className += " responsive";
        } else {
          x.className = "verticle-nav";
        }
      }
    </script>

';