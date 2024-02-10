<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Produk Buku</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Produk Buku</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header" style="background-color: #E4DEBE;">
                <h3 class="card-title">Form Tambah Produk Buku</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label for="kode_buku">Kode Buku</label>
                        <input type="text" class="form-control" id="kode_buku" name="kode_buku" placeholder="Enter Kode Buku" required>
                    </div>
                    <div class="form-group">
                        <label for="kode_kategori">Kategori</label>
                        <select name="kode_kategori" id="kode_kategori" class="form-control">
                            <?php foreach ($kategori as $k) : ?>
                                <option value="<?= $k['kode_kategori'] ?>"><?= $k['nama_kategori'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="judul_buku">Judul Buku</label>
                        <input type="text" class="form-control" id="judul_buku" name="judul_buku" placeholder="Enter Judul Buku" required>
                    </div>
                    <div class="form-group">
                        <label for="volume_buku">Volume Buku</label>
                        <input type="text" class="form-control" id="volume_buku" name="volume_buku" placeholder="Enter Volume Buku" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_penerbit">Nama Penerbit</label>
                        <input type="text" class="form-control" id="nama_penerbit" name="nama_penerbit" placeholder="Enter Nama Penerbit" required>
                    </div>
                    <div class="form-group">
                        <label for="kondisi_buku">Kondisi Buku</label>
                        <input type="text" class="form-control" id="kondisi_buku" name="kondisi_buku" placeholder="Enter Kondisi Buku" required>
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="text" class="form-control" id="stok" name="stok" placeholder="Enter Stok" required>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga" placeholder="Enter Harga" required>
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto Barang</label>
                        <input type="file" class="form-control" id="foto" name="foto" accept=".jpg,.jpeg">
                    </div>
                </div>
                <!-- /.card-body -->
                <div class=" card-footer">
                    <button type="submit" class="btn btn-danger">Submit</button>
                </div>
            </form>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>