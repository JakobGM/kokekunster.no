<?php
if(!isset($_POST['submit']))
{
  //This page should not be accessed directly. The user needs to submit the form
  echo '<script type="text/javascript">
        alert("Ingen adgang! Du må trykke \"send inn forslag\"-knappen på filforespørselsiden. Du vil bli videresendt dit nå.");
        window.location.href= "/request.php" ;
        </script>';
  exit;
}
else
{
	//Email composition
	$to = 'kokekunster@gmail.com';
	$subject = 'New file request from Kokekunster.no';

	$message = strip_tags($_POST['title']);
  $category = strip_tags($_POST['category']);
  $description = strip_tags($_POST['description']);
	$attachment = chunk_split(base64_encode(file_get_contents($_FILES['file']['tmp_name'])));
	$filename = $_FILES['file']['name'];

  //Checking for mandatory form fields, since some browsers ignore the HTML "required" tag (Safari for instance)
  if(empty($message)||empty($filename))
  {
    echo '<script type="text/javascript">
    alert("Tittel og fil er påkrevde felt for skjemaet!");
    window.location.href= "/request.php" ;
    </script>';
    exit;
  }

	$boundary =md5(date('r', time()));

	$headers = "From: filerequest@silicon.kokekunster.no\r\nReply-To: filerequest@silicon.kokekunster.no";
	$headers .= "\r\nMIME-Version: 1.0\r\nContent-Type: multipart/mixed; boundary=\"_1_$boundary\"";

	$message="This is a multi-part message in MIME format.

--_1_$boundary
Content-Type: multipart/alternative; boundary=\"_2_$boundary\"

--_2_$boundary
Content-Type: text/plain; charset=\"iso-8859-1\"
Content-Transfer-Encoding: 7bit

Title:               $message
Topic / Category:    $category
Description:         $description

--_2_$boundary--
--_1_$boundary
Content-Type: application/octet-stream; name=\"$filename\"
Content-Transfer-Encoding: base64
Content-Disposition: attachment

$attachment
--_1_$boundary--";

mail($to, $subject, $message, $headers);

//Redirect to thank you page
echo '<script type="text/javascript">
alert("Takk! Forslaget vil bli tatt til betraktning, og evt. implementert innen ca. 5 dager.");
window.location.href= "/index.php" ;
</script>';
exit;
    }
?>
