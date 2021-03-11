<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//extendemos CI_Model
class MRol extends CI_Model {

    public function __construct() {
        //llamamos al constructor de la clase padre
        parent::__construct();

        //cargamos la base de datos
        $this->load->database();
    }

    public function ver() {

        $consulta = $this->db->query("SELECT * FROM rol");

        //Devolvemos el resultado de la consulta
        return $consulta->result();
    }

   
}

?>