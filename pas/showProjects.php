<?php

include "fHeader.php";
include "connection.php";

?>

<br><br><br>
<div class="w3l-index-block1">
  <div class="content py-5">
    <div class="container">
      <div class="row align-items-center py-md-5 py-3">
        <div class="col-md-5 content-left pt-md-0 pt-5">
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

      <div class="clear"></div>
    </div>
  </div>
</div>

<?php

include "fFooter.php";
?>