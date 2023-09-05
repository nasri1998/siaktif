
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
<br>
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(); ?>c_admin/index">
        
          <i><img src="../assets/img/logo12.png" alt="" width="100px"></i>
        
       <!--  <div class="sidebar-brand-text mx-3">SIAKTIF</div> -->
      </a>
<br>
      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?=$this->uri->segment('1') == 'page' ? 'active' : '' ?>">
        <a class="nav-link" href="<?php echo site_url('c_admin/index') ?>">
          <i class="fas fa-fw fa-university"></i>
          <span>Dashboard</span></a>
      </li>
      <li class="nav-item <?=$this->uri->segment('2') == 'getDosen' ? 'active' : '' ?>">
        <a class="nav-link" href="<?php echo base_url(); ?>c_admin/getDosen"">
          <i class="fas fa-fw fa-user-circle"></i>
          <span>Data Dosen</span></a>
      </li>
       <li class="nav-item <?=$this->uri->segment('2') == 'getMahasiswa' ? 'active' : '' ?>">
        <a class="nav-link" href="<?php echo base_url(); ?>c_admin/getMahasiswa"">
          <i class="fas fa-fw fa-user-circle"></i>
          <span>Data Mahasiswa</span></a>
      </li>
      
      <!-- Nav Item - Utilities Collapse Menu -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Sidang</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub-sidang</h6>
            <a class="collapse-item" href="utilities-color.html">Cetak Permohonan</a>
            <a class="collapse-item" href="utilities-border.html">Syarat Sidang</a>
            <a class="collapse-item" href="utilities-animation.html">Daftar Sidang</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li>
 -->
     <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
 -->
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
            </li>

            <!-- Nav Item - Alerts -->

            <!-- Nav Item - Messages -->

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;<?php echo $sesnama; ?></span>
                <!-- <img class="img-profile rounded-circle" src="assets/img/logo.png"> -->
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>

            </li>

          </ul>

        </nav>