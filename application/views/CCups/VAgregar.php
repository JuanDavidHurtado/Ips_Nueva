 <section class="content">

  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Registro Cups</h3>
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
                <i class="fa fa-pencil-square-o"></i>
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
                <i class="fa fa-institution"></i>
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
                <i class="fa fa-commenting"></i>
              </div>
              <textarea required=""  class="form-control" name="des" rows="5" cols="50" placeholder="Escribe aquí tu comentario:"></textarea>
            </div>

          </div>

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
       <button type="submit" name="submit" value="Agregar" class="btn btn-block btn-social btn-instagram" ><i class="fa fa-check"></i> Guardar</button>
    </div>
  </div>
</section>

</div>



