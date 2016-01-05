<?php
if(!isset($_POST['submit']))
{
  //This page should not be accessed directly. The user needs to submit the form
  echo '<script type="text/javascript">
        alert("Ingen adgang! Du må trykke \"send inn forslag\"-knappen på lenkeforespørselsiden. Du vil bli videresendt dit nå.");
        window.location.href= "/request.php" ;
        </script>';
  exit;
}
$title = $_POST['title'];
$category = $_POST['category'];
$url = $_POST['url'];
$description = $_POST['description'];

//Check mandatory fields
if(empty($url)||empty($title))
{
  echo '<script type="text/javascript">
  alert("Tittel og URL er påkrevde felt for skjemaet!");
  window.location.href= "/request.php" ;
  </script>';
  exit;
}

//Email content
$email_from = 'linkrequest@kokekunster.no';
$email_subject = "New link request from Kokekunster.no";
$email_body = "The following link has been requested: \n".
              "Title:            $title \n".
              "Topic / Category: $category \n".
              "URL:              $url \n".
              "Description:      $description";
$to = 'kokekunster@gmail.com';
$headers = "From: $email_from \r\n";

//Sending mail
mail($to,$email_subject,$email_body,$headers);

//Redirect to thank you page
echo '<script type="text/javascript">
alert("Takk! Forslaget vil bli tatt til betraktning, og evt. implementert innen ca. 5 dager.");
window.location.href= "/index.php" ;
</script>';
exit;

?>
