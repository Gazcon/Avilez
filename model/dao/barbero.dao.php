<?php
    class ModelRegistro{
        private $nombres;
        private $apellidos;
        private $n_numero;
        private $f_nacimiento;
        private $f_academica;
        private $barberia;
        private $direccion;
        private $email;
        private $contrasena;
        private $estado;

        public function __construct($objDtoRegistro){
           $this->$nombres       = $objDtoRegistro -> getNombre();
           $this->$apellidos     = $objDtoRegistro -> getApellidos();
           $this->$n_numero      = $objDtoRegistro -> getN_numero();
           $this->$f_nacimiento  = $objDtoRegistro -> getF_nacimiento();
           $this->$f_academica   = $objDtoRegistro -> getF_academica();
           $this->$barberia      = $objDtoRegistro -> getBarberia();
           $this->$direccion     = $objDtoRegistro -> getDireccion();
           $this->$email         = $objDtoRegistro -> getEmail();
           $this->$contrasena    = $objDtoRegistro -> getContrasena();
        }    

        public function mdlCrearBarbero(){
            $sql = "CALL SpCrearBarbero(?, ?, ?, ?, ?, ?, ? ,? ,?);";
            $this -> estado = false;
            try {
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> bindParam ( 1, $this->nombres, PDO::PARAM_STR);
                $stmt -> bindParam ( 2, $this->apellidos, PDO::PARAM_STR);
                $stmt -> bindParam ( 3, $this->n_numero, PDO::PARAM_INT);
                $stmt -> bindParam ( 4, $this->f_nacimiento, PDO::PARAM_STR);
                $stmt -> bindParam ( 5, $this->f_academica, PDO::PARAM_STR);
                $stmt -> bindParam ( 6, $this->barberia, PDO::PARAM_STR);
                $stmt -> bindParam ( 7, $this->direccion, PDO::PARAM_STR);
                $stmt -> bindParam ( 8, $this->email, PDO::PARAM_STR);
                $stmt -> bindParam ( 9, $this->contasena, PDO::PARAM_STR);
                $stmt -> execute();
                $this -> estado = true;
            } catch (PDOException $ex) {
                echo "Hay un error en el dao de r.barberia" . $ex -> getMessage()  
            }
            return $this -> estado;
        }// FIN DE CREAR BARBERO

        public function mdlVerBarbero(){
            $sql = "CALL `SpVerBarbero`()";
            $resultset = false;
            try {
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> execute();
                $resultset = $stmt -> fetchAll();
               
            } catch (PDOException $e) {
                echo"error al ver el registro";
            }
            return $resultset;
           
        }// FIN DE VER BARBERO

        public function mdlEditarBarbero(){
            $sql = "CALL SpEditarBarbero(?, ?, ?, ?, ?, ?, ?, ?, ?);";
            $this -> estado = false;
            try {
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> bindParam ( 1, $this->nombres, PDO::PARAM_STR);
                $stmt -> bindParam ( 2, $this->apellidos, PDO::PARAM_STR);
                $stmt -> bindParam ( 3, $this->n_numero, PDO::PARAM_INT);
                $stmt -> bindParam ( 4, $this->f_nacimiento, PDO::PARAM_STR);
                $stmt -> bindParam ( 5, $this->f_academica, PDO::PARAM_STR);
                $stmt -> bindParam ( 6, $this->barberia, PDO::PARAM_STR);
                $stmt -> bindParam ( 7, $this->direccion, PDO::PARAM_STR);
                $stmt -> bindParam ( 8, $this->email, PDO::PARAM_STR);
                $stmt -> bindParam ( 9, $this->contrasena, PDO::PARAM_STR);
                $stmt -> execute();
                $this -> estado = true;
            } catch (PDOException $ex) {
                echo "Hay un error en el dao de r.barberia" . $ex -> getMessage()  
            }
            return $this -> estado;
        }// FIN DE EDITAR BARBERO

        public function mdlEliminarBarbero(){
            $sql = "CALL SpEliminarBarbero(?, ?);";
            $this -> estado = false;
            try {
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> bindParam ( 1, $this->nombres, PDO::PARAM_STR);
                $stmt -> bindParam ( 2, $this->apellidos, PDO::PARAM_STR);
                $stmt -> execute();
                $this -> estado = true;
            } catch (PDOException $ex) {
                echo "Hay un error en el dao al eliminar r.barberia" . $ex -> getMessage()  
            }
            return $this -> estado;
        }// FIN DE ELIMINAR BARBERO
    }

   /* $objDtoRegistro = new Registrobar("Isacc","Gazcon",3193559393,112107,"bachiller","manrique",307050,"ig@gmail.com", "123") ;
    
    $objDaobarbero = new  ModelRegistro ($objDtoRegistro);
    if ( $objDaobarbero -> mdlInsertarRegistro()) {
       echo "Registro insertado";
    } else {
        echo "Ha ocurrido un error"; 
    } */


?>