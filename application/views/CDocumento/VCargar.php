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

          <div class="col-md-12">
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
          <i class="fa fa-check"></i> Validar</button>
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

