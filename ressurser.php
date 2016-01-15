<article>
  <a class="kategori" href="http://instabart.no/"><img src="/img/ressurser_logo.svg" alt="Tannhjul"><h2>Ressurser</h2></a>
  <ul>
    <li class="itl"><a href="https://sats.itea.ntnu.no/sso-wrapper/web/wrapper?target=itslearning">itslearning</a></li>
    <li class="epost"><a href="https://outlook.office365.com/owa/?realm=ntnu.no#path=/mail">Studentepost</a></li>
    <li class="wolframalpha"><a href="http://www.wolframalpha.com/">WolframAlpha</a></li>
    <li class="symbolab"><a href="https://www.symbolab.com/">Symbolab</a></li>

    <!-- Only adding software on 1st semester page (90% of traffic) -->
    <script>
    if (getCookie("semester") == 1) {
      document.write("<li class='software'><a href='https://software.ntnu.no/'>Programvare</a></li>")
    }
    </script>

    <!-- Only adding software on 1st semester page (90% of traffic) -->
    <script>
    if (getCookie("semester") == 2) {
      document.write("<li class='fp'><a href='https://docs.google.com/spreadsheets/d/10kku46KjD8DjeXTRMRRYGJeOvNbmu_BFJXi8hrxosXQ/edit?usp=sharing'>Frister</a></li>")
    }
    </script>

    <li class="request"><a href="/request.php">Legg til / endre lenke</a></li>
  </ul>
</article>

<article>
  <a class="kategori" href="http://www.nabla.no"><img src="/img/nabla_logo.svg" alt="Nabla"><h2>Annet</h2></a>
  <ul>
    <li class="fp"><a onclick="calendarRedirect()" href="#">1024-kalender</a></li>
    <li class="ntnu"><a href="http://studentweb.ntnu.no">StudentWeb</a></li>
    <li class="wikipendium"><a href="https://www.wikipendium.no/">Wikipendium</a></li>
    <li class="fb"><a href="https://www.facebook.com/groups/2248934869/?fref=ts">FYSMATs Facebook-gruppe</a></li>
    <li class="middag"><a href="https://www.sit.no/en/middag/realfag">Realfagskantina</a></li>
    <li class="bartebuss"><a href="http://bartebuss.no/">Bartebuss</a></li>
  </ul>
</article>
