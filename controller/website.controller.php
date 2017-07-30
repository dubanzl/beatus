<?php
require_once "model/user.model.php";

class WebsiteController{
  private $pdo;

  public function __COUNSTRUCT(){
    try{
      $this->pdo=DataBase::connect();
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
      die($e->getMessage());
    }
  }

  public function createUser($data){

  }
  public function create(){
   $data=$_POST['data'];
   $data[3]=password_hash($data[3],PASSWORD_DEFAULT);
   $data[4]="user-".date('Y/m/d').'-'.date('h:m:s');
   $data[5]=date('Y/m/d');
   $data[6]=$this->randAlphanum(50);
   $data[7]=2;
 $this->createUser($data);
  }

  function randAlphanum($length){
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ$!?¿&';
  $charactersLength = strlen($characters);
  $randomAlpha = '';
  for ($i = 0; $i < $length; $i++) {
       $randomAlpha .= $characters[rand(0, $charactersLength - 1)];
  return $randomAlpha;
  }

  }

  public function home(){
  $titulo="Beatus" ;
  require_once("view/includes/head.php");
  require_once("view/includes/navbar.php");
  require_once("view/modules/website/home.php");
  require_once("view/includes/footer.php");
  }

  public function signup(){
  $titulo="Registrase";
  require_once("view/includes/head.php");
  require_once("view/modules/website/signup.php");
  require_once("view/includes/footer.php");

  }

  public function login(){
  $titulo="iniciar-sesion";
  require_once("view/includes/head.php");
  require_once("view/modules/website/login.php");
  require_once("view/includes/footer.php");

  }

  public function reset_password(){
  $titulo="Recuperar-contraseña";
  require_once("view/includes/head.php");
  require_once("view/modules/website/reset-password.php");
  require_once("view/includes/footer.php");

  }
}
?>
