<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Reporte por Rango de Fechas</h3><h4><b>Desde:</b> <?= $fechas[0] ?> <b> Hasta:</b> <?= $fechas[1] ?> </h4>
        </div>
        <!-- /.box-header --> 

        <div class="row">
    <center>
    <table style="width: 90%;" class="table table-bordered">
        <thead>
            <tr>
                <th>Empresa</th>
                <th>Validador</th>
                <th>Factura</th>
                <th>Fecha Validaciòn</th>
                <th>Fecha Periodo</th>
                <th>Valor</th>
                <th>Estado</th>
            <tr>
        </thead>
        <tbody>
            <?php 
            if(count($rep)==0)
            {
                echo "<h2>No hay registro de documentaciòn validada en el rango de fechas que indicaste.<h2>";
            }
                foreach ($rep as $r) {
                  ?>
                   <tr>
                    <td>
                      <?= $r->empNombre; ?>
                    </td>
                    <td>
                      <?= $r->usuNombre." ".$r->usuApellido; ?>
                    </td>
                    <td>
                      <?= $r->usu_doc_Factura; ?>
                    </td>
                    <td>
                     <?= $r->usu_doc_Fecha; ?>
                    </td>
                    <td>
                      <?= $r->usu_doc_Fec_Periodo; ?>
                    </td>
                    <td>
                      $ <?= $r->usu_doc_Valor; ?>
                    </td>
                    <td> 
                      <?php
                       if ($r->usu_doc_Revisado == 'SI'){ 

                         echo "<p style='background:#5DB4E7;'>ACEPTADO<p>";
                        
                         }else{ 

                           echo "<p style='background:#E8354E;'>$r->usu_doc_Revisado<p>";
                                             
                          } ?>
                          
                    </td>

                     </tr>
                    <?php
                    }
                  ?>
        </tbody>
      </table>
    </center>
    
</div>
<!-- /.row -->    
      </div>
      <!-- /.box -->


    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

  <!-- /.row -->
</section>

</div>

