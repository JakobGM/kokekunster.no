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
* Function that tracks a click on an outbound link in Google Analytics.
* This function takes a valid URL string as an argument, and uses that URL string
* as the event label.
*/
var trackOutboundLink = function(url) {
  ga('send', 'event', 'outbound', 'click', url, {'hitCallback':
  function () {
    document.location = url;
  }
});
}
</script>

<script>
/**
Sjekker om cookie eksisterer, redirecter hvis, eller setter ønsked redirect hvis ikke
*/
function getCookie(name) {
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    }
    else
    {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
        end = dc.length;
        }
    }
    return unescape(dc.substring(begin + prefix.length, end));
}

function semestervalg() {
    var semester = getCookie("semester");

    if(semester == null) {
      // Få bruker til å velge foretrukket semester;
      do{
        var semester = parseInt(window.prompt("Vennligst velg ditt semester (1-3)", ""), 10);
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
