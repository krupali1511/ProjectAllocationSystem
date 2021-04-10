<?php

session_start();
include "connection.php";

$title = $_POST['title'];
$desc = $_POST['desc'];
$date = $_POST['lastDate'];
$min = $_POST['min'];
$max = $_POST['max'];

$q = "insert into definition values(null,'$title','$desc','$date','$min','$max')";
$r=mysqli_query($conn,$q);
if($r){
	$_SESSION['project'] = 1;

}
else{
	$_SESSION['project'] = 2;
}

header("Location:Addprojects.php");

?>