<?php
    class Registrobar{
        private $nombres;
        private $apellidos;
        private $n_numero;
        private $f_nacimiento;
        private $f_academica;
        private $barberia;
        private $direccion;
        private $email;
        private $contrasena;

        public function __construct($nombres,$apellidos,$n_numero,$f_nacimiento,$f_academica,$barberia,$direccion,$email,$contrasena){
           $this->$nombre       = $nombres;
           $this->$apellidos    = $apellidos;
           $this->$n_numero     = $n_numero;
           $this->$f_nacimiento = $f_nacimiento;
           $this->$f_academica  = $f_academica;
           $this->$barberia     = $barberia;
           $this->$direccion    = $direccion;
           $this->$email        = $email;
           $this->$contrasena   = $contrasena;
        }
        //--get---//
        public function getNombre(){
            return $this -> nombres;
        }
        public function getApellidos(){
            return $this -> apellidos;
        }
        public function getN_numero(){
            return $this -> n_numero;
        }
        public function getF_nacimiento(){
            return $this -> f_nacimiento;
        }
        public function getF_acdemica(){
            return $this -> f_academica;
        }
        public function getBarberia(){
            return $this -> barberia;
        }
        public function getDireccion(){
            return $this -> direccion;
        }
        public function getEmail(){
            return $this -> email;
        }
        public function getcontrasena(){
            return $this -> contrasena;
        }
        //----set---//
        public function setNombre($nombres){
            $this -> $nombres = $nombres;
        }
        public function setApellidos($apellidos){
            $this -> $apellidos = $apellidos;
        }
        public function setN_numero($n_numero){
            $this -> $n_numero = $n_numero;
        }
        public function setF_nacimeinto($f_nacimiento){
            $this -> $f_nacimiento = $f_nacimiento;
        }
        public function setF_academica($f_academica){
            $this -> $f_academica = $f_academica;
        }
        public function setBarberia($barberia){
            $this -> $barberia = $barberia;
        }
        public function setDireccion($direccion){
            $this -> $direccion = $direccion;
        }
        public function setEmail($email){
            $this -> $email = $email;
        }
        public function setContrasena($contrasena){
            $this -> $contrasena = $contrasena;
        }
    }
?>