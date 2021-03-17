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

            /*$file_name = $_FILES['file_url']['name'];
            $file_tmp = $_FILES['file_url']['tmp_name'];
            $file_type = $_FILES['file_url']['type'];

            $fp = fopen($file_tmp, 'r+b');
            $binario = fread($fp, filesize($file_tmp));
            fclose($fp);*/

            $file_tmp=$_FILES["file_url"]['name'];
            



               
            echo $file_tmp[0];

            echo "<br>";

           // print_r($file_tmp[1]);






                //print_r($_FILES["file_url"]['tmp_name']);

                //Validamos que el archivo exista
            /*    if($_FILES["file_url"]["name"][$key]) {


                     $file_name = $_FILES["file_url"]["name"][$key]; //Obtenemos el nombre original del archivo
                     $file_tmp = $_FILES["file_url"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo
                     $file_type = $_FILES['file_url']['type'][$key];



                     $fp = fopen($file_tmp, 'r+b');
                     $binario = fread($fp, filesize($file_tmp));
                     fclose($fp);


                     $archivo = fopen($file_tmp,"rb");
                     $cadena = fread($archivo, 23); // Leemos un determinado número de caracteres

                     echo "".$cadena."";
                     fclose($archivo);


                 }*/





                 /*    $documento_datos = array(
                        'docArchivo' => $binario
                   // 'docArcNombre' => $file_name,
                   // 'docTipArchivo' => $file_type
                    );
            //Procedo a guardar la informacion
                     $id_doc = $this->MDocumento->guardar($documento_datos);

                     $usu_doc = array(
                        'usuario_idUsuario' => $this->session->userdata('id_user'),
                        'documento_idDocumento' => $id_doc
                    );

                    $this->MDocumento->guardar_usu_doc($usu_doc);*/

                




            /*Validacion
            $archivo = fopen($file_tmp,"rb");
            $prueba = "1. Cree una aplicación ";
            $cadena = fread($archivo, 23); // Leemos un determinado número de caracteres
            fclose($archivo);

            end validacion */

            /*echo "<p>".$cadena1."</p>";
            echo "<br>";
            echo "<p>".$prueba."</p>";*/

            /* if ($cadena==$prueba) {*/
                //Procedo a insertar el documento
               /* $documento_datos = array(
                    'docArchivo' => $binario
                   // 'docArcNombre' => $file_name,
                   // 'docTipArchivo' => $file_type
                );
            //Procedo a guardar la informacion
                $id_doc = $this->MDocumento->guardar($documento_datos);

                $usu_doc = array(
                    'usuario_idUsuario' => $this->session->userdata('id_user'),
                    'documento_idDocumento' => $id_doc
                );

                $this->MDocumento->guardar_usu_doc($usu_doc);
                //redirect(base_url("index.php/CDocumento/index_/add"));*/

           /* }else{

                echo "Los archivos no coinciden";

            }*/

        }
    }


    ?>