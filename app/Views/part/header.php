<!-- Main Slider Start -->
<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <nav class="navbar bg-light" style="font-weight: bold;">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>"><i class="fa fa-home"></i>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#bestselling-product"><i class="fa fa-shopping-bag"></i>Best Selling</a>
                        </li>
                        <?php foreach ($kat as $katlist) : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('kategoribuku/' . $katlist['kode_kategori'] . '/view') ?>"><i class="fa fa-book"></i><?= $katlist['nama_kategori'] ?></a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </nav>
            </div>
            <div class="col-md-6">
                <div class="header-slider normal-slider">
                    <?php if ($statushalaman == 'body') { ?>
                        <?php
                        $statuscrs = 'active';
                        foreach ($crs as $crslist) : ?>
                            <div class="header-slider-item">
                                <img src="<?= base_url('template/img/' . $crslist['pic_carousel']) ?>" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p><?= $crslist['desc_carousel'] ?></p>
                                </div>
                            </div>
                        <?php
                            $statuscrs = '';
                        endforeach ?>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-3">
                <div class="header-img">
                    <div class="img-item">
                        <img src="<?= base_url(); ?>/template/img/beranda1.png" />
                    </div>
                    <div class="img-item">
                        <img src="<?= base_url(); ?>/template/img/beranda2.png" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Slider End -->