<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once ROOT."/models/product.php";
 class AdminController
 {

	 public function Actiontop($idOld, $move)
	 {
	     $maxId = Admin::selectMaxMinId($move);

		 $newId = $maxId['id'] + 1;

		 $res = Admin::editId($idOld, $newId);

		 if($res)
		 {

		  header('Location: /admin');

		 }
		 else
		 {
		  echo 'smth going bad';
		 }
		 return true;

	 }

	 public function Actionbuttom($idOld, $move)
	 {
	     $minId = Admin::selectMaxMinId($move);
		 var_dump($minId);
		 $newId = $minId['id'] - 1;

		  $res = Admin::editId($idOld, $newId);


		 if($res)
		 {

		  header('Location: /admin');
		 }
		 else
		 {
		  echo 'smth going bad';
		 }

		 return true;

	 }

     public function ActionSite()
     {
         $this->CheckAccess();


         require_once ROOT.'/views/admin/site/index.php';
         return true;
     }
     public function Actionindex()
     {
         $prod = Product::GetProduct();
          $content = Product::GetContent();

         require_once ROOT.'/views/admin/index/index.php';
         return true;
     }
     public function ActioncontentEdit()
     {
         $content = Product::GetContent();


         $title = '';

         $subtitle = '';
         $order = '';
         $phonef = '';
         $phones = '';
         $s_title = '';
         $descr = '';


        if(!empty($_POST['title']) && !empty($_POST['subtitle']) && !empty($_POST['order']) && !empty($_POST['phoneF']) && !empty($_POST['phoneS']) && !empty($_POST['s_title']) && !empty($_POST['descr']))
        {
                 $title = $_POST['title'];

          $subtitle = $_POST['subtitle'];
         $order = $_POST['order'];
         $phonef = $_POST['phoneF'];
         $phones = $_POST['phoneS'];
         $s_title =  $_POST['s_title'];
         $descr = $_POST['descr'];





                  if( Admin::editContent($title, $subtitle, $order, $phonef, $phones, $s_title, $descr))

                  {
                      header('location: /admin');
                  }





                }



        else
        {
            echo "<script src='/template/js/popup.js'></script>";
        }
         require_once ROOT.'/views/admin/product/contentEdit.php';
         return true;
     }
     public function Actionlogin()
     {

         $name = '';
         $password = '';

         if(isset($_POST['submit']))
         {   require_once ROOT.'/components/Db.php';

             $name = $_POST['name'];
             $password = $_POST['password'];




             if(Admin::CheckEnter($password, $name))
             {
                 if($_SESSION['admin'] == true)
                 {
                    header('Location: /admin');
                 }
             }


             else
             {

//                 header('Location: /admin/login');
//                 die();
             }
         }
 else {


 }
         require_once ROOT.'/views/admin/login/index.php';
         return true;
     }

     public function Actionlogout()
     {
         if ($_SESSION['admin']) {
            $_SESSION['admin'] == false;
            unset($_SESSION['admin']);
            echo 'logout';
            header('Location: / /admin/login');
          }
           return true;
    }

    public function Actionadd()
    {
        $title = '';
        $descr = '';
        $price = '';

        if(!empty($_POST['title']) && !empty($_POST['descr']) && !empty($_POST['price']) && !empty($_FILES['img']))
        {
               $title = $_POST['title'];
               $descr = $_POST['descr'];
               $price = $_POST['price'];

               $arr_pass = Upload::uploadImg();

                if(!empty($arr_pass))
                {
                    $json_pass = json_encode($arr_pass);

                    Admin::AddProduct($title, $json_pass, $price, $descr);
                    header('Location: /admin');

                }


        }
        else
        {
            echo "<script src='/template/js/popup.js'></script>";
        }


        require_once ROOT.'/views/admin/product/add.php';
        return true;
    }
    public function Actionedit($id)
    {
        $res = product_details::GetProdDetails($id);

          

         $title = '';
        $descr = '';
        $price = '';

        if(!empty($_POST['title']) && !empty($_POST['descr']) && !empty($_POST['price']))
        {
               $title = $_POST['title'];
               $descr = $_POST['descr'];
               $price = $_POST['price'];






                    Admin::editProduct($title, $price, $descr, $id);

                     header('Location: /admin');





        }
        else
        {
            echo "<script src='/template/js/popup.js'></script>";
        }

        require_once ROOT.'/views/admin/product/edit.php';



        return true;
    }
	 	 public function ActioneditPhoto($id)
	 {
		 if(!empty($_FILES['img']))
		 {
	    $res = product_details::GetProdDetails($id);

          deleteImg::delete($res);

		  $arr_pass = Upload::uploadImg();


               if(!empty($arr_pass))
                {
                    $json_pass = json_encode($arr_pass);


                    if(Admin::EditPhoto($json_pass, $id))
					{

                    //    header('Location: /admin');
					}


                }
			 else
			 {
                 echo 'no';
}
		 }
		 require_once ROOT.'/views/admin/product/editPhoto.php';
        return true;
	 }

    public function Actiondelete($id)
    {
        $res = product_details::GetProdDetails($id);

         deleteImg::delete($res);
        admin::CheckDelete($id);
        header('Location: /admin');

        return true;
    }
 }