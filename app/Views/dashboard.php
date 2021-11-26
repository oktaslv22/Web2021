<?= $this->extend('layouts/header') ?>
<?= $this->section('content') ?>
    <!-- BEGIN: Mobile Menu -->
    <div class="mobile-menu md:hidden">
      <div class="mobile-menu-bar">
        <a href="#" class="flex mr-auto">
          <img
            alt="Midone Tailwind HTML Admin Template"
            class="w-6"
            src="<?= base_url('midone/dist/images/logo.svg');?>"
          />
        </a>
        <a href="javascript:;" id="mobile-menu-toggler">
          <i
            data-feather="bar-chart-2"
            class="w-8 h-8 text-white transform -rotate-90"
          ></i>
        </a>
      </div>
      <ul class="border-t border-theme-24 py-5 hidden">
        <li>
          <a href="index.html" class="menu menu--active">
            <div class="menu__icon"><i data-feather="home"></i></div>
            <div class="menu__title">Dashboard</div>
          </a>
        </li>
        
        
        <li class="menu__devider my-6"></li>
        <li>
          <a href="javascript:;" class="menu">
            <div class="menu__icon"><i data-feather="inbox"></i></div>
            <div class="menu__title">
              Components
              <i data-feather="chevron-down" class="menu__sub-icon"></i>
            </div>
          </a>
          <ul class="">
            <li>
              <a href="javascript:;" class="menu">
                <div class="menu__icon"><i data-feather="activity"></i></div>
                <div class="menu__title">
                  Table
                  <i data-feather="chevron-down" class="menu__sub-icon"></i>
                </div>
              </a>
              <ul class="">
                <li>
                  <a href="side-menu-light-regular-table.html" class="menu">
                    <div class="menu__icon"><i data-feather="zap"></i></div>
                    <div class="menu__title">Regular Table</div>
                  </a>
                </li>
                <li>
                  <a href="side-menu-light-tabulator.html" class="menu">
                    <div class="menu__icon"><i data-feather="zap"></i></div>
                    <div class="menu__title">Tabulator</div>
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="side-menu-light-accordion.html" class="menu">
                <div class="menu__icon"><i data-feather="activity"></i></div>
                <div class="menu__title">Accordion</div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-button.html" class="menu">
                <div class="menu__icon"><i data-feather="activity"></i></div>
                <div class="menu__title">Button</div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-modal.html" class="menu">
                <div class="menu__icon"><i data-feather="activity"></i></div>
                <div class="menu__title">Modal</div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-alert.html" class="menu">
                <div class="menu__icon"><i data-feather="activity"></i></div>
                <div class="menu__title">Alert</div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-progress-bar.html" class="menu">
                <div class="menu__icon"><i data-feather="activity"></i></div>
                <div class="menu__title">Progress Bar</div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-tooltip.html" class="menu">
                <div class="menu__icon"><i data-feather="activity"></i></div>
                <div class="menu__title">Tooltip</div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-dropdown.html" class="menu">
                <div class="menu__icon"><i data-feather="activity"></i></div>
                <div class="menu__title">Dropdown</div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-toast.html" class="menu">
                <div class="menu__icon"><i data-feather="activity"></i></div>
                <div class="menu__title">Toast</div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-typography.html" class="menu">
                <div class="menu__icon"><i data-feather="activity"></i></div>
                <div class="menu__title">Typography</div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-icon.html" class="menu">
                <div class="menu__icon"><i data-feather="activity"></i></div>
                <div class="menu__title">Icon</div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-loading-icon.html" class="menu">
                <div class="menu__icon"><i data-feather="activity"></i></div>
                <div class="menu__title">Loading Icon</div>
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="javascript:;" class="menu">
            <div class="menu__icon"><i data-feather="sidebar"></i></div>
            <div class="menu__title">
              Forms <i data-feather="chevron-down" class="menu__sub-icon"></i>
            </div>
          </a>
          <ul class="">
            <li>
              <a href="side-menu-light-regular-form.html" class="menu">
                <div class="menu__icon"><i data-feather="activity"></i></div>
                <div class="menu__title">Regular Form</div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-datepicker.html" class="menu">
                <div class="menu__icon"><i data-feather="activity"></i></div>
                <div class="menu__title">Datepicker</div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-tail-select.html" class="menu">
                <div class="menu__icon"><i data-feather="activity"></i></div>
                <div class="menu__title">Tail Select</div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-file-upload.html" class="menu">
                <div class="menu__icon"><i data-feather="activity"></i></div>
                <div class="menu__title">File Upload</div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-wysiwyg-editor.html" class="menu">
                <div class="menu__icon"><i data-feather="activity"></i></div>
                <div class="menu__title">Wysiwyg Editor</div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-validation.html" class="menu">
                <div class="menu__icon"><i data-feather="activity"></i></div>
                <div class="menu__title">Validation</div>
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="javascript:;" class="menu">
            <div class="menu__icon"><i data-feather="hard-drive"></i></div>
            <div class="menu__title">
              Widgets <i data-feather="chevron-down" class="menu__sub-icon"></i>
            </div>
          </a>
          <ul class="">
            <li>
              <a href="side-menu-light-chart.html" class="menu">
                <div class="menu__icon"><i data-feather="activity"></i></div>
                <div class="menu__title">Chart</div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-slider.html" class="menu">
                <div class="menu__icon"><i data-feather="activity"></i></div>
                <div class="menu__title">Slider</div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-image-zoom.html" class="menu">
                <div class="menu__icon"><i data-feather="activity"></i></div>
                <div class="menu__title">Image Zoom</div>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- END: Mobile Menu -->
    <div class="flex">
      <!-- BEGIN: Side Menu -->
      <nav class="side-nav">
        <a href="#" class="intro-x flex items-center pl-5 pt-4">
          <img
            alt="Midone Tailwind HTML Admin Template"
            class="w-6"
            src="<?= base_url('midone/dist/images/logo.svg');?>"
          />
          <span class="hidden xl:block text-white text-lg ml-3">
            Mid<span class="font-medium">one</span>
          </span>
        </a>
        <div class="side-nav__devider my-6"></div>
        <ul>
          <li>
            <a href="index.html" class="side-menu side-menu--active">
              <div class="side-menu__icon"><i data-feather="home"></i></div>
              <div class="side-menu__title">Dashboard</div>
            </a>
          </li>
         
         
            </ul>
          </li>
        </ul>
      </nav>
      <!-- END: Side Menu -->

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
              <div
                class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0"
              >
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
                            <img
                              alt="Midone Tailwind HTML Admin Template"
                              class="tooltip rounded-full"
                              src="<?= base_url('midone/dist/images/preview-6.jpg');?>"
                              title="Uploaded at 16 May 2020"
                            />
                          </div>
                          <div class="w-10 h-10 image-fit zoom-in -ml-5">
                            <img
                              alt="Midone Tailwind HTML Admin Template"
                              class="tooltip rounded-full"
                              src="<?= base_url('midone/dist/images/preview-5.jpg');?>"
                              title="Uploaded at 8 April 2021"
                            />
                          </div>
                          <div class="w-10 h-10 image-fit zoom-in -ml-5">
                            <img
                              alt="Midone Tailwind HTML Admin Template"
                              class="tooltip rounded-full"
                              src="<?= base_url('midone/dist/images/preview-2.jpg');?>"
                              title="Uploaded at 12 October 2020"
                            />
                          </div>
                        </div>
                      </td>
                      <td>
                        <a href="#" class="font-medium whitespace-nowrap"
                          >Nikon Z6</a
                        >
                        <div
                          class="text-gray-600 text-xs whitespace-nowrap mt-0.5"
                        >
                          Photography
                        </div>
                      </td>
                      <td class="text-center">219</td>
                      <td class="w-40">
                        <div
                          class="flex items-center justify-center text-theme-9"
                        >
                          <i
                            data-feather="check-square"
                            class="w-4 h-4 mr-2"
                          ></i>
                          Active
                        </div>
                      </td>
                      <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                          <a class="flex items-center mr-3" href="#">
                            <i
                              data-feather="check-square"
                              class="w-4 h-4 mr-1"
                            ></i>
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
                            <img
                              alt="Midone Tailwind HTML Admin Template"
                              class="tooltip rounded-full"
                              src="<?= base_url('midone/dist/images/preview-5.jpg');?>"
                              title="Uploaded at 15 July 2022"
                            />
                          </div>
                          <div class="w-10 h-10 image-fit zoom-in -ml-5">
                            <img
                              alt="Midone Tailwind HTML Admin Template"
                              class="tooltip rounded-full"
                              src="<?= base_url('midone/dist/images/preview-11.jpg');?>"
                              title="Uploaded at 23 July 2022"
                            />
                          </div>
                          <div class="w-10 h-10 image-fit zoom-in -ml-5">
                            <img
                              alt="Midone Tailwind HTML Admin Template"
                              class="tooltip rounded-full"
                              src="<?= base_url('midone/dist/images/preview-9.jpg');?>"
                              title="Uploaded at 18 June 2022"
                            />
                          </div>
                        </div>
                      </td>
                      <td>
                        <a href="#" class="font-medium whitespace-nowrap"
                          >Sony A7 III</a
                        >
                        <div
                          class="text-gray-600 text-xs whitespace-nowrap mt-0.5"
                        >
                          Photography
                        </div>
                      </td>
                      <td class="text-center">93</td>
                      <td class="w-40">
                        <div
                          class="flex items-center justify-center text-theme-9"
                        >
                          <i
                            data-feather="check-square"
                            class="w-4 h-4 mr-2"
                          ></i>
                          Active
                        </div>
                      </td>
                      <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                          <a class="flex items-center mr-3" href="#">
                            <i
                              data-feather="check-square"
                              class="w-4 h-4 mr-1"
                            ></i>
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
                            <img
                              alt="Midone Tailwind HTML Admin Template"
                              class="tooltip rounded-full"
                              src="<?= base_url('midone/dist/images/preview-4.jpg');?>"
                              title="Uploaded at 9 July 2020"
                            />
                          </div>
                          <div class="w-10 h-10 image-fit zoom-in -ml-5">
                            <img
                              alt="Midone Tailwind HTML Admin Template"
                              class="tooltip rounded-full"
                              src="<?= base_url('midone/dist/images/preview-11.jpg');?>"
                              title="Uploaded at 19 September 2022"
                            />
                          </div>
                          <div class="w-10 h-10 image-fit zoom-in -ml-5">
                            <img
                              alt="Midone Tailwind HTML Admin Template"
                              class="tooltip rounded-full"
                              src="<?= base_url('midone/dist/images/preview-10.jpg');?>"
                              title="Uploaded at 16 November 2021"
                            />
                          </div>
                        </div>
                      </td>
                      <td>
                        <a href="#" class="font-medium whitespace-nowrap"
                          >Sony Master Series A9G</a
                        >
                        <div
                          class="text-gray-600 text-xs whitespace-nowrap mt-0.5"
                        >
                          Electronic
                        </div>
                      </td>
                      <td class="text-center">59</td>
                      <td class="w-40">
                        <div
                          class="flex items-center justify-center text-theme-9"
                        >
                          <i
                            data-feather="check-square"
                            class="w-4 h-4 mr-2"
                          ></i>
                          Active
                        </div>
                      </td>
                      <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                          <a class="flex items-center mr-3" href="#">
                            <i
                              data-feather="check-square"
                              class="w-4 h-4 mr-1"
                            ></i>
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
                            <img
                              alt="Midone Tailwind HTML Admin Template"
                              class="tooltip rounded-full"
                              src="<?= base_url('midone/dist/images/preview-2.jpg');?>"
                              title="Uploaded at 12 February 2022"
                            />
                          </div>
                          <div class="w-10 h-10 image-fit zoom-in -ml-5">
                            <img
                              alt="Midone Tailwind HTML Admin Template"
                              class="tooltip rounded-full"
                              src="<?= base_url('midone/dist/images/preview-4.jpg');?>"
                              title="Uploaded at 12 April 2021"
                            />
                          </div>
                          <div class="w-10 h-10 image-fit zoom-in -ml-5">
                            <img
                              alt="Midone Tailwind HTML Admin Template"
                              class="tooltip rounded-full"
                              src="<?= base_url('midone/dist/images/preview-12.jpg');?>"
                              title="Uploaded at 1 April 2021"
                            />
                          </div>
                        </div>
                      </td>
                      <td>
                        <a href="#" class="font-medium whitespace-nowrap"
                          >Apple MacBook Pro 13</a
                        >
                        <div
                          class="text-gray-600 text-xs whitespace-nowrap mt-0.5"
                        >
                          PC &amp; Laptop
                        </div>
                      </td>
                      <td class="text-center">127</td>
                      <td class="w-40">
                        <div
                          class="flex items-center justify-center text-theme-9"
                        >
                          <i
                            data-feather="check-square"
                            class="w-4 h-4 mr-2"
                          ></i>
                          Active
                        </div>
                      </td>
                      <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                          <a class="flex items-center mr-3" href="#">
                            <i
                              data-feather="check-square"
                              class="w-4 h-4 mr-1"
                            ></i>
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