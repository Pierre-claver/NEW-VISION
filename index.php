<?php
session_start();
if (!empty($_SESSION['admin'])&&!empty($_SESSION['type'])) {
	header("Location: admin/");
}
elseif (!empty($_SESSION['laboratory'])&&!empty($_SESSION['type'])) {
	header("Location: laboratory/");
}
elseif (!empty($_SESSION['doctor'])&&!empty($_SESSION['type'])) {
	header("Location: doctor/");
}
elseif (!empty($_SESSION['reception'])&&!empty($_SESSION['type'])) {
	header("Location: reception/");
}
elseif (!empty($_SESSION['bursar'])&&!empty($_SESSION['type'])) {
	header("Location: reception/");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>System de Gestion Hospitaliere - Login</title>
	<style type="text/css">
	body
	{
		background-color: #8fbc8f;
	}
		.wrapper
		{
			height: 250px;
			width: 55.4%;
			min-width: 11.8em;
			border: 1px solid #C2C5BA;
			box-shadow: 3px 3px 3px #333;
			margin: 0 auto;
			margin-top: 150px;
		}
		.left
		{
			height: 170px;
			width: 57.1%;
			min-width: 7.67em;
			background-image: url(medi.jpg);
			color: Black;
			border-right: 1px solid #;
			float: left;
			font-family: elephant;
			font-size: 25px;
			text-align:center;
			text-shadow: 3px 3px 3px #333;
			padding-top: 80px;
		}
		.right
		{
			height: 250px;
			width: 42.7%;
			min-width: 12em;
			background-color: white;
			float: left;
			text-align: center;
			font-family: Arial;
		}
		.right h3{
			font-family: elephant;

			text-shadow: 2px 2px 2px #333;
		}
		hr
		{
			border-bottom: 1px solid #ccc;
			border-top: 1px solid white;
		}
		.input
		{
			height: 30px;
			width: 80%;
			padding-left: 2%;
		}
		.btn
		{
			height: 35px;
			width: 90%;
			border: 0;
			background-color: #408080;
			margin: 0;
			color: white;
			font-weight: bold;
			cursor: pointer;
		}
		.btn:hover{
			font-size: 20px;
			background: #4169E1;
			font-family: elephant;
			font-style: italic;
			transition: ease 0.5s;
		}
	</style>
</head>
<body> <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
	<?php print date("l, F j, Y h:m:s a", strtotime("+3 hours"));
		?> >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
<div class="wrapper">
	<div class="left">
		System de Gestion Hospitaliere <br><br>
	</div>
	<div class="right">
		<h3>Connectez-vous ici</h3><hr>
		<form action="index.php" method="post">
			<input type="text" class="input" name="username" placeholder="Entrez le nom d'utilisateur"><br><br>
			<input type="password" class="input" name="password" placeholder="Entrez le mot de password"><br><br>
			<input type="submit" class="btn" name="btn" value="Entrer"><br>
		</form>
<?php
		extract($_POST);
		if (isset($btn) && !empty($username) && !empty($password)) {
			require 'includes/users.php';
		 	login();
		 }
		 ?>
	</div>
</div>
</body>
</html>
