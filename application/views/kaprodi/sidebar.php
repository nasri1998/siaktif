
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
<br>
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('page'); ?>">
        <div class="sidebar-brand-icon">
          <i><img src="../assets/img/logo12.png" alt="" width="100px"></i>
        </div>
  <!--       <div class="sidebar-brand-text mx-3">SIAKTIF</div> -->
      </a>
<br>
      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?=$this->uri->segment('1') == 'page' ? 'active' : '' ?>">
        <a class="nav-link" href="<?php echo site_url('page') ?>">
          <i class="fas fa-fw fa-university"></i>
          <span>Dashboard</span></a>
      </li>
      <li class="nav-item <?=$this->uri->segment('2') == 'getMI' ? 'active' : '' ?>">
        <a class="nav-link" href="<?php echo site_url('c_kaprodi/getMI')?>">
          <i class="fas fa-fw fa-user-circle"></i>
          <span>REKAP DATA MI</span></a>
      </li>
      
      <!-- Nav Item - Utilities Collapse Menu -->
      
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
         <!--  <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form> -->

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <!-- Nav Item - Alerts -->
            <!-- Nav Item - Messages -->
            

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;<?php echo $sesnama; ?></span>
           <!--      <img class="img-profile rounded-circle" src=""> -->
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo base_url().'auth/logout' ?>" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>

            </li>

          </ul>

        </nav>