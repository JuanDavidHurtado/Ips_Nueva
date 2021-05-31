<?php
if (!$this->session->userdata('login')) {
  redirect(base_url());
}
?>

<div class="wrapper">

  <!-- ...............................Inicio Menu Horizontal........................... -->

  <header style="background-color:white;" class="main-header" >
    <!-- Logo -->
    <a class="logo">
      <span>
     
           <img style="float:left;" class="img-responsive" src="<?= base_url("assets/img/logo-login.png"); ?>" /><br>
      </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a style="color:black" href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         <li class="dropdown user user-menu">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
           <span class="hidden-xs" style="color:black"><i class="fa fa-user"></i> <?= $this->session->userdata('nom_user'); ?></span>
            </a>
        <ul class="dropdown-menu">
      
      <!-- Menu Body -->
      <li class="user-body">
        <div class="row">
          <div class="col-xs-5 text-center">
            <a href="<?= site_url('CPerfil') ?>"><i class="fa fa-user"></i> Mi Perfil</a>
          </div>
          <div class="col-xs-7 text-center">
            <a href="<?= site_url('CLogin/logout') ?>"><i class="fa fa-sign-out"></i> Cerrar Sesión</a>
          </div>
        </div>
        <!-- /.row -->
      </li>
    </ul>
  </li>
</ul>
</div>
</nav>
</header>

<!--..................Fin encabezado horizontal,,,,,,,,,,,,,,,,,,,,,,,,, -->

<!-- ...............................Inicio Menu vertical........................... -->
<aside style="background-color: #222d32;" class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel"><br>
      <a style="color:white">Rol: 
           <?php
               if ($this->session->userdata('rol_user') == 1) {
                                echo " Administrador ";
               } else if ($this->session->userdata('rol_user') == 2) {
                                echo " Validador ";
               } else if ($this->session->userdata('rol_user') == 3) {
                                echo " Auditor ";
               }
            ?>
      </a>
      <p style="color: white">Estado: Activo</p>
      <hr>
    </div>
    
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li style="color:white" class="header">NAVEGACIÓN PRINCIPAL</li>
      <li><a href="<?= site_url('CHome') ?>" style="color:white"><i class="fa fa-dashboard"></i> <span>Panel de Control</span></a></li>
      <?php if ($this->session->userdata('rol_user') == 1) { //Menu para Administrador (Si es 2 o 3 excluyo opcion usuario) ?>
        <li class="treeview">
          <a style="color:white">
            <i class="fa fa-fw fa-users"></i> <span>Usuarios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a style="color:gray" href="<?= site_url('CUsuario') ?>"><i class="fa fa-circle-o text-red"></i> Registrar Nuevo</a></li>
            <li ><a style="color:gray" href="<?= site_url('CUsuario/listar_usu') ?>"><i class="fa fa-circle-o text-red"></i> Listar Todos</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a style="color:white">
            <i class="fa fa-institution"></i> <span>Empresa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a style="color:gray" href="<?= site_url('CEmpresa') ?>"><i class="fa fa-circle-o text-red"></i> Registrar Nuevo</a></li>
            <li><a style="color:gray" href="<?= site_url('CEmpresa/listar_emp') ?>"><i class="fa fa-circle-o text-red"></i> Listar Todos</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a style="color:white">
            <i class="fa fa-folder-open"></i> <span>Cups</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a style="color:gray" href="<?= site_url('CCups') ?>"><i class="fa fa-circle-o text-red"></i> Registrar Nuevo</a></li>
            <li><a style="color:gray" href="<?= site_url('CCups/lis_cups') ?>"><i class="fa fa-circle-o text-red"></i> Listar Todos</a></li>
          </ul>
        </li>
      <?php } ?>
      <li class="treeview">
        <a style="color:white">
          <i class="fa fa-folder"></i> <span>Validación Rips</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
         <?php
         if ($this->session->userdata('rol_user') == 1 || $this->session->userdata('rol_user') == 2) {?>
          <li class="active"><a style="color:gray" href="<?= site_url('CDocumento') ?>"><i class="fa fa-circle-o text-red"></i> Cargar Documentos</a></li>
        <?php } ?>

        <?php if ($this->session->userdata('rol_user') == 1 || $this->session->userdata('rol_user') == 2 ||  $this->session->userdata('rol_user') == 3) { ?>

          <li><a href=""style="color:gray"><i class="fa fa-circle-o text-red"></i> Listar Documentos</a></li>
        <?php } ?>
      </ul>
    </li>
      </ul>
    </section>
  </aside>

  <!-- /......................Fin menu vertical......................... -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tablero
        <small>Panel de Control</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tablero</li>
      </ol>
    </section>
