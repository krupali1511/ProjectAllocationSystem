<?php

include "header.php";
include "connection.php";

  $id = $_SESSION['id'];
  
  
  
?>

<br><br><br>
<div class="w3l-index-block1">
  <div class="content py-5">
    <div class="container">
      <div class="row align-items-center py-md-5 py-3">
        <div class="col-md-5 content-left pt-md-0 pt-5">

<?php
$date = date('Y-m-d');
  $q= "select * from definition";
  $r=mysqli_query($conn,$q);
  if(mysqli_num_rows($r)>0){
    while($row=mysqli_fetch_array($r)){
       
        $date2 = $row['date'];
    }
  }
   	if($date<=$date2)
    {

?>	

          
        </div>
        <div class="col-md-7 content-photo mt-md-0 mt-5">
          
        </div>

      </div>

      <h1>Definition List</h1><br><br>
      <table id="customers">
      	<tr>
      		<th>Definition ID</th>
      		<th>Definition Title</th>
      		<th>Definition Description</th>
      	</tr>
      	<?php

      		$q="select * from definition";
      		$r=mysqli_query($conn,$q);
      		if(mysqli_num_rows($r)>0){
    			while($row=mysqli_fetch_array($r)){
      	?>

      	<tr>
      		<td><?php echo $row['def_id']; ?></td>
      		<td><?php echo $row['def_title']; ?></td>
      		<td><?php echo $row['def_desc']; ?></td>
      	</tr>
      <?php }} ?>
      </table><br><br>
      <hr>
          <h1>Make your team</h1><br>
          <!--<p class="mt-3 mb-md-5 mb-4">Making use of the respective industries and our team works. Build an online presence with this professional 
            bootstrap 4 template.</p>-->
          <a href="team.php" class="btn btn-primary btn-theme">Make</a>
      <hr>
      <br>
        <h1>Give us suggestion</h1>
        <br>
        <form action="sendMail.php" method="post">
        	<input type="text" name="title" placeholder="Enter title">
        	<textarea name="desc" placeholder="Enter description" rows="4" cols="50"></textarea>
        	<input type="submit" value="Send Email">
        </form>

         <?php 
 }

else{

 ?>
 <h1>Faculty will add project list soon .....</h1><br>   
 <?php
}
 ?>
      <div class="clear"></div>
    </div>
  </div>
</div>

<?php

include "footer.php";



?>