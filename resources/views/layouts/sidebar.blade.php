@include('layouts.header')
<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">
        <li class="nav-item mr-auto"><a class="navbar-brand" href="html/ltr/vertical-menu-template-semi-dark/index.html">
            <div class="brand-logo"></div>
            <h2 class="brand-text mb-0">Klinik</h2>
          </a></li>
        <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
      </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="<?php echo (''); ?> nav-item">
          <a href="/Dashboard"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
        </li>
  
        <li class="<?php echo ('dokter'); ?> nav-item">
          <a href="/Dokter">
            <i class="feather icon-user"></i><span class="menu-title" data-i18n="Dokter">Dokter</span>
          </a>
        </li>
  
        <li class="<?php echo ('pasien'); ?> nav-item"><a href="/Pasien"><i class="feather icon-user"></i><span class="menu-title" data-i18n="Pasien">Pasien</span></a>
        </li>
  
        <li class="<?php echo ('ruang'); ?> nav-item"><a href="/Ruangan"><i class="feather icon-check-square"></i><span class="menu-title" data-i18n="Ruang">Ruang</span></a>
        </li>
  
        <li class="<?php echo ('obat'); ?> nav-item"><a href="/Obat"><i class="feather icon-calendar"></i><span class="menu-title" data-i18n="Obat">Obat</span></a>
        </li>
  
        <li class="<?php echo ('rekam-medis'); ?> nav-item"><a href="/Rekam-Medis"><i class="feather icon-bar-chart"></i><span class="menu-title" data-i18n="Rekam Medis">Rekam Medis</span></a>
  
        <li class="nav-item"><a href="javascript:;"><i class="feather icon-pie-chart"></i><span class="menu-title" data-i18n="Laporan">Laporan</span></a>
          <ul class="menu-content">
            <li class="<?php echo ('lap-rekam-medis'); ?>"><a href="?page=lap-rekam-medis"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Rekam Medis">Rekam Medis</span></a>
            </li>
          </ul>
        </li>
  
      </ul>
    </div>
  </div>
  <!-- END: Main Menu-->