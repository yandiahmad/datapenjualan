 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
  <div class="sidebar-brand-icon rotate-n-15">
  <i class="fas fa-shopping-bag"></i>
  </div>
  <div class="sidebar-brand-text mx-3">Penjualan<sup>APK</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->

<?php if($title == 'Dashboard' ): ?>
    <li class="nav-item active">
  <?php else : ?>
    <li class="nav-item">
<?php endif; ?>

  <a class="nav-link" href="<?= base_url('dashboard'); ?>">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">


<!-- Heading -->
<div class="sidebar-heading">
  Menu Utama
</div>


<!-- Nav Item - Barang -->
<?php if($title == 'Data Barang'): ?>
  <li class="nav-item active">
    <?php else: ?>
  <li class="nav-item">
<?php endif; ?>
  <a class="nav-link" href="<?= base_url('barang');?>">
  <i class="far fa-newspaper"></i>
    <span>Data Barang</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider my-0">


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->

