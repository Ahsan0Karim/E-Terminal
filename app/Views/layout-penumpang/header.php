<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>
      <?php
        echo SITE_NAME ." - ". $title;
      ?>
    </title>
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
      .footerfp{
        margin:0px -1.5rem;
        padding:20px 24px 4px 24px;
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
  <input class="form-control" type="text" placeholder="Cari rute bus" aria-label="Cari rute bus" style="width:66% !important; margin-left:100px;">
  <button class="btn btn-primary" type="submit" style="margin-right:80px;">Cari</button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3 kluar" href="<?php echo base_url('../auth/logout') ?>">Keluar</a>
    </div>
  </div>
</header>