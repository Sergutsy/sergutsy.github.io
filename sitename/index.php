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
		 <li><a href="adminreg.php">Админка</a></li>
		 <li><a href="createcomment.php">Оставить отзыв</a></li>
		 <li><a href="mycomments.php">Мои комментарии</a></li>
	 </ul>
</nav>
<?php $comments = mysqli_query($connection, "SELECT * FROM `comments` WHERE `active` = 1");
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
			 <div class="like"><input type="radio" name="like" value="+">Нравится </input><p><?php echo $com['likes']; ?></p></div>    
		     <div class="like"><input type="radio" name="like" value="-">Не нравится </input><p><?php echo $com['dislikes']; ?></p></div>
		 </div>

		 <?php if ($com['username'] != 0){?>
		 <div class="admin_comment">
		      <p><?php echo $com['comment']; ?></p>
		 </div><?php }
} ?>
</body>
</html>