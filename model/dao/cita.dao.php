<?php



class ModelCita{

    private $estado;
    private $id_cita;
    private $fecha;
    private $hora;
    private $nombre;
    private $descripcion;
    

    public function __construct($objDtoCita){
        $this->id_cita = $objDtoCita -> getId_cita();
        $this->nombre = $objDtoCita -> getNombre();
        $this->fecha = $objDtoCita -> getFecha();
        $this->hora= $objDtoCita -> getHora();
        

    }

    /*public function mdlServicio(){
        $sql= "CALL spMostrarServicios()";

        try {
            $con = new Conexion();
            $stmt = $con -> conexion() -> prepare($sql);
            $stmt -> execute();
            $resulset = $stmt;
            
        } catch (PDOException $e) {
            echo "Error en el metodo mdlservicio" . $e -> getMessage();
        }
        return $resulset;

        

    } */





    public function mdlInsertarCita(){
        $sql = "CALL SpCrearCita(?, ?, ?);";
        $this-> estado = false;

        try {
            $con = new Conexion();
            $stmt = $con -> conexion() -> prepare($sql);
            $stmt -> bindParam(1, $this->fecha, PDO::PARAM_STR);
            $stmt -> bindParam(2, $this->hora, PDO::PARAM_STR);
            $stmt -> bindParam(3, $this->nombre, PDO::PARAM_STR);
            $stmt -> execute();
            $this -> estado = true;
            
        } catch (PDOException $ex) {
            echo "Error en dao de cita". $ex -> getMessage();
            
        }
        return $this -> estado;

    }
}


?>