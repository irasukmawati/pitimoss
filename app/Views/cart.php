<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="home">Home</a></li>
            <li class="breadcrumb-item active">Cart</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-bordered text-center mb-0">
                <thead class="bg-secondary text-dark">
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Judul Buku</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    <?php

                    use SebastianBergmann\CodeCoverage\Report\PHP;

                    $total = 0;
                    $no = 1;
                    foreach ($detail as $buklist) : ?>
                        <?php
                        $subtotal = $buklist['harga'] * $buklist['jumlah'];
                        $total = $total + $subtotal;
                        $gambar =  base_url() . "/file_gambar/" . $buklist['foto'];

                        echo "<tr>";
                        echo "<td class='align-middle'>$no</td>";
                        echo "<td class='align-middle'><img src='$gambar' alt='' style='width: 50px'></td>";
                        echo "<td class='align-middle'>$buklist[judul_buku]</td>";
                        echo "<td class='align-middle'>$buklist[harga]</td>";
                        echo "<td class='align-middle'>$buklist[jumlah]</td>";
                        echo "<td class='align-middle'>$subtotal</td>";
                        echo "<td class='align-middle'> <a href='#' data-href='" . base_url('cart/' . $buklist['kode_detail'] . '/delete') . "' onclick='confirmToDelete(this)' class='btn btn-sm btn-primary'> <i class='fa fa-times'></i></a> </td>";
                        echo "</tr>";
                        $no++ ?>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
            <div class="card border-secondary mb-5">
                <div class="card border-0">
                    <h4 class="font-weight-bold" style="text-align: center;">Cart Summary</h4>
                </div>
                <div class="card-footer border-secondary bg-transparent">
                    <div class="d-flex justify-content-between mt-2">
                        <h5 class="font-weight-bold">Total</h5>
                        <h5 class="font-weight-bold"><?= number_to_currency($total, 'IDR', 'en_ID', 2) ?></h5>
                    </div>
                    <a href="#" data-href="<?= base_url('checkout') ?>" onclick="confirmToProceed(this)" class="btn btn-block btn-primary my-3 py-3">Proceed To Checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="h2">Anda yakin?</h2>
                <p>Data akan dihapus</p>
            </div>
            <div class="modal-footer">
                <a href="#" role="button" id="delete-button" class="btn btn-danger">Delete</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<div id="proceed-dialog" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="h2">Anda yakin?</h2>
                <p>Melakukan Checkout</p>
            </div>
            <div class="modal-footer">
                <a href="#" role="button" id="proceed-button" class="btn btn-danger">Proceed</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<script>
    function confirmToDelete(el) {
        $("#delete-button").attr("href", el.dataset.href);
        $("#confirm-dialog").modal('show');
    }

    function confirmToProceed(el) {
        $("#proceed-button").attr("href", el.dataset.href);
        $("#proceed-dialog").modal('show');
    }
</script>