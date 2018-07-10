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
		 
		 <div class="comment" id="right">
		     <h1 align="center">Заявка на админку</h1>
			 <form autocomplete="off"  action="complete.php">
			     <label>Ваша почта:</label>
			     <input name="email" type="email" placeholder="email@example.com" required>
				 <hr>
				 <label>Почему вы хотите стать админом? Опишите свои качества</label>
				 <textarea name="text" style="width: 92%"></textarea>
				 <hr>
				 <input type="submit" value="зарегестрироваться" class="sumbit">
 			 </form>
		 </div>
		 <div class="comment" id="left"> 
		     <h1 align="center">Вход</h1>
			 <form autocomplete="off"  action="ifyouright.php">
			     <label>Логин</label>
			     <input name="login" type="login" required>
				 <hr>
				 <label>Пароль</label>
				 <input  name="password" type="password" required>
				 <hr>
				 <input type="submit" value="Войти" class="sumbit">
 			 </form>
		 </div>
</body>
</html>