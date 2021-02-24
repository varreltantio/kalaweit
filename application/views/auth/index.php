<body class="auth">
  <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
      <div class="row d-flex">
        <div class="col-lg-6">
          <div class="card1 pb-5">
            <div class="row px-3 justify-content-center mt-5 border-line"> 
              <img src="<?= base_url('assets/img/logo.png') ?>" class="image"> 
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card2 card border-0 px-4 py-5 mt-xl-5 mt-lg-5">
            <?= $this->session->flashdata('message') ?>
            <form action="<?= base_url('auth') ?>" method="post">
              <div class="row mb-4 px-3">
                <label class="mb-1">
                  <h6 class="mb-0 text-sm">Email Address</h6>
                </label> 
                <input type="text" name="email" placeholder="Enter a valid email address"> 
                <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
              </div>
              <div class="row px-3"> 
                <label class="mb-1">
                  <h6 class="mb-0 text-sm">Password</h6>
                </label> 
                <input type="password" name="password" placeholder="Enter password"> 
                <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
              </div>
              <div class="row mt-3 px-3"> 
                <button class="btn btn-green text-center">Login</button> 
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="bg-green py-4">
        <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; <?= date('Y'); ?>. All rights reserved.</small>
          <div class="social-contact ml-4 ml-sm-auto pr-5">
            <ul class="list-unstyled list-inline social">
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
        </div>
      </div>
    </div>
  </div>

  <script src=<?= base_url("js/jquery-3.4.1.min.js") ?>></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>