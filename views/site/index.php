<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once ROOT.'/views/layout/header.php';
?>



     <section class="main">
     	<div class="container">
     		<div class="row align-items-center">
     			<div class="col-12 col-md-12 col-lg-5">
     			<div class="hidden-mobile main-img wow fadeIn" data-wow-duration="1.7s"><img src="/template/img/main/cat.png" alt=""></div>
     		    </div>
     		<!-- /.col-5 -->
     		<div class="col-12 col-md-12 col-lg-7">
     			<div class="main-text  wow fadeIn " data-wow-duration="1.7s">
     				<h1 class="main-text__title"><?php echo $content['main_title']?></h1>
     				<div class="main-text__subtitle"><?php echo $content['main_subtitle']?></div>
     				<div class="main-text__form">
     					<div class="form-title">
     						 <?php echo $content['main_order']?>

     						<span class="form-title__important"></span>
     					</div>

     					<form action="#" method="POST" class="form">
     						<input name ="phone" type="tel" id="p" placeholder="Введите номер телефона">
     						<button name="submit" type="submit"class="button">Сделать заказ</button>
     					</form>
     					<small class="form-small"> </small>

     				</div>

     			</div>
     		</div>
     		<!-- /.col-7 -->
     		</div>

     	</div>
     	<!-- /.container -->
     </section>
     <!-- /.main -->





<section class="production" id="product">
    <div class="container">

		<br><br><br>
		 
			<ul>
				<li style= "
						   font-size: 18px;
						   
						    
						   "><a   style="
				 
                           color: black;" href="http://geolocator.com.ua/geolazer/">Лазерные Нивелиры</a></li>
			</ul>

        <div class="production-wrapper"  >

			<h1 class="production-wrapper__title">
              Товары

            </h1>

            <?php foreach($prod as $elem): ?>
            <?php
               $images = json_decode($elem['img']);
               $img_pass = Img::mainImg($images);


            ?>
            <div class="product  wow fadeIn" data-wow-delay="0.1s" data-wow-duration="1.7s">
                <div style="height: 300px;  " class="product__img"><img style="width: 200px; height: 250px; object-fit: contain;  " src="<?php echo $img_pass; ?>" alt=""></div>
                <h1 class="product__title"><?php echo $elem['title']; ?>
                </h1>
                <h1 class="product__title"><?php echo $elem['price'].'грн'; ?>
                </h1>
                <a href = "/details/<?php echo $elem['id']?>"><button class="product-details__button  button btn-opacity">Подробнее</button></a>
                <button   class="button modal-form__button"  >Сделать заказ</button>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>






<div class="factories" style="margin: 40px 0px">
    <div class="container">
        <div class="wrapp-factories">
            <div class="wrapp-factories_slider">



<div class="factories-img"   >

 <img   src="/template/img/factories/mover.png"  >

</div>



            </div>


            <div class="wrapp-factories_descr">
                <h1 style ="width: 400px; text-align: center"class="wrapp-factories_descr__title">
                 <?php echo $content['process_title']?>
                </h1>
                <div class="wrapp-factories_descr__text">

                    <?php foreach($text as $elem):?>
                    <p>
                      <?php echo $elem; ?>
                    </p>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</div>










<!--<section class="callback">
    <div class="container">
        <div class="callback-wrapper">
            <h1 class="callback-wrapper__title">
                Галерея
            </h1>

          <div class="slider single-item">
              <div class="slider-own"><img height = "200px" width ="300px"src="/radiodetector/template/img/main/cat.png" alt=""></div>
              <div class="slider-own"><img
              height = "200px" width ="300px" src="/radiodetector/template/img/main/cat.png" alt=""></div>
              <div class="slider-own"><img
              height = "200px" width ="300px" src="/radiodetector/template/img/main/cat.phg" alt=""></div>
              <div class="slider-own"><img
                height = "200px" width ="300px"src="/radiodetector/template/img/main/cat.phg" alt=""></div>
              <div class="slider-own"><img
                height = "200px" width ="300px"src="/radiodetector/template/img/main/cat.phg" alt=""></div>
              <div class="slider-own"><img
              height = "200px" width ="300px" src="/radiodetector/template/img/main/cat.phg" alt=""></div>
          </div>


        </div>
    </div>
</section>-->

<?php
include_once ROOT.'/views/layout/footer.php';
?>