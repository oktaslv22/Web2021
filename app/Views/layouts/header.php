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
    <title>Products CRUD</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="<?= base_url('midone/dist/css/app.css');?>"  />
    <!-- END: CSS Assets-->
  </head>
  <!-- END: Head -->
  <body class="app">

  <?= $this->renderSection('content')?>


  <script src="../developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBG7gNHAhDzgYmq4-EHvM4bqW1DNj2UCuk&amp;libraries=places"></script>
    <script src="<?= base_url('midone/dist/js/app.js');?>"></script>
    <!-- END: JS Assets-->
  </body>
</html>