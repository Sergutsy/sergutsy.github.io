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
	 <h1>Оставьте свой комментарий</h1>
	 <form action="createcomplete.php">
	 <label>Ваш никнейм (оставьте пустым, чтобы отправить анонимно)</label>
	 <input type="text" name="username">
	 <label>Придумайте пароль, чтобы просматривать ваши комментарии</label>
	 <input type="password" name="password">
	 <textarea name="comment" placeholder="Ваш комментарий"></textarea>
	 <input type="submit" value="Отправить" class="sumbit">
	 </form>
</div>
</body>
</html>