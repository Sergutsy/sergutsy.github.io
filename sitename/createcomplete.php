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
		 <li><a href="index.php">Назад к Комментариям</a></li>
	 </ul>
</nav>
<?php 
$username = $_GET['username'];
if($username == 0){$username = 'Аноним';} ;
$text = $_GET['comment'];
$date = date('Y-m-d');
$password = $_GET['password'];
$newcomment = mysqli_query($connection, "INSERT INTO `comments` (`username`, `text`,`date`,`password`) VALUES ('$username', '$text', '$date','$password')")
?>
<div class="comment"><h2>Ваш комментарий отправлен на рассмотрение</h2></br>
</div>
</body>
</html> 