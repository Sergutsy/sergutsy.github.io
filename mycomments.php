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
		 <li><a href="index.php">Назад к комментариям</a></li>
	 </ul>
</nav>
<div class="comment">
<form action="mycomments.php">
	<label>Введите тот самый пароль, чтобы увидеть ваши комментарии</label>
	<input type="login" name="password">
	<input type="submit" value="Показать комментарии" class="sumbit">
</form>
</div>
<?php $password = $_GET['password']; 
$comments = mysqli_query($connection, "SELECT * FROM `comments` WHERE `password` = '$password'");
while ($com = mysqli_fetch_assoc($comments))
{
?>
<div class="comment">
		     <div class="user">
			     <div class="ava"></div>
			     <p class="Username"><?php echo $com['username']; ?></p>
			 </div>
			 <p class="data"><?php echo $com['date']; ?></p>
			 <div class="text">
			     <p><?php echo $com['text']; ?></p>
			 </div>	 
			 <div class="like">Нравится <p><?php echo $com['likes']; ?></p></div>    
		     <div class="like">Не нравится <p><?php echo $com['dislikes']; ?></p></div>
		 </div>

		 <?php if ($com['username'] != 0){?>
		 <div class="admin_comment">
		      <p><?php echo $com['comment']; ?></p>
		 </div><?php }
} ?>
</div>
</body>
</html>