<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa-solid fa-car-building"></i>
        </div>
        <i class="fas fa-fw fa-solid fa-car fa-2x"></i>
        <div class="sidebar-brand-text mx-2">Rental Mobil </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/index'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>




    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Halaman
    </div>



    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/pengajuan'); ?>">
            <i class="fas fa-fw fa-solid fa-car"></i>
            <span>Pengajuan</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/rental'); ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Rental Mobil</span></a>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/kelolapenyewa'); ?>">
            <i class="fas fa-users"></i>
            <span>Kelola Penyewa</span></a>
    </li>

    <!-- Heading -->
    <!-- <div class="sidebar-heading">
        Master Pesanan
    </div>

    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-solid fa-list"></i>
            <span>Data Pesanan</span></a>
    </li> -->

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>


</ul>
<!-- End of Sidebar -->