<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//extendemos CI_Model
class MUsuario extends CI_Model {

  public function __construct() {
        //llamamos al constructor de la clase padre
    parent::__construct();

        //cargamos la base de datos
    $this->load->database();
  }

  function obtenerUsuarioPorLogin($nit, $pwd){ 

    $query = $this->db->where('usuNit',$nit);  
    $query = $this->db->where('usuClave',$pwd);
    $query = $this->db->get('usuario');
    return $query->row();  
  } 

  public function guardar($usuario) {
        $this->db->insert('usuario', $usuario);

        return true;
    }

    public function ver() {

         $consulta = $this->db->query("SELECT *

          FROM usuario as u 
          LEFT JOIN rol as ro ON  u.rol_idRol=ro.idRol
          LEFT JOIN estado as est on est.idEstado= u.estado_idEstado
          WHERE u.rol_idRol  !=1");

        //Devolvemos el resultado de la consulta
        return $consulta->result();
    }


     public function eliminar($estado, $idUsuario) {
        $this->db->where('idUsuario', $idUsuario);
        $consulta = $this->db->update('usuario', $estado);
        if ($consulta == true) {
            return true;
        } else {
            return false;
        }
    }

    public function recuperardatos($idUsuario) {

        $consulta = $this->db->query("SELECT * FROM usuario WHERE idUsuario = $idUsuario");
      
        return $consulta->result();
    }

    public function actualizardatos($usuario, $id_usu) {
        $this->db->where('idUsuario', $id_usu);
        $consulta = $this->db->update('usuario', $usuario);
        if ($consulta == true) {
            return true;
        } else {
            return false;
        }
    }

}

?>