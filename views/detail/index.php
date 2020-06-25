<?php
include_once ROOT.'/views/layout/header.php';

?>
<head>
<link rel="stylesheet" href="/template/css/productsss.css">   </head>
<div class="prod">
  <div class="container">
    <div class="prod__inner">

         <?php
          $imagesArr =  (json_decode($prod[0]['img']));

         ?>


        <div><div class="prod__img fotorama" data-allowfullscreen="true"
data-allowfullscreen="native" data-height="350px" data-width="350px" data-fullscreenIcon="true" data-nav="thumbs"  style="margin-right: 20px;">
                <?php foreach($imagesArr as $elem):?>
                <?php
                        $img_pass = $elem;
        $img_pass = strtr($img_pass, "\\", "/");

        $arr =   (explode('/', $img_pass));
        for($i = 0; $i <=4; $i++)
        {
            unset($arr[$i]);
        }
        $img_pass = implode(($arr), '/');

                ?>
  <img width="350px" height="350px"   src="<?php echo '/'.$img_pass; ?>">

           <?php endforeach; ?>

            </div>



            <div class="prod__descr">
              <div class="prod-title"><?php echo $prod[0]['title']?></div>
           <div class="prod-price">
               Цена: <?php echo $prod[0]['price'].'грн' ?>
            </div>

			</div>
           <div class="prod-text">


            <div class="prod-text__subtitle">

                <?php foreach($text as $elem): ?>
                <p><?php echo $elem.'<br>'; ?> </p>
                <?php endforeach; ?>

            </div>

            </div>






                <button style="margin-bottom: 40px;"name="submit" type="submit"  class = "modal-form__button make-order-now  button btn-modal" style="font-size: 18px;">Сделать заказ!</button>



          </div>

        </div>

    </div>
  </div>

</div>



         <?php

                  include ROOT.'/views/layout/footer.php';
?>