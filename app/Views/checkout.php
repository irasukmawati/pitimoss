<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="home">Home</a></li>
            <li class="breadcrumb-item active">Checkout</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->

<form method="post" action="<?= base_url('cart/' . $idtrans . '/finishTrans') ?>">
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div class="mb-4">
                    <h4 class="font-weight-semi-bold mb-4">Billing Address</h4>
                    <div class="row">
                        <div class=" col-md-12 form-group">
                            <label>Nama Penerima</label>
                            <input class="form-control" type="text" name="nama_lengkap">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" name="email">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>No HP</label>
                            <input class="form-control" type="text" name="no_hp">
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Alamat</label>
                            <input class="form-control" type="text" name="alamat">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Kota / Kabupaten</label>
                            <input class="form-control" type="text" name="kota">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Kode Pos</label>
                            <input class="form-control" type="text" name="kodepos">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-secondary mb-5">
                    <div class="card border-0">
                        <h4 class="font-weight-bold" style="text-align: center;">Order Total</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="font-weight-medium mb-3">Products</h5>
                        <?php
                        $total = 0;
                        foreach ($detail as $buklist) : ?>
                            <?php
                            $subtotal = $buklist['harga'] * $buklist['jumlah'];
                            $total = $total + $subtotal;
                            ?>
                            <div class="d-flex justify-content-between">
                                <p><?= $buklist['judul_buku'] ?></p>
                                <p><?= $subtotal ?></p>
                            </div>
                        <?php endforeach ?>
                        <hr class="mt-0">
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Sub Total</h5>
                            <input class="form-control" type="hidden" name="total" value="<?= $total ?>">
                            <h5 class="font-weight-bold"><?= number_to_currency($total, 'IDR', 'en_ID', 2) ?></h5>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Diskon</h5>
                            <?php
                            $diskon = $total * 0.15;
                            $grandtotal = $total - $diskon;
                            ?>
                            <input class="form-control" type="hidden" name="diskon" value="<?= $diskon ?>">
                            <h5 class="font-weight-bold"><?= number_to_currency($diskon, 'IDR', 'en_ID', 2) ?></h5>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <input class="form-control" type="hidden" name="grandtotal" value="<?= $grandtotal ?>">
                            <h5 class="font-weight-bold"><?= number_to_currency($grandtotal, 'IDR', 'en_ID', 2) ?></h5>
                        </div>
                    </div>
                </div>
                <div class="card border-secondary mb-5">
                    <div class="card border-0">
                        <h4 class="font-weight-bold" style="text-align: center;">Payment</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="cod" checked>
                                <label class="custom-control-label" for="cod">Cash On Delivery</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <input type="submit" class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3" value="Place Order">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>