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
                  <th class="whitespace-nowrap">IMAGES</th>
                  <th class="whitespace-nowrap">PRODUCT NAME</th>
                  <th class="text-center whitespace-nowrap">STOCK</th>
                  <th class="text-center whitespace-nowrap">STATUS</th>
                  <th class="text-center whitespace-nowrap">ACTIONS</th>
                </tr>
              </thead>
              <tbody>
                <tr class="intro-x">
                  <td class="w-40">
                    <div class="flex">
                      <div class="w-10 h-10 image-fit zoom-in">
                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                          src="<?= base_url('midone/dist/images/preview-6.jpg');?>" title="Uploaded at 16 May 2020" />
                      </div>
                      <div class="w-10 h-10 image-fit zoom-in -ml-5">
                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                          src="<?= base_url('midone/dist/images/preview-5.jpg');?>" title="Uploaded at 8 April 2021" />
                      </div>
                      <div class="w-10 h-10 image-fit zoom-in -ml-5">
                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                          src="<?= base_url('midone/dist/images/preview-2.jpg');?>"
                          title="Uploaded at 12 October 2020" />
                      </div>
                    </div>
                  </td>
                  <td>
                    <a href="#" class="font-medium whitespace-nowrap">Nikon Z6</a>
                    <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">
                      Photography
                    </div>
                  </td>
                  <td class="text-center">219</td>
                  <td class="w-40">
                    <div class="flex items-center justify-center text-theme-9">
                      <i data-feather="check-square" class="w-4 h-4 mr-2"></i>
                      Active
                    </div>
                  </td>
                  <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
                      <a class="flex items-center mr-3" href="#">
                        <i data-feather="check-square" class="w-4 h-4 mr-1"></i>
                        Edit
                      </a>
                      <a class="flex items-center text-theme-6" href="#">
                        <i data-feather="trash-2" class="w-4 h-4 mr-1"></i>
                        Delete
                      </a>
                    </div>
                  </td>
                </tr>
                <tr class="intro-x">
                  <td class="w-40">
                    <div class="flex">
                      <div class="w-10 h-10 image-fit zoom-in">
                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                          src="<?= base_url('midone/dist/images/preview-5.jpg');?>" title="Uploaded at 15 July 2022" />
                      </div>
                      <div class="w-10 h-10 image-fit zoom-in -ml-5">
                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                          src="<?= base_url('midone/dist/images/preview-11.jpg');?>" title="Uploaded at 23 July 2022" />
                      </div>
                      <div class="w-10 h-10 image-fit zoom-in -ml-5">
                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                          src="<?= base_url('midone/dist/images/preview-9.jpg');?>" title="Uploaded at 18 June 2022" />
                      </div>
                    </div>
                  </td>
                  <td>
                    <a href="#" class="font-medium whitespace-nowrap">Sony A7 III</a>
                    <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">
                      Photography
                    </div>
                  </td>
                  <td class="text-center">93</td>
                  <td class="w-40">
                    <div class="flex items-center justify-center text-theme-9">
                      <i data-feather="check-square" class="w-4 h-4 mr-2"></i>
                      Active
                    </div>
                  </td>
                  <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
                      <a class="flex items-center mr-3" href="#">
                        <i data-feather="check-square" class="w-4 h-4 mr-1"></i>
                        Edit
                      </a>
                      <a class="flex items-center text-theme-6" href="#">
                        <i data-feather="trash-2" class="w-4 h-4 mr-1"></i>
                        Delete
                      </a>
                    </div>
                  </td>
                </tr>
                <tr class="intro-x">
                  <td class="w-40">
                    <div class="flex">
                      <div class="w-10 h-10 image-fit zoom-in">
                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                          src="<?= base_url('midone/dist/images/preview-4.jpg');?>" title="Uploaded at 9 July 2020" />
                      </div>
                      <div class="w-10 h-10 image-fit zoom-in -ml-5">
                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                          src="<?= base_url('midone/dist/images/preview-11.jpg');?>"
                          title="Uploaded at 19 September 2022" />
                      </div>
                      <div class="w-10 h-10 image-fit zoom-in -ml-5">
                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                          src="<?= base_url('midone/dist/images/preview-10.jpg');?>"
                          title="Uploaded at 16 November 2021" />
                      </div>
                    </div>
                  </td>
                  <td>
                    <a href="#" class="font-medium whitespace-nowrap">Sony Master Series A9G</a>
                    <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">
                      Electronic
                    </div>
                  </td>
                  <td class="text-center">59</td>
                  <td class="w-40">
                    <div class="flex items-center justify-center text-theme-9">
                      <i data-feather="check-square" class="w-4 h-4 mr-2"></i>
                      Active
                    </div>
                  </td>
                  <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
                      <a class="flex items-center mr-3" href="#">
                        <i data-feather="check-square" class="w-4 h-4 mr-1"></i>
                        Edit
                      </a>
                      <a class="flex items-center text-theme-6" href="#">
                        <i data-feather="trash-2" class="w-4 h-4 mr-1"></i>
                        Delete
                      </a>
                    </div>
                  </td>
                </tr>
                <tr class="intro-x">
                  <td class="w-40">
                    <div class="flex">
                      <div class="w-10 h-10 image-fit zoom-in">
                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                          src="<?= base_url('midone/dist/images/preview-2.jpg');?>"
                          title="Uploaded at 12 February 2022" />
                      </div>
                      <div class="w-10 h-10 image-fit zoom-in -ml-5">
                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                          src="<?= base_url('midone/dist/images/preview-4.jpg');?>" title="Uploaded at 12 April 2021" />
                      </div>
                      <div class="w-10 h-10 image-fit zoom-in -ml-5">
                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                          src="<?= base_url('midone/dist/images/preview-12.jpg');?>" title="Uploaded at 1 April 2021" />
                      </div>
                    </div>
                  </td>
                  <td>
                    <a href="#" class="font-medium whitespace-nowrap">Apple MacBook Pro 13</a>
                    <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">
                      PC &amp; Laptop
                    </div>
                  </td>
                  <td class="text-center">127</td>
                  <td class="w-40">
                    <div class="flex items-center justify-center text-theme-9">
                      <i data-feather="check-square" class="w-4 h-4 mr-2"></i>
                      Active
                    </div>
                  </td>
                  <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
                      <a class="flex items-center mr-3" href="#">
                        <i data-feather="check-square" class="w-4 h-4 mr-1"></i>
                        Edit
                      </a>
                      <a class="flex items-center text-theme-6" href="#">
                        <i data-feather="trash-2" class="w-4 h-4 mr-1"></i>
                        Delete
                      </a>
                    </div>
                  </td>
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