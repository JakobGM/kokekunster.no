<nav>
  <div class="wrap">
    <ul>
      <li class="arkiv semestervalg"><a onclick="nyttsemester()" title="Bytt standard semester" href="#"><img class="tannhjul" src="/img/semestervalg_nav.svg" alt="semestervalg"></a></li>
      <li><a onclick="semestervalg(1)" href="#"><span id="1semester">1. Semester</span></a></li>
      <li><a onclick="semestervalg(2)" href="#"><span id="2semester">2. Semester</span></a></li>
      <li><a onclick="semestervalg(3)" href="#"><span id="3semester">3. Semester</span></a></li>
      <li class="arkiv"><a id="arkiv" href="/arkiv/"><img src="/img/arkiv_nav.svg" alt="arkiv">  Arkiv</a></li>
    </ul>
  </div>
</nav>

<script>

function nyttsemester() {
  document.cookie = "semester=; expires=Thu, 01 Jan 1970 00:00:01 GMT;";
  window.location.href = '/index.php'
}

</script>

<script>
/**
Mottar et kall når brukeren velger en semesterfane. Lagres i cookie og redirectes deretter.
**/
function semestervalg(valg) {
  document.cookie="semester=" + valg + "; expires=Thu, 30 Jun 2015 12:00:00 UTC";
  window.location.href = '/' + valg + 'semester.php';
}
</script>
