<?= $this->extend('layouts/header') ?>
<?= $this->section('content') ?>
<?php

$nama =[
    'name' => 'nama',
    'id' => 'nama',
    'value' => null,
    'class' => 'input w-full border mt-2',
];

$harga =[
    'name' => 'harga',
    'id' => 'harga',
    'value' => null,
    'class' => 'input pr-16 w-full border col-span-4',
    'type' => 'number',
    'min' => 0,
];

$stok =[
    'name' => 'stok',
    'id' => 'stok',
    'value' => null,
    'class' => 'input pr-12 w-full border col-span-4',
    'type' => 'number',
    'min' => 0,
];

$gambar =[
    'name' => 'gambar',
    'id' => 'gambar',
    'value' => null,
    'class' => 'form-control',
];

$submit =[
    'name' => 'submit',
    'id' => 'submit',
    'value' => 'Submit',
    'class' => 'button w-24 bg-theme-1 text-white',
    'type' => 'submit',
];


?>
<!-- BEGIN: Content -->
<div class="content">
    <!-- BEGIN: Top Bar -->
    <div class="top-bar">
        <!-- BEGIN: Breadcrumb -->
        <div class="-intro-x breadcrumb mr-auto hidden sm:flex">
            <i data-feather="chevron-right" class="breadcrumb__icon"></i>
            <a href="#" class="breadcrumb--active">Tambah Barang</a>
        </div>
        <!-- END: Breadcrumb -->




    </div>
    <!-- END: Top Bar -->
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">

        
            <!-- BEGIN: Weekly Top Products -->
            <div class="col-span-12 mt-6">
                <div class="intro-y block sm:flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Tambah Barang
                    </h2>
                    <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">

                    </div>
                </div>
                <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                <div class="intro-y box p-5">
                <?= form_open_multipart('Admin/create') ?>
                            <div>
                                <label>Product Name</label>
                                <?= form_input($nama) ?>
                            </div>
                            <div class="mt-3">
                                <label>Quantity</label>
                                <div class="relative mt-2">
                                   
                                    <?= form_input($stok) ?>
                                    <div class="absolute top-0 right-0 rounded-r px-4 h-full flex items-center justify-center bg-gray-100 dark:bg-dark-1 dark:border-dark-4 border text-gray-600">pcs</div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label>Harga</label>
                                <div class="relative mt-2">
                                    <?= form_input($harga) ?>
                                    <div class="absolute top-0 right-0 rounded-r px-4 h-full flex items-center justify-center bg-gray-100 dark:bg-dark-1 dark:border-dark-4 border text-gray-600">Rupiah</div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label>Gambar</label>
                                <div class="relative mt-2">
                                <?= form_upload($gambar) ?>
                                </div>
                            </div>
                            
                            <div class="text-right mt-5">
                                <button type="button" class="button w-24 border dark:border-dark-5 text-gray-700 dark:text-gray-300 mr-1">Cancel</button>
                                <?= form_submit($submit) ?>
                            </div>
                        </div>
                        <?= form_close() ?>
                </div>
                

            </div>
        </div>
        <!-- END: Weekly Top Products -->
    </div>



</div>
</div>
</div>
</div>
<!-- END: Content -->
</div>

<!-- BEGIN: JS Assets-->

<?= $this->endSection() ?>