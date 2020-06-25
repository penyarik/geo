<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class User
{ 
  private static $errors = [];  
    public static function checkName($name)
    {
        if(strlen($name) > 2)
        {
            return true;
        }
        
       self:: $errors[] = 'Имя не должно быть короче 3-х символов';
    }
    
    public static function checkPassword($password, $confirm_password)
    {
        if($password == $confirm_password && preg_match("~[A-Za-z0-9]{6,19}~", $password) == 1)
        {
        return true;
        }
       self:: $errors[] = 'Введите два одинаковых пароля, либо проверте чтобы в пароле были заглавные, маленькие латинские буквы и цифры длина не меньше 6 символов';
    }
    
    public static function checkEmeil($email)
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            return true;
        }
         self:: $errors[] = 'Проверте корректность почты';
    }
    public static function checkSameEmeil($email)
    {
        $db = DbConnect::GetConnect();
        $stm = "SELECT COUNT(*) FROM user WHERE email = :email";
        $res = $db->prepare($stm);
        $res ->bindParam(':email', $email, PDO::PARAM_STR);
         
        $res->execute();
        $ch = $res->fetchColumn();
        
        if($ch == FALSE)
        {    
            
            return true;
        }   
        else
        {
         if(self::checkEmeil($email) == true)
         {
        self::$errors[] = 'Такой адрес уже существует';
         }
        }
    }

    public static function register($name,$email,$password)
    {
        $hash_password = password_hash($password, PASSWORD_DEFAULT);
        $db = DbConnect::GetConnect();
        $statment = "INSERT INTO user(name, email, password) VALUES(:name, :email, :hash_password)";
        $res = $db ->prepare($statment);
        $res ->bindParam(':name', $name, PDO::PARAM_STR);
        $res ->bindParam(':email', $email, PDO::PARAM_STR);
        $res ->bindParam(':hash_password', $hash_password, PDO::PARAM_STR);
        return $res->execute();
    }
    
    
    public static function LoginCheck($email,$password)
    {
        $db = DbConnect::GetConnect();
        $stm = "SELECT COUNT(*) FROM user WHERE email = :email";
        $res = $db->prepare($stm);
        $res ->bindParam(':email', $email, PDO::PARAM_STR);
         
        $res->execute();
        $ch = $res->fetchColumn();
        
        if($ch == true)
        { 
            self::CheckPaswor($password, $email, $db);
            
             
        }
        else{
            self::$errors[] = 'Неверный електронный адресс';
            
        }
    }
    private static function CheckPaswor($password,$email,$db)
    {
        $statment = "SELECT * FROM user WHERE email = '$email'";
        $res = $db->query($statment);
        $hash= $res->fetch()['password'];
         
        if(password_verify($password, $hash))
        {
            return true;
             
        }
        else{
            self::$errors[] = 'Неверный пароль';
        }
      
       
    
    }
        public static function GetId($email,$password)
        {
            if(!self::$errors)
            {
                $db = DbConnect::GetConnect();
                $statment = "SELECT * FROM user WHERE email = '$email'";
                $res = $db->query($statment);
                $d = $res->fetch()['id'];
                
                return $d;
            }
             
        }
    
     public static function Auth($user_id)
      {
      
          $_SESSION['auth'] = true;
          $_SESSION['user_id'] = $user_id;
      }
       
    
    public static function CheckLogged()
    {
        
        if(isset($_SESSION['auth']) && isset($_SESSION['user_id']))
        {
            return $_SESSION['user_id'];
        }
        header('Lcation: /parode/user/login');
         
        die();
    }
   
    public function isGuest()
    {
        if(isset($_SESSION['auth']) && isset($_SESSION['user_id']))
        {
            return true;
        }
        return false;
    }
    public static function GetName($id)
    {
        require_once ROOT.'/components/Db.php';
        $db = DbConnect::GetConnect();
       $statement = "SELECT * FROM user WHERE id = '$id'";
        $res = $db->query($statement);
        return $res->fetch()['name'];
    }

   public static function edit($name,$password)
    {  
        require_once ROOT.'/components/Db.php';
        $hash_password = password_hash($password, PASSWORD_DEFAULT);
        $db = DbConnect::GetConnect();
        $statment = "UPDATE  user SET name = :name, password = :hash_password";
        $res = $db ->prepare($statment);
        $res ->bindParam(':name', $name, PDO::PARAM_STR);
        
        $res ->bindParam(':hash_password', $hash_password, PDO::PARAM_STR);
        return $res->execute();
    }
    
    public static function CheckPasswordById($password)
    {
    if($_SESSION['user_id'])
        {
        $id = $_SESSION['user_id'];
        require_once ROOT.'/components/Db.php';
        $db = DbConnect::GetConnect();
        $statement = "SELECT password FROM user WHERE id = '$id'";
        $res = $db->query($statement);
        $hash_password = $res->fetch()['password'];
             if(password_verify($password, $hash_password))
             {
                return true;
             }
             else
             {
                self::$errors[] = 'Введите верный пароль'; 
             }
        }
        else{
            return false;
        }
    }
    
    
    public function get()
    {
         
        return self:: $errors;
        
    }
 
    
}