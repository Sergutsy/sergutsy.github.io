<!DOCTYPE html>
<html>
<head>
	<title>sitename</title>
	<link rel="stylesheet" type="text/css" href="css/CSS.css">
</head>
<body>
<?php include 'includs/header.php'; include 'includs/connect.php' ?>
<nav>
		     <ul>
			     <li><a href="index.php">Назад к комментариям</a></li>
			 </ul>
		 </nav>

<div class="comment">
	<?php
	$login = $_GET['login'];
	$password = $_GET['password'];
	$log = mysqli_query($connection, "SELECT * FROM `admin` WHERE `login` = '$login' AND `password` = '$password'");
	if(mysqli_num_rows($log) == 0){
		echo '<h1>Неверный логин или пароль. Повторите попытку</h2>';
	} else {
		echo '<h1>Вы успешно вошли </h1> <br>'?> <a href="admin/activecomments.php"><h1> Ура! </h1> </a> <?php
	}
	?>
</div>

</body>
</html>