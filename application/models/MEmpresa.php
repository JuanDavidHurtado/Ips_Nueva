<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//extendemos CI_Model
class MEmpresa extends CI_Model {

  public function __construct() {
        //llamamos al constructor de la clase padre
    parent::__construct();

        //cargamos la base de datos
    $this->load->database();
  }

  public function guardar($empresa) {
        $this->db->insert('empresa', $empresa);

        return true;
    }

    public function ver() {

         $consulta = $this->db->query("SELECT *

          FROM empresa");

        //Devolvemos el resultado de la consulta
        return $consulta->result();
    }
    public function ver_id_usuario($id_user) {

         $consulta = $this->db->query("SELECT *

          FROM usuario AS u
          INNER JOIN empresa AS e ON e.idEmpresa = u.empresa_idEmpresa
          WHERE u.idUsuario = $id_user");

        //Devolvemos el resultado de la consulta
        return $consulta->result();
    }



    public function recuperardatos($idEmpresa) {

        $consulta = $this->db->query("SELECT * FROM empresa WHERE idEmpresa = $idEmpresa");
      
        return $consulta->result();
    }

    public function actualizardatos($empresa, $id_emp) {
        $this->db->where('idEmpresa', $id_emp);
        $consulta = $this->db->update('empresa', $empresa);
        if ($consulta == true) {
            return true;
        } else {
            return false;
        }
    }

    public function ver_emp_estado() {

         $consulta = $this->db->query("SELECT *

          FROM empresa AS e
          WHERE e.empEstado = 'Activo'");

        //Devolvemos el resultado de la consulta
        return $consulta->result();
    }

}

?>