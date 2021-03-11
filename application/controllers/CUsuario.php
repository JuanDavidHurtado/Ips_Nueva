<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CUsuario extends CI_Controller {

    public function __construct() {
//llamamos al constructor de la clase padre
        parent::__construct();
        $this->load->helper("url");

        $this->load->model("MRol");
        $this->load->model("MEstado");
        $this->load->model("MUsuario");


        if ($this->session->userdata('rol_user') == 2 ||
                $this->session->userdata('rol_user') == 3) {
            echo "<p><b>ACCESO DENEGADO.</b> Señor usuario, se encuentra intentando acceder"
            . " a un sitio al cual no tiene permiso de acceso.</p>";
            exit;
        }

    }

//controlador por defecto
    public function index() {


        $data['title'] = 'IPS NUEVA | AGREGAR'; //Titulo de la pagina

    
        $this->load->view("CPlantilla/VHead",$data);

       //Carga de head 
        $this->load->view("CPlantilla/VHead");
        
        //Carga de menu
        $this->load->view("CPlantilla/VBarraMenu");

        //CARGA CONTENIDO PRINCIPAL

        $vector["rol"] = $this->MRol->ver();
        $vector["estado"] = $this->MEstado->ver();

        $this->load->view("CUsuario/VForm_Usu.php", $vector);

        //Carga de footer
        $this->load->view("CPlantilla/VFooter");

    }

    public function index_($tipo) {


        if ($tipo == 'add') { //Si fue add correcto
            $data['tipmsg'] = 'success';  //Tipo de mensaje error, warning o success
            $data['msg'] = '<strong><span style="color:black" class="glyphicon">&#xe013;</span> Ok! </strong>Cuenta de Usuario añadido correctamente.'; //Mensaje a enviar 
        } else if ($tipo == 'update') { //Si fue update correcto 
            $data['tipmsg'] = 'success';  //Tipo de mensaje error, warning o success
            $data['msg'] = '<strong><span style="color:black" class="glyphicon">&#xe013;</span> Ok!</strong> Cuenta de Usuario actualizado correctamente.'; //Mensaje a enviar 
        }


        $data['title'] = 'IPS NUEVA | AGREGAR'; //Titulo de la pagina

    
        $this->load->view("CPlantilla/VHead",$data);
        
        $this->load->view("CPlantilla/VBarraMenu");
         $this->load->view("CPlantilla/VHeader",$data);

        $vector["rol"] = $this->MRol->ver();
        $vector["estado"] = $this->MEstado->ver();

        $this->load->view("CUsuario/VForm_Usu.php", $vector);

        $this->load->view("CPlantilla/VFooter");

    }

    public function guardar_usuario () {

            $nit = $this->input->post('nit');
            $nombre = $this->input->post('nom');
            $apellido = $this->input->post('ape');
            $clave = $this->input->post('pwd');
            $telefono = $this->input->post('tel');
            $telefono1 = $this->input->post('tel1');
            $correo = $this->input->post('cor');
            $direccion = $this->input->post('dir');
            $rol = $this->input->post('rol');
            $estado = $this->input->post('est');

            $usuario = array(
                'usuNit' => $nit,
                'usuNombre' => $nombre,
                'usuApellido' => $apellido,
                'usuClave' => $clave,
                'usuTelefono' => $telefono,
                'usuTelefono1' => $telefono1,
                'usuCorreo' => $correo,
                'usuDireccion' => $direccion,
                'rol_idRol' => $rol,
                'estado_idEstado' => $estado
            );

            $this->MUsuario->guardar($usuario);
            //// //redirecciono la pagina a la url por defecto
            redirect(base_url("index.php/CUsuario/index_/add"));

 
    }
    public function listar_usu() {



        $data['title'] = 'IPS NUEVA | LISTAR USUARIO'; //Titulo de la pagina

    
        $this->load->view("CPlantilla/VHead",$data);
        
        $this->load->view("CPlantilla/VBarraMenu");
        $this->load->view("CPlantilla/VHeader",$data);
        

        $vector["usuario"] = $this->MUsuario->ver();

        $this->load->view("CUsuario/VListar.php", $vector);

        $this->load->view("CPlantilla/VFooter");

    }
    public function listar_usuario($tipo) {


         if ($tipo == 'delete') { //Si fue add correcto
            $data['tipmsg'] = 'success';  //Tipo de mensaje error, warning o success
            $data['msg'] = '<strong><span style="color:black" class="glyphicon">&#xe013;</span> Ok! </strong>Cuenta de Usuario paso a un estado de inhabilatado para ingresar al sistema'; //Mensaje a enviar 
        } else if ($tipo == 'update') { //Si fue update correcto 
            $data['tipmsg'] = 'success';  //Tipo de mensaje error, warning o success
            $data['msg'] = '<strong><span style="color:black" class="glyphicon">&#xe013;</span> Ok!</strong> Cuenta de Usuario actualizado correctamente.'; //Mensaje a enviar 
        }

        

        $data['title'] = 'IPS NUEVA | LISTAR USUARIO'; //Titulo de la pagina

    
        $this->load->view("CPlantilla/VHead",$data);
        
        $this->load->view("CPlantilla/VBarraMenu");
        $this->load->view("CPlantilla/VHeader",$data);
        

        $vector["usuario"] = $this->MUsuario->ver();

        $this->load->view("CUsuario/VListar.php", $vector);

        $this->load->view("CPlantilla/VFooter");

    }


    public function modRecuperar($idUsuario) {

        $data['title'] = 'IPS NUEVA | ACTUALIZAR USUARIO'; //Titulo de la pagina

        $this->load->view("CPlantilla/VHead",$data);
        
        $this->load->view("CPlantilla/VBarraMenu");
        $this->load->view("CPlantilla/VHeader",$data);


        $param["usuario"] = $this->MUsuario->recuperardatos($idUsuario);
        $param["rol"] = $this->MRol->ver();
        $param["estado"] = $this->MEstado->ver();

        $this->load->view("CUsuario/VModificar.php", $param);

        $this->load->view("CPlantilla/VFooter");
    }

    public function Editar() {

        $id_usu = $this->input->post('id');
        $nit = $this->input->post('nit');
        $nombre = $this->input->post('nom');
        $apellido = $this->input->post('ape');
        $clave = $this->input->post('pwd');
        $telefono = $this->input->post('tel');
        $telefono1 = $this->input->post('tel1');
        $correo = $this->input->post('cor');
        $direccion = $this->input->post('dir');
        $rol = $this->input->post('rol');
        $estado = $this->input->post('est');

        $usuario = array(
                'usuNit' => $nit,
                'usuNombre' => $nombre,
                'usuApellido' => $apellido,
                'usuClave' => $clave,
                'usuTelefono' => $telefono,
                'usuTelefono1' => $telefono1,
                'usuCorreo' => $correo,
                'usuDireccion' => $direccion,
                'rol_idRol' => $rol,
                'estado_idEstado' => $estado
            );

        $this->MUsuario->actualizardatos($usuario, $id_usu);

        redirect(base_url("index.php/CUsuario/listar_usuario/update"));

    }


    public function eliminar($idUsuario) {

        $estado = array(
            'estado_idEstado' => 2
        );

        $this->MUsuario->eliminar($estado, $idUsuario);
        
        redirect(base_url("index.php/CUsuario/listar_usuario/delete"));
    }
}


?>