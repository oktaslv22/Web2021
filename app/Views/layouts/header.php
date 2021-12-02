<!DOCTYPE html>
<!--
Template Name: Midone - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="light">
  <!-- BEGIN: Head -->
  <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <link href="<?= base_url('midone/dist/images/logo.svg');?>" rel="shortcut icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="description"
      content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities."
    />
    <meta
      name="keywords"
      content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app"
    />
    <meta name="author" content="LEFT4CODE" />
    <title>CRUD Barang</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="<?= base_url('midone/dist/css/app.css');?>"  />
    <!-- END: CSS Assets-->
  </head>
  <!-- END: Head -->
  <body class="app">
<!-- BEGIN: Mobile Menu -->
<div class="mobile-menu md:hidden">
  <div class="mobile-menu-bar">
    <a href="#" class="flex mr-auto">
      <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="<?= base_url('midone/dist/images/logo.svg');?>" />
    </a>
    <a href="javascript:;" id="mobile-menu-toggler">
      <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i>
    </a>
  </div>
  <ul class="border-t border-theme-24 py-5 hidden">
    <li>
      <a href="index.html" class="menu menu--active">
        <div class="menu__icon"><i data-feather="home"></i></div>
        <div class="menu__title">Dashboard</div>
      </a>
    </li>
    
  </ul>
</div>
<!-- END: Mobile Menu -->
<div class="flex">
  <!-- BEGIN: Side Menu -->
  <nav class="side-nav">
    <a href="#" class="intro-x flex items-center pl-5 pt-4">
      <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="<?= base_url('midone/dist/images/logo.svg');?>" />
      <span class="hidden xl:block text-white text-lg ml-3">
        Mid<span class="font-medium">one</span>
      </span>
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
      <li>
        <a href="index.html" class="side-menu side-menu">
          <div class="side-menu__icon"><i data-feather="home"></i></div>
          <div class="side-menu__title">Dashboard</div>
        </a>
      </li>

      <li>
            <a href="javascript:;" class="side-menu">
              <div class="side-menu__icon"><i data-feather="edit"></i></div>
              <div class="side-menu__title">
                Crud
                <div class="side-menu__sub-icon">
                  <i data-feather="chevron-down"></i>
                </div>
              </div>
            </a>
            <ul class="">
              <li>
                <a href="<?= site_url('Admin/view')?>" class="side-menu">
                  <div class="side-menu__icon">
                    <i data-feather="activity"></i>
                  </div>
                  <div class="side-menu__title">Data Barang</div>
                </a>
              </li>
              <li>
                <a href="<?= site_url('Admin/create')?>" class="side-menu side-menu--active">
                  <div class="side-menu__icon">
                    <i data-feather="activity"></i>
                  </div>
                  <div class="side-menu__title">Tambah Barang</div>
                </a>
              </li>
            </ul>
          </li>
    </ul>
    </li>
    </ul>
  </nav>
  <!-- END: Side Menu -->
  <?= $this->renderSection('content')?>


  <script src="../developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBG7gNHAhDzgYmq4-EHvM4bqW1DNj2UCuk&amp;libraries=places"></script>
    <script src="<?= base_url('midone/dist/js/app.js');?>"></script>
    <!-- END: JS Assets-->
  </body>
</html>