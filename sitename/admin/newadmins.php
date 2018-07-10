<?php include '../includs/connect.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>sitename</title>
	<link rel="stylesheet" type="text/css" href="../css/CSS.css">
</head>
<body>
<?php include '../includs/header.php'?>
<nav>
		     <ul>
			     <li><a href="../index.php">Назад на главную</a></li>
				 <li><a href="activecomments.php">Активные комментарии</a></li>
				 <li><a href="newcomments.php">Неопубликованные комментарии</a></li>
			 </ul>
		 </nav>
<?php $comments = mysqli_query($connection, "SELECT * FROM `newadmin`");
while ($com = mysqli_fetch_assoc($comments))
{
?>
<div class="comment">
		     <div class="user">
			     <div class="ava"></div>
			     <p class="Username"><?php echo $com['email']; ?></p>
			 </div>
			 <div class="text">
			     <p><?php echo $com['text']; ?></p>
			 </div>
			 <form>
			 	<input type="submit" name="da" value="Одобрить">
			 </form>
			 <form>
			 	<input type="submit" name="net" value="Удалить">
			 </form>
</div>
			 <?php	 
} ?>
</body>
</html>