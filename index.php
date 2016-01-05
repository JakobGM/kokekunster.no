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


<script src="/redirect.js"></script>
<script>
cookieRedirect(); // Redirects if proper semester cookie is found
</script>


<!-- The main content. Consists of images, headlines and paragraphs -->

<h1 class="semester"> Velg ditt semester: <br></h1>

<br>

<p class="semester"><img src="/img/fp_link.svg" alt="kalender"> 1024 kalendernavn:
<b>
<script>
var calendarName = getCookie("calendarName");

document.write("<a onclick=\"changeCalendarName()\" href=\"#\">")

if (calendarName == undefined || calendarName === "") {
  document.write("(trykk her)")
}
else {
  document.write(getCookie("calendarName"))
}
document.write("</a>");
</script>
</b>

</p>

<div class="wrap content semester">
  <article>
    <a class="kategori semester" onclick="semesterChoice(1)" href="#"><img src="/img/Rank1.svg" alt="Brigadier general"><h2>1.&nbsp;Semester</h2></a>
  </article>

  <article>
    <a class="kategori semester" onclick="semesterChoice(2)" href="#"><img src="/img/Rank2.svg" alt="Major general"><h2>2.&nbsp;Semester</h2></a>
  </article>

  <article>
    <a class="kategori semester" onclick="semesterChoice(3)" href="#"><img src="/img/Rank3.svg" alt="Lieutenant general"><h2>3.&nbsp;Semester</h2></a>
  </article>

  <article>
    <a class="kategori semester" onclick="semesterChoice(4)" href="#"><img src="/img/Rank4.svg" alt="Staff Sergeant"><h2>4.&nbsp;Semester</h2></a>
  </article>

<!-- Her ligger koden klar for neste semester
  <article>
    <a class="kategori semester" onclick="semesterChoice(5)" href="#"><img src="/img/Rank5.svg" alt="Master Sergeant"><h2>5.&nbsp;Semester</h2></a>
  </article>

  <article>
    <a class="kategori semester" onclick="semesterChoice(6)" href="#"><img src="/img/Rank6.svg" alt="First Sergeant"><h2>6.&nbsp;Semester</h2></a>
  </article>
-->
</div>

</body>
</html>
