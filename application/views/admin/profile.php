<div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <h3 class="page-title">Profile</h3>
    </div>
  </div>
  <!-- End Page Header -->
  <div class="row">
    <div class="col-lg">
      <!-- Add New Post Form -->
      <div class="card mb-3">
        <div class="card-body">
          <div class="chatroom" id="chatroom">
            <div class="MuiAvatar-root MuiAvatar-circle">
              <img src="<?= base_url() . "assets/img/admin/default.jpg"?>" class="MuiAvatar-img" style="width: 100%" />
            </div>
            <div class="chatinfo" style="width: 100%">
              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Username</b> <a class="float-right"><?= $admin['username'] ?></a>
                </li>
                <li class="list-group-item">
                  <b>Email</b> <a class="float-right"><?= $admin['email'] ?></a>
                </li>
              </ul>
              <a href="<?= base_url('admin/changepassword') ?>" class="btn btn-primary">
                Change Password
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- / Add New Post Form -->
    </div>
  </div>
</div>