<!DOCTYPE html>
<html>
<head>
<script src="platform.js"></script>
<script src="linktracker.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Kokekunster - Lenkeportalen for FYSMATere</title>

<!-- Specifies which css file to use -->
<!-- Submit button styling with PureCSS.io -->
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
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
   $path .= "/analytics.php";
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

<div class="wrap content linkform">
<article>
  <img src="/img/linkform_logo.svg" alt="Lenke">
  <h2>Lenke</h2>
  <form method="post" name="content-request" action="link-form-to-email.php">
    <p>
      <label for='title'>Tittel<span style="color: grey;">*</span>: </label><br>
      <input type="text" name="title" required>
    </p>

    <p>
      <label for='category'>Fag / kategori (semester): </label><br>
      <input type="text" name="category">
    </p>

    <p>
      <label for='url'>URL<span style="color: grey;">*</span>: </label><br>
      <input type="text" name="url" required>
    </p>

    <p>
      <label for='description'>Beskrivelse: </label><br>
      <input type="text" name="description">
    </p>

    <p class="mandatory-notice" style="margin-top: -0.5em;">
      *Påkrevde feldt
    </p>

    <input class="pure-button" type="submit" value="Send inn lenkeforslag" name="submit">
  </form>
</article>

<article>
  <img src="/img/fileform_logo.svg" alt="Lenke">
  <h2>Fil</h2>
  <form enctype="multipart/form-data" method="post" name="file-request" action="file-form-to-email.php">
    <p>
      <label for='title'>Tittel<span style="color: grey;">*</span>: </label><br>
      <input type="text" name="title" required>
    </p>

    <p>
      <label for='category'>Fag / kategori (semester): </label><br>
      <input type="text" name="category">
    </p>

    <p>
      <label for='file'>Fil<span style="color: grey;">*</span>: </label><br>
      <input class="fileupload" type="file" name="file" required>
    </p>

    <p>
      <label for='description'>Beskrivelse: </label><br>
      <input class="description" type="text" name="description">
    </p>

    <p class="mandatory-notice" style="margin-top: -0.5em;">
      *Påkrevde feldt
    </p>

    <input class="pure-button" type="submit" value="Send inn filforslag" name="submit" id="submit">
  </form>
</article>

</div>

<!-- Disclaimer -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/disclaimer.php";
   include_once($path);
?>

  </body>
  </html>
