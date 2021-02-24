<div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <h3 class="page-title">Daftar Program</h3>
    </div>
  </div>
  <!-- End Page Header -->
  <div class="row">
    <div class="col-lg">
      <!-- Add New Post Form -->
      <div class="card card-small mb-3">
        <div class="card-body">
          <?= $this->session->flashdata('message') ?>
          <?php foreach ($programs as $program) : ?>
            <div class="chatroom" id="chatroom">
              <div class="MuiAvatar-root MuiAvatar-circle">
                <img src="<?= base_url("assets/img/program/") . $program['thumbnail'] ?>" class="MuiAvatar-img" width="150" />
              </div>
              <div class="chatinfo">
                <h3><?= $program['title'] ?></h3>
                <ul class="common-nav-list">
                  <a href="<?= base_url("admin/edit?id=") . $program['id'] . "&name=program" ?>" ><i class="material-icons mr-3">edit</i></a>
                  <a href="<?= base_url("home/program?id=") . $program['id'] ?>" ><i class="material-icons">visibility</i></a>
                </ul>
              </div>
            </div>
            <?php endforeach ?>
        </div>
      </div>
      <!-- / Add New Post Form -->
    </div>
  </div>
</div>