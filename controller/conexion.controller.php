<link rel="stylesheet" href="view/css/sweetalert2.min.css">
<script src="view/js/sweetalert2.all.min.js"></script>

<?php
 
 
    class ConexionController{
 
        public function ctrLogin($user, $pass){
 
            $objModConexion = new ModelConexion($user, $pass);
            $rest = $objModConexion -> getLogin() -> fetch();
            if(gettype($rest) != "boolean"){
               
                $_SESSION["login"] = true;
                header("location:index.php");
 
                //echo "<script>alert('ha ingresado');</script>";
 
            }else{
                echo "<script>Swal.fire(
                    'Oops?',
                    'E-mail o contraseña errada?',
                    'error');
                </script>; location: index.php";
                
 
            }
        }
    }
 
?>
 
