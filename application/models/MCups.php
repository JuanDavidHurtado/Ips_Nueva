<?php
defined('BASEPATH') or exit('No direct script access allowed');

//extendemos CI_Model
class MCups extends CI_Model
{

    public function __construct()
    {
        //llamamos al constructor de la clase padre
        parent::__construct();

        //cargamos la base de datos
        $this
            ->load
            ->database();
    }

    public function guardarunidad($cups)
    {

        $this
            ->db
            ->insert('cups', $cups);

        return true;

    }
    public function guardar($_DATOS_EXCEL)
    {
        $resultado = $this
            ->db
            ->insert_batch('cups', $_DATOS_EXCEL);

        if ($resultado)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function ver()
    {

        $consulta = $this
            ->db
            ->query("SELECT *

  FROM cups AS c
  INNER JOIN empresa AS e ON e.idEmpresa = c.empresa_idEmpresa");

        //Devolvemos el resultado de la consulta
        return $consulta->result();
    }

    public function recuperardatos($idCups)
    {

        $consulta = $this
            ->db
            ->query("SELECT * FROM cups WHERE idCups = $idCups");

        return $consulta->result();
    }

    public function actualizardatos($cups, $idCups)
    {
        $this
            ->db
            ->where('idCups', $idCups);
        $consulta = $this
            ->db
            ->update('cups', $cups);
        if ($consulta == true)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

}

?>
