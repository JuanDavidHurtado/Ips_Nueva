 <section class="content">

  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Registro Usuario <small style="color: #C6462B;">(campo requerido *)</small></h3>
    </div>

    <?php echo form_open_multipart('CUsuario/guardar_usuario'); ?>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Nombres <small style="color: #C6462B;">*</small></label>
            <div class="input-group">
              <div class="input-group-addon">
                 <i class="fa fa-user"></i> 
              </div>
              <input type="text" required="" name="nom" class="form-control" placeholder="Nombres">
            </div>
          </div>
          <!-- /.form-group -->
          <div class="form-group">
            <label>Teléfono <small style="color: #C6462B;">*</small></label>
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
        <div class="col-md-6">
          <div class="form-group">
            <label>Apellidos <small style="color: #C6462B;">*</small></label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-user"></i>
              </div>
              <input type="text" required="" name="ape" class="form-control" placeholder="Apellidos">
            </div>

          </div>
          <!-- /.form-group -->
          <div class="form-group">
            <label>Teléfono Fijo</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-fax"></i>
              </div>
              <input type="text" name="tel1" class="form-control" placeholder="Teléfono Fijo">
            </div>
          </div>
          <!-- /.form-group -->
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label>Correo Eléctronico <small style="color: #C6462B;">*</small></label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-envelope"></i>
              </div>
              <input type="email" required="" name="cor" class="form-control" placeholder="Correo Eléctronico">
            </div>

          </div>
          <!-- /.form-group -->
          
          <div class="form-group">
            <label>Login <small style="color: #C6462B;">*</small></label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-user"></i>
              </div>
              <input type="text" required="" name="log" class="form-control" placeholder="Login">
            </div>
          </div>
          <!-- /.form-group -->
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label>Dirección <small style="color: #C6462B;">*</small></label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-toggle-right"></i>
              </div>
              <input type="text" required="" name="dir" class="form-control" placeholder="Dirección">
            </div>

          </div>
          <!-- /.form-group -->
          <div class="form-group">
            <label>Contraseña <small style="color: #C6462B;">*</small></label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-unlock-alt"></i>
              </div>
              <input type="text" required="" name="pwd" class="form-control" placeholder="Contraseña">
            </div>
          </div>
          <!-- /.form-group -->
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Rol <small style="color: #C6462B;">*</small></label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-users"></i>
              </div>
              <select class="form-control" required="" name="rol">
                                <option value="">---Seleccione Opción---</option>
                                <?php
                                foreach ($rol as $r) {
                                    echo "<option value={$r->idRol}>{$r->rolNombre}</option>";
                                }
                                ?> 
              </select>
            </div>

          </div>
          <!-- /.form-group -->
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label>Estado <small style="color: #C6462B;">*</small></label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-ellipsis-v"></i>
              </div>
             <select class="form-control" required="" name="est">
                                <option value="">---Seleccione Opción---</option>
                                <?php
                                foreach ($estado as $e) {
                                    echo "<option value={$e->idEstado}>{$e->estNombre}</option>";
                                }
                                ?> 
              </select>
            </div>

          </div>
          <!-- /.form-group -->
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Entidad</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-institution"></i>
              </div>
             <select class="form-control" name="emp">
                                <option value="">---Seleccione Opción---</option>
                                <?php
                                foreach ($empresa as $em) {
                                    echo "<option value={$em->idEmpresa}>{$em->empNombre}</option>";
                                }
                                ?> 
              </select>
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



