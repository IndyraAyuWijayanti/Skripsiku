
<aside class="main-sidebar sidebar-dark-primary elevation-5">

    <!-- Brand Logo -->
    <a href="<?= base_url('admin/dasbor') ?>" class="brand-link">
      <img src="<?= base_url() ?>assets/admin/dist/img/fix.png"
           alt=""
           class="img-circle" alt="Cinque Terre" width="45" height="30">


           

           

      <span class="brand-text font-weight-light"><font size="4px", color="white", ><b>Apotek Sugih Waras </b></font></span>

    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <!-- MENU DASHBOARD -->
          <li class="nav-item">
            <a href="<?= base_url('admin/dasbor') ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt text-aqua"></i>
              <p>DASHBOARD</p>
            </a>
          </li>

          <!-- Menu Berita -->
          <!-- <li class="nav-item">
            <a href="<?= base_url('admin/berita') ?>" class="nav-link"> 
              <i class="nav-icon fas fa-book text-aqua"></i>
              <p>BERITA</p>
            </a>
          </li> -->


           <!-- MENU USER -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                ADMIN
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/user') ?>" class="nav-link">
                  <i class="nav-icon fa fa-table"></i>
                  <p>Data Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/user/tambah') ?>" class="nav-link">
                  <i class="nav-icon fa fa-plus"></i>
                  <p>Tambah Admin</p>
                </a>
              </li>
            </ul>
          </li>


        

          <!-- MENU PRODUK -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-sitemap"></i>
              <p>
                Data Penjualan Obat
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/ImportController') ?>" class="nav-link">
                  <i class="nav-icon fa fa-table"></i>
                  <p>Data Penjualan Obat</p>
                </a>
              </li>
              
            </ul>
          </li>

           <!-- MENU Peramalan -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Prediksi Obat
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/Prediksi') ?>" class="nav-link">
                  <i class="nav-icon fa fa-table"></i>
                  <p> Data Prediksi Obat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/Prediksi/dropdown') ?>" class="nav-link">
                  <i class="nav-icon fa fa-plus"></i>
                  <p>Proses Prediksi Obat</p>
                </a>
              </li>
            </ul>
          </li>




  

        
          

         
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $title ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>