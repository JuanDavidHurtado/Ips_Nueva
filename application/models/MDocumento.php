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

    public function guardar($documento) {
        $consulta = $this->db->insert('documento', $documento);

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

    public function doc_ct($id_doc) {


                $consulta = $this->db->query("SELECT
                            d.docct
                          FROM
                            documento as d
                            WHERE 
                            d.idDocumento = ?", array($id_doc));

        //Devolvemos el resultado de la consulta
    return $consulta->row_array();
       
    }
    public function doc_af($id_doc) {


                $consulta = $this->db->query("SELECT
                            d.docaf
                          FROM
                            documento as d
                            WHERE 
                            d.idDocumento = ?", array($id_doc));

        //Devolvemos el resultado de la consulta
    return $consulta->row_array();
       
    }
    public function eliminar_documento($id_doc)
    {

     $consulta = $this->db->query("DELETE FROM documento WHERE idDocumento=$id_doc");
        if ($consulta == true) {
            return true;
        } else {
            return false;
        }

    }

    public function eli_doc_usu($id_doc){

     $consulta = $this->db->query("DELETE FROM usuario_documento 
        WHERE documento_idDocumento=$id_doc");
        if ($consulta == true) {
            return true;
        } else {
            return false;
        }
    
    }

    public function ver_doc_revision() {

     $consulta = $this->db->query("

        SELECT * FROM usuario_documento AS ud
        INNER JOIN usuario AS u ON u.idUsuario = ud.usuario_idUsuario
        INNER JOIN empresa AS e ON e.idEmpresa = u.empresa_idEmpresa
        WHERE ud.usu_doc_Revisado = 'NO'");

     return $consulta->result();

    }

    public function act_est_doc($usuDoc, $estado){ 

    $this->db->set('usu_doc_Revisado', $estado); //value that used to update column  
    $this->db->where('usuDoc', $usuDoc); //which row want to upgrade  
    $this->db->update('usuario_documento');  //table name

    }

    public function getReporteByRangoFechas($fecha, $fecha1, $empresa){ 

        $consulta = $this->db->query("

            SELECT * FROM usuario_documento AS ud
            INNER JOIN usuario AS u ON u.idUsuario = ud.usuario_idUsuario
            INNER JOIN empresa AS e ON e.idEmpresa = u.empresa_idEmpresa
            WHERE  ud.usu_doc_Revisado = 'SI' OR
            ud.usu_doc_Revisado = 'RECHAZADO' 
            AND
            ud.usu_doc_Fecha BETWEEN '".$fecha."'
            AND 
            '".$fecha1."'
            AND e.idEmpresa = '".$empresa."'
            ");

        return $consulta->result();


    }

     public function buscar_cups($dato6,$id_user,$id_empresa){
        $consulta = $this->db->query("
            SELECT * FROM empresa AS e
            INNER JOIN cups AS c ON c.empresa_idEmpresa = e.idEmpresa
            INNER JOIN usuario AS u ON u.empresa_idEmpresa = e.idEmpresa

            WHERE c.cupCodigo = '".$dato6."'
            AND u.idUsuario =  '".$id_user."'
            AND e.idEmpresa = '".$id_empresa."'
             ");

        return $consulta->result();
    }
    
}

?>