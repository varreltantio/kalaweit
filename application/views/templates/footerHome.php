  <!-- footer -->
  <footer id="kontak">
    <div class="container pt-5">
      <div class="row justify-content-center">
        <div class="col-md-4">
          <h3>About</h3>
          <img src="<?= base_url("assets/img/logo-kehutanan.png") ?>" width="80" class="mt-3 mb-3"/>
          <p class="text-justify">Yayasan Kalaweit Indonesia bekerja sama dengan Kementerian Lingkungan Hidup dan Kehutanan RI</p>
        </div>

        <div class="col-md-3 ml-auto">
          <h3>Links</h3>
          <ul class="list-unstyled">
            <li><a href="#home" class="text-decoration-none page-scroll">Beranda</a></li>
            <li><a href="#misi" class="text-decoration-none page-scroll">Misi</a></li>
            <li><a href="#program" class="text-decoration-none page-scroll">Program</a></li>
            <li><a href="#kontak" class="text-decoration-none page-scroll">Kontak</a></li>
            <li><a href="#donasi" class="text-decoration-none page-scroll">Donasi</a></li>
          </ul>
        </div>

        <div class="col-md-4">
          <h3>Kontak</h3>
          <h5>Alamat :</h5>
          <p>Yayasan Kalaweit Indonesia<br>Komplek Mahoni Lestari 1 N3<br>Jl Pinus, Panarung, Palangka Raya<br>Kalimantan Tengah</p>
          <h5>Email :</h5>
          <p>kalaweit@hotmail.com</p>       
        </div>
      </div>
    </div>

    <hr>

    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <ul class="list-unstyled list-inline social text-center">
            <li class="list-inline-item">
              <a href="https://www.instagram.com/chaneekalaweit" target="_blank"><i class="fab fa-instagram" id="instagram"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="https://twitter.com/Kalaweit" target="_blank"><i class="fab fa-twitter-square" id="twitter"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.facebook.com/chanee.kalaweit" target="_blank"><i class="fab fa-facebook-square" id="facebook"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.youtube.com/channel/UC6pGpHOJZqtIQ-0uCCT_G_Q" target="_blank"><i class="fab fa-youtube" id="youtube"></i></a>
            </li>
          </ul>
        </div>
        <hr>
      </div>
    </div>

    <hr>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center copyright">
          <p>Copyright &copy; <?= date('Y'); ?> All rights reserved | this template is made by <a href="#">Kalaweit</a></p>
        </div>
      </div>
    </div>
  </footer>
  <!-- akhir footer -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src=<?= base_url("assets/js/jquery-3.4.1.min.js") ?>></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
  
  <script src=<?= base_url("assets/js/jquery.counterup.min.js") ?>></script>
  <script src=<?= base_url("assets/js/owl.carousel.min.js") ?>></script>
  <script src=<?= base_url("assets/js/jquery.easing.1.3.js") ?>></script>

  <!-- My JS -->
  <script src=<?= base_url("assets/js/script.js") ?>></script>
</body>

</html>