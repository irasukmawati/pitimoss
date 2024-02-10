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
                 <a href="<?= base_url('user/add') ?>" class="btn btn-success btn-sm">Tambah User Baru</a>
                 <div class="card-tools">
                     <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                         <i class="fas fa-minus"></i>
                     </button>
                     <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                         <i class="fas fa-times"></i>
                     </button>
                 </div>
             </div>
             <div class="card-body">
                 <div class="card-body">
                     <table id="example1" class="table table-bordered table-striped">
                         <thead>
                             <tr>
                                 <th>Kode User</th>
                                 <th>Username</th>
                                 <th>Password</th>
                                 <th>Nama Depan</th>
                                 <th>Nama Belakang</th>
                                 <th>No HP</th>
                                 <th>Email</th>
                                 <th>Alamat Lengkap</th>
                                 <th>Kode Pos</th>
                                 <th>Hak Akses</th>
                                 <th>No HP Kerabat</th>
                                 <th>Aksi</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php foreach ($us as $uslist) : ?>
                                 <tr>
                                     <td><?= $uslist['kode_user'] ?></td>
                                     <td><?= $uslist['username'] ?></td>
                                     <td><?= $uslist['password'] ?></td>
                                     <td><?= $uslist['nama_depan'] ?></td>
                                     <td><?= $uslist['nama_belakang'] ?></td>
                                     <td><?= $uslist['no_hp'] ?></td>
                                     <td><?= $uslist['email'] ?></td>
                                     <td><?= $uslist['alamat'] ?></td>
                                     <td><?= $uslist['kode_pos'] ?></td>
                                     <td><?= $uslist['hak_akses'] ?></td>
                                     <td><?= $uslist['no_hp_kerabat'] ?></td>
                                     <td>
                                         <a href="<?= base_url('user/' . $uslist['kode_user'] . '/edit'); ?>" class="btn btn-primary btn-sm">Edit</a>
                                         <a href="#" data-href="<?= base_url('user/' . $uslist['kode_user'] . '/delete') ?>" onclick="confirmToDelete(this)" class="btn btn-danger btn-sm">Delete</a>
                                     </td>
                                 </tr>
                             <?php endforeach ?>
                         </tbody>
                     </table>
                 </div>
                 <!-- /.card-body -->
                 <div class="card-footer">
                     &nbsp;
                 </div>
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