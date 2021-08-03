<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Cargar Documentos</h3>
        </div>
        <!-- /.box-header -->

        <?php echo form_open_multipart('CDocumento/add_doc'); ?>
        <div class="box-body" enctype="multipart/form-data">

          <div class="col-md-5">
            <div class="form-group">
              <label>Documento:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-file-archive-o"></i>
                </div>
                <input type="file" name="file_url[]" id="file_url" required="" size="10" class="form-control" multiple=""/>
              </div>
            </div>

          </div>

        </div>
        <div class="box-footer">
          <button type="submit" name="submit" class="btn btn-block btn-social btn-instagram" >
            <i class="fa fa-check"></i> Validar</button><br>
            <h4><a target="blank" href="https://www.envigado.gov.co/secretaria-salud/SiteAssets/010_ACORDEONES/DOCUMENTOS/2016/10/Lineamientos-Tecnicos-para-IPS.pdf">Validador de estructura de rips segun resolucion 3374 del 2000</a></h4>
            <div class="pad margin no-print">
              <div class="callout callout-info" style="margin-bottom: 0!important;">
                <h4><i class="fa fa-info"></i> Nota:</h4>
                Antes de comenzar el proceso de validación es importante quitar los espacios en blancos de los archivos txt, asi mismo debe colocar el formato de fecha "dd/mm/aaaa" y revisar que los codigos cups sean los contratados
              </div>
            </div>
          </div>
        </div>
        <!-- /.box -->


      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

    <!-- /.row -->
  </section>

</div>

