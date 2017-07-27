<?php

    class WebsiteController {

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
