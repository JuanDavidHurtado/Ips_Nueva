 <section class="content">

  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title">Registro Empresa</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>
    </div>

    <?php echo form_open_multipart('CCups/guardar_cups'); ?>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Código:</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-laptop"></i>
              </div>
              <input type="text" required="" name="cod" class="form-control" placeholder="Código">
            </div>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <div class="form-group">
            <label>Empresa:</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-laptop"></i>
              </div>
              <select class="form-control" required="" name="emp">
                <option value="">---Seleccione Opción---</option>
                <?php
                foreach ($empresa as $e) {
                  echo "<option value={$e->idEmpresa}>{$e->empNombre}</option>";
                }
                ?> 
              </select>
            </div>

          </div>

        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label>Descripción:</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-laptop"></i>
              </div>
              <textarea required=""  class="form-control" name="des" rows="5" cols="50" placeholder="Escribe aquí tu comentario:"></textarea>
            </div>

          </div>

        </div>



        <div class="col-md-12">

          <button type="submit" name="submit" value="Agregar" class="btn btn-block btn-social btn-bitbucket" >

            <i class="fa fa-bitbucket"></i> Guardar
          </button>

        </div>

        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
      the plugin.
    </div>
  </div>
</section>

</div>



