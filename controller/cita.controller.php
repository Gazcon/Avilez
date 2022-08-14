<?php

class ControllerCita{
    public function ctrInsertarCita($fecha, $hora, $nombre){

        $objDtoCita = new Cita(NULL, $fecha, $hora, $nombre);
        $objDaoCita = new ModelCita($objDtoCita);
        if ($objDaoCita -> mdlInsertarCita()){
            echo "CITA ingresada";
        }else {
            echo "Error";
        }

    }


    /*public function ctrServicio(){

        $lista = false;
        try {

            $objDtoCita = new Cita();

            $objDaoCita = new ModelCita($objDtoCita);
            $lista = $objDaoCita -> mdlServicio() -> fetchAll();

            
        } catch (PDOException $e) {
            echo "Error en el metodo crtServicio" . $e -> getMessage();
            
        }

        return $lista;


    }*/
}

?>