<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once ROOT.'/components/Db.php';
class Admin
{


public function editPhoto($img, $id)
	{
	   require_once ROOT.'/components/Db.php';
        $status = 1;

        $db = DbConnect::GetConnect();
        $statment = "UPDATE products SET img = :img WHERE id = :id";
        $res = $db ->prepare($statment);
          $res ->bindParam(':img', $img, PDO::PARAM_STR);
		  $res ->bindParam(':id', $id, PDO::PARAM_STR);

        $result = $res->execute();
		if($result)
        {
            return $result;
        }
 else {
     echo 'no connection';
 }
	}
    public static function CheckEnter($password, $name)
    {
        if(Admin::CheckAdmin($password, $name))
        {

            $_SESSION['admin'] = true;
              return true;
        }
        else
        {

        }
    }
    public static function GetALLImg()
    {
        $db = DbConnect::GetConnect();
        $statement = "SELECT * FROM products";
        $res = $db->query($statement);
        for($date = []; $row = $res->fetch(); $date[] = $row);
        return $date;
    }
     private static function CheckAdmin($password,$name)
    {

        $db = DbConnect::GetConnect();
        $statment = "SELECT * FROM user WHERE name = '$name'";
        $res = $db->query($statment);
        $hash= $res->fetch()['password'];


        if(password_verify($password, $hash))
        {

            return true;

        }
        else{
             echo "<script src='/radiodetector/template/js/popup.js'></script>";
             return false;
        }


     }
      public static function AddProduct($title, $img, $price, $descr)
    {
        $db = DbConnect::GetConnect();

        $status = 1;
        $statment = "INSERT INTO products SET title = :title, descr = :descr, price = :price, img = :img, status = :status";


        $res = $db ->prepare($statment);
        $res ->bindParam(':title', $title, PDO::PARAM_STR);
        $res ->bindParam(':descr', $descr, PDO::PARAM_STR);
        $res ->bindParam(':price', $price, PDO::PARAM_STR);
        $res ->bindParam(':img', $img, PDO::PARAM_STR);
        $res ->bindParam(':status', $status, PDO::PARAM_STR);


        $result = $res->execute();
        if($result)
        {
            return $result;
        }
 else {
     echo 'no connectin';
 }


    }
     public static function editProduct($title, $price, $descr, $id)
    {
        require_once ROOT.'/components/Db.php';
        $status = 1;
        $db = DbConnect::GetConnect();
        $statment = "UPDATE products SET title = :title, descr = :descr, price = :price, status = :status WHERE id = :id";
        $res = $db ->prepare($statment);
        $res ->bindParam(':id', $id, PDO::PARAM_STR);
        $res ->bindParam(':title', $title, PDO::PARAM_STR);
        $res ->bindParam(':descr', $descr, PDO::PARAM_STR);
        $res ->bindParam(':price', $price, PDO::PARAM_STR);

        $res ->bindParam(':status', $status, PDO::PARAM_STR);

        $result = $res->execute();
        if($result)
        {
            return $result;
        }
 else {
     echo 'no connectin';
 }
    }
     public static function editContent($title, $subtitle, $order, $phonef, $phones, $s_title, $descr)
    {
        require_once ROOT.'/components/Db.php';
        $status = 1;
        $id = 1;
        $db = DbConnect::GetConnect();
        $statment = "UPDATE content SET main_title = :title, main_subtitle = :subtitle, main_order = :order, phone_1 = :phonef, phone_2 = :phones, process_title = :s_title, process_text = :descr WHERE id = :id";
        $res = $db ->prepare($statment);
        $res ->bindParam(':id', $id, PDO::PARAM_STR);
        $res ->bindParam(':title', $title, PDO::PARAM_STR);
        $res ->bindParam(':subtitle', $subtitle, PDO::PARAM_STR);
        $res ->bindParam(':order', $order, PDO::PARAM_STR);
        $res ->bindParam(':phonef', $phonef, PDO::PARAM_STR);
        $res ->bindParam(':phones', $phones, PDO::PARAM_STR);
        $res ->bindParam(':s_title', $s_title, PDO::PARAM_STR);
        $res ->bindParam(':descr', $descr, PDO::PARAM_STR);

        $result = $res->execute();
        if($result)
        {
            return $result;
        }
 else {
     echo 'no connectin';
 }
    }
      public static  function CheckDelete($prod_id)
    {

           $db = DbConnect::GetConnect();
            $statement = "DELETE  FROM products WHERE id = :prod_id";
            $res = $db->prepare($statement);
            $res ->bindParam(':prod_id', $prod_id, PDO::PARAM_STR);

        return $res->execute();

    }

	public static function selectMaxMinId($num)
	{
	   if($num == 1)
	   {
	       $db = DbConnect::GetConnect();
		   $statement = "SELECT * from products WHERE id=(select max(id) from products)";
		   $res = $db->query($statement);
           $date = $res->fetch(PDO::FETCH_ASSOC);
           return $date;

	   }
	   if($num == 0)
	   {

	       $db = DbConnect::GetConnect();
		   $statement = "SELECT * from products WHERE id=(select min(id) from products)";
		   $res = $db->query($statement);
           $date = $res->fetch(PDO::FETCH_ASSOC);
           return $date;
	   }

	}
	public static function editId($id, $newId)
	{
	     require_once ROOT.'/components/Db.php';
        $status = 1;

        $db = DbConnect::GetConnect();
        $statment = "UPDATE products SET id = :newId WHERE id = :id";
        $res = $db ->prepare($statment);
          $res ->bindParam(':newId', $newId, PDO::PARAM_STR);
		  $res ->bindParam(':id', $id, PDO::PARAM_STR);

        $result = $res->execute();
		if($result)
        {
            return $result;
        }
 else {
     echo 'no connection';
 }
	}

//    public static function CheckAdminOrNot($name, $password)
//    {
//        $db = DbConnect::GetConnect();
//        $statement = "SELECT * FROM user WHERE id='$user_id'";
//        $res = $db->query($statement);
//        if($res->fetch()['access'] == 1)
//        {
//            return true;
//            echo 'ver';
//        }
//        else
//        {
//            die('Access denied');
//        }
//    }
//
//
//    public static  function CheckDelete($choose,$prod_id)
//    {
//       if(preg_match("~category~", trim($_SERVER['REQUEST_URI'], '/')) == 1)
//       {
//           $table = 'category';
//       }
//       else{
//           $table = 'product';
//       }
//        if($choose == 1)
//        {
//            $db = DbConnect::GetConnect();
//            $statement = "DELETE  FROM $table WHERE id = :prod_id";
//            $res = $db->prepare($statement);
//            $res ->bindParam(':prod_id', $prod_id, PDO::PARAM_STR);
//
//        return $res->execute();
//
//
//        }
//        header("Location: /parode/admin/$table");
//    }
//    public static function AddProduct($name, $text, $code, $price, $image, $category,$exist, $new,$recomended,$status)
//    {
//        $db = DbConnect::GetConnect();
//
//        $brand = '';
//        $statment = "INSERT INTO product SET name = :name, category_id = :category_id, code = :code,  price = :price, availability = :exist, brand =:brand, image = :image, description = :text, is_new = :new, is_recomended = :recomended, status = :status";
//
//
//        $res = $db ->prepare($statment);
//        $res ->bindParam(':name', $name, PDO::PARAM_STR);
//        $res ->bindParam(':text', $text, PDO::PARAM_STR);
//        $res ->bindParam(':category_id', $category,  PDO::PARAM_STR);
//        $res ->bindParam(':code', $code, PDO::PARAM_STR);
//        $res ->bindParam(':price', $price, PDO::PARAM_STR);
//        $res ->bindParam(':image', $image, PDO::PARAM_STR);
//        $res ->bindParam(':new', $new, PDO::PARAM_STR);
//        $res ->bindParam(':recomended', $recomended, PDO::PARAM_STR);
//        $res ->bindParam(':status', $status, PDO::PARAM_STR);
//        $res ->bindParam(':exist', $exist, PDO::PARAM_STR);
//        $res ->bindParam(':brand', $brand, PDO::PARAM_STR);
//
//
//        return $res->execute();
//    }
//
//    public static function AddCategory($name, $code)
//    {
//        $db = DbConnect::GetConnect();
//
//        $status = 1;
//        $statment = "INSERT INTO category SET name = :name, sort = :sort, status = :status";
//
//
//        $res = $db ->prepare($statment);
//        $res ->bindParam(':name', $name, PDO::PARAM_STR);
//        $res ->bindParam(':sort', $code, PDO::PARAM_STR);
//        $res ->bindParam(':status', $status, PDO::PARAM_STR);
//
//
//        $result = $res->execute();
//        if($result)
//        {
//            return $result;
//        }
//
//
//    }
//
//
//    public static function GetEditValue($id, $line_name)
//    {
//
//        $db = DbConnect::GetConnect();
//        $statement = "SELECT *, category.name as category_name FROM category JOIN product ON product.category_id = category.id WHERE product.id = $id";
//        $res = $db->query($statement);
//        return $res->fetch()[$line_name];
//
//    }
//    public static function GetEditCatValue($id, $line_name)
//    {
//
//        $db = DbConnect::GetConnect();
//        $statement = "SELECT * FROM category WHERE id = $id";
//        $res = $db->query($statement);
//        return $res->fetch()[$line_name];
//
//    }
//
//    public static function CheckChanges($name, $id, $line_name)
//    {
//        if($name == self::GetEditValue($id, $line_name))
//        {
//            self::$errors[] = "Вы не поменяли данные";
//        }
//        elseif(empty($name))
//        {
//             self::$errors[] = "Введите данные";
//        }
//        else{
//            return true;
//        }
//    }
//
//    public static function SetInDbChangeData($name,$line_name,$id)
//    {
//       if(preg_match("~category~", trim($_SERVER['REQUEST_URI'], '/')) == 1)
//       {
//           $table = 'category';
//       }
//       else{
//           $table = 'product';
//       }
//
//        $db = DbConnect::GetConnect();
//        $statment = "UPDATE $table SET $line_name = :name WHERE id = $id";
//        $res = $db ->prepare($statment);
//
//        $res ->bindParam(':name', $name, PDO::PARAM_STR);
//
//
//        return $res->execute();
//    }
//
//    public function Get()
//    {
//        return self::$errors;
//    }
}