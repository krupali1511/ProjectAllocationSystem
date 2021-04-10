<?php

session_start();
include "connection.php";

$content1 = $_POST['title'];
$content2= $_POST['desc'];

$content=$content1." : ".$content2;
$subject = "Project Suggestion";

header("Location:https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=knmehta0@gmail.com&su=".$subject."&body=".$content."&ui=2&tf=1&pli=1");

//echo "<a href="."https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=&su=yoursubject&body=my-text&ui=2&tf=1&pli=1"."></a>"

?>