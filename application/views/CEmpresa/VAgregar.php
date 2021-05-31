 <section class="content">

  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Registro Empresa</h3>

    </div>

    <?php echo form_open_multipart('CEmpresa/guardar_empresa'); ?>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Nombre:</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-institution"></i>
              </div>
              <input type="text" required="" name="nom" class="form-control" placeholder="Nombre">
            </div>
          </div>
          <!-- /.form-group -->
          <div class="form-group">
            <label>Correo Eléctronico</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-envelope"></i>
              </div>
              <input type="text" required="" name="cor" class="form-control" placeholder="Correo Eléctronico">
            </div>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <div class="form-group">
            <label>Nit:</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-pencil-square-o"></i>
              </div>
              <input type="text" required="" name="nit" class="form-control" placeholder="Nit">
            </div>

          </div>
          <!-- /.form-group -->
          <div class="form-group">
            <label>Teléfono:</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-fax"></i>
              </div>
              <input type="text" required="" name="tel" class="form-control" placeholder="Teléfono">
            </div>
          </div>
          <!-- /.form-group -->
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



