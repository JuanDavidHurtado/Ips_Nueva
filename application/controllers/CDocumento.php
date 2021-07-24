    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class CDocumento extends CI_Controller {

        public function __construct() {
    //llamamos al constructor de la clase padre
            parent::__construct();
            $this->load->helper("url");
            $this->load->helper('file'); 
            $this->load->model("MDocumento");
            $this->load->model("MEmpresa");

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
        public function lista_documento() {


            $data['title'] = 'IPS NUEVA | BUSCAR DOCUMENTOS'; //Titulo de la pagina


            $this->load->view("CPlantilla/VHead",$data);

            
            //Carga de menu
            $this->load->view("CPlantilla/VBarraMenu");

            //CARGA CONTENIDO PRINCIPAL
           // 'usuario_idUsuario' => $this->session->userdata('id_user'),
            $empresa['emp'] = $this->MEmpresa->ver();
            $empresa['empresa'] = $this->MEmpresa->ver_id_usuario($this->session->userdata('id_user'));

            $this->load->view("CDocumento/VListar",$empresa);

            //Carga de footer
            $this->load->view("CPlantilla/VFooter");

        }

        public function rangoFecha() { 

           $data['title'] = 'IPS NUEVA | BUSCAR DOCUMENTOS'; //Titulo de la pagina


           $this->load->view("CPlantilla/VHead",$data);

            
            //Carga de menu
          $this->load->view("CPlantilla/VBarraMenu");

           $empresa = $this->input->post('empresa');
           $fecha = $this->input->post('fecha');
           $fecha1 = $this->input->post('fecha1');

           $fechas[0] = $fecha;
           $fechas[1] = $fecha1;  


          // echo $fecha." <> ".$fecha1."<br>";


           $reporte["rep"] = $this->MDocumento->getReporteByRangoFechas($fecha, $fecha1, $empresa);
           $reporte["fechas"] = $fechas;

           //print_r($reporte);


           $this->load->view("CDocumento/VReporte",$reporte);

            //Carga de footer
           $this->load->view("CPlantilla/VFooter");

        }    


        public function index_($tipo) {


            if($tipo == 'ct_nombre_arc') {

                $data['tipmsg'] = 'danger';  //Tipo de mensaje error, warning o success
                $data['msg'] = '<strong><span style="color:white" class="glyphicon glyphicon-alert"></span> Error! </strong>Archivo CT incorrecto los nombres de los archivos (AF, US, AC y AP) no coinciden con los del documento CT.'; //Mensaje a enviar 
               
            }elseif($tipo == 'ct_linea_arc') {

                $data['tipmsg'] = 'danger';  //Tipo de mensaje error, warning o success
                $data['msg'] = '<strong><span style="color:white" class="glyphicon glyphicon-alert"></span> Error! </strong>Archivo CT incorrecto la cantidad de lineas de los archivos (AF, US, AC o AP) no coinciden con los del documento CT.'; //Mensaje a enviar 
               
            }elseif($tipo == 'af_incorrecto') {

                $data['tipmsg'] = 'danger';  //Tipo de mensaje error, warning o success
                $data['msg'] = '<strong><span style="color:white" class="glyphicon glyphicon-alert"></span> Error! </strong>Archivo AF incorrecto por favor revisar.'; //Mensaje a enviar 
               
            }elseif($tipo == 'ac_incorrecto') {

                $data['tipmsg'] = 'danger';  //Tipo de mensaje error, warning o success
                $data['msg'] = '<strong><span style="color:white" class="glyphicon glyphicon-alert"></span> Error! </strong>Archivo AC incorrecto por favor revisar.'; //Mensaje a enviar 
               
            }elseif($tipo == 'ap_incorrecto') {

                $data['tipmsg'] = 'danger';  //Tipo de mensaje error, warning o success
                $data['msg'] = '<strong><span style="color:white" class="glyphicon glyphicon-alert"></span> Error! </strong>Archivo AP incorrecto por favor revisar.'; //Mensaje a enviar 
               
            }elseif($tipo == 'us_incorrecto') {

                $data['tipmsg'] = 'danger';  //Tipo de mensaje error, warning o success
                $data['msg'] = '<strong><span style="color:white" class="glyphicon glyphicon-alert"></span> Error! </strong>Archivo US incorrecto por favor revisar.'; //Mensaje a enviar 
               
            }elseif($tipo == 'doc_correcto') {

                $data['tipmsg'] = 'info';  //Tipo de mensaje error, warning o success
                $data['msg'] = '<strong><span style="color:white" class="glyphicon">&#xe013;</span> Excelente! </strong>documentación con validación correctamente.'; //Mensaje a enviar 
               
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

            $name =  pathinfo($file_name[0], PATHINFO_FILENAME);
            $name1 = pathinfo($file_name[1], PATHINFO_FILENAME);
            $name2 = pathinfo($file_name[2], PATHINFO_FILENAME);
            $name4 = pathinfo($file_name[4], PATHINFO_FILENAME);

            //Capturo la cantidad de filas por archivo

            $linea =  count(file($file_tmp[0]));
            $linea1 = count(file($file_tmp[1]));
            $linea2 = count(file($file_tmp[2]));
            $linea4 = count(file($file_tmp[4]));

            //creo el array de nombre de doc y nmeros de lineas 

            $nom_archivos = array($name, $name1, $name2, $name4);

            $cant_lineas = array($linea, $linea1, $linea2, $linea4);

            $filas_ct = fopen($file_tmp[3], 'r');

            while(!feof($filas_ct))
            {
                $valores=explode(",",fgets($filas_ct));

                $indice = (isset($valores[2])? $valores[2] : '');

                //$cant_lin_cargadas = (isset($valores[3])? $valores[3] : '');
                $cant_lin_cargadas=(int)$valores[3];
                
                $dos = array($indice);

             //   print_r($dos);
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
            
            //$file_tmp[0]

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

        $var_vacia = "";

        //Validación documento af////////////////////////

        $doc_ct = $this->MDocumento->doc_ct($id_doc);
        $doc_af = $this->MDocumento->doc_af($id_doc);

        $cad_doc_ct = implode(",", $doc_ct);
        $cad_doc_af = implode(",", $doc_af);

        $array_doc_ct = explode(",", $cad_doc_ct);

        $array_doc_af = explode(",", $cad_doc_af);


//Capturo posicion 0 del docmento ct
        $ct_posicon_zero = $array_doc_ct[0];

        $var_NI = "NI";
       // echo $linea;


        $file1 = new SplFileObject($file_tmp[1]);
                $file1->setFlags(SplFileObject::READ_CSV);

        foreach ($file1 as $row) {

            list($dato, $dato1, $dato2, $dato3, $dato4, $dato5, $dato6, $dato7, $dato8
                , $dato9, $dato10, $dato11, $dato12, $dato13, $dato14, $dato15, $dato16) = $row;
            //Longitud campo [3]
            $var_long = strlen($dato3);   
            //echo "El id es: ". $dato4 . "<br>"; 

            //Validacion de campos
        for ($i=0; $i < $linea1; $i++) { 
              
            if ($dato != $ct_posicon_zero || $dato == $var_vacia || $dato1 == $var_vacia
                || $dato2 == $var_vacia || $dato2 != $var_NI || $var_long >= 17 || 
                $dato4 == $var_vacia || $dato5 == $var_vacia || $dato5 >= $dato7 ||
                $dato6 == $var_vacia || $dato6 >= $dato7 || $dato7 == $var_vacia
                || $dato8 == $var_vacia || $dato9 == $var_vacia || $dato13 < 0
                || $dato13 == $var_vacia || $dato14 == $var_vacia || $dato14 < 0 || 
                $dato15 == $var_vacia || $dato15 < 0 || $dato16 == $var_vacia || $dato16 < 0
                //|| $dato7 != $var_fecha
            ){
 
                $this->MDocumento->eliminar_documento($id_doc);
                $this->MDocumento->eli_doc_usu($id_doc);

                redirect(base_url("index.php/CDocumento/index_/af_incorrecto"));
            }
          }

        }

        //Validación documento ac////////////////////////

        $af_posicon_cinco = $array_doc_af[5];

        $file = new SplFileObject($file_tmp[0]);
        $file->setFlags(SplFileObject::READ_CSV);


        foreach ($file as $row) {
         
            list($dato, $dato1, $dato2, $dato3, $dato4, $dato5, $dato6, $dato7, 
                $dato8, $dato9, $dato10, $dato11, $dato12, $dato13, $dato14, $dato15
                , $dato16) = $row; 

            $total = $dato14 - $dato15;
      
         for ($i=0; $i < $linea; $i++) { 

            if ($dato == $var_vacia || $dato1 != $ct_posicon_zero || $dato2 == $var_vacia
                || !($dato2 === 'CC' || $dato2 === 'CE' || $dato2 === 'CA' || $dato2 === 'RC' || $dato2 === 'TI' || $dato2 === 'AS' || $dato2 ==='MS')
                || $dato3 == $var_vacia || $dato4 != $af_posicon_cinco || $dato7 == $var_vacia || $dato8 == $var_vacia || $dato9 == $var_vacia || $dato13 == $var_vacia || !($dato13 >=1 && $dato13 <=3) || $dato14 == $var_vacia || $dato14 < 0 || $dato15 == $var_vacia || $dato15 < 0
              || $dato16 == $var_vacia || $dato16 < 0 || $dato16 != $total 
          ){

                $this->MDocumento->eliminar_documento($id_doc);
                $this->MDocumento->eli_doc_usu($id_doc);
                
                redirect(base_url("index.php/CDocumento/index_/ac_incorrecto"));
            }
           
           } 
        }


        //////////////Validacion Documento ap///////////////

        $file2 = new SplFileObject($file_tmp[2]);
        $file2->setFlags(SplFileObject::READ_CSV);

        foreach ($file2 as $row) {
         
            list($dato, $dato1, $dato2, $dato3, $dato4, $dato5, $dato6, $dato7, $dato8
                , $dato9, $dato10, $dato11, $dato12, $dato13, $dato14) = $row; 

            $val_num = is_numeric($dato3);

          for ($i=0; $i < $linea2; $i++) { 
            if ($dato1 == $var_vacia || $dato1 != $ct_posicon_zero || $dato2 == $var_vacia
                || !($dato2 === 'CC' || $dato2 === 'CE' || $dato2 === 'CA' || $dato2 === 'RC' || $dato2 === 'TI' || $dato2 === 'AS' || $dato2 ==='MS')
                || $dato3 == $var_vacia || $val_num != 1 || $dato4 == $var_vacia || $dato6 == $var_vacia || $dato7 == $var_vacia || !($dato7 >=1 && $dato7 <=3) || $dato8 == $var_vacia || !($dato8 >=1 && $dato8 <=5) || $dato13 == $var_vacia || !($dato13 >=1 && $dato13 <=5) || $dato14 == $var_vacia || $dato14 < 0
            ){

                $this->MDocumento->eliminar_documento($id_doc);
                $this->MDocumento->eli_doc_usu($id_doc);
                
                redirect(base_url("index.php/CDocumento/index_/ap_incorrecto"));
            }
          }
        }


        //////////////Validacion Documento us///////////////

        $af_posicon_ocho = $array_doc_af[8];

        $file4 = new SplFileObject($file_tmp[4]);
        $file4->setFlags(SplFileObject::READ_CSV);


        foreach ($file4 as $row) {
         
            list($dato, $dato1, $dato2, $dato3, $dato4, $dato5, $dato6, $dato7, $dato8, $dato9, $dato10, $dato11, $dato12, $dato13
            ) = $row; 

            $val_num = is_numeric($dato1);
            $val_num1 = is_numeric($dato8);
            $val_num2 = is_numeric($dato11);
            $val_num3 = is_numeric($dato12);
 
          for ($i=0; $i < $linea4; $i++) { 
            if (!($dato === 'CC' || $dato === 'CE' || $dato === 'CA' || $dato === 'RC' || $dato === 'TI' || $dato === 'AS' || $dato ==='MS') ||
                $dato == $var_vacia 
                || $dato1 == $var_vacia || $val_num != 1 || $dato2 == $var_vacia || $dato2 != $af_posicon_ocho || $dato3 == $var_vacia ||
                !($dato3 >=1 && $dato3 <=8) || $dato4 == $var_vacia || $dato6 == $var_vacia
                || $dato8 == $var_vacia || $val_num1 != 1 || $dato8 < 0 || $dato9 == $var_vacia || !($dato9 >=1 && $dato9 <=3) || $dato10 == $var_vacia
                || !($dato10 === 'F' || $dato10 === 'M') || $dato11 == $var_vacia || $val_num2 != 1 || $dato12 == $var_vacia || $val_num3 != 1 || $dato13 == $var_vacia || !($dato13 === 'R' || $dato13 === 'U')
            ){

                $this->MDocumento->eliminar_documento($id_doc);
                $this->MDocumento->eli_doc_usu($id_doc);
                
                redirect(base_url("index.php/CDocumento/index_/us_incorrecto"));
            }
          }
        }

      redirect(base_url("index.php/CDocumento/index_/doc_correcto"));


    }    
  
}


?>