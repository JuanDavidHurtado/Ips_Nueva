<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CRecibida extends CI_Controller {

    public function __construct() {
//llamamos al constructor de la clase padre
        parent::__construct();
        $this->load->helper("url");

        $this->load->model("MDocumento");

        if ($this->session->userdata('rol_user') == 2 ) {
            echo "<p><b>ACCESO DENEGADO.</b> Señor usuario, se encuentra intentando acceder"
            . " a un sitio al cual no tiene permiso de acceso.</p>";
            exit;
        }

    }

//controlador por defecto
    public function index() {


        $data['title'] = 'IPS NUEVA | DOC. RECIBIDOS'; //Titulo de la pagina

    
        $this->load->view("CPlantilla/VHead",$data);

       //Carga de head 
        $this->load->view("CPlantilla/VHead");
        
        //Carga de menu
        $this->load->view("CPlantilla/VBarraMenu");

        $documento["doc"] = $this->MDocumento->ver_doc_revision();

        $this->load->view("CRecibida/VPendiente.php",$documento);

        //Carga de footer
        $this->load->view("CPlantilla/VFooter");

    }
    public function index_($tipo) {


        if($tipo == 'aceptado') {

                $data['tipmsg'] = 'info';  //Tipo de mensaje error, warning o success
                $data['msg'] = '<strong><span style="color:white" class="glyphicon">&#xe013;</span> Excelente! </strong>documentación revisada y aceptada.'; //Mensaje a enviar
               
        }elseif($tipo == 'rechazado') {

                $data['tipmsg'] = 'danger';  //Tipo de mensaje error, warning o success
                $data['msg'] = '<strong><span style="color:white" class="glyphicon glyphicon-alert"></span> Advertencia! </strong>Documentaciòn rechazada y por lo tanto fue anulada.'; //Mensaje a enviar 
               
        }

        $data['title'] = 'IPS NUEVA | DOC. RECIBIDOS'; //Titulo de la pagina

    
        $this->load->view("CPlantilla/VHead",$data);
            
            //Carga de menu
        $this->load->view("CPlantilla/VBarraMenu");

        $this->load->view("CPlantilla/VHeader",$data);

        $documento["doc"] = $this->MDocumento->ver_doc_revision();

        $this->load->view("CRecibida/VPendiente.php",$documento);

        //Carga de footer
        $this->load->view("CPlantilla/VFooter");

    }

    public function aceptar_doc($usuDoc){

        $estado = 'SI';   

        $this->MDocumento->act_est_doc($usuDoc, $estado);

        redirect(base_url("index.php/CRecibida/index_/aceptado"));

    }

    public function rechazar_doc($usuDoc){

        $estado = 'RECHAZADO';   

        $this->MDocumento->act_est_doc($usuDoc, $estado);

        redirect(base_url("index.php/CRecibida/index_/rechazado"));

    }
}


?>