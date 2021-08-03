<script type="text/javascript">
function mostrar(id) {
    if (id == "unidad") {
        $("#unidad").show();
        $("#cantidad").hide();
    }

    if (id == "cantidad") {
        $("#unidad").hide();
        $("#cantidad").show();
    }
}
</script>

 <section class="content">

  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Registro Cups</h3>
    </div>
    <?php echo form_open_multipart('CCups/guardar_cups'); ?>
    <!-- /.box-header
-->
     <div class="box-body" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>Elegir Opcion:</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-sort"></i>
              </div>
               <select id="tipocant" name="tipocant" class="form-control" onChange="mostrar(this.value);">
               <option value="">---Seleccione Opción---</option>
               <option value="unidad">Registrar unidad</option>
               <option value="cantidad">Registrar Cantidad</option>     
               </select>
            </div>
          </div>
        </div>

        <div id="unidad" style="display: none;" action="<?php echo site_url("CCups/guardar_cups_unidad") ?>" method="post">
        <div class="col-md-2">
          <div class="form-group">
            <label>Código:</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-pencil-square-o"></i>
              </div>
              <input type="text" name="cod" class="form-control" placeholder="Código">
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
              <select class="form-control" name="emp">
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
        <div class="col-md-6">
          <div class="form-group">
            <label>Nombre:</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-commenting"></i>
              </div>
              <input type="text" name="des" class="form-control" placeholder="Nombre">
            </div>

          </div>

        </div>
        </div>


        <div id="cantidad" style="display: none;">
        <!-- /.col -->
        <div class="col-md-6">
          <div class="form-group">
            <label>Adjuntar archivo excel:</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-file"></i>
              </div>
              <input type="file"  name="uploadFile" class="form-control">
            </div>

          </div>

        </div>
          <div class="col-md-6">
          <div class="form-group">
            <label>Empresa:</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-institution"></i>
              </div>
              <select class="form-control" name="empresa">
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



