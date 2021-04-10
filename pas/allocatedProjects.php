<?php

include "fHeader.php";
include "connection.php";

    

?>

<div class="w3l-index-block1">
  <div class="content py-5">
    <div class="container">

<br><br>
<table id=customers>
	<tr>
		<th>Team ID</th>
		<th>Definition Title</th>
		<th>Definition Description</th>
		<th>Students</th>
	</tr>
<?php

$q="select * from team";
  $r=mysqli_query($conn,$q);
  if(mysqli_num_rows($r)>0){
    while($row=mysqli_fetch_array($r)){
        $team = $row['tid'];
        $def_id = $row['def_if'];
        $lid=$row['lid'];
    

    $qu="select * from definition where def_id='$def_id'";
	$re=mysqli_query($conn,$qu);
  	if(mysqli_num_rows($re)>0){
    while($row1=mysqli_fetch_array($re)){
        $title = $row1['def_title'];
        $desc = $row1['def_desc'];


?>
	<tr>
		<td><?php echo $team; ?></td>
		<td><?php echo $title; ?></td>
		<td><?php echo $desc; ?></td>
		<td>
			<table id=customers>
			<tr>
				<th>Student ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone No.</th>
			</tr>
			
		<?php
			$q2="select * from list where lid='$lid'";
			$r2=mysqli_query($conn,$q2);
  			if(mysqli_num_rows($r2)>0){
    		while($row2=mysqli_fetch_array($r2)){
    		$sid=$row2['s_id'];
    		$q3="select * from student where s_id='$sid'";
    		$r3=mysqli_query($conn,$q3);
  			if(mysqli_num_rows($r3)>0){
    		while($row3=mysqli_fetch_array($r3)){

		?>
		<tr>
		
				<td><?php echo $row3['s_id']; ?></td> 
				<td><?php echo $row3['name']; ?></td>
				<td><?php echo $row3['email']; ?></td>
				<td><?php echo $row3['phone']; ?></td>
		</tr>
		
		<?php

	}}}}

		?>
		</table>
		</td>
		<?php

			}}}}

		?>
	</tr>
</table>
	
		
	</div>
</div><br>



</div>
</div>
</div>

<?php

include "fFooter.php";
?>