<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CHome extends CI_Controller {

    public function __construct() {
        //llamamos al constructor de la clase padre
        parent::__construct();
        $this->load->helper("url");
        
    }

    //controlador por defecto
    public function index() {


        $data['title'] = 'IPS NUEVA | PANEL DE CONTROL'; //Titulo de la pagina

    
        $this->load->view("CPlantilla/VHead",$data);
        
        //Carga de menu
        $this->load->view("CPlantilla/VBarraMenu");

        //CARGA CONTENIDO PRINCIPAL
        $this->load->view("CHome/Home.php");

        //Carga de footer
        $this->load->view("CPlantilla/VFooter");
    }

}

?>