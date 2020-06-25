<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */?>
<?php if($_SESSION['admin'] == true): ?>

<!DOCTYPE html>
<html  >
<head>



    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900&display=swap&subset=cyrillic" rel="stylesheet">


	<link rel="stylesheet" href="/template/css/reset.css">
	<link rel="stylesheet" href="/template/css/admins.css">
	<title>Admin</title>
</head>
<body>
	 <?php include(ROOT.'/views/layout/header-admin.php'); ?>
	<div class="products-table"   >

			<div class="container">
				<div class="products__inner" id="tovar">
				<table border="1">
				   <caption>������� �������</caption>
				   <tr>
                                    <th>����</th>
				    <th>��������</th>
				    <th>����</th>
				    <th>������</th>
				    <th>�������������</th>
				    <th>�������</th>
				   </tr>
                                   <?php foreach($prod as $elem): ?>

                                 <?php
                                  $images =  (json_decode($elem['img']));
                                 $img_pass = Img::mainImg($images);

                                 ?>
                    <tr><td><a href="/admin/product/editPhoto/<?php echo $elem['id'];?>" id="edit">������������� ����������</a><div  class="img"><img height ="200px" width = "200px" src="<?php echo $img_pass; ?>" alt=""></div></td>

						<td  ><a  style="color: #8af542;" href="/admin/product/top/<?php echo $elem['id'];?>/1" id="edit">�������� �����</a><br><br> 
							<?php echo $elem['title'] ?><br><br> 
							 </td>

						<td> <?php echo $elem['price']." ���" ?></td><td id ="success"><?php if($elem['status'] == 1){echo '��������';}else{echo '��� � �������';} ?></td><td><a href="/admin/product/edit/<?php echo $elem['id'];?>" id="edit">�������������</a></td><td><a href="/admin/product/delete/<?php echo $elem['id'];?>" id ="delete">�������</a></td></tr>
				    <?php endforeach; ?>

				  </table>
			</div>
		</div>


            <div class="content" id="content">

    		<div class="content__inner" style="padding: 20px; width: 100%;">
    			<table border="1" style="margin: 0 auto;  " >
				   <caption>������� ��������</caption>
				   <tr>
				    <th style="font-size: 16px; color: #9ff50a;">������� ���������</th>
				    <th style="font-size: 16px; color: #9ff50a">������� ������������</th>
				    <th style="font-size: 16px; color: #9ff50a" >����� ������</th>
				    <th style="font-size: 16px; color: #9ff50a">������� 1</th>
				    <th style="font-size: 16px; color: #9ff50a">������� 2</th>
				    <th style="font-size: 16px; color: #9ff50a">��������� ��������</th>
				    <th style="font-size: 16px; color: #9ff50a">������ ��������</th>

				    <th style="font-size: 16px; color: #9ff50a">�������������</th>
				   </tr>
				   <tr><td><?php echo $content[0]['main_title'] ?></td><td><?php echo $content[0]['main_subtitle'] ?></td><td><?php echo $content[0]['main_order'] ?></td><td><?php echo $content[0]['phone_1'] ?></td><td><?php echo $content[0]['phone_2'] ?></td><td><?php echo $content[0]['process_title'] ?></td><td><?php echo  substr($content[0]['process_text'], 0, 20).'...' ?></td><td><a href="/admin/content/edit" id="edit">�������������</a></td></tr>


				  </table>
    		</div>

    </div>
	</div>

</body>
</html>
<?php include(ROOT.'/views/layout/footer-admin.php')?>

<?php else: ?>


<?php
    header('Location: /admin/login');
?>
<?php endif; ?>