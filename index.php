<!DOCTYPE html>
<html>
<head>
<script src="platform.js"></script>
<script src="linktracker.js"></script>
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
     $path .= "/analytics.php";
     include_once($path);
  ?>

  <!-- The logo and the site name -->
  <?php
     $path = $_SERVER['DOCUMENT_ROOT'];
     $path .= "/header.php";
     include_once($path);
  ?>


<script>
/**
Sjekker om cookie eksisterer, redirecter hvis ja
*/
function getCookie(name) {
  var value = "; " + document.cookie;
  var parts = value.split("; " + name + "=");

  if (parts.length == 2)
    return parts.pop().split(";").shift();
}

function cookieRedirect() {
    var semester = getCookie("semester");
    if(semester !== undefined) {
      window.location.href = '/' + semester + 'semester.php';
    }
}

cookieRedirect();
</script>

<script>
/**
Mottar et kall når brukeren har valgt et semester. Lagres i cookie og redirectes deretter
**/
function semestervalg(valg) {
  document.cookie="semester=" + valg + "; expires=Thu, 31 Dec 2015 12:00:00 UTC";
  window.location.href = '/' + valg + 'semester.php';
}


</script>


<!-- The main content. Consists of images, headlines and paragraphs -->

<h1 class="semester"> Velg ditt semester: <br></h1> <p class="semester"><i>(Kan senere endres ved å trykke på <img src="/img/stort_gear39.svg" alt="tannhjul"> i navigasjonsmenyen)</i></p>

<div class="wrap content semester">
  <article>
    <a class="kategori semester" onclick="semestervalg(1)" href="#"><img src="/img/Rank1.svg" alt="Brigadier general"><h2>1.&nbsp;Semester</h2></a>
  </article>

  <article>
    <a class="kategori semester" onclick="semestervalg(2)" href="#"><img src="/img/Rank2.svg" alt="Major general"><h2>2.&nbsp;Semester</h2></a>
  </article>

  <article>
    <a class="kategori semester" onclick="semestervalg(3)" href="#"><img src="/img/Rank3.svg" alt="Lieutenant general"><h2>3.&nbsp;Semester</h2></a>
  </article>

  <article>
    <a class="kategori semester" onclick="semestervalg(4)" href="#"><img src="/img/Rank4.svg" alt="Staff Sergeant"><h2>4.&nbsp;Semester</h2></a>
  </article>

  <article>
    <a class="kategori semester" onclick="semestervalg(5)" href="#"><img src="/img/Rank5.svg" alt="Master Sergeant"><h2>5.&nbsp;Semester</h2></a>
  </article>

  <article>
    <a class="kategori semester" onclick="semestervalg(6)" href="#"><img src="/img/Rank6.svg" alt="First Sergeant"><h2>6.&nbsp;Semester</h2></a>
  </article>
</div>

</body>
</html>
