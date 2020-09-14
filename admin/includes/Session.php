<?php


class Session
{
 private $signed_in = false;
 public $GebruikerID;
 public $count;

 function __construct()
 {
     session_start();
     $this->visitor_count();
     $this->check_the_login();
     $this->check_message();
 }

 public function visitor_count(){
    if(isset($_SESSION['count'])){
        return $this->count = $_SESSION['count']++;
    }else{
        return $_SESSION['count'] = 1;
    }
 }

 public function is_signed_in(){
     return $this->signed_in;
 }

 public function login($gebruikers){
     if($gebruikers){
         $this->GebruikerID = $_SESSION['GebruikerID'] = $gebruikers->GebruikerID;
         $this->signed_in = true;
     }
 }

public function logout(){
     unset($_SESSION['GebruikerID']);
     unset($this->GebruikerID);
     $this->signed_in = false;
}

 private function check_the_login(){
     if(isset($_SESSION['GebruikerID'])){
         $this->GebruikerID = $_SESSION['GebruikerID'];
         $this->signed_in = true;
     }else{
         unset($this->GebruikerID);
         $this->signed_in = false;
     }
 }

 public function message($msg=""){
     if(!empty($msg)){
         $_SESSION['message'] = $msg;
     }else{
         return $this->message;
     }
 }

 private function check_message(){
     if(isset($_SESSION['message'])){
         $this->message = $_SESSION['message'];
         unset($_SESSION['message']);
     }else{
         $this->message = "";
     }
 }
}

$session = new Session();
?>