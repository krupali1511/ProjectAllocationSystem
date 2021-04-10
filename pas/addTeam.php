<?php

session_start();
include "connection.php";

$q= "select * from definition";
  $r=mysqli_query($conn,$q);
  if(mysqli_num_rows($r)>0){
    while($row=mysqli_fetch_array($r)){
        $min = $row['project_min'];
        $max = $row['project_max'];
    }
  }

// get values from team.php

$team=array();

for($i=1;$i<=$max;$i++){
	if(isset($_POST['team'.$i])){
		$team[$i]=$_POST['team'.$i];
	}
}
$def = $_POST['def_id'];

// over

// get last listid 
$q = "select lid from list order by lid desc limit 1";
$r = mysqli_query($conn,$q);

if(mysqli_num_rows($r)>0){
    while($row=mysqli_fetch_array($r)){
        $lid = $row['lid'];
    }
  }

	$lid = $lid + 1;

$user = $_SESSION['id'];

$q = "insert into list values('$lid','$user')";
$r=mysqli_query($conn,$q);

for($i=0;$i<count($team);$i++)
{
	if($team[$i]!=null)
	{
		
		$q = "insert into list values('$lid','$team[$i]')";
		$r=mysqli_query($conn,$q);
	}
}

$q = "INSERT INTO `team`(`tid`, `leader_id`, `lid`, `def_if`) VALUES (null,'$user','$lid','$def')";
$r=mysqli_query($conn,$q);

if($r){
	$_SESSION['check'] = 1;
	header("Location:status.php");
}
else{
	echo "Server problem occured...";
}



?>