 <section class="content">

  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Actualizar Usuario</h3>
    </div>

    <?php echo form_open_multipart('CUsuario/Editar'); ?>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="row">
        <?php foreach ($usuario as $u) { ?>
          <input id='id' name='id' value='<?= $u->idUsuario ?>' hidden=''/>
          <div class="col-md-6">
            <div class="form-group">
              <label>Nombres:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-fw fa-user"></i>
                </div>
                <input type="text" name="nom" value="<?= $u->usuNombre; ?>" class="form-control"/>
              </div>
            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <label>Teléfono</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-fax"></i>
                </div>
                <input type="text" value="<?= $u->usuTelefono; ?>" name="tel" class="form-control" >
              </div>
            </div>
            <!-- /.form-group -->
          </div>
          <!-- /.col -->
          <div class="col-md-6">
            <div class="form-group">
              <label>Apellidos:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-fw fa-user"></i>
                </div>
                <input type="text" name="ape" class="form-control" value="<?= $u->usuApellido; ?>">
              </div>

            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <label>Teléfono Fijo:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-fax"></i>
                </div>
                <input type="text" name="tel1" class="form-control" value="<?= $u->usuTelefono1; ?>">
              </div>
            </div>
            <!-- /.form-group -->
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Correo Eléctronico:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-envelope"></i>
                </div>
                <input type="email" name="cor" class="form-control" value="<?= $u->usuCorreo; ?>">
              </div>

            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label>Login:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-user"></i>
                </div>
                <input type="text" name="log" class="form-control" value="<?= $u->usuLogin; ?>">
              </div>
            </div>
            <!-- /.form-group -->
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Dirección:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-toggle-right"></i>
                </div>
                <input type="text" value="<?= $u->usuDireccion; ?>" name="dir" class="form-control">
              </div>

            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <label>Contraseña:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-unlock-alt"></i>
                </div>
                <input type="text" value="<?= $u->usuClave; ?>" name="pwd" class="form-control">
              </div>
            </div>
            <!-- /.form-group -->
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Rol:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-users"></i>
                </div>
                <select class="form-control" name="rol" required="">

                 <?php
                 foreach ($rol as $r) {
                  if ($u->rol_idRol == $r->idRol) {
                    echo "<option selected='selected' value={$r->idRol}>{$r->rolNombre}</option>";
                  } else {
                    echo "<option value={$r->idRol}>{$r->rolNombre}</option>";
                  }
                }
                ?>
              </select>
            </div>

          </div>
          <!-- /.form-group -->
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label>Estado:</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-ellipsis-v"></i>
              </div>
              <select class="form-control" required="" name="est">
                <?php
                foreach ($estado as $e) {
                  if ($u->estado_idEstado == $e->idEstado) {
                    echo "<option selected='selected' value={$e->idEstado}>{$e->estNombre}</option>";
                  } else {
                    echo "<option value={$e->idEstado}>{$e->estNombre}</option>";
                  }
                }
                ?>
              </select>
            </div>

          </div>
          <!-- /.form-group -->
        </div>
        <?php if ($u->empresa_idEmpresa != NULL): ?>
          
        <div class="col-md-12">
            <div class="form-group">
              <label>Entidad:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-institution"></i>
                </div>
                <select class="form-control" name="emp">

                 <?php
                 foreach ($empresa as $emp) {
                  if ($u->empresa_idEmpresa == $emp->idEmpresa) {
                    echo "<option selected='selected' value={$emp->idEmpresa}>{$emp->empNombre}</option>";
                  } else {
                    echo "<option value={$emp->idEmpresa}>{$emp->empNombre}</option>";
                  }
                }
                ?>
              </select>
            </div>

          </div>
          <!-- /.form-group -->
        </div>
        <?php endif ?>

      <?php } ?>

      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.box-body -->
  <div class="box-footer">

             <div class="form-group col-md-6">
               <button type="submit" name="submit" class="btn btn-block btn-social btn-instagram" ><i class="fa fa-check"></i> Actualizar</button>
            </div>

            <div class="form-group col-md-6">
                <a href="<?= base_url("index.php/CUsuario/listar_usu") ?>" class="btn btn-block btn-social btn-google"><i class="fa fa-mail-reply"></i> Regresar</a>
            </div>
  </div>
</div>
</section>

</div>



