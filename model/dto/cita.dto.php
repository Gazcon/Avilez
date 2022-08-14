<?php

class Cita{
    	
    private $id_cita;
    private $nombre;//nombre usuario
    private $fecha;
    private $hora;
    

    public function __construct($id_cita,$nombre,$fecha, $hora){
        $this->id_cita = $id_cita;
        $this->nombre = $nombre;
        $this->fecha = $fecha;
        $this->hora= $hora;
        

    }

    //getters

    public function getId_cita(){
        return $this -> id_cita;
    }

    public function getNombre(){
        return $this -> nombre;
    }
    public function getFecha(){
        return $this -> fecha;
    }
    public function getHora(){
        return $this -> hora;
    }
    
    //setters
    public function setId_cita($id_cita){
        $this -> id_cita = $id_cita;
    }

    public function setNombre($nombre){
        $this -> nombre = $nombre;
    }
    public function etFecha($fecha){
        $this -> fecha = $fecha;
    }
    public function setHora($hora){
        $this -> fecha = $fecha;
    }
   






    
}
    



?>