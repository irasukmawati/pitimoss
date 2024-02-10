 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1>User</h1>
                 </div>
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                         <li class="breadcrumb-item active">User</li>
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
                 <h3 class="card-title">Form Tambah User Baru</h3>
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
                     <input type="hidden" name="id" value="<?= $user['kode_user'] ?>" />
                     <div class="form-group">
                         <label for="kode_user">Kode User</label>
                         <input type="text" class="form-control" id="kode_user" name="kode_user" placeholder="Enter Kode User" value="<?= $user['kode_user'] ?>" required>
                     </div>
                     <div class="form-group">
                         <label for="username">Username</label>
                         <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" value="<?= $user['username'] ?>" required>
                     </div>
                     <div class="form-group">
                         <label for="password">Password</label>
                         <input type="text" class="form-control" id="password" name="password" placeholder="Enter Password" value="<?= $user['password'] ?>" required>
                     </div>
                     <div class="form-group">
                         <label for="nama_depan">Nama Depan</label>
                         <input type="text" class="form-control" id="nama_depan" name="nama_depan" placeholder="Enter Nama Depan" value="<?= $user['nama_depan'] ?>" required>
                     </div>
                     <div class="form-group">
                         <label for="nama_belakang">Nama Belakang</label>
                         <input type="text" class="form-control" id="nama_belakang" name="nama_belakang" placeholder="Enter Nama Belakang" value="<?= $user['nama_belakang'] ?>" required>
                     </div>
                     <div class="form-group">
                         <label for="no_hp">No HP</label>
                         <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Enter No HP" value="<?= $user['no_hp'] ?>" required>
                     </div>
                     <div class="form-group">
                         <label for="email">Email</label>
                         <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" value="<?= $user['email'] ?>" required>
                     </div>
                     <div class="form-group">
                         <label for="alamat">Alamat Lengkap</label>
                         <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Enter Alamat Lengkap" value="<?= $user['alamat'] ?>" required>
                     </div>
                     <div class="form-group">
                         <label for="kode_pos">Kode Pos</label>
                         <input type="text" class="form-control" id="kode_pos" name="kode_pos" placeholder="Enter Kode Pos" value="<?= $user['kode_pos'] ?>" required>
                     </div>
                     <div class="form-group">
                         <label for="hak_akses">Hak Akses</label>
                         <input type="text" class="form-control" id="hak_akses" name="hak_akses" placeholder="Enter Hak Akses" value="<?= $user['hak_akses'] ?>" required>
                     </div>
                     <div class="form-group">
                         <label for="no_hp_kerabat">No HP Kerabat</label>
                         <input type="text" class="form-control" id="no_hp_kerabat" name="no_hp_kerabat" placeholder="Enter No HP Kerabat" value="<?= $user['no_hp_kerabat'] ?>" required>
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