<nav>
  <div class="wrap">
    <ul>
      <li class="arkiv semestervalg"><a onclick="nyttsemester()" title="Bytt standard semester" href="#"><img class="tannhjul" src="/img/gear39.svg" alt="semestervalg"></a></li>
      <li><a href="/1semester.php"><span id="1semester">1. Semester</span></a></li>
      <li><a href="/2semester.php"><span id="2semester">2. Semester</span></a></li>
      <li><a href="/3semester.php"><span id="3semester">3. Semester</span></a></li>
      <li class="arkiv"><a id="arkiv" href="/arkiv/"><img src="/img/storfile98.svg" alt="arkiv">  Arkiv</a></li>
    </ul>
  </div>
</nav>

<script>

function nyttsemester() {
  document.cookie = "semester=; expires=Thu, 01 Jan 1970 00:00:01 GMT;";
  window.location.href = '/index.php'
}

</script>
