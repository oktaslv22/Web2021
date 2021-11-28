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
              Products Store
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
                  <th class="text-center whitespace-nowrap">ACTIONS</th>
                </tr>
              </thead>

              <tbody>
                <tr class="intro-x">  
                <?php foreach($barangs as $index=>$barang): ?>
                  <td class="text"><?= ($index+1) ?></td>
                  <td class="text-center"><?= $barang->gambar ?></td>                 
                  <td class="text-center"><?= $barang->nama ?></td>                 
                  <td class="text-center"><?= $barang->stok ?></td>
                  <td class="text-center"><?= $barang->harga ?></td>
                  <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
                      <a class="flex items-center mr-3" href="<?= site_url('Admin/update/'.$barang->id) ?>">
                        <i data-feather="check-square" class="w-4 h-4 mr-1"></i>
                        Edit
                      </a>
                      <a class="flex items-center text-theme-6" href="<?= site_url('Admin/delete/'.$barang->id) ?>" onclick="javascript:return confirm('Apakah ingin menghapus data barang ?')"
                                    class="btn btn-danger">
                        <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> 
                        Delete
                      </a>
                      

                    </div>
                  </td>
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