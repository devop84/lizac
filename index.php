﻿<!DOCTYPE html>

<html>

<head>


<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />



<meta name="title" content="LIZAC" />

<meta name="description" content=" Maison de Vacances"/>
    
<meta name="keywords" content="location, saisonnniere, maison de vacances, lizac, gers"/>

  
<link rel='stylesheet' href='stylesheet.css' type='text/css' />
  
<link rel='stylesheet' href='lightbox/lightbox.css' type='text/css' />
  
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  
<link href='https://fonts.googleapis.com/css?family=Dancing+Script:700' rel='stylesheet' type='text/css'>
  
<link href='https://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
  
<link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
  
<script type="text/javascript" src="lightbox/lightbox.js"></script>

  
  
<title>LIZAC - Maison de Vacances</title>
  

</head>




<body>

<center>
  <header>
    <a style="text-decoration:none;" href="index.php"><h1 style="text-decoration:none;">Lizac</h1></a>
    <p>Maison de Vacances !</p>
  </header>

  <nav id="top-menu1">
          <ul id="top-menu">
                <li><a href="index.php?p=presentation.php">Presentation</a></li>

                <li><a href="index.php?p=accessibilite.php">Accessibilite & Contacts</a></li>

                <li><a href="index.php?p=tarifs.php">Dates & Tarifs</a></li>
         </ul>
  </nav>

  <div id="content">


<?php

if(isset($_GET['p']) AND (($_GET['p'] == 'presentation.php'))) include $_GET['p'];

elseif(isset($_GET['p']) AND (($_GET['p'] == 'accessibilite.php'))) include $_GET['p'];

elseif(isset($_GET['p']) AND (($_GET['p'] == 'tarifs.php'))) include $_GET['p'];

else include 'presentation.php';

?>
  


</div>
  </center>
</body>
<div style="font-size:x-small; font-family:verdana;">
<center>
Developed by valentinpro © valentinpro.com
</center>
<br />
</div>
</html>
