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

  <div class="container container-misi">
    <div class="row justify-content-between">
      <div class="col-md-8 main">
        <?php if ($misi) : ?>    
          <h3 class="mb-4"><?= $misi['title'] ?></h3>
          <img src="<?= base_url('assets/img/misi/') . $misi['thumbnail'] ?>" width="50%">
          <p><?= $misi['description'] ?></p>    
        <?php else : ?>
          <h3>MISI TIDAK DITEMUKAN</h3>
        <?php endif ?>
      </div>

      <div class="col-md-3 sidebar">
        <h3>Misi Lainnya</h3>
        <div class="widget-content">
          <ul>
            <?php foreach ($missions as $misi) : ?>
              <?php $id = $_GET['id'] ?>
              <?php if ($misi['id'] != $id) : ?>
                <li>
                  <div class="item-misi">
                    <img src="<?= base_url('assets/img/misi/') . $misi['thumbnail'] ?>" alt=<?= $misi['title'] ?> class="mt-5">
                    <h5><?= $misi['title'] ?></h5>
                    <a href="<?= base_url('home/misi?id=' . $misi['id']) ?>" >Baca Selengkapnya...</a>
                  </div>
                </li>
              <?php endif ?>
            <?php endforeach ?>
          </ul>
        </div>
      </div>
    </div>
  </div>