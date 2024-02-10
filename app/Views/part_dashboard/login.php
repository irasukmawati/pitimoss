<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">Login</li>
    </ul>
  </div>
</div>
<!-- Breadcrumb End -->

<!-- Login Start -->
<?php if (session()->getFlashdata('msg')) : ?>
  <div class="alert alert-warning">
    <?= session()->getFlashdata('msg') ?>
  </div>
<?php endif; ?>
<div class="login">
  <form action="login/login_action" method="post">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-6">
          <div class="login-form">
            <div class="coloum" align="center">
              <div class="col-md-6">
                <label><b>Username</b></label>
                <input type="text" class="form-control" name="username" placeholder="Username">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              </div>
              <div class="col-md-6">
                <label><b>Password</b></label>
                <input type="password" class="form-control" name="password" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
              <div class="col-md-12">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="newaccount">
                  <label class="custom-control-label" for="newaccount">Keep me signed in</label>
                  &nbsp;
                </div>
              </div>
              <div class="col-md-6">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                &nbsp;
              </div>
              <div class="col-md-12">
                <a href="register" class="text-center">Register a new membership</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
<!-- Login End -->