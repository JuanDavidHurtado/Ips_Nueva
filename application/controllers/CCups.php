<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CCups extends CI_Controller {

    public function __construct() {
//llamamos al constructor de la clase padre
        parent::__construct();
        $this->load->helper("url");

        $this->load->model("MEmpresa");
        $this->load->model("MCups");




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

        $vector["empresa"] = $this->MEmpresa->ver_emp_estado();

        $this->load->view("CCups/VAgregar.php",$vector);

        //Carga de footer
        $this->load->view("CPlantilla/VFooter");

    }

    public function index_($tipo) {


        if ($tipo == 'add') { //Si fue add correcto
            $data['tipmsg'] = 'info';  //Tipo de mensaje error, warning o success
            $data['msg'] = '<strong><span style="color:black" class="glyphicon">&#xe013;</span> Ok! </strong>Cups se guardo correctamente.'; //Mensaje a enviar 
        } 

        $data['title'] = 'IPS NUEVA | AGREGAR'; //Titulo de la pagina

    
        $this->load->view("CPlantilla/VHead",$data);
        
        $this->load->view("CPlantilla/VBarraMenu");
        $this->load->view("CPlantilla/VHeader",$data);

       
        $vector["empresa"] = $this->MEmpresa->ver_emp_estado();

        $this->load->view("CCups/VAgregar.php",$vector);

        $this->load->view("CPlantilla/VFooter");

    }

     public function guardar_cups() {

            
            $codigo = $this->input->post('cod');
            $descripcion = $this->input->post('des');
            $id_emp = $this->input->post('emp');
            
            $cups = array(
                'cupCodigo' => $codigo,
                'cupDescripcion' => $descripcion,
                'empresa_idEmpresa' => $id_emp
               
            );

            $this->MCups->guardar($cups);
            //// //redirecciono la pagina a la url por defecto
            redirect(base_url("index.php/CCups/index_/add"));

 
    }

    public function lis_cups() {



        $data['title'] = 'IPS NUEVA | LISTAR EMPRESAS'; //Titulo de la pagina

    
        $this->load->view("CPlantilla/VHead",$data);
        
        $this->load->view("CPlantilla/VBarraMenu");
        $this->load->view("CPlantilla/VHeader",$data);
        

        $vector["cups"] = $this->MCups->ver();

        $this->load->view("CCups/VListar.php", $vector);

        $this->load->view("CPlantilla/VFooter");

    }

    public function modRecuperar($idCups) {

        $data['title'] = 'IPS NUEVA | ACTUALIZAR CUPS';

        $this->load->view("CPlantilla/VHead",$data);
        
        $this->load->view("CPlantilla/VBarraMenu");
        $this->load->view("CPlantilla/VHeader",$data);


        $param["cups"] = $this->MCups->recuperardatos($idCups);
        $param["empresa"] = $this->MEmpresa->ver_emp_estado();

        $this->load->view("CCups/VModificar.php",$param);

        $this->load->view("CPlantilla/VFooter");
    }

    public function Editar() {

        $idCups = $this->input->post('id');
        $codigo = $this->input->post('cod');
        $descripcion = $this->input->post('des');
        $estado = $this->input->post('est');
        $empresa = $this->input->post('emp');
            
        $cups = array(
                'cupCodigo' => $codigo,
                'cupDescripcion' => $descripcion,
                'cupEstado' => $estado,
                'empresa_idEmpresa' => $empresa
               
        );
       

        $this->MCups->actualizardatos($cups, $idCups);

        redirect(base_url("index.php/CCups/listar_cups/update"));

    }
    public function listar_cups($tipo) {


        if ($tipo == 'update') { //Si fue update correcto 
            $data['tipmsg'] = 'info';  //Tipo de mensaje error, warning o success
            $data['msg'] = '<strong><span style="color:black" class="glyphicon">&#xe013;</span> Ok!</strong> Cups se actualizo correctamente.'; //Mensaje a enviar 
        }

        

        $data['title'] = 'IPS NUEVA | LISTAR EMPRESAS'; //Titulo de la pagina

    
        $this->load->view("CPlantilla/VHead",$data);
        
        $this->load->view("CPlantilla/VBarraMenu");
        $this->load->view("CPlantilla/VHeader",$data);
        

        $vector["cups"] = $this->MCups->ver();

        $this->load->view("CCups/VListar.php", $vector);

        $this->load->view("CPlantilla/VFooter");

    }


}


?>