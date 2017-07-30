
<?php
    class UserController{


        

      // panel control Usuario
     	 public function dashboard(){
     	 	require_once("view/dashboard/head.php");
     	 	require_once("view/dashboard/navbar.php");
     	 	require_once("view/modules/user/home.php");
     	 	require_once("view/dashboard/footer.php");
     	 }

       //vista publicaciones
       public function publication(){
        require_once("view/dashboard/head.php");
        require_once("view/dashboard/navbar.php");
        require_once("view/modules/user/publication.php");
        require_once("view/dashboard/footer.php");
       }

       //vista perfil
       public function profile(){
        require_once("view/includes/head.php");
        require_once("view/modules/user/profile.php");
        require_once("view/dashboard/footer.php");
       }


       //vista post realizados
       public function post(){
        require_once("view/dashboard/head.php");
        require_once("view/dashboard/navbar.php");
        require_once("view/modules/user/profile.php");
        require_once("view/dashboard/footer.php");
       }

    }
?>
