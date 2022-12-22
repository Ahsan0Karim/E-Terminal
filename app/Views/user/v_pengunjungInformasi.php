<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>E-Terminal - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
      .kluar:hover{
        color:#e74c3c !important;
      }
      .nfbar{
        padding:1rem;
      }
      .active{
        font-weight:bold;
      }
      .menunggu1, .berangkat, .batal{
        margin-top:24px;
      }
    </style>
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow" style="padding:12px !important;">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" style="width:8%" href="<?php echo site_url('menu/dashboard_penumpang'); ?>">E-Terminal</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3 kluar" href="<?php echo base_url('../auth/logout') ?>">Keluar</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse" style="position:fixed !important;padding-bottom:100%;">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link nfbar" aria-current="page" href="<?php echo site_url('menu/dashboard_penumpang'); ?>">
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
            <a class="nav-link active nfbar" href="<?php echo site_url('menu/informasi_penumpang'); ?>">
              Informasi
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

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2" style="margin:10px 0px 16px 0px;">Informasi</h1>
      </div>
      <div class="alert alert-primary" role="alert">
        Beli tiket bus menggunakan website ini, <a href="#">Klik disini!</a>
      </div>
  
    </main>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script type="text/javascript">

</script>
</body>
</html>