<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Register</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Register Start -->
<div class="register">
    <div class="container-fluid">
        <form action="register/simpan" method="post">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar bg-white">
                        <div class="col-lg-6 col-md-7">
                            <div class="control-group">
                                <label><b> Username </b></label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Username" required="required" data-validation-required-message="Please enter username" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <label><b> Password </b></label>
                                <input type="password" class="form-control" id="password" placeholder="Your password" required="required" data-validation-required-message="Please enter your password" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <label><b> Nama Depan </b></label>
                                <input type="text" class="form-control" name="nama_depan" id="nama_depan" placeholder="Nama Depan" required="required" data-validation-required-message="Please enter nama_depan" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <label><b> Nama Belakang </b></label>
                                <input type="text" class="form-control" name="nama_belakang" id="Nama Belakang" placeholder="Nama Belakang" required="required" data-validation-required-message="Please enter Nama Belakang" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <label><b> No HP</b></label>
                                <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="No HP" required="required" data-validation-required-message="Please enter no_hp" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <div class="control-group">
                                <label><b> Email </b></label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email" required="required" data-validation-required-message="Please enter email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <label><b> No HP Kerabat </b></label>
                                <input type="text" class="form-control" name="no_hp_kerabat" id="no_hp_kerabat" placeholder="No HP Kerabat" required="required" data-validation-required-message="Please enter no_hp_kerabat" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <label><b> Alamat Lengkap</b></label>
                                <textarea class="form-control" name="alamat" id="alamat" placeholder="Alamat" required="required" data-validation-required-message="Please enter alamat" rows="5"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <label><b> Kode Pos</b></label>
                                <input type="text" class="form-control" name="kode_pos" id="kode_pos" placeholder="Kode Pos" required="required" data-validation-required-message="Please enter kode_pos" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <label hidden><b> Hak Akses </b></label>
                                <input type="text" class="form-control" hidden name="hak_akses" value="user" id="hak_akses" placeholder="Hak Akses" required="required" data-validation-required-message="Please enter hak_akses" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-12" align="center">
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Send</button>
                            &nbsp;
                        </div>
                    </nav>
                </div>
            </div>
        </form>
    </div>
</div>