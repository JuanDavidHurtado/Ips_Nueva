<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CEmpresa extends CI_Controller {

    public function __construct() {
//llamamos al constructor de la clase padre
        parent::__construct();
        $this->load->helper("url");

        $this->load->model("MEmpresa");



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

        $this->load->view("CEmpresa/VAgregar.php");

        //Carga de footer
        $this->load->view("CPlantilla/VFooter");

    }

    public function index_($tipo) {


        if ($tipo == 'add') { //Si fue add correcto
            $data['tipmsg'] = 'success';  //Tipo de mensaje error, warning o success
            $data['msg'] = '<strong><span style="color:black" class="glyphicon">&#xe013;</span> Ok! </strong>Entidad se guardo correctamente.'; //Mensaje a enviar 
        } 

        $data['title'] = 'IPS NUEVA | AGREGAR'; //Titulo de la pagina

    
        $this->load->view("CPlantilla/VHead",$data);
        
        $this->load->view("CPlantilla/VBarraMenu");
        $this->load->view("CPlantilla/VHeader",$data);

       
        $this->load->view("CEmpresa/VAgregar.php");

        $this->load->view("CPlantilla/VFooter");

    }

     public function guardar_empresa () {

            
            $nombre = $this->input->post('nom');
            $nit = $this->input->post('nit');
            $correo = $this->input->post('cor');
            $telefono = $this->input->post('tel');
            
            $empresa = array(
                'empNombre' => $nombre,
                'empNit' => $nit,
                'empCorreo' => $correo,
                'empTelefono' => $telefono
               
            );

            $this->MEmpresa->guardar($empresa);
            //// //redirecciono la pagina a la url por defecto
            redirect(base_url("index.php/CEmpresa/index_/add"));

 
    }

    public function listar_emp() {



        $data['title'] = 'IPS NUEVA | LISTAR EMPRESAS'; //Titulo de la pagina

    
        $this->load->view("CPlantilla/VHead",$data);
        
        $this->load->view("CPlantilla/VBarraMenu");
        $this->load->view("CPlantilla/VHeader",$data);
        

        $vector["empresa"] = $this->MEmpresa->ver();

        $this->load->view("CEmpresa/VListar.php", $vector);

        $this->load->view("CPlantilla/VFooter");

    }

    public function modRecuperar($idEmpresa) {

        $data['title'] = 'IPS NUEVA | ACTUALIZAR EMPRESA'; //Titulo de la pagina

        $this->load->view("CPlantilla/VHead",$data);
        
        $this->load->view("CPlantilla/VBarraMenu");
        $this->load->view("CPlantilla/VHeader",$data);


        $param["empresa"] = $this->MEmpresa->recuperardatos($idEmpresa);

        $this->load->view("CEmpresa/VModificar.php", $param);

        $this->load->view("CPlantilla/VFooter");
    }

    public function Editar() {

        $id_emp = $this->input->post('id');
        $nombre = $this->input->post('nom');
        $nit = $this->input->post('nit');
        $correo = $this->input->post('cor');
        $telefono = $this->input->post('tel');
        $estado = $this->input->post('est');
            
        $empresa = array(
                'empNombre' => $nombre,
                'empNit' => $nit,
                'empCorreo' => $correo,
                'empTelefono' => $telefono,
                'empEstado' => $estado
               
        );
       

        $this->MEmpresa->actualizardatos($empresa, $id_emp);

        redirect(base_url("index.php/CEmpresa/listar_empresa/update"));

    }
    public function listar_empresa($tipo) {


        if ($tipo == 'update') { //Si fue update correcto 
            $data['tipmsg'] = 'success';  //Tipo de mensaje error, warning o success
            $data['msg'] = '<strong><span style="color:black" class="glyphicon">&#xe013;</span> Ok!</strong> Entidad se actualizado correctamente.'; //Mensaje a enviar 
        }

        

        $data['title'] = 'IPS NUEVA | LISTAR EMPRESAS'; //Titulo de la pagina

    
        $this->load->view("CPlantilla/VHead",$data);
        
        $this->load->view("CPlantilla/VBarraMenu");
        $this->load->view("CPlantilla/VHeader",$data);
        

        $vector["empresa"] = $this->MEmpresa->ver();

        $this->load->view("CEmpresa/VListar.php", $vector);

        $this->load->view("CPlantilla/VFooter");

    }


}


?>