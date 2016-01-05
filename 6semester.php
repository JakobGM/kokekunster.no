<!DOCTYPE html>
<html>
<head>
<script src="/scripts/linktracker.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Kokekunster - Lenkeportalen for FYSMATere</title>

<!-- Specifies which css file to use -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,400italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="/style.css">

  <!-- Favicon import -->
  <?php
     $path = $_SERVER['DOCUMENT_ROOT'];
     $path .= "/favicon.php";
     include_once($path);
  ?>

  <!-- Analytics, inkluderer </head> og <body> -->
  <?php
     $path = $_SERVER['DOCUMENT_ROOT'];
     $path .= "/scripts/analytics.php";
     include_once($path);
  ?>

  <!-- The logo and the site name -->
  <?php
     $path = $_SERVER['DOCUMENT_ROOT'];
     $path .= "/header.php";
     include_once($path);
  ?>

  <!-- Site navigation -->
  <?php
     $path = $_SERVER['DOCUMENT_ROOT'];
     $path .= "/navbar.php";
     include_once($path);
  ?>
  <script>
    document.getElementById('3semester').style.fontWeight = 'bold';
    var arkivLink = document.getElementById('arkiv');
      arkivLink.setAttribute('href', '/arkiv/6.Semester/')
  </script>

  <!-- The main content. Consists of images, headlines and paragraphs -->
  <p class="underkonstruksjon"> Denne siden er enda ikke ferdigutviklet. Hvis det er noen som trenger en side for dette semesteret, så er det bare å ta kontakt <a href="mailto:kokekunster@gmail.com?Subject=Ønske%20om%20ekstra%20semester" target="_top">her</a>.</p>

  <div class="wrap content">

    <!-- Felles ressurser -->
    <?php
       $path = $_SERVER['DOCUMENT_ROOT'];
       $path .= "/ressurser.php";
       include_once($path);
    ?>

  </div>

  <!-- Disclaimer -->
  <?php
     $path = $_SERVER['DOCUMENT_ROOT'];
     $path .= "/disclaimer.php";
     include_once($path);
  ?>

    </body>
    </html>
