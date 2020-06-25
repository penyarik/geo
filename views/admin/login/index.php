<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


?>
<?php if(!isset($_SESSION['admin'])): ?>
<!DOCTYPE html>
<html>
<head>

	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900&display=swap&subset=cyrillic" rel="stylesheet">


	<link rel="stylesheet" href="/template/css/reset.css">
	<link rel="stylesheet" href="/template/css/logins.css">
	<title>Login</title>
</head>
<body>
	<div class="login">
		<div class="container ">
			 <div class="login__inner">
				<form action="#" method="POST">
                                        <input name ="name"  type="text"   placeholder="Введите логин:"  >
					<input name ="password" type="password" placeholder="Введите пароль:" id="password" >
					<input name="submit" type="submit" value="Войти">
				</form>
			  </div>
		</div>
	</div>


            <?php



 ?>
	<div class="error">
		<div class="container">
			<div class="error__inner">
				<p>Неверные данные</p>
			</div>
		</div>
	</div>
</body>
</html>
<?php endif; ?>
<?php if(isset($_SESSION['admin']))
{
 header('Location: /admin');
}
?>