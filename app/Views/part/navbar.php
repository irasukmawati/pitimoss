        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="<?= base_url(); ?>" class="nav-item nav-link">Home</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Kategori Buku</a>
                                <div class="dropdown-menu">
                                    <?php foreach ($kat as $katlist) : ?>
                                        <a class="dropdown-item" href="<?= base_url('kategoribuku/' . $katlist['kode_kategori'] . '/view') ?>"><i class="fa fa-book"></i> <?= $katlist['nama_kategori'] ?></a>
                                        </li>
                                    <?php endforeach ?>
                                </div>
                            </div>
                            <a href="<?= base_url('cart'); ?>" class="nav-item nav-link">Cart</a>
                            <a href="<?= base_url('checkout'); ?>" class="nav-item nav-link">Checkout</a>
                            <a href="<?= base_url('contact'); ?>" class="nav-item nav-link">Contact Us</a>
                        </div>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Halo <?= session()->get("username") ?></a>
                                <div class="dropdown-menu">
                                    <?php
                                    if (session()->get('username') == '') {
                                        echo "<a href='login' class='dropdown-item'>Login</a>";
                                        echo "<a href='register' class='dropdown-item'>Register</a>";
                                    } else {
                                        echo "<a href='login/logout' class='dropdown-item'> Logout</a>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->

        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.html">
                                <center>
                                    <img src="<?= base_url(); ?>/template/img/Logo Pitimoss.jpg" alt="Logo">
                                </center>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            <a href="<?= base_url(); ?>cart" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>(<?= $jmlitem ?>)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->