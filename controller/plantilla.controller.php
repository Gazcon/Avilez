<?php
    session_start(); //activacion de sesiones
 
    class PlantillaController{
        public function ctrPlantilla(){
 
            if (isset($_SESSION["login"]) and $_SESSION["login"] == true){
                include_once "view/module/direcc.php";
               
            }else{
                include_once "view/module/login.php";
               
            }
           
           
        }
    }
   
    /* if (isset ($_GET["ruta"]) && $_GET["ruta"]=="registrar"){
        include_once "view/module/Form_Usua.php";
    }else{
        include_once "view/module/login.php";
 
    }
   
    if (isset ($_GET["ver"]) && $_GET["ver"]=="VerUsu"){
        include_once "view/module/modulo.usuario.php";
    }else{
        include_once "view/module/login.php";
    } */
    ?>
 
