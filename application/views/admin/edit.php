<div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle">Blog Posts</span>
      <h3 class="page-title">Add New Post</h3>
    </div>
  </div>
  <!-- End Page Header -->
  <div class="row">
    <div class="col-lg">
      <!-- Add New Post Form -->
      <div class="card card-small mb-3">
        <div class="card-body">
          <?= form_open_multipart('admin/save') ?>
          <?php $name = $_GET['name'] ?>
          <input type="text" name="id" class="form-control" value="<?= $content['id'] ?>" hidden>
          <input type="text" name="name" class="form-control" value="<?= $name ?>" hidden>
          <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="<?= $content['title'] ?>" required>
          </div>
          <div class="form-group row">
              <div class="col-sm-2">Picture</div>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-sm-4">
                    <img src="<?= base_url('assets/img/') . $name . "/" . $content['thumbnail'] ?>" class="img-thumbnail">
                  </div>
                  <div class="col-sm-8">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="image" name="image">
                      <label class="custom-file-label" for="image">Choose Image</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <div class="form-group">
            <label>Contents</label>
            <textarea id="summernote" name="contents"><?= $content['description'] ?></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
      <!-- / Add New Post Form -->
    </div>
  </div>
</div>