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
Sjekker om cookie eksisterer, redirecter hvis, eller setter ønsked redirect hvis ikke
*/
function getCookie(name) {
  var value = "; " + document.cookie;
  var parts = value.split("; " + name + "=");

  if (parts.length == 2)
    return parts.pop().split(";").shift();
}

function semestervalg() {
    var semester = getCookie("semester");

    if(semester == null) {
      // Få bruker til å velge foretrukket semester;
      do{
        var semester = parseInt(window.prompt("Hvilket semester ønsker du å ha som din hjemmeside? (Tast inn 1 til 3)", ""), 10);
      }while(isNaN(semester) || semester > 3 || semester < 1);
      document.cookie="semester=" + semester;
      window.location.href = '/' + semester + 'semester.php';
    }
    else if (window.location.pathname.charAt(1) !== semester){
      window.location.href = '/' + semester + 'semester.php';
    }
}

semestervalg();

</script>

</body>
</html>
