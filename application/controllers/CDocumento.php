    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class CDocumento extends CI_Controller {

        public function __construct() {
    //llamamos al constructor de la clase padre
            parent::__construct();
            $this->load->helper("url");
            $this->load->helper('file'); 
            $this->load->model("MDocumento");

        }

    //controlador por defecto
        public function index() {


            $data['title'] = 'IPS NUEVA | CARGAR DOCUMENTOS'; //Titulo de la pagina


            $this->load->view("CPlantilla/VHead",$data);

            
            //Carga de menu
            $this->load->view("CPlantilla/VBarraMenu");

            //CARGA CONTENIDO PRINCIPAL

            $this->load->view("CDocumento/VCargar");

            //Carga de footer
            $this->load->view("CPlantilla/VFooter");

        }

        public function index_($tipo) {


            if ($tipo == 'add') { //Si fue add correcto
                $data['tipmsg'] = 'success';  //Tipo de mensaje error, warning o success
                $data['msg'] = '<strong><span style="color:black" class="glyphicon">&#xe013;</span> Ok! </strong>Documento se añadido correctamente.'; //Mensaje a enviar 
            }

            $data['title'] = 'IPS NUEVA | CARGAR DOCUMENTOS'; //Titulo de la pagina


            $this->load->view("CPlantilla/VHead",$data);
            
            //Carga de menu
            $this->load->view("CPlantilla/VBarraMenu");

            $this->load->view("CPlantilla/VHeader",$data);

            //CARGA CONTENIDO PRINCIPAL

            $this->load->view("CDocumento/VCargar");

            //Carga de footer
            $this->load->view("CPlantilla/VFooter");

        }

        public function add_doc() {

            $file_name = $_FILES['file_url']['name'];
            $file_tmp = $_FILES['file_url']['tmp_name'];
            $file_type = $_FILES['file_url']['type'];

            $fpcero = fopen($file_tmp[0], 'r+b');
            $binariocero = fread($fpcero, filesize($file_tmp[0]));
            fclose($fpcero);

            $fpuno = fopen($file_tmp[1], 'r+b');
            $binariouno = fread($fpuno, filesize($file_tmp[1]));
            fclose($fpuno);

            $fpdos = fopen($file_tmp[2], 'r+b');
            $binariodos = fread($fpdos, filesize($file_tmp[2]));
            fclose($fpdos);

            $fptres = fopen($file_tmp[3], 'r+b');
            $binariotres = fread($fptres, filesize($file_tmp[3]));
            fclose($fptres);

            $fpcuatro = fopen($file_tmp[4], 'r+b');
            $binariocuatro = fread($fpcuatro, filesize($file_tmp[4]));
            fclose($fpcuatro);


            $documento = array(
                'docac' => $binariocero,
                'docaf' => $binariouno,
                'docap' => $binariodos,
                'docct' => $binariotres,
                'docus' => $binariocuatro
            );
            //Procedo a guardar la informacion
            $id_doc = $this->MDocumento->guardar($documento);

            $filas= fopen($file_tmp[1], 'r');
            $data  = explode(",",fgets($filas));
            $num_lineas = 1;            

            while (!feof($filas)){

                if ($linea = fgets($filas)){

                    $num_lineas++;
                }
            }

            $filas_af= fopen($file_tmp[1], 'r');
            $total=0;
            while (!feof($filas_af)) {

                $test= explode(",",fgets($filas_af));
                $var_a_int=(int)$test[16];
                $total = $var_a_int+$total;
                
                if (empty($test) == true) {
                 break;      
             }

         }
         fclose($filas_af);

         $usu_doc = array(
            'usuario_idUsuario' => $this->session->userdata('id_user'),
            'documento_idDocumento' => $id_doc,
            'usu_doc_Fecha' => date("Y-m-d", time()),
            'usu_doc_Fec_Periodo' => $data[6],
            'usu_doc_Factura' => $num_lineas,
            'usu_doc_Valor' =>  $total
        );

         $this->MDocumento->guardar_usu_doc($usu_doc);


         redirect(base_url("index.php/CDocumento/index_/add"));

     }
 }


 ?>