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
					<h1>Редактирование товара: <?php echo $res[0]['title']; ?></h1>
<!--					<div  class="img"><img width = "400px" src="<?php echo '/'.$img_pass; ?>" alt=""></div>-->
				</div>


					 <form action="" method="POST" enctype="multipart/form-data">
                                             <label for="title">Имя:</label><input name="title" type="text" id="title" value="<?php echo $res[0]['title']; ?>">
					 	<label for="descr">Описание:</label><textarea name="descr" type="text" id="descr"><?php echo $res[0]['descr']; ?></textarea>
                                                <label for="price">Цена:</label><input name ="price" type="text" id="price" value="<?php echo $res[0]['price']; ?>">
					 	<label for="img">Фото:</label><input name="img[]" type="file" multiple="multiple" id="img">
					    <input name="submit" type="submit" value="Редактировать">
					 </form>

			</div>

		</div>
	</div>

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