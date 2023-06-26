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
        <a class="nav-link" href="<?= base_url('dashboard'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>




    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Master Mobil
    </div>



    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('mobil'); ?>">
            <i class="fas fa-fw fa-solid fa-car"></i>
            <span>Data Mobil</span></a>
    </li>

    <!-- Heading -->
    <div class="sidebar-heading">
        Master Pemesan
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('customer'); ?>">
            <i class="fas fa-fw fa-solid fa-users"></i>
            <span>Data Customer</span></a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('pembayaran'); ?>">
            <i class="fas fa-fw fa-solid fa-money-bill"></i>
            <span>Data Pembayaran</span></a>
    </li>

    <!-- Heading -->
    <div class="sidebar-heading">
        Master Pesanan
    </div>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('pesanan'); ?>">
            <i class="fas fa-fw fa-solid fa-list"></i>
            <span>Data Pesanan</span></a>
    </li>




    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->