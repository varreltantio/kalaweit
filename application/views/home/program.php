<body class="content-program home">
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#home">
        <img src=<?= base_url("assets/img/logo.png") ?> width="140" />
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active page-scroll" href=<?= base_url() ?>>Beranda <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link page-scroll" href=<?= base_url() . '#misi' ?>>Misi</a>
          <a class="nav-item nav-link page-scroll" href="#" >Program</a>
          <a class="nav-item nav-link page-scroll" href=<?= base_url() . '#kontak' ?>>Kontak</a>
          <a class="nav-item btn btn-success rounded-pill page-scroll" href=<?= base_url() . '#donasi' ?>>DONASI</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-10 main">
        <?php if ($program) : ?>
          <h3 class="text-center"><?= $program['title'] ?></h3>
          <img class="rounded mx-auto d-block" src="<?= base_url('assets/img/program/') . $program['thumbnail'] ?>" alt=<?= $program['title'] ?> width="50%">
          <p><?= $program['description'] ?></p>
        <?php else : ?>
          <h3>MISI TIDAK DITEMUKAN</h3>
        <?php endif ?>
      </div>
    </div>

    <div class="content-widget">
      <h3 class="header-widget">Program Lainnya</h3>
      <div class="row">
        <?php foreach ($programs as $program) : ?>
          <?php $id = $_GET['id'] ?>
          <?php if ($program['id'] != $id) : ?>
            <div class="col-md-4">
              <div class="card">
                <img src="<?= base_url('assets/img/program/') . $program['thumbnail'] ?>" alt=<?= $program['title'] ?> class="card-img-top" />
                <div class="card-body">
                  <h5><a href=<?= base_url('home/program?id=' . $program['id']) ?> ><?= $program['title'] ?></a></h5>
                </div>
              </div>
            </div>
          <?php endif ?>
        <?php endforeach ?>
      </div>
    </div>
  </div>