<?php

    class Prueba{
        public function ctrCrearBarbero( $nombres,$apellidos,$n_numero,$f_nacimiento,$f_academica, $barberia,$direccion,$email,$contrasena){
            try {
                echo "<script>alert('error al registrar usuario');</script>";

            } catch (\Throwable $th) {
                
            }
        }
    }
/*
    class ControllerRegistro{
        public function ctrCrearBarbero( $nombres,$apellidos,$n_numero,$f_nacimiento,$f_academica, $barberia,$direccion,$email,$contrasena){
            
            try {
                echo "<script>alert('entro aqui');</script>";
                // objeto dto
                $objDtoRegistrobar = new Registrobar();
                $objDtoRegistrobar->setNombres($nombres);
                $objDtoRegistrobar->setApellidos($apellidos);
                $objDtoRegistrobar->setN_numero($n_numero);
                $objDtoRegistrobar->setF_nacimeinto($f_nacimiento);
                $objDtoRegistrobar->setF_academica($f_academica);
                $objDtoRegistrobar->setBarberia($barberia);  
                $objDtoRegistrobar->setDireccion($direccion);
                $objDtoRegistrobar->setEmail($email);
                $objDtoRegistrobar->setContrasena($contrasena);

                // objeto dao
                $objDaoRegistro = new ModelRegistro( $objDtoRegistrobar );  // <----------- error aqui
                if ($objDaoRegistro -> mdlCrearBarbero() == true) {
                    echo"
                    <script>
                    
                    alert('Barbero registrado con exito');

                    </script>
                    ";
                } else {
                    echo"
                    <script>
                    
                    alert('error al registrar barbero');

                    </script>
                    ";
                }
                
            } catch (PDOException $e) {

                echo "Error en el ctrCrearBarbero ".$e->getMessage();

            }
        }// FIN DE LA FUNCION CTR CREAR BARBERO    
        
        public function ctrVerBarbero(){
            $array = false;
            try {
                $objDtoRegistro = new RegistroUsu (null, null, null, null, null, null, null, null, null );
                $objDaoRegistro = new ModelRegistro ( $objDtoRegistro );
                $array =$objDaoRegistro -> mdlVerBarbero() -> fetchAll();
            } catch (PDOException $e) {
                echo"error en el controlador" .$e ->getMessage();
            }
            return $array;
        }

        public function ctrEditarBarbero(){
           $objDtoRegistro = new Registrobar(
                $_POST["txt1_nombre"],
                $_POST["txt2_apellido"],
                $_POST["txt_numbernumero"],
                $_POST["txt_datefecha"],
                $_POST["txt_select"],
                $_POST["txt3_barberia"],
                $_POST["txt4_direccion"]
                $_POST["txt_email"]
                $_POST["txt5_contraseña"]
            );
            $objDaoRegistro = new ModelRegistro ($objDtoRegistro);
            if ($objDaoRegistro -> mdlEditarBarbero()){
                echo "Registro insertado";
                } else {
                    echo "Ha ocurrido un error"; 
                }
        }

        public function ctrEliminarBarbero(){
            $objDtoRegistro = new Registrobar(
                 $_GET['Eliminar'],
                NULL,
                NULL,
                NULL,
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                
                 
            );
 
             $objDaoRegistro = new ModelRegistro ($objDtoRegistro);
             if ($objDaoRegistro -> mdlEliminarBarbero()){
                 echo "Registro insertado";
                } else {
                    echo "Ha ocurrido un error"; 
                }
        }   
    } */

        
?>