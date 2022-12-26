<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse" style="position:fixed !important;padding-bottom:100%;">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <?php
              if($title == 'Dashboard'){
            ?>
              <a class="nav-link active nfbar" aria-current="page" href="<?php echo site_url('menu/dashboard_penumpang'); ?>">
            <?php
              }else{
            ?>
              <a class="nav-link nfbar" aria-current="page" href="<?php echo site_url('menu/dashboard_penumpang'); ?>">
            <?php
              }
            ?>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nfbar" href="<?php echo site_url('menu/jadwal_penumpang'); ?>">
              Jadwal
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nfbar" href="<?php echo site_url('menu/kupon_penumpang'); ?>">
              Kupon <span class="badge text-bg-info" style="margin-left:6px;">2</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nfbar" href="<?php echo site_url('menu/informasi_penumpang'); ?>">
              Informasi
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nfbar" href="<?php echo site_url('menu/informasi_penumpang'); ?>">
              Bantuan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nfbar" href="<?php echo site_url('menu/profil_penumpang'); ?>">
              Profil
            </a>
          </li>
        </ul>
      </div>
    </nav>