<?php

include "fHeader.php";

if(isset($_SESSION['project'])){

if($_SESSION['project']==1){
	echo "<script>alert('Project is added.')</script>";
}
if($_SESSION['project']==2){
	echo "<script>alert('Some error occured.')</script>";
}

unset($_SESSION['project']);
}

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
      <a href="showProjects.php"><button style="background-color: darkblue;color: white;border-radius: 5px;height: 50px;margin-top: 10px;margin-bottom: 10px;padding-left: 15px;padding-right: 15px;padding-top: 15px;padding-bottom: 15px">Show Definitions</button></a>

      <br><br>
        <h1>Add Definition</h1>
        <br>
        <form action="codeProjects.php" method="post">
        	<input type="text" name="title" placeholder="Enter title">
        	<textarea name="desc" placeholder="Enter description" rows="4" cols="50"></textarea>
        	<label>Select last date :</label>
        	<input type="date" name="lastDate">
        	<label>Select minimum students :</label>
        	<input type="number" name="min" value="0">
        	<label>Select maximum students :</label>
        	<input type="number" name="max" value="0">

        	<input type="submit" value="Add">
        </form>	

         
      <div class="clear"></div>
    </div>
  </div>
</div>

<?php

include "fFooter.php";

?>