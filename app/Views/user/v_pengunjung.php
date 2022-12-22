<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>E-Terminal - Dashboard</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="assets/dashboard.css" rel="stylesheet">

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

    <link href="<?php echo base_url('assets/dashboard.css') ?>" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow" style="padding:12px !important;">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" style="width:8%" href="<?php echo site_url('menu/dashboard_penumpang'); ?>">E-Terminal</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control" type="text" placeholder="Cari rute bus" aria-label="Cari rute bus" style="width:66% !important;">
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
            <a class="nav-link active nfbar" aria-current="page" href="<?php echo site_url('menu/dashboard_penumpang'); ?>">
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

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2" style="margin:10px 0px 16px 0px;">Dashboard</h1>
      </div>
      <div class="alert alert-primary" role="alert">
        Beli tiket bus menggunakan website ini, <a href="#">Klik disini!</a>
      </div>
      <div class="card" style="margin-top:24px !important;">
        <h5 class="card-header" style="padding:16px;">Informasi</h5>
        <div class="card-body">
          <h5 class="card-title">Rute Surabaya - Merauke ditunda</h5>
          <span style="font-size:14px;color:#777;">10:00 AM, 14 Desember 2022</span>
          <p class="card-text" style="margin-top:10px;width:700px;">Bus keberangkatan dari Surabaya ke Merauke ditunda dikarenakan ada permasalahan internal antara supir dengan kondektur. Informasi selanjutnya akan diberitahukan segera.</p>
          <a href="#" class="btn btn-primary">Selengkapnya</a>
        </div>
      </div>
      <div class="card jadwal" style="margin-top:24px !important;margin-bottom:24px;">
        <div class="card-body">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Menunggu</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Perjalanan</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Dibatalkan</button>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
            <div class="menunggu1">
              <h5>Mojokerto - Jombang</h5>
              <h6 style="color:#777;font-weight:normal;">Harapan Jaya</h6>
              <p style="font-weight:normal;margin-bottom:20px;">Terminal Mojokerto - <b>Waktu berangkat: 02:00 PM</b></p>
            </div>
            <hr style="opacity:20% !important;">
            <div class="menunggu2">
              <h5>Madiun - Magetan</h5>
              <h6 style="color:#777;font-weight:normal;">Budi Berdjaja</h6>
              <p style="font-weight:normal;">Terminal Madiun - <b>Waktu berangkat: 04:00 PM</b></p>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
            <div class="berangkat">
              <h5>Surabaya - Jombang</h5>
              <h6 style="color:#777;font-weight:normal;">Cahaya Ilahi</h6>
              <p style="font-weight:normal;margin-bottom:20px;">Menuju ke Terminal Jombang - <b>Keberangkatan: 11:00 AM, Perkiraan sampai: 01:00 PM</b></p>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
            <div class="batal">
              <h5>Surabaya - Merauke</h5>
              <h6 style="color:#777;font-weight:normal;">Ajur Tenan</h6>
              <p style="font-weight:normal;margin-bottom:20px;">Dibatalkan karena ada masalah internal antara kondektur dan supir.</p>
            </div>
          </div>
        </div>
        </div>
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