     <?php
        defined('BASEPATH') or exit('No direct script access allowed'); ?>

     <div class="wrapper">
         <!-- Sidebar -->
         <div class="sidebar" data-background-color="dark">
             <div class="sidebar-logo">
                 <!-- Logo Header -->
                 <div class="logo-header" data-background-color="dark">
                     <a href="index.html" class="logo">
                         <img src="<?= htmlentities(base_url('assets/public/img/') . app('logo'), ENT_QUOTES) ?>"
                             alt="navbar brand" class="navbar-brand" height="40" />
                     </a>
                     <div class="nav-toggle">
                         <button class="btn btn-toggle toggle-sidebar">
                             <i class="gg-menu-right"></i>
                         </button>
                         <button class="btn btn-toggle sidenav-toggler">
                             <i class="gg-menu-left"></i>
                         </button>
                     </div>
                     <button class="topbar-toggler more">
                         <i class="gg-more-vertical-alt"></i>
                     </button>
                 </div>
                 <!-- End Logo Header -->
             </div>
             <div class="sidebar-wrapper scrollbar scrollbar-inner">
                 <div class="sidebar-content">
                     <ul class="nav nav-secondary">

                         <li class="nav-item <?php if ($this->uri->segment(2) == 'dashboard') {
                                                    echo 'active';
                                                } ?>">
                             <a href="<?= base_url('app-admin/dashboard') ?>" class="collapsed" aria-expanded="false">
                                 <i class="fas fa-home"></i>
                                 <p>Dashboard</p>
                             </a>

                         </li>

                         <li class="nav-section">
                             <span class="sidebar-mini-icon">
                                 <i class="fa fa-ellipsis-h"></i>
                             </span>
                             <h4 class="text-section">Components</h4>
                         </li>

                         <li class="nav-item <?php if ($this->uri->segment(2) == 'pages') {
                                                    echo 'active';
                                                } ?>">
                             <a data-bs-toggle="collapse" href="#base">
                                 <i class="fas fa-layer-group"></i>
                                 <p>Pages</p>
                                 <span class="caret"></span>
                             </a>
                             <div class="collapse" id="base">
                                 <ul class="nav nav-collapse">
                                     <li class="<?php if ($this->uri->segment(3) == 'about') {
                                                    echo 'active';
                                                } ?>">
                                         <a href="<?= htmlentities(base_url('app-admin/pages/about'), ENT_QUOTES) ?>">
                                             <span class="sub-item">About</span>
                                         </a>
                                     </li>
                                     <li class="<?php if ($this->uri->segment(3) == 'service') {
                                                    echo 'active';
                                                } ?>">
                                         <a href="<?= htmlentities(base_url('app-admin/pages/service'), ENT_QUOTES) ?>">
                                             <span class="sub-item">Service</span>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="components/gridsystem.html">
                                             <span class="sub-item">Portfolio</span>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="components/panels.html">
                                             <span class="sub-item">Contact</span>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="components/notifications.html">
                                             <span class="sub-item">Patner</span>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="components/sweetalert.html">
                                             <span class="sub-item">Client</span>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="components/font-awesome-icons.html">
                                             <span class="sub-item">Terms Of Use</span>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="components/simple-line-icons.html">
                                             <span class="sub-item">Privacy Policy</span>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="components/typography.html">
                                             <span class="sub-item">FAQS</span>
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                         </li>
                         <li class="nav-item">
                             <a data-bs-toggle="collapse" href="#sidebarLayouts">
                                 <i class="fab fa-telegram-plane"></i>
                                 <p>Post</p>
                             </a>
                         </li>
                         <li class="nav-item <?php if ($this->uri->segment(2) == 'project') {
                                                    echo 'active';
                                                } ?>">
                             <a href="<?= htmlentities(base_url('app-admin/project'), ENT_QUOTES) ?>">
                                 <i class="fas fa-clipboard"></i>
                                 <p>Project</p>
                             </a>
                         </li>

                     </ul>
                 </div>
             </div>
         </div>