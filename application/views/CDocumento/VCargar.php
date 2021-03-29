<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Cargar Documentos</h3>
        </div>
        <!-- /.box-header -->

         <?php echo form_open_multipart('CDocumento/add_doc'); ?>
        <div class="box-body" enctype="multipart/form-data">

          <div class="col-md-12">
          <div class="form-group">
            <label>Documento:</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-laptop"></i>
              </div>
              <input type="file" name="file_url[]" value="" required="" size="10" class="form-control" multiple=""/>

            </div>
          </div>
         
        </div>
         <div class="col-md-12">

          <button type="submit" name="submit" value="Agregar" class="btn btn-block btn-social btn-bitbucket" >
          
            <i class="fa fa-bitbucket"></i> Validar
          </button>

        </div>
        

          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->


      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

    <!-- /.row -->
  </section>

  </div>
