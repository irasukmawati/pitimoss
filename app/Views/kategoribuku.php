<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item active">Kategori Buku</a></li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Products Start -->
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <?php
        $url = $_SERVER["REQUEST_URI"];
        $parsed_url = parse_url($url, PHP_URL_PATH);
        if ($parsed_url === '/pitimoss/public/kategoribuku/NVL/view') {
            // $namebook = 'NOVEL';
            echo "<h2 class='section-title px-5'><span class='px-2'>Daftar Novel </span></h2>";
        } elseif ($parsed_url === '/pitimoss/public/kategoribuku/NFK/view') {
            // $nameboook === "Non Fiksi";
            echo "<h2 class='section-title px-5'><span class='px-2'>Daftar Non Fiksi </span></h2>";
        } elseif ($parsed_url === '/pitimoss/public/kategoribuku/KMK/view') {
            // $namebook === "KOMIK";
            echo "<h2 class='section-title px-5'><span class='px-2'>Daftar Komik </span></h2>";
        } elseif ($parsed_url === '/pitimoss/public/kategoribuku/PSC/view') {
            // $namebook === "KOMIK";
            echo "<h2 class='section-title px-5'><span class='px-2'>Daftar Pop Science </span></h2>";
        } else {
            echo "<h2 class='section-title px-5'><span class='px-2'>Daftar Buku </span></h2>";
        }
        ?>


    </div>
    <div class="row px-xl-5 pb-3">
        <?php foreach ($buk as $buklist) : ?>

            <div class="col-lg-3">
                <div class="product-item">
                    <div class="product-title" style="display: flex; justify-content: center; align-items: center; height: 15vh;">
                        <a style="color: black; font-weight:bold; font-size: 18px;">
                            <?= $buklist['judul_buku'] ?>
                        </a>
                    </div>
                    <div class="product-image">
                        <a href="<?= base_url('kategoribuku/' . $buklist['kode_buku'] . '/detail') ?>">
                            <img class="card-img-top embed-responsive-item" style="width: 100%;height: 16vw; object-fit: cover;" src="<?= base_url() . "/file_gambar/" . $buklist['foto']; ?>" alt="<?php echo $buklist['foto'] ?>">
                        </a>
                    </div>
                    <div class="product-price" style=" height: 11vh;">
                        <a style=" color: black; font-weight:bold; font-size:20px"> Rp <?= $buklist['harga'] ?></a>
                        <a class="btn" href="<?= base_url('kategoribuku/' . $buklist['kode_buku'] . '/detail') ?>"><i class="fas fa-eye mr-1"></i>Detail</a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>

    </div>
</div>
<!-- Products End -->