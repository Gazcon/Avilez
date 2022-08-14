<?php
    class ControllerRegistro{
        public function ctrInsertarUsuario($cedula,$nombre,$apellido,$num_celular,$f_nacimiento,$email,$contrasena){
            try {
                $objDtoregistro = new RegistroUsu ($cedula, $nombre, $apellido, $num_celular, $f_nacimiento, $email, $contrasena );
                $objDaoregistro = new ModelRegistro ( $objDtoregistro );
               
                if ( $objDaoregistro -> mdlInsertarUsuario() ) {
                    echo "<script>
                        Swal.fire(
                        'Super!',
                        'El Usuario ah sido Registrado',
                        'success'
                        );</script>";
   
                } else {
                    echo"ha ocurrido un error";
                }  
               
            } catch (PDOException $e) {
                echo"error en la funcion insertar usuario" . $e -> getMessage();
            }
 
        }//FIN DEL CONTROLLER INSERTAR
 
        public function ctrVerUsuario(){
           
            $array = false;
            try {
                $objDtoRegistro = new RegistroUsu (null, null, null, null, null, null, null );
                $objDaoRegistro = new ModelRegistro ( $objDtoRegistro );
                $array =$objDaoRegistro -> mdlVerUsuario() -> fetchAll();
               
               
            } catch (PDOException $e) {
                echo"error en el controlador" .$e ->getMessage();
            }
            return $array;
           
        }//FIN DEL CONTROLLER VERUSUARIO
 
        public function ctrEditarUsuario(){
            $objDtoRegistro = new RegistroUsu(
                $_POST["txtcedula"],
                $_POST["txtnombre"],
                $_POST["txtapellido"],
                $_POST["txtnumerocel"],
                $_POST["txtfnacimiento"],
                $_POST["txtemail"],
                $_POST["txtcontrasena"]
            );
           
               
           
            $objDaoRegistro = new ModelRegistro($objDtoRegistro);
            if ($objDaoRegistro -> mdlEditarUsuario()){
                echo "<script>
                    Swal.fire(
                        'Super!',
                        'El registro ha sido modificado',
                        'success'
                    );
                    </script>
                ";
            } else{
                    echo "<script>
                        Swal.fire(
                            'Oops',
                            'No se pudo modificar',
                            'danger'
                        );
                        </script>
                    ";
                }    
        }    
 
 
//se creo el controlador eliminar 3/08/2022
        public function ctrEliminarUsuario(){
            $objDtoRegistro = new RegistroUsu(
                $_GET['Eliminar'],
                null,
                null,
                null,
                null,
                null,
                null
               
            );
            $objDaoRegistro = new ModelRegistro($objDtoRegistro);
            $objDaoRegistro -> mdlEliminarUsuario();
            echo"<script>
                    window.location ='index.php?ruta=Usuario';
                </script>";
 
 
 
         /*    if ($objDaoRegistro -> mdlEliminarUsuario()){
                echo "<script>
                    Swal.fire(
                        'Producto',
                        'El registro ha sido Eliminado',
                        'success'
                    );
                    </script>
                ";
                include_once 'view/module/Form_Usua.php';
            } else{
                    echo "<script>
                        Swal.fire(
                            'Producto',
                            'No se pudo modificar',
                            'danger'
                        );
                        </script>
                    ";
                }     */
        }    
 
 
    }
 
 
 
 
?>
 
