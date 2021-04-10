<?php


include "connection.php";


include "header.php";

  $q="select * from team";
  $r=mysqli_query($conn,$q);
  if(mysqli_num_rows($r)>0){
    while($row=mysqli_fetch_array($r)){
        $team = $row['tid'];
        $def_id = $row['def_if'];
        $lid=$row['lid'];
    }}

    $q="select * from definition where def_id='$def_id'";
	$r=mysqli_query($conn,$q);
  	if(mysqli_num_rows($r)>0){
    while($row=mysqli_fetch_array($r)){
        $title = $row['def_title'];
        $desc = $row['def_desc'];
    }}


      	



?>



<?php

if($_SESSION['check']!=null)
      	{
      		$check = $_SESSION['check'];
      		if($check == 1)
      			{echo "<script>alert('Your team is registered.')</script>"; }
  }


?>



<div class="w3l-index-block1">
  <div class="content py-5">
    <div class="container">

<br><br>
<h1>Your Status :</h1><br><br>
<div class="row" style="background-color: white">
	<div class="column" style="background-color: darkblue;color: white">
		<h4>Team ID :</h4>
	</div>
	<div class="column">
		<h4><?php echo $team; ?></h4>
	</div>
</div><br>
<div class="row" style="background-color: white">
	<div class="column" style="background-color: darkblue;color: white">
		<h4>Definition Title :</h4>
	</div>
	<div class="column">
		<h4><?php echo $title; ?></h4>
	</div>
</div><br>
<div class="row" style="background-color: white">
	<div class="column" style="background-color: darkblue;color: white">
		<h4>Definition Description</h4>
	</div>
	<div class="column">
		<h4><?php echo $desc; ?></h4>
	</div>
</div><br>

<div class="row" style="background-color: white">
	<div class="column" style="background-color: darkblue;color: white">
		<h4>Students</h4>
	</div>
	<div class="column">
		<table id=customers>
			<tr>
				<th>Student ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone No.</th>
			</tr>
			
		<?php
			$q="select * from list where lid='$lid'";
			$r=mysqli_query($conn,$q);
  	if(mysqli_num_rows($r)>0){
    while($row=mysqli_fetch_array($r)){
    	$sid=$row['s_id'];
    	$qu="select * from student where s_id='$sid'";
    	$re=mysqli_query($conn,$qu);
  		if(mysqli_num_rows($re)>0){
    	while($row1=mysqli_fetch_array($re)){

		?>
		<tr>
		
				<td><?php echo $row1['s_id']; ?></td> 
				<td><?php echo $row1['name']; ?></td>
				<td><?php echo $row1['email']; ?></td>
				<td><?php echo $row1['phone']; ?></td>
		</tr>
		
		<?php

	}}}}

		?>
		</table>
	</div>
</div><br>



</div>
</div>
</div>
<?php
include "footer.php";
?>