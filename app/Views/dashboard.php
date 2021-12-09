<?= $this->extend('layouts/header') ?>
<?= $this->section('content') ?>


  <!-- BEGIN: Content -->
  <div class="content">
    <!-- BEGIN: Top Bar -->
    <div class="top-bar">
      <!-- BEGIN: Breadcrumb -->
      <div class="-intro-x breadcrumb mr-auto hidden sm:flex">
        <i data-feather="chevron-right" class="breadcrumb__icon"></i>
        <a href="#" class="breadcrumb--active">Dashboard</a>
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
              Dashboard Store
            </h2>
            <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">

            </div>
          </div>
          <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
            <table class="table table-report sm:mt-2">
              <thead>
                <tr>
                  <th class="whitespace-nowrap">No</th>
                  <th class="whitespace-nowrap">IMAGE</th>
                  <th class="whitespace-nowrap">PRODUCT NAME</th>
                  <th class="text-center whitespace-nowrap">STOCK</th>
                  <th class="text-center whitespace-nowrap">PRICE</th>
                </tr>
              </thead>

              <tbody>
                <tr class="intro-x">  
                <?php foreach($barangs as $index=>$barang): ?>
                  <td class="text"><?= ($index+1) ?></td>
                  <td class="text-center"><img src="/uploads/<?= $barang->gambar ?>" width="200" height="200"></td>
                  <td class="text-center"><?= $barang->nama ?></td>                 
                  <td class="text-center"><?= $barang->stok ?></td>
                  <td class="text-center"><?= $barang->harga ?></td>
                  
                </tr>
                <?php endforeach ?>
               
                </tr>
              </tbody>
            </table>
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