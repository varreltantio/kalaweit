<?php 
  $API_key    = "AIzaSyAXCkVlbkZXzu6h3nmcL9YY87qIzU1x0yI";
  $channelID  = "UC6pGpHOJZqtIQ-0uCCT_G_Q";
  $maxResults = 5;

  function get_CURL($url)
  {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close($curl);

    return json_decode($result, true);
  }
  
  $videoList = "https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId=$channelID&maxResults=$maxResults&key=$API_key";
  $result = get_CURL($videoList);
?>
<body class="home" id="home">
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#home">
        <img src=<?= base_url() . "assets/img/logo.png"?> width="140" />
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active page-scroll" href="#home">Beranda <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link page-scroll" href="#misi">Misi</a>
          <a class="nav-item nav-link page-scroll" href="#program">Program</a>
          <a class="nav-item nav-link page-scroll" href="#kontak">Kontak</a>
          <a class="nav-item btn btn-success rounded-pill page-scroll" href="#donasi">DONASI</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->

  <!-- jumbotron -->
  <div id="carouselExampleControls" class="carousel slide carousel-jumbotron" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="jumbotron jumbotron-fluid jumbotron-1">
          <div class="container">
            <h1 class="display-4">Menyelamatkan <span>owa-owa</span><br> dan <span>habitat</span> mereka<br> di <span>Indonesia</span></h1>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="jumbotron jumbotron-fluid jumbotron-2">
          <div class="container">
            <h1 class="display-4">Rehabilitasi <span>satwa liar</span> yang menjadi<br> korban <span>deforestasi</span> dan praktik<br> <span>perburuan liar</span></h1>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="jumbotron jumbotron-fluid jumbotron-3">
          <div class="container">
            <h1 class="display-4">Mempertahankan <span>kelestarian</span><br> <span>hutan</span> Indonesia</h1>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- akhir jumbotron -->

  <!-- misi -->
  <section class="misi container" id="misi">
    <div class="row header justify-content-center">
      <h3 class="text-center">MISI Yayasan Kalaweit Indonesia</h3>
    </div>
    <div class="row content">
      <?php foreach ($missions as $misi) : ?>
        <div class="col-md-4">
          <div class="item-misi">
            <div class="item-img">
              <img src="<?= base_url('assets/img/misi/') .  $misi['thumbnail'] ?>" alt="<?= $misi['thumbnail'] ?>" width="100%">      
            </div>
            <h5><?= $misi['title'] ?></h5>
            <?php
              $short_desc = substr($misi['description'], 0, 100);
              $short_desc = substr_replace($misi['description'], "...", 100);
            ?>
            <p><?= $short_desc ?></p>
            <a href=<?= base_url('home/misi?id=' . $misi['id']) ?> >Baca Selengkapnya...</a>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </section>
  <!-- akhir works -->

  <!-- program -->
  <section class="program container" id="program">
    <div class="row justify-content-center">
      <div class="col-lg-6 text-center">
        <div class="header-program">
          <h3>PROGRAM</h3>
          <p>Yayasan Kalaweit Indonesia</p>
        </div>
      </div>
    </div>
    <div class="row">
      <?php foreach ($programs as $program) : ?>
        <div class="col-md-4">
          <div class="card">
            <img src="<?= base_url('assets/img/program/') . $program['thumbnail'] ?>" class="card-img-top" alt=<?= $program['title'] ?>>
            <div class="card-body">
              <h5><a href="<?= base_url('home/program?id=' . $program['id']) ?>" ><?= $program['title'] ?></a></h5>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </section>
  <!-- akhir program -->

  <!-- testimonial -->
  <section class="testimonial" id="testimonial">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center">
          <div class="header-testimonial">
            <h3>Tim Kalaweit</h3>
          </div>
        </div>
      </div>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active pindah"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1" class="pindah"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2" class="pindah"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3" class="pindah"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4" class="pindah"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="5" class="pindah"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row justify-content-center">
              <div class="col-md-6 text-center">
                <img src=<?= base_url("assets/img/crew/Chanee.jpg") ?> class="img-fluid rounded-circle" alt="testi 1">
                <h6>Chanee</h6>
                <p>Ketua Yayasan</p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="row justify-content-center">
              <div class="col-md-6 text-center">
                <img src=<?= base_url("assets/img/crew/Carlo.jpg") ?> class="img-fluid rounded-circle" alt="testi 2">
                <h6>Carlo</h6>
                <p>Manajer Program Sponsor</p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="row justify-content-center">
              <div class="col-md-6 text-center">
                <img src=<?= base_url("assets/img/crew/Feri.jpg") ?> class="img-fluid rounded-circle" alt="testi 3">
                <h6>Feri</h6>
                <p>Manager Kalaweit Sumatra</p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="row justify-content-center">
              <div class="col-md-6 text-center">
                <img src=<?= base_url("assets/img/crew/Henny.jpg") ?> class="img-fluid rounded-circle" alt="testi 4">
                <h6>Henny</h6>
                <p>Direktur Keuangan</p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="row justify-content-center">
              <div class="col-md-6 text-center">
                <img src=<?= base_url("assets/img/crew/Nanto.jpg") ?> class="img-fluid rounded-circle" alt="testi 5">
                <h6>Nanto</h6>
                <p>Manajer Pusat Pararawen</p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="row justify-content-center">
              <div class="col-md-6 text-center">
                <img src=<?= base_url("assets/img/crew/Rina.jpg") ?> class="img-fluid rounded-circle" alt="testi 6">
                <h6>Rina</h6>
                <p>Ketua Tim Dokter Hewan</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- akhir testimonial -->

  <!-- blog -->
  <section class="blog" id="blog">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h3>Youtube Chanee</h3>
        </div>
      </div>
      <div class="row">
        <div class="owl-carousel">  
          <?php if ($youtubes) : ?>
            <?php foreach($youtubes as $youtube) : ?>
              <div class="col-lg">
                <div class="card pb-5">
                  <a href="<?= $youtube['link'] ?>" target="_blank"><img src="<?= base_url('assets/img/youtube/') . $youtube['thumbnail'] ?>" class="card-img-top" alt="<?= $youtube['title'] ?>"></a>
                  <div class="card-body">
                    <h5><a href="<?= $youtube['link'] ?>" target="_blank" class="text-decoration-none"><?= $youtube['title'] ?></a></h5>
                  </div>
                </div>
              </div>
            <?php endforeach ?>
          <?php endif; ?>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-7 text-center tombol">
          <button class="btn btn-success m-1 customPrevBtn">Prev</button>
          <button class="btn btn-success m-1 customNextBtn">Next</button>
        </div>
      </div>
    </div>
  </section>
  <!-- akhir blog -->

  <!-- donasi -->
  <section class="donasi-header" id="donasi">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <h3>Donasi</h3>
        </div>
      </div>
    </div>
  </section>

  <section class="donasi-content" id="donasi-content">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="main">
            <figure class="figure">
              <a href="https://kitabisa.com/campaign/bantukalaweit" target="_blank">
                <img src="<?= base_url() . "assets/img/donasi/kitabisa-logo.png" ?>" class="figure-img img-fluid img-responsive" alt="donasi kitabisa">
              </a>
            </figure>
          </div>
        </div>

        <div class="col-md-4">
          <div class="main">
            <figure class="figure">
              <a href="#" data-toggle="modal" data-target="#modalDonasi">
                <img src="<?= base_url() . "assets/img/donasi/kalaweit-donasi.png" ?>"  class="figure-img img-fluid" alt="courses 1">
              </a>
            </figure>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalDonasi" tabindex="-1" role="dialog" aria-labelledby="modalDonasiTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Rekening Kalaweit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-xs-4">
                      <img src="<?= base_url() . "assets/img/donasi/logo-bri.png" ?>" width="100" />
                    </div>
                    <div class="col-xs-8 pl-4">
                      <h3>0243-01-001184-30-8</h3>
                      <p>a.n: Yayasan Kalaweit Indonesia</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="main">
            <figure class="figure">
              <a href="<?= base_url("home/butik") ?>" target="_blank">
                <img src="<?= base_url() . "assets/img/donasi/butik-kalaweit.png" ?>" class="figure-img img-fluid" alt="donasi gopay">
              </a>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- akhir courses -->