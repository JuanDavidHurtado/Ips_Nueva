 <section class="content">

  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Actualizar Cups</h3>
    </div>

    <?php echo form_open_multipart('CCups/Editar'); ?>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="row">
        <?php foreach ($cups as $c) { ?>
          <input id='id' name='id' value='<?= $c->idCups ?>' hidden=''/>
          <div class="col-md-4">
            <div class="form-group">
              <label>Codigo:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-pencil-square-o"></i>
                </div>
                <input type="text" name="cod" value="<?= $c->cupCodigo; ?>" class="form-control"/>
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-4">
            <div class="form-group">
              <label>Empresa:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-institution"></i>
                </div>
                <select class="form-control" required="" name="emp">
                  <?php
                  foreach ($empresa as $e) {
                    if ($c->empresa_idEmpresa == $e->idEmpresa) {
                      echo "<option selected='selected' value={$e->idEmpresa}>{$e->empNombre}</option>";
                    } else {
                      echo "<option value={$e->idEmpresa}>{$e->empNombre}</option>";
                    }
                  }
                  ?>
                </select>
              </div>

            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label>Estado:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-ellipsis-v"></i>
                </div>
                <select class="form-control" name="est">
                  <?php if ($c->cupEstado == "Activo"){ ?>

                    <option value="<?= $c->cupEstado; ?>"><?= $c->cupEstado; ?></option>
                    <option value="Inactivo">Inactivo</option>

                  <?php }else{ ?>

                    <option value="<?= $c->cupEstado; ?>"><?= $c->cupEstado; ?></option>
                    <option value="Activo">Activo</option>

                  <?php } ?>
                </select>
              </div>

            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label>Descripcion:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-commenting"></i>
                </div>
                <textarea value="<?= $c->cupDescripcion; ?>"  class="form-control" name="des" rows="5" cols="50"><?= $c->cupDescripcion; ?></textarea>
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
                <a href="<?= base_url("index.php/CCups/lis_cups") ?>" class="btn btn-block btn-social btn-google"><i class="fa fa-mail-reply"></i> Regresar</a>
            </div>
  </div>
  </div>
</section>

</div>



