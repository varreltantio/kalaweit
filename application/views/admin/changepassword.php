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
          <?= $this->session->flashdata('message'); ?>
          <?= form_open_multipart('admin/changepassword') ?>

          <div class="form-group row">
            <label for="current_password" class="col-sm-4 col-form-label">Current Password</label>
            <div class="col-sm-6">
              <input type="password" class="form-control" id="current_password" name="current_password">
              <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>

          <div class="form-group row">
            <label for="new_password1" class="col-sm-4 col-form-label">New Password</label>
            <div class="col-sm-6">
              <input type="password" class="form-control" id="new_password1" name="new_password1">
              <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>

          <div class="form-group row">
            <label for="new_password2" class="col-sm-4 col-form-label">Repeat Password</label>
            <div class="col-sm-6">
              <input type="password" class="form-control" id="new_password2" name="new_password2">
              <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Change Password</button>
              <a href="<?= base_url('admin/profile') ?>" class="btn btn-info float-right">Back</a>
            </div>
          </div>
        </div>
      </div>
      <!-- / Add New Post Form -->
    </div>
  </div>
</div>