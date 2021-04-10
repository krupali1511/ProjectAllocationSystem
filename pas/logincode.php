<?php
	
	session_start();
	include "connection.php";

	if(isset($_POST['id']))
	{
	$id=$_POST['id'];
	$password=$_POST['pwd'];
	$user = $_POST['user'];


	if($user == "student"){
	$q="select * from student where s_id='$id' AND password='$password'";
	$_SESSION['loc'] = "StudentdashBoard.php";
}

	if($user == "faculty"){
	$q="select * from faculty where f_id='$id' AND password='$password'";
	$_SESSION['loc'] = "FacultydashBoard.php";
}
	$res=mysqli_query($conn,$q);
	$count=mysqli_fetch_row($res);
	
	if($count<=0)
	{
    	header('Location:index.php');
	}
	else
	{
		$loc = $_SESSION['loc'];
    	$_SESSION['id']=$id;
    	header("Location:$loc");

	}

}

?>
