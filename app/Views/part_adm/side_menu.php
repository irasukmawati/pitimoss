<!-- Main Sidebar Container -->



<aside class="main-sidebar sidebar-light-primary elevation-4" style="background-color: #E6BAA3;">
    <!-- Brand Logo -->
    <a href="dashboard" class="brand-link">
        <img src="template/dist/img/logopitimoss.png" alt="logopitimoss" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-dark-bold-">PITIMOSS</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-6 d-flex">
            <div class="image">
                <img src="<?= base_url('template/dist/img/user3-128x128.png') ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="" class="d-block font-weight-dark-bold">Kelompk 3</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= base_url('dashboard'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('kategori'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Kategori
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('buku'); ?>" class="nav-link">
                        <i class="nav-icon fa fa-book"></i>
                        <p>
                            Produk Buku
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="user" class="nav-link">
                        <i class="nav-icon fa fa-user"></i>
                        <p>
                            User
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="transaksi" class="nav-link">
                        <i class="nav-icon fa fa-shopping-bag"></i>
                        <p>
                            Transaksi
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="detailtransaksi" class="nav-link">
                        <i class="nav-icon fa fa-check-square"></i>
                        <p>
                            Detail Transaksi
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="login/logout" class="nav-link">
                        <i class="nav-icon fa fa-toggle-on"></i>
                        <p>
                            Log Out
                        </p>
                    </a>
                </li>
            </ul>


        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>