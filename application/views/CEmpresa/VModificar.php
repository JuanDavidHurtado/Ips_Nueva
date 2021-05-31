 <section class="content">

  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Actualizar Entidad</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>
    </div>

    <?php echo form_open_multipart('CEmpresa/Editar'); ?>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="row">
        <?php foreach ($empresa as $e) { ?>
          <input id='id' name='id' value='<?= $e->idEmpresa ?>' hidden=''/>
          <div class="col-md-6">
            <div class="form-group">
              <label>Nombres:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-institution"></i>
                </div>
                <input type="text" name="nom" value="<?= $e->empNombre; ?>" class="form-control"/>
              </div>
            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <label>Correo Eléctronico</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-envelope"></i>
                </div>
                <input type="text" value="<?= $e->empCorreo; ?>" name="cor" class="form-control" >
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
                <input type="text" name="nit" class="form-control" value="<?= $e->empNit; ?>">
              </div>

            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <label>Teléfono:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-fax"></i>
                </div>
                <input type="text" name="tel" class="form-control" value="<?= $e->empTelefono; ?>">
              </div>
            </div>
            <!-- /.form-group -->
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label>Estado:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-ellipsis-v"></i>
                </div>
                <select class="form-control" name="est">
                  <?php if ($e->empEstado == "Activo"){ ?>

                    <option value="<?= $e->empEstado; ?>"><?= $e->empEstado; ?></option>
                    <option value="Inactivo">Inactivo</option>

                  <?php }else{ ?>

                    <option value="<?= $e->empEstado; ?>">Inactivo</option>
                    <option value="Activo">Activo</option>

                  <?php } ?>
                  </select>
                </div>

              </div>
            </div>

          <?php } ?>

          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
       <div class="box-footer">

             <div class="form-group col-md-6">
               <button type="submit" name="submit" class="btn btn-block btn-social btn-instagram" ><i class="fa fa-check"></i> Actualizar</button>
            </div>

            <div class="form-group col-md-6">
                <a href="<?= base_url("index.php/CEmpresa/listar_emp") ?>" class="btn btn-block btn-social btn-google"><i class="fa fa-mail-reply"></i> Regresar</a>
            </div>
  </div>
    </div>
  </section>

</div>



