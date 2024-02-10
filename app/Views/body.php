<!-- Main Slider End Brand Start -->
<div class="brand">
    <div class="container-fluid">
        <div class="brand-slider">
            <div class="brand-item"><img src="<?= base_url(); ?>/template/img/Gramedia.png" alt=""></div>
            <div class="brand-item"><img src="<?= base_url(); ?>/template/img/Angkasa.png" alt=""></div>
            <div class="brand-item"><img src="<?= base_url(); ?>/template/img/Grasindo.png" alt=""></div>
            <div class="brand-item"><img src="<?= base_url(); ?>/template/img/Clover.png" alt=""></div>
            <div class="brand-item"><img src="<?= base_url(); ?>/template/img/Haru.png" alt=""></div>
            <div class="brand-item"><img src="<?= base_url(); ?>/template/img/M_C.png" alt=""></div>
            <div class="brand-item"><img src="<?= base_url(); ?>/template/img/Mediakita.png" alt=""></div>
            <div class="brand-item"><img src="<?= base_url(); ?>/template/img/Bentang.png" alt=""></div>
        </div>
    </div>
</div>
<!-- Main Slider End Brand End -->

<!-- Best Selling Start -->
<div id="bestselling-product" class="bestselling-product product">
    <div class="container-fluid">
        <div class="section-header">
            <h1>Best Selling</h1>
        </div>
        <div class="row align-items-center product-slider product-slider-4 ">
            <?php foreach ($buk as $buklist) : ?>
                <div class=" col-lg-3">
                    <div class="product-item">
                        <div class="product-title" style="display: flex; justify-content: center; align-items: center; height: 15vh;">
                            <a style="color: black; font-weight: bold; font-size:18px"><?= $buklist->judul_buku; ?>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </a>
                        </div>
                        <div class="product-image">
                            <img class="card-img-top embed-responsive-item" style="width: 100%;height: 15vw; object-fit: cover;" src="<?= base_url() . "/file_gambar/" . $buklist->foto; ?>" alt="">
                        </div>
                        <div class="product-price" style=" height: 11vh;">
                            <span>
                                <a style="color: black; font-weight: bold; font-size:20px"> Rp <?= $buklist->harga; ?></a>
                            </span>
                            <a class="btn" href="<?= base_url('kategoribuku/' . $buklist->kode_buku . '/detail') ?>"> <i class="fas fa-eye mr-1"></i> Detail</a>


                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
<!-- Best Selling End -->

<!-- Category Start-->
<div class="category">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="category-item ch-400">
                    <img src="<?= base_url(); ?>/template/img/halaman1.png" />
                </div>
            </div>
            <div class="col-md-3">
                <div class="category-item ch-250">
                    <img src="<?= base_url(); ?>/template/img/halaman2.png" />
                </div>
                <div class="category-item ch-150">
                    <img src="<?= base_url(); ?>/template/img/Buku Web3.jpg" />
                </div>
            </div>
            <div class="col-md-3">
                <div class="category-item ch-150">
                    <img src="<?= base_url(); ?>/template/img/Buku Web4.jpg" />
                </div>
                <div class="category-item ch-250">
                    <img src="<?= base_url(); ?>/template/img/Buku Web5.jpg" />
                </div>
            </div>
            <div class="col-md-3">
                <div class="category-item ch-400">
                    <img src="<?= base_url(); ?>/template/img/halaman4.png" />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Category End-->