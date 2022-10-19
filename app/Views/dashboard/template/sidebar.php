 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         <div class="sidebar-brand-icon rotate-n-15">
             <i class="fas fa-laugh-wink"></i>
         </div>
         <div class="sidebar-brand-text mx-3">Panel Management</div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <?php if (user_can('dashboard')) : ?>
         <li class="nav-item">
             <a class="nav-link" href="<?= base_url('dashboard') ?>">
                 <i class="fas fa-fw fa-tachometer-alt"></i>
                 <span>Dashboard</span></a>
         </li>
     <?php endif ?>

     <!-- Nav Item - Agenda -->
     <?php if (user_can('view-agenda')) : ?>
         <li class="nav-item">
             <a class="nav-link" href="<?= base_url('agenda') ?>">
                 <i class="fas fa-newspaper"></i>
                 <span>Agenda</span></a>
         </li>
     <?php endif ?>

     <!-- Nav Item - OPD Management -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOPD">
             <i class="fas fa-info-circle"></i>
             <span>OPD</span>
         </a>
         <div id="collapseOPD" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">OPD Components :</h6>
                 <?php if (user_can('view-category-opd')) : ?>
                     <a class="collapse-item" href="<?= base_url('category_opd') ?>">Category</a>
                 <?php endif ?>
                 <?php if (user_can('view-opd')) : ?>
                     <a class="collapse-item" href="<?= base_url('opd') ?>">
                         <span>OPD</span>
                     </a>
                 <?php endif ?>
             </div>
         </div>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         User Management
     </div>

     <!-- Nav Item - User -->
     <?php if (user_can('view-role')) : ?>
         <li class="nav-item">
             <a class="nav-link" href="<?= base_url('role') ?>">
                 <i class="fas fa-user-tag"></i>
                 <span>Role</span></a>
         </li>
     <?php endif ?>

     <?php if (user_can('view-user')) : ?>
         <li class="nav-item">
             <a class="nav-link" href="<?= base_url('user') ?>">
                 <i class="fas fa-user"></i>
                 <span>User</span></a>
         </li>
     <?php endif ?>

     <?php if (user_can('view-permission')) : ?>
         <li class="nav-item">
             <a class="nav-link" href="<?= base_url('permission') ?>">
                 <i class="fas fa-address-book"></i>
                 <span>User Permission</span></a>
         </li>
     <?php endif ?>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         News Management
     </div>

     <?php if (user_can('view-category-news')) : ?>
         <li class="nav-item">
             <a class="nav-link" href="<?= base_url('category_news') ?>">
                 <i class="fas fa-info-circle"></i>
                 <span>Category News</span></a>
         </li>
     <?php endif ?>
     <!-- Nav Item - Category News -->

     <?php if (user_can('view-news')) : ?>
         <li class="nav-item">
             <a class="nav-link" href="<?= base_url('news') ?>">
                 <i class="fas fa-newspaper"></i>
                 <span>News</span></a>
         </li>
     <?php endif ?>
     <!-- Nav Item - News -->

     <!-- Heading -->
     <div class="sidebar-heading">
         Media Management
     </div>

     <!-- Nav Item - Category Galery -->
     <?php if (user_can('view-category-gallery')) : ?>
         <li class="nav-item">
             <a class="nav-link" href="<?= base_url('category_gallery') ?>">
                 <i class="fas fa-info-circle"></i>
                 <span>Category Galery</span></a>
         </li>
     <?php endif ?>

     <!-- Nav Item - Galery -->
     <?php if (user_can('view-gallery')) : ?>
         <li class="nav-item">
             <a class="nav-link" href="<?= base_url('gallery') ?>">
                 <i class="fas fa-image"></i>
                 <span>Gallery</span></a>
         </li>
     <?php endif ?>

     <!-- Heading -->
     <div class="sidebar-heading">
         Menu Management
     </div>

     <!-- Nav Item - Menu Management -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProfile">
             <i class="fas fa-info-circle"></i>
             <span>Profile</span>
         </a>
         <div id="collapseProfile" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">Profile Components :</h6>
                 <?php if (user_can('view-category-profile')) : ?>
                     <a class="collapse-item" href="<?= base_url('category_menu/list/profile') ?>">Category</a>
                 <?php endif ?>
                 <?php if (user_can('view-category-profile')) : ?>
                     <a class="collapse-item" href="<?= base_url('content_menu/list/profile') ?>">Content</a>
                 <?php endif ?>
             </div>
         </div>
     </li>

     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInformation">
             <i class="fas fa-info-circle"></i>
             <span>Information</span>
         </a>
         <div id="collapseInformation" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">Information Components :</h6>
                 <?php if (user_can('view-category-information')) : ?>
                     <a class="collapse-item" href="<?= base_url('category_menu/list/information') ?>">Category</a>
                 <?php endif ?>
                 <?php if (user_can('view-category-information')) : ?>
                     <a class="collapse-item" href="<?= base_url('content_menu/list/information') ?>">Content</a>
                 <?php endif ?>
             </div>
         </div>
     </li>

     <!-- Nav Item - Galery -->
     <?php if (user_can('view-goverment')) : ?>
         <li class="nav-item">
             <a class="nav-link" href="<?= base_url('goverment') ?>">
                 <i class="fas fa-info-circle"></i>
                 <span>Goverment</span></a>
         </li>
     <?php endif ?>

     <!-- Heading -->
     <div class="sidebar-heading">
         Priority Program Management
     </div>

     <!-- Nav Item -  Category facilities -->
     <?php if (user_can('view-priority-program')) : ?>
         <li class="nav-item">
             <a class="nav-link" href="<?= base_url('priority_program') ?>">
                 <i class="fas fa-info-circle"></i>
                 <span>Priority Program</span>
             </a>
         </li>
     <?php endif ?>

     <!-- Heading -->
     <div class="sidebar-heading">
         Gis Management
     </div>

     <!-- Nav Item -  Category facilities -->
     <?php if (user_can('view-category-facilities')) : ?>
         <li class="nav-item">
             <a class="nav-link" href="<?= base_url('gis_category_facilities') ?>">
                 <i class="fas fa-home"></i>
                 <span>Category Facilities</span>
             </a>
         </li>
     <?php endif ?>

     <!-- Nav Item -  facilities -->
     <?php if (user_can('view-facilities')) : ?>
         <li class="nav-item">
             <a class="nav-link" href="<?= base_url('gis_facilities') ?>">
                 <i class="fas fa-home"></i>
                 <span>Facilities</span>
             </a>
         </li>
     <?php endif ?>

     <!-- Nav Item - gis -->
     <?php if (user_can('view-batas-kecamatan')) : ?>
         <li class="nav-item">
             <a class="nav-link" href="<?= base_url('gis_batas_kecamatan') ?>">
                 <i class="fas fa-globe"></i>
                 <span>Gis Batas Kecamatan</span>
             </a>
         </li>
     <?php endif ?>

     <!-- Heading -->
     <div class="sidebar-heading">
         Info Management
     </div>

     <!-- Nav Item - RPJMD -->
     <?php if (user_can('view-rpjmd')) : ?>
         <li class="nav-item">
             <a class="nav-link" href="<?= base_url('rpjmd') ?>">
                 <i class="fas fa-info-circle"></i>
                 <span>R P J M D</span>
             </a>
         </li>
     <?php endif ?>

     <!-- Nav Item - RPJPD -->
     <?php if (user_can('view-rpjpd')) : ?>
         <li class="nav-item">
             <a class="nav-link" href="<?= base_url('rpjpd') ?>">
                 <i class="fas fa-info-circle"></i>
                 <span>R P J P D</span>
             </a>
         </li>
     <?php endif ?>

     <!-- Nav Item - RKPD -->
     <?php if (user_can('view-rkpd')) : ?>
         <li class="nav-item">
             <a class="nav-link" href="<?= base_url('rkpd') ?>">
                 <i class="fas fa-info-circle"></i>
                 <span>R K P D</span>
             </a>
         </li>
     <?php endif ?>

     <!-- Nav Item - LKPJ -->
     <?php if (user_can('view-lkpj')) : ?>
         <li class="nav-item">
             <a class="nav-link" href="<?= base_url('lkpj') ?>">
                 <i class="fas fa-info-circle"></i>
                 <span>L K P J</span>
             </a>
         </li>
     <?php endif ?>

     <!-- Nav Item - SAKIP -->
     <?php if (user_can('view-sakip')) : ?>
         <li class="nav-item">
             <a class="nav-link" href="<?= base_url('sakip') ?>">
                 <i class="fas fa-info-circle"></i>
                 <span>S A K I P</span>
             </a>
         </li>
     <?php endif ?>

     <!-- Nav Item - LPPD -->
     <?php if (user_can('view-lppd')) : ?>
         <li class="nav-item">
             <a class="nav-link" href="<?= base_url('lppd') ?>">
                 <i class="fas fa-info-circle"></i>
                 <span>L P P D</span>
             </a>
         </li>
     <?php endif ?>

     <!-- Heading -->
     <div class="sidebar-heading">
         Setting Management
     </div>

     <!-- Nav Item - Splash Screen -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSplash">
             <i class="fas fa-info-circle"></i>
             <span>Splash Screen</span>
         </a>
         <div id="collapseSplash" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">Splash Components :</h6>
                 <?php if (user_can('view-flash')) : ?>
                     <a class="collapse-item" href="<?= base_url('flash/bupati') ?>"><span>Bupati</span></a>
                 <?php endif ?>
                 <?php if (user_can('view-flash')) : ?>
                     <a class="collapse-item" href="<?= base_url('flash/wabup') ?>"><span>Wakil Bupati</span></a>
                 <?php endif ?>
             </div>
         </div>
     </li>

     <!-- Nav Item - Web -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseWeb">
             <i class="fas fa-info-circle"></i>
             <span>Web Setting</span>
         </a>
         <div id="collapseWeb" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">Web Components :</h6>
                 <?php if (user_can('view-setting')) : ?>
                     <a class="collapse-item" href="<?= base_url('setting/image') ?>"><span>Image</span></a>
                 <?php endif ?>
                 <?php if (user_can('view-setting')) : ?>
                     <a class="collapse-item" href="<?= base_url('setting/social_media') ?>"> <span>Social Media</span></a>
                 <?php endif ?>
                 <?php if (user_can('view-setting')) : ?>
                     <a class="collapse-item" href="<?= base_url('setting/contact') ?>"> <span>Contact</span></a>
                 <?php endif ?>
             </div>
         </div>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

 </ul>