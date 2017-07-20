<?php 

    if(isset($_REQUEST['c'])){
       $controller = strtolower($_REQUEST['c']);
       $action = isset($_REQUEST['a']) ? $_REQUEST ['a']:home ; 
       require_once("controller/$controller.controller.php");
       $controller = ucwords($controller) ."Controller";
       $controller = new $controller(); 
       call_user_func(array ($controller,$action));
   
    }else{
        $controller = "website";
        require_once("controller/$controller.controller.php");
        $controller = ucwords($controller."Controller");
        $controller= new $controller();
        $controller->home();     
    }
?>