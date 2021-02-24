        <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link active page-scroll" href=<?= base_url() ?>>Beranda <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href=<?= base_url() . '#misi' ?>>Misi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href=<?= base_url() . '#program' ?>>Program</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href=<?= base_url() . '#kontak' ?>>Kontak</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href=<?= base_url() . '#donasi' ?>>Donasi</a>
            </li>
          </ul>
          <span class="copyright ml-auto my-auto mr-2">Copyright © <?= date('Y'); ?>
            <a href="#" rel="nofollow">Kalaweit</a>
          </span>
        </footer>
      </main>
    </div>
  </div>
  
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
  <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
  <script src=<?= base_url() . "assets/js/extras.1.1.0.min.js" ?> ></script>
  <script src=<?= base_url() . "assets/js/shards-dashboards.1.1.0.min.js" ?> ></script>
  <script src=<?= base_url() . "assets/js/app/app-blog-overview.1.1.0..min.js" ?> ></script>
  <script type="text/javascript" src=<?= base_url().'assets/summernote/summernote-bs4.js'?>></script>
  <script type="text/javascript">
		$(document).ready(function(){
			$('#summernote').summernote({
				height: "300px",
				callbacks: {
					onImageUpload: function(image) {
						uploadImage(image[0]);
					},
					onMediaDelete : function(target) {
						deleteImage(target[0].src);
					}
				}
			});

			function uploadImage(image) {
				var data = new FormData();
				data.append("image", image);
				$.ajax({
						url: "<?php echo base_url('admin/upload_image')?>",
						cache: false,
						contentType: false,
						processData: false,
						data: data,
						type: "POST",
						success: function(url) {
					$('#summernote').summernote("insertImage", url);
						},
						error: function(data) {
							console.log(data);
						}
				});
			}

			function deleteImage(src) {
				$.ajax({
						data: {src : src},
						type: "POST",
						url: "<?php echo base_url('admin/delete_image')?>",
						cache: false,
						success: function(response) {
							console.log(response);
						}
				});
			}

			function readURL(input) {
				if (input.files && input.files[0]) {
					var reader = new FileReader();
					
					reader.onload = function(e) {
						$('.img-thumbnail').attr('src', e.target.result);
					}
					
					reader.readAsDataURL(input.files[0]); // convert to base64 string
				}
			}


			// change profile
			$('.custom-file-input').on('change', function () {
				readURL(this);
				const fileName = $(this).val().split('\\').pop();
				$(this).next('.custom-file-label').addClass("selected").html(fileName);
			});

		});
	</script>
  
</body>

</html>