<?php
class UserModel{
  private $pdo;

  public function __COUNSTRUCT(){
    try{
      $this->pdo=DataBase::connect();
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
      die($e->getMessage());
    }
  }

  public function create($data){

  }


  public function __DESTRUCT(){
    try{
      DataBase::disconnect();
    }catch (Exception $e) {
      die($e->getMessage());
    }
  }
}
?>
