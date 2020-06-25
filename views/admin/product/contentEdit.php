<?php if($_SESSION['admin'] == true): ?>
<!DOCTYPE html>
<html  >
<head>

	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900&display=swap&subset=cyrillic" rel="stylesheet">


	<link rel="stylesheet" href="/template/css/reset.css">
	<link rel="stylesheet" href="/template/css/addss.css">
	<title>Admin</title>
</head>
<body>
	<div class ="add">
		<div class="container">
			<div class="wrapper">

				         <div class="inner">
					<h1>Редактирование котента:</h1>
<!--					<div  class="img"><img width = "400px" src="<?php echo '/'.$img_pass; ?>" alt=""></div>-->
				</div>


					 <form action="" method="POST" enctype="multipart/form-data">
                                                <label style="color: #fff;" for="titl">Главный заголовок:</label><input name="title" type="text" id="titl" value="<?php echo $content[0]['main_title']; ?>">
                                                <label for="descr">Главный подзаголовок:</label><input name="subtitle" type="text" id="descr" value="<?php echo $content[0]['main_subtitle']; ?>">
                                                <label style="color: #fff;"  for="price">Текст заказа:</label><input name ="order" type="text" id="price" value="<?php echo $content[0]['main_order']; ?>">
                                                <label style="color: #fff;" for="phone">Телефон 1:</label><input name="phoneF" type="tel" id="phone" value="<?php echo $content[0]['phone_1']; ?>">
                                                <label style="color: #fff;" for="phone2">Телефон 2:</label><input name="phoneS" type="tel" id="phone2" value="<?php echo $content[0]['phone_2']; ?>">

                                                <label style="color: #fff;" for="price">Заголовок процесса:</label><input name ="s_title" type="text" id="price" value="<?php echo $content[0]['process_title']; ?>">
                                                <label for="descr">Детали процесса:</label><textarea name="descr" type="text" id="descr"><?php echo $content[0]['process_text']; ?></textarea>

					    <input name="submit" type="submit" value="Редактировать">
					 </form>

			</div>

		</div>
	</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
     <script src = "/radiodetector/template/js/jquery.maskedinput.min.js"></script>
<script src="/radiodetector/template/js/jquery-2.2.3.min.js"></script>
	 <script>
         $(function() {


          $("#phone").mask("+38 099 999 9999");


          $("#phone2").mask("+38 099 999 9999");




  });

         </script>
       <div class="error">
		<div class="container">
			<div class="error__inner">
				<p>Введите данные</p>
			</div>
		</div>
	</div>
</body>
</html>

<?php else: ?>


<?php
    header('Location: /admin/login');
?>
<?php endif; ?>
<?php

?>