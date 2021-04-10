<?php


session_start();

if(isset($_SESSION['id']))
{
  $id = $_SESSION['id'];

?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Project Allocation</title>
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <style>
      
      input[type=text], select,input[type=date],input[type=number],textarea {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  
  background-color: darkblue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}


#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: darkblue;
  color: white;
}
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: right;
  width: 20%;
  padding: 10px;
}

/* Clear floats after the columns */
.row:after {
  
  display: table;
  margin: 20px;
  padding: 20px;
  

}


    </style>
  </head>
  <body>
<div class="w3l-bootstrap-header fixed-top">
  <nav class="navbar navbar-expand-lg navbar-light p-2">
    <div class="container">
      <a class="navbar-brand" href="index.php"><span class="fa fa-diamond"></span> Project Allocation</a>
      <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="FacultydashBoard.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Addprojects.php">Add Definitions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="showProjects.php">Show Definitions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Allocatedprojects.php">Allocated Projects</a>
          </li>
        </ul>
        <div class="form-inline">
            <?php

              if($id !=null)
              {
            ?>

            <a href="#login.html" class="btn btn-primary btn-theme"><?php echo $id; ?></a>&nbsp;
            <a href="logout.php" class="btn btn-primary btn-theme">Logout</a>

            <?php

              }
              else
              {

            ?>

            <a href="#login.html" class="btn btn-primary btn-theme">Login</a>            

            <?php }?>

        </div>
      </div>
    </div>
  </nav>
</div>

<?php

}
else{
  header("Location:index.php");
}
?>