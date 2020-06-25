<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<div class="overla">
    <div class="popup">

         <div class="popup-close"><p>Закрыть</p></div>
         <div class="popup-title">Форма обратной связи</div>


        <div class="popup-text">


            <div class="popup-text__subtitle">
               Оставляйте заявку, и мы вам перезвоним
            </div>


           <div class="popup-form">
            <form action="#" method="POST">
                <input name="phone" id="ind" type="tel" class ="popup-text__input" placeholder="Номер телефона:">
                <button name="submit" type="submit" class = "button btn-modal">Сделать заказ!</button>
            </form>


          </div>

        </div>

    </div>
</div>










 <div class="footer">
 	<div class="container">
            <div class ="footer__inner">
 		<p> </p>
 		     <div class="header-contacts__phones">
                                <div  class="header-contacts__phone footer_phone"><a class=" footer_phone" href="tel:<?php echo $phone_1?>"> <?php echo $content['phone_1']?></a></div>
                                <div class="header-contacts__phone footer_phone"><a class=" footer_phone" href="tel:<?php echo $phone_1?>"><?php echo $content['phone_2']?></a></div>
                         </div>
                </div>
 	</div>


 </div>









    <!-- jQuery ,  Tether,  Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
    <script src="/template/js/wow.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
    <script src = "/template/js/jquery.maskedinput.min.js"></script>
<script src="/template/js/jquery-2.2.3.min.js"></script>

<script>


  $(function() {

    new WOW().init();
    $('#fotorama').fotorama();
  });

     $(function() {


          $("#phon").mask("+(380) 99-999-99-99");
               $("#index").mask("+(380) 99-999-99-99");
               $("#ind").mask("+(380) 99-999-99-99");
		  $("#p").mask("+(380) 99-999-99-99");



  });


    $(document).ready(function()
    {






      $('.modal-form__button').on("click", function()
      {
         $('.overla').show();
      });

      $('.popup-close').on("click", function()
      {
        $('.overla').hide();
      });





    });

</script>
 <script src="js/slick.min.js" type="text/javascript"></script>
 <script>

    $(function()
    {
$('.single-item').slick({
        arrows: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [

        {

                  breakpoint: 1024,

                  settings: {

                    slidesToShow: 2,

                    slidesToScroll: 2

                  }

                },

                {

                  breakpoint: 600,

                  settings: {

                    slidesToShow: 1,

                    slidesToScroll: 1

                  }

                },

                {

                  breakpoint: 480,

                  settings: {

                    slidesToShow: 1,

                    slidesToScroll: 1

                  }

                }]


     });
    })


 </script>

<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick.min.js"></script>
  </body>
</html>
<?php SendTelegram::sendToBot(); ?>