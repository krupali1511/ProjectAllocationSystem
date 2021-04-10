<?php

session_start();
if(!isset($_SESSION['id']))
{

?>

<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Project Allocation</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<!-- bg effect -->
	<div id="bg">
		<canvas></canvas>
		<canvas></canvas>
		<canvas></canvas>
	</div>
	<!-- //bg effect -->
	<!-- title -->
	<h1>Login</h1>
	<!-- //title -->
	<!-- content -->
	<div class="sub-main-w3">
		<form action="logincode.php" method="post">
			<h2>Login Now
				<i class="fas fa-level-down-alt"></i>
			</h2>
			<div class="form-style-agile">
				<label>
					<i class="fas fa-user"></i>
					ID
				</label>
				<input placeholder="ID" name="id" type="text" required="">
			</div>
			<div class="form-style-agile">
				<label>
					<i class="fas fa-unlock-alt"></i>
					Password
				</label>
				<input placeholder="Password" name="pwd" type="password" required="">
			</div>
			<div class="form-style-agile">
				<label>
					<i class="fas fa-list"></i>
					Select
				</label><br>
				<select id='user' style="width: 100%;height: 80%" name="user">
					<option value="student" selected>Student</option>
					<option value="faculty">Faculty</option>
				</select>
			</div>
			
			<input type="submit" value="Log In">
		</form>
	</div>
	<!-- //content -->

	

	<!-- Jquery -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<!-- //Jquery -->

	<!-- effect js -->
	<script src="js/canva_moving_effect.js"></script>
	<!-- //effect js -->

</body>

</html>

<?php

}
else
{

$loc=$_SESSION['loc'];
header("Location:$loc");
}

?>
