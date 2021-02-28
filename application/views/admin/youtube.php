<div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
    <div class="col-lg-6 col-sm-6 text-center text-sm-left mb-3">
      <h3 class="page-title">Daftar Misi</h3>
    </div>
    <div class="col-lg-6 col-sm-6 text-center text-sm-right">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalYoutube">
        <i class="material-icons">add_circle</i>
        Upload
      </button>
    </div>
  </div>
  <!-- End Page Header -->
  <div class="row">
    <div class="col-lg">
      <!-- Add New Post Form -->
      <div class="card card-small mb-3">
        <div class="card-body">
          <?= $this->session->flashdata('message') ?>
          <?php foreach ($youtubes as $youtube) : ?>
            <a href="<?= $youtube['link'] ?>" class="chatroom" id="chatroom" target="_blank">
              <div class="MuiAvatar-root MuiAvatar-circle">
                <img src="<?= base_url("assets/img/youtube/") . $youtube['thumbnail'] ?>" class="MuiAvatar-img" width="150" />
              </div>
              <div class="chatinfo">
                <h3><?= $youtube['title'] ?></h3>
              </div>
            </a>
            <?php endforeach ?>
        </div>
      </div>
      <!-- / Add New Post Form -->
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalYoutube" tabindex="-1" role="dialog" aria-labelledby="modalYoutubeTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalYoutubeTitle">Upload Video</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open_multipart('admin/upload') ?>
        <div class="form-body">
          <div class="form-group">
            <label for="title" class="control-label col-md-3">Title</label>
            <div class="col-md-9">
              <input id="title" name="title" placeholder="Title video..." class="form-control" type="text">
              <span class="help-block"></span>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-2">Picture</div>
            <div class="col-sm-4">
              <img class="img-thumbnail">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-10">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="image" name="image">
                <label class="custom-file-label" for="image">Choose Image</label>
              </div>         
            </div>
          </div>

          <div class="form-group">
            <label for="link" class="control-label col-md-3">Link Video</label>
            <div class="col-md-9">
              <input id="link" name="link" placeholder="link video..." class="form-control" type="text">
              <span class="help-block"></span>
            </div>
          </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>