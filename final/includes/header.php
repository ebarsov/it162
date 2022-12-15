<?php include 'fp-config.php' ?>
<!DOCTYPE html>
<html>
<head>
<title> <?=$title?> </title>

<script src="https://use.fontawesome.com/999a4c9f36.js"></script>

<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/styles.css"/> 
</head>

   <body> 
      <!-- START WRAPPER -->
      <main class="wrapper">

         <header>
            <h1 class="header">Pampushka <img src="images/logo_pamp.png" class="pampushka"  alt="Pampushka"> Restaurant 
            <a href="index.php"><i class="logo_pamp.png <?=$logo?>"<?=$logo_color?>></i><img src="images/logo.png" class="pampushka"  alt="Pampushka"> </a></h1>
      
            <img src="images/banner.jpg" class="img-header"  alt="banner">
            <nav>
               <ul class="topnav" id="myTopnav">
               <?=makeLinks($nav1)?>
               <!--
                  <li><a href="index.php" class="selected">Home</a></li>
                  <li><a href="about.php">About</a></li>
                  <li><a href="menu.php">Menu</a></li>
                  <li><a href="reservations.php">Reservations</a></li>
                  <li><a href="contact.php">Contact</a></li>
               -->
                  <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
               </ul>
            </nav>
         </header>
         <!--header ends here-->