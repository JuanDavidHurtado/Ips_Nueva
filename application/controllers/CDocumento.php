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


            if($tipo == 'add') { //Si fue add correcto
                $data['tipmsg'] = 'success';  //Tipo de mensaje error, warning o success
                $data['msg'] = '<strong><span style="color:black" class="glyphicon">&#xe013;</span> Ok! </strong>Documento se añadido correctamente.'; //Mensaje a enviar 
            }elseif($tipo == 'ct_nombre_arc') {

                $data['tipmsg'] = 'danger';  //Tipo de mensaje error, warning o success
                $data['msg'] = '<strong><span style="color:black" class="glyphicon">&#xe013;</span> Error! </strong>Archivo CT incorrecto los nombres de los archivos (AF, US, AC y AP) no coinciden con los del docmento CT.'; //Mensaje a enviar 
               
            }elseif($tipo == 'ct_linea_arc') {

                $data['tipmsg'] = 'danger';  //Tipo de mensaje error, warning o success
                $data['msg'] = '<strong><span style="color:black" class="glyphicon">&#xe013;</span> Error! </strong>Archivo CT incorrecto la cantidad de lineas de los archivos (AF, US, AC y AP) no coinciden con los del docmento CT.'; //Mensaje a enviar 
               
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

            //capturo el nombre de archivo

            $name = pathinfo($file_name[0], PATHINFO_FILENAME);
            $name1 = pathinfo($file_name[1], PATHINFO_FILENAME);
            $name2 = pathinfo($file_name[2], PATHINFO_FILENAME);
            $name4 = pathinfo($file_name[4], PATHINFO_FILENAME);

            //Capturo la cantidad de filas por archivo

            $linea= count(file($file_tmp[0]));
            $linea1= count(file($file_tmp[1]));
            $linea2= count(file($file_tmp[2]));
            $linea4= count(file($file_tmp[4]));

            //creo el array de nombre de doc y nmeros de lineas 

            $nom_archivos = array($name, $name1, $name2, $name4);

            $cant_lineas = array($linea, $linea1, $linea2, $linea4);

            $filas_ct= fopen($file_tmp[3], 'r');


            while(!feof($filas_ct))
            {
                $valores=explode(",",fgets($filas_ct));

                $indice = (isset($valores[2])? $valores[2] : '');

                //$cant_lin_cargadas = (isset($valores[3])? $valores[3] : '');
                $cant_lin_cargadas=(int)$valores[3];
                
                $dos = array($indice);
                $arr_lineas = array($cant_lin_cargadas);

                $resul_nom = array_diff($dos, $nom_archivos);

                $resul_lin = array_diff($arr_lineas, $cant_lineas);

                if (!$resul_nom == array()){
                   
                  redirect(base_url("index.php/CDocumento/index_/ct_nombre_arc"));

                }elseif (!$resul_lin == array()) {

                  redirect(base_url("index.php/CDocumento/index_/ct_linea_arc"));
                    
                }
              
            }
            //echo "<br>";
            fclose($filas_ct);

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
            $num_lineas= count(file($file_tmp[1]));

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