<body class="content-misi home">
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
          <a class="nav-item nav-link page-scroll" href="#" >Misi</a>
          <a class="nav-item nav-link page-scroll" href=<?= base_url() . '#program' ?>>Program</a>
          <a class="nav-item nav-link page-scroll" href=<?= base_url() . '#kontak' ?>>Kontak</a>
          <a class="nav-item btn btn-success rounded-pill page-scroll" href=<?= base_url() . '#donasi' ?>>DONASI</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-9 col-md-12">
        <!-- Add New Post Form -->
        <div class="card card-small main mb-3">
          <div class="card-body">
            <?php if ($misi) : ?>   
              <h3 class="mb-4 header"><?= $misi['title'] ?></h3>
              <img src="<?= base_url('assets/img/misi/') . $misi['thumbnail'] ?>" width="50%" class="mb-3">
              <p><?= $misi['description'] ?></p>    
            <?php else : ?>
              <h3>MISI TIDAK DITEMUKAN</h3>
            <?php endif ?>
          </div>
        </div>
        <!-- / Add New Post Form -->
      </div>
      <div class="col-lg-3 col-md-12">
        <!-- Post Overview -->
        <div class='card card-small sidebar'>
          <div class="card-header border-bottom">
            <h6 class="m-0 header-sidebar">Misi Lainnya</h6>
          </div>
          <div class='card-body p-0'>
            <ul class="list-group list-group-flush">
              <?php foreach ($missions as $misi) : ?>
                <?php $id = $_GET['id'] ?>
                <?php if ($misi['id'] != $id) : ?>
                  <li class="item-misi text-center">     
                    <img src="<?= base_url('assets/img/misi/') . $misi['thumbnail'] ?>" alt=<?= $misi['title'] ?> width="100%">
                    <h5 class="mt-3"><?= $misi['title'] ?></h5>
                    <a href="<?= base_url('home/misi?id=' . $misi['id']) ?>" >Baca Selengkapnya...</a>     
                  </li>
                  <div class="divider"></div>
                <?php endif ?>
              <?php endforeach ?>
            </ul>
          </div>
        </div>
        <!-- / Post Overview -->
      </div>
    </div>
  </div>