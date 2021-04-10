<?php
	
	session_start();
	include "connection.php";

	if(isset($_POST['id']))
	{
	$id=$_POST['id'];
	$password=$_POST['pwd'];
	$q="select * from student where s_id='$id' AND password='$password'";
	$res=mysqli_query($cn,$q);
	$count=mysqli_fetch_row($res);
	if($count<=0)
	{
    	header('Location:index.php');
	}
	else
	{
    	$_SESSION['login']=$id;
    	header('Location:StudentdashBoard.php');

	}

}

?>
