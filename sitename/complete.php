<?php include 'includs/connect.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>sitename</title>
	<link rel="stylesheet" type="text/css" href="css/CSS.css">
</head>
<body>
<?php include 'includs/header.php'?>
<nav>
	 <ul>
		 <li><a href="index.php">Назад на главную</a></li>
	 </ul>
</nav>
<?php 
$email = $_GET['email']; 
$whyme = $_GET['text'];
$newcomment = mysqli_query($connection, "INSERT INTO `newadmin` (`email`, `text`) VALUES ('$email', '$whyme')")
?>

<div class="comment"><h2>Ваша заявка отправлена на рассмотрение</h2></br>
</body>
</html>