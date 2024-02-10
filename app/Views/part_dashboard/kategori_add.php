 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1>Kategori</h1>
                 </div>
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                         <li class="breadcrumb-item active">Kategori</li>
                     </ol>
                 </div>
             </div>
         </div><!-- /.container-fluid -->
     </section>

     <!-- Main content -->
     <section class="content">

         <!-- Default box -->
         <div class="card">
             <div class="card-header" style="background-color: #E4DEBE;">
                 <h3 class="card-title">Form Tambah Kategori</h3>
                 <div class="card-tools">
                     <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                         <i class="fas fa-minus"></i>
                     </button>
                     <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                         <i class="fas fa-times"></i>
                     </button>
                 </div>
             </div>
             <form action="" method="post">
                 <div class="card-body">
                     <input type="hidden" name="id" value="<?= $kategori['kode_kategori'] ?>" />
                     <div class="form-group">
                         <label for="kode_kategori">Kode Kategori</label>
                         <input type="text" class="form-control" id="kode_kategori" name="kode_kategori" placeholder="Enter Kode Kategori" value="<?= $kategori['kode_kategori'] ?>" required>
                     </div>
                     <div class="form-group">
                         <label for="nama_kategori">Nama Kategori</label>
                         <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Enter Nama Kategori" value="<?= $kategori['nama_kategori'] ?>" required>
                     </div>
                 </div>
                 <!-- /.card-body -->
                 <div class="card-footer">
                     <button type="submit" class="btn btn-danger">Submit</button>
                 </div>
             </form>
             <!-- /.card-footer-->
         </div>
         <!-- /.card -->

     </section>
     <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->

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

 <script>
     function confirmToDelete(el) {
         $("#delete-button").attr("href", el.dataset.href);
         $("#confirm-dialog").modal('show');
     }
 </script>