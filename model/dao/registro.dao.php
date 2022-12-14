<?php
 
    class ModelRegistro{
        private $cedula;
        private $nombre;
        private $apellido;
        private $num_celular;
        private $f_nacimiento;
        private $email;
        private $contrasena;
   
        private $estado;
       
        public function __construct($objDtoregistro){
            $this->cedula       = $objDtoregistro -> getCedula();
            $this->nombre       = $objDtoregistro -> getNombre();
            $this->apellido     = $objDtoregistro -> getApellido();
            $this->num_celular  = $objDtoregistro -> getNum_celular();
            $this->f_nacimiento = $objDtoregistro -> getF_nacimiento();
            $this->email        = $objDtoregistro -> getEmail();
            $this->contrasena   = $objDtoregistro -> getContrasena();
             
        }
        public function mdlInsertarUsuario(){
            $sql = "CALL SpInsertarUsuario(?, ?, ?, ?, ?, ?, ?);";
            $this -> estado = false;
            try {
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> bindParam ( 1, $this->cedula, PDO::PARAM_INT);
                $stmt -> bindParam ( 2, $this->nombre, PDO::PARAM_STR);
                $stmt -> bindParam ( 3, $this->apellido, PDO::PARAM_STR);
                $stmt -> bindParam ( 4, $this->num_celular, PDO::PARAM_INT);
                $stmt -> bindParam ( 5, $this->f_nacimiento, PDO::PARAM_STR);
                $stmt -> bindParam ( 6, $this->email, PDO::PARAM_STR);
                $stmt -> bindParam ( 7, $this->contrasena , PDO::PARAM_STR);
           
                $stmt -> execute();
                $this ->estado = true;
               
 
            }catch (PDOException $ex) {
                echo "Hay un error en el dao de registro" . $ex -> getMessage();
            }
            return $this -> estado;
        }//FIN INSERTAR PRODUCTO
       
        public function mdlVerUsuario(){
            $sql = "CALL `SpVerUsuario`()";
            $resultset = false;
            try {
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> execute();
                $resultset = $stmt;
               
            } catch (PDOException $e) {
                echo"error al ver el registro" . $e -> getMessage();
            }
            return $resultset;
           
        }
       
       
       
       
 
        public function mdlEditarUsuario(){
            $sql = "CALL SpEditarUsuario(?, ?, ?, ?, ?, ?, ?);";
            $this -> estado = false;
            try {
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> bindParam ( 1, $this->cedula, PDO::PARAM_INT);
                $stmt -> bindParam ( 2, $this->nombre, PDO::PARAM_STR);
                $stmt -> bindParam ( 3, $this->apellido, PDO::PARAM_STR);
                $stmt -> bindParam ( 4, $this->num_celular, PDO::PARAM_INT);
                $stmt -> bindParam ( 5, $this->f_nacimiento, PDO::PARAM_INT);
                $stmt -> bindParam ( 6, $this->email, PDO::PARAM_STR);
                $stmt -> bindParam ( 7, $this->contrasena, PDO::PARAM_STR);
           
                $stmt -> execute();
                $this ->estado = true;
               
 
            }catch (PDOException $ex) {
                echo "Hay un error en el dao de registro" . $ex -> getMessage();
            }
            return $this -> estado;  
        }//FIN EDITAR USUARIO
 
//seactualizo y se creo eliminar 3/08/2022
        public function mdlEliminarUsuario(){
            $sql = "CALL SpEliminarUsuario(?);";
            $this -> estado = false;
            try {
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> bindParam ( 1, $this->cedula, PDO::PARAM_INT);
                $stmt -> execute();
                $this ->estado = true;
            }catch (PDOException $ex) {
                echo "Hay un error en el dao al eliminar el registro" . $ex -> getMessage();
            }
            return $this -> estado;
        }
 
    }
 
    /*$objDtoregistro = new RegistroUsu ("1048849714", "wilmer", "Daza",4555, 19940531, "WD@GMAIL.COM", "123" );
    $objDaoregistro = new ModelRegistro ( $objDtoregistro );
 
    if ( $objDaoregistro -> mdlEditarUsuario() ) {
        echo "producto modificado";
    } else {
        echo"ha ocurrido un error";
    } */  
   
?>
 
