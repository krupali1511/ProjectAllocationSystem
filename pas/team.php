<?php


include "connection.php";	
include "header.php";

$q= "select * from definition";
  $r=mysqli_query($conn,$q);
  if(mysqli_num_rows($r)>0){
    while($row=mysqli_fetch_array($r)){
        $min = $row['project_min'];
        $max = $row['project_max'];
    }
  }

?>
<br>
<br>
<br>
<!-- index-block1 -->
<div class="w3l-index-block1">
  <div class="content py-5">
    <div class="container">
      <div class="row align-items-center py-md-5 py-3">
        <div class="col-md-5 content-left pt-md-0 pt-5">
          
          <!--<p class="mt-3 mb-md-5 mb-4">Making use of the respective industries and our team works. Build an online presence with this professional 
            bootstrap 4 template.</p>-->
          <form action="addTeam.php" method="post">
          	<h1>Defination ID</h1><br>
          	<label>Select Definition ID :</label>
          	<select name="def_id">
          		<?php

          			$q="SELECT def_id from definition where def_id NOT IN (SELECT def_if FROM team)";
          			$r=mysqli_query($conn,$q);
          			if(mysqli_num_rows($r)>0){
    				while($row=mysqli_fetch_array($r)){
    					
          		?>
          		<option value="<?php echo $row['def_id']; ?>" selected><?php echo $row['def_id']; ?></option>
          	<?php }} ?>
          	</select>
          	<h1>Enter your partner's ID</h1><br>
        	<?php
        		
        		$c=1;
        		$ch=$max-$min;
        		for($i=1;$i<=$min;$i++)
        		{
        			
        	?>
        	<input type="text" name="<?php echo "team".$c; ?>" placeholder="<?php echo "Student ID ".$c; ?>" required>
        	<?php
        		$c++;
        		}
        		for($j=1;$j<=$ch;$j++)
        		{
        	?>
        	<input type="text" name="<?php echo "team".$c; ?>" placeholder="<?php echo "Student ID ".$c; ?>">
        	<?php
        		$c++;
        		}
        	?>
        	<input type="submit" value="Make">
        		
        </form>
        </div>
        
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>

<?php

include "footer.php";


?>