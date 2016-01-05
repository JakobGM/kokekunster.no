// Returns cookie value with specified name
function getCookie(name) {
  var value = "; " + document.cookie;
  var parts = value.split("; " + name + "=");

  if (parts.length == 2)
    return parts.pop().split(";").shift();
}

// Redirects if valid semester cookie is found
function cookieRedirect() {
    var semester = getCookie("semester");
    if(semester !== undefined) {
      if(semester <= 6 && semester >= 1) {
        window.location.href = '/' + semester + 'semester.php';
      }
    }
}

// Sets value of the semester cookie
function semesterChoice(choice) {
  document.cookie="semester=" + choice + "; expires=Thu, 30 Jun 2016 12:00:00 UTC";
  window.location.href = '/' + choice + 'semester.php';
}

// Deletes the semester cookie
function deleteSemester() {
  document.cookie = "semester=; expires=Thu, 01 Jan 1970 00:00:01 GMT;";
  window.location.href = '/index.php'
}
