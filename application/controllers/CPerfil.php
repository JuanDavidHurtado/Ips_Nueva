<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CPerfil extends CI_Controller {

    public function __construct() {
        //llamamos al constructor de la clase padre
        parent::__construct();
        $this->load->helper("url");
        $this->load->library('encryption');
        
        //Incluyo los modelos necesarios
        $this->load->model("MUsuario");
        
    }

    //controlador por defecto
    public function index() {

        $data['title'] = 'IPS NUEVA | EDITAR PERFIL'; //Titulo de la pagina

    
        $this->load->view("CPlantilla/VHead",$data);

       //Carga de head 
        $this->load->view("CPlantilla/VHeader");
        
        //Carga de menu
        $this->load->view("CPlantilla/VBarraMenu");

        //CARGA CONTENIDO PRINCIPAL

        $datos["usuario"] = $this->MUsuario->recuperardatos($this->session->userdata('id_user'));
        $this->load->view("CPerfil/VEditar", $datos);


        //Carga de footer
        $this->load->view("CPlantilla/VFooter");
    }

    public function index_($tipo) {
        //Carga del header de la plantilla
        //Carga del header de la plantilla
        //Datos para estructurar la plantilla
        if ($tipo == 'update') { //Si fue add correcto
            $data['tipmsg'] = 'success';  //Tipo de mensaje error, warning o success
            $data['msg'] = '<strong><span style="color:black" class="glyphicon">&#xe013;</span> Ok!</strong>Tu perfil se ha actualizado correctamente.'; //Mensaje a enviar 
        }

        $data['title'] = 'IPS NUEVA | EDITAR PERFIL'; //Titulo de la pagina

    
        $this->load->view("CPlantilla/VHead",$data);

        //Carga de menu
        $this->load->view("CPlantilla/VBarraMenu");

       //Carga de head 
        $this->load->view("CPlantilla/VHeader",$data);
        

        //CARGA CONTENIDO PRINCIPAL

        $datos["usuario"] = $this->MUsuario->recuperardatos($this->session->userdata('id_user'));
        $this->load->view("CPerfil/VEditar", $datos);


        //Carga de footer
        $this->load->view("CPlantilla/VFooter");
    }

    public function actualizar() {

            $login = $this->input->post('log');
            $nombre = $this->input->post('nom');
            $apellido = $this->input->post('ape');
            $clave = $this->input->post('pwd');
            $telefono = $this->input->post('tel');
            $telefono1 = $this->input->post('tel1');
            $correo = $this->input->post('cor');
            $direccion = $this->input->post('dir');

            $usuario = array(
                'usuLogin' => $login,
                'usuNombre' => $nombre,
                'usuApellido' => $apellido,
                'usuClave' => $clave,
                'usuTelefono' => $telefono,
                'usuTelefono1' => $telefono1,
                'usuCorreo' => $correo,
                'usuDireccion' => $direccion
            );



        $this->MUsuario->actualizardatos($usuario, $this->session->userdata('id_user'));
        // //redirecciono la pagina a la url por defecto
        redirect(base_url("index.php/CPerfil/index_/update"));
    }

}
