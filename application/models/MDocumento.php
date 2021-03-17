<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//extendemos CI_Model
class MDocumento extends CI_Model {

    public function __construct() {
        //llamamos al constructor de la clase padre
        parent::__construct();

        //cargamos la base de datos
        $this->load->database();
    }

    public function guardar($datos) {
        $consulta = $this->db->insert('documento', $datos);

        if ($consulta) { //Si estuvo correcta la insercion
            //retorno el id generado
            //print_r($this->db->insert_id());
            return $this->db->insert_id();
        } else {
            return null;
        }
    }

    public function guardar_usu_doc($usu_doc) {
        $consulta = $this->db->insert('usuario_documento', $usu_doc);

        return true;
    }


    


}

?>