<section class="content">

  <div class="box box-primary">
    <div class="box-header with-border">
      <i class="ion ion-clipboard"></i>
      <h3 class="box-title">Panel de Control</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
       <?php if ($this->session->userdata('rol_user') == 1) {?>
      <div class="row">

         <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-olive">
            <div class="inner">
              <h3>USUARIO</h3>

              <p>LISTA DE USUARIOS</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="<?= site_url('CUsuario/listar_usu') ?>" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>ENTIDAD</h3>

              <p>LISTA DE ENTIDAD</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?= site_url('CEmpresa/listar_emp') ?>" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>CUPS</h3>

              <p>LISTA DE CUPS</p>
            </div>
            <div class="icon">
              <i class="fa fa-bookmark-o"></i>
            </div>
            <a href="<?= site_url('CCups/lis_cups') ?>" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php } ?>
        <!-- ./col -->
        <?php if ($this->session->userdata('rol_user') == 1 || $this->session->userdata('rol_user') == 2) {?>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>RIPS</h3>

              <p>VALIDADOR DE RIPS</p>
            </div>
            <div class="icon">
              <i class="fa fa-files-o"></i>
            </div>
            <a href="<?= site_url('CDocumento') ?>" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
         <?php } ?>
         <?php if ($this->session->userdata('rol_user') == 1 || $this->session->userdata('rol_user') == 2 || $this->session->userdata('rol_user') == 3) {?>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3>MI PERFIL</h3>

              <p>ACTUALIZAR DATOS</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="<?= site_url('CPerfil') ?>" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>     
       <?php } ?>
        <?php if ($this->session->userdata('rol_user') == 1 || $this->session->userdata('rol_user') == 2 || $this->session->userdata('rol_user') == 3){?>
       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-navy">
            <div class="inner">
              <h3>RIPS</h3>

              <p>LISTA DE DOCUMENTOS</p>
            </div>
            <div class="icon">
              <i class="fa fa-files-o"></i>
            </div>
            <a href="" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php } ?>
    </div>
  </div>
</div>
</section>

</div>