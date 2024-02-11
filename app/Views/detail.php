<div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10">
            <div class="row p-2 bg-white border rounded">
                <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="<?= base_url() . "/file_gambar/" . $brg['foto']; ?>" alt="<?php echo $brg['foto'] ?>"></div>
                <div class="col-md-6 mt-1">
                    <form name="myForm" action="<?= base_url('cartAdd') ?>" method="POST" onsubmit="return validateForm()">
                        <h5 style="font-weight: bold;"><?= $brg['judul_buku'] ?></h5>
                        <div class="mt-1 mb-1 spec-1"><span>Nama Penerbit : </span><span class="dot"></span><span><?= $brg['nama_penerbit'] ?></span></div>
                        <div class="mt-1 mb-1 spec-1"><span>Kondisi Buku : </span><span class="dot"></span><span><?= $brg['kondisi_buku'] ?></span></div>
                        <div class="mt-1 mb-1 spec-1"><span>Volume Buku : </span><span class="dot"></span><span><?= $brg['volume_buku'] ?></span></div>
                        <p class="text-justify text-truncate para mb-0">Stock : <?= $brg['stok'] ?><br><br></p>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1">Rp <?= $brg['harga'] ?></h4>
                    </div>
                    <h6 class="text-success">Free shipping</h6>
                    <div class="d-flex flex-column mt-4">
                        <input type="number" name="jumlah" class="form-control text-center" value="1">
                        <input type="text" name="kode_buku" class="form-control text-center" value="<?= $brg['kode_buku'] ?>" hidden>
                        <input type="submit" value="Tambah Keranjang">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
<script>
    function validateForm() {
        let x = document.forms["myForm"]["jumlah"].value;
        if (x > <?= $brg['stok'] ?>) {
            alert("Jumlah Tidak Boleh Melebihi Stok");
            return false;
        }
    }
</script>