<!DOCTYPE html>
<html>
<head>
  <script src="platform.js"></script>
  <script src="linktracker.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kokekunster</title>

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

  <!-- Site navigation -->
  <?php
     $path = $_SERVER['DOCUMENT_ROOT'];
     $path .= "/navbar.php";
     include_once($path);
  ?>
  <script>
    document.getElementById('2semester').style.fontWeight = 'bold';
  </script>

  <!-- The main content. Consists of images, headlines and paragraphs -->
  <div class="wrap content">
    <article>
        <a class="kategori" href="https://wiki.math.ntnu.no/tma4105/2015v/start"><img src="/img/sinusoid1.svg" alt="Grafer"><h2>Matte 2</h2></a>
      <ul>
        <li class="fp"><a href="https://wiki.math.ntnu.no/tma4105/2015v/fremdriftsplan">Forelesningsplan</a></li>
        <li class="ov"><a href="https://www.math.ntnu.no/mapleta">Maple T.A.</a></li>
        <li class="lf"><a href="https://www.facebook.com/groups/1595115527375519/"><b>LF</b> til Maple T.A.</a></li>
        <li class="lf"><a href="http://folk.ntnu.no/grevsgar/Matte%201%20og%202/Calculus%20A%20Complete%20Course%206th%20Ed.%20Instructors%20Solution%20Manual.pdf"><b>LF</b> til Adams</a></li>
        <li class="eks"><a href="https://wiki.math.ntnu.no/tma4105/2012v/gml_eks">Eksamenssett (med <b>LF</b>)</a></li>
      </ul>
    </article>
    <article>
        <a class="kategori" href="https://wiki.math.ntnu.no/tma4115/2015v" class="matrix"><img src="/img/movie2.svg" alt="Matrix"><h2>Matte 3</h2></a>
      <ul>
        <li class="fp"><a href="https://wiki.math.ntnu.no/tma4115/2015v/plan">Forelesningsplan</a></li>
        <li class="ov"><a href="https://wiki.math.ntnu.no/tma4115/2015v/exercises">Øvingsoppgaver</a></li>
        <li class="bok"><a href="https://www.google.no/webhp?sourceid=chrome-instant&amp;ion=1&amp;espv=2&amp;ie=UTF-8#newwindow=1&amp;safe=off&amp;q=david+C.+Lay+linear+algebra+and+its+applications+.pdf&amp;spell=1">Boka</a></li>
        <li class="lf"><a href="/arkiv/2.Semester/TMA4115%20-%20Matte%203/Løsningsforslag%20til%20Lay/"><b>LF</b> til Lay</a></li>
        <li class="eks"><a href="https://wiki.math.ntnu.no/tma4110/2012h/examproblems">Eksamenssett (med <b>LF</b>)</a></li>
      </ul>
    </article>

    <article>
        <a class="kategori" href="http://home.phys.ntnu.no/brukdef/undervisning/tfy4155/"><img src="/img/magnet7.svg" alt="Magnet"><h2>Elektromagnetisme</h2></a>
      <ul>
        <li class="fp"><a href="http://home.phys.ntnu.no/brukdef/undervisning/tfy4155/fplan.html">Forelesningsplan</a></li>
        <li class="ov"><a href="http://home.phys.ntnu.no/brukdef/undervisning/tfy4155/ovinger/">Øvingsoppgaver</a></li>
        <li class="lf"><a href="/arkiv/2.Semester/TFY4155%20-%20Elektromagnetisme/"><b>LF</b> til øvingsoppgavene</a></li>
        <li class="eks"><a href="http://home.phys.ntnu.no/brukdef/undervisning/tfy4155/eksoppg/">Eksamenssett (med <b>LF</b>)</a></li>
      </ul>
    </article>

    <article>
        <a class="kategori" href="https://sats.itea.ntnu.no/sso-wrapper/web/wrapper?target=itslearning"><img src="/img/science33.svg" alt="Kjemiflasker i stativ"><h2>Kjemi</h2></a>
      <ul>
        <li class="fp"><a href="/ressurser/forelesningsplan.pdf">Forelesningsplan</a></li>
        <li class="fp"><a href="/ressurser/Program+labkurs+v2015.pdf">Program for labkurset</a></li>
        <li class="stoffkartotek"><a href="http://www.ntnu.no/stoffkartoteket/">Stoffkartotek</a></li>
        <li class="lf"><a href="/arkiv/2.Semester/TMT4110%20-%20Kjemi/"><b>LF</b> til øvingsoppgavene</a></li>
        <li class="eks"><a href="/arkiv/2.Semester/TMT4110%20-%20Kjemi/Tidligere%20Eksamensett/">Eksamenssett (med <b>LF</b>)</a></li>
      </ul>
    </article>

    <article>
        <a class="kategori" href="http://instabart.no/"><img src="/img/three115.svg" alt="Tannhjul"><h2>Ressurser</h2></a>
      <ul>
        <li class="itl"><a href="https://sats.itea.ntnu.no/sso-wrapper/web/wrapper?target=itslearning">itslearning</a></li>
        <li class="epost"><a href="https://webmail.stud.ntnu.no/">Studentepost</a></li>
        <li class="software"><a href="https://software.ntnu.no/">Programvare</a></li>
        <li class="farm"><a href="https://farm.ntnu.no/RDWeb/Pages/en-US/login.aspx?ReturnUrl=/RDWeb/Pages/en-US/Default.aspx">Programfarm</a></li>
        <li class="ibok"><a href="https://ibok.no/">iBok.no</a></li>
      </ul>
    </article>

    <article>
        <a class="kategori" href="https://www.nabla.no"><img src="/img/nabla.svg" alt="Nabla" class="desaturate"><h2>Fritid</h2></a>
      <ul>
        <li class="fb"><a href="https://www.facebook.com/groups/2248934869/?fref=ts">FYSMATs Facebook-gruppe</a></li>
        <li class="middag"><a href="https://www.sit.no/en/middag/realfag">Realfagskantina</a></li>
        <li class="bartebuss"><a href="http://bartebuss.no/">Bartebuss</a></li>
        <li class="samfundet"><a href="http://whatnow.no/events/kategori/by/trondheim/">Konserter i Trondheim</a></li>
      </ul>
    </article>

  </div>

</body>
</html>
