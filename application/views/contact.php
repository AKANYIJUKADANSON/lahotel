
		<div class="hero-wrap" style="background-image: url('/assets/images/bg_3.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
              <div class=" heading-section text-center ftco-animate" style="border: 2px solid re">
                
                <h2 class="mb-4 text-light">
                  <p class="">Contact Us</p>
                </h2>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section bg-light">
      <div class="container">

        <!-- Notification alert -->
        <?php if($this->session->flashdata('status')){ ?>
          <div class="alert alert-<?= $this->session->flashdata('color')?> alert-dismissible fade show d-flex align-items-center mt-4" role="alert">
            <i class="bi bi-exclamation-triangle-fill me-4"></i>
            <div>
                <!-- Text coming from the flashed data -->
                <strong> <?= $this->session->flashdata('status')?>. </strong>
            </div>
            <button onclick="window.location.href='/contacts' " type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                
            </button>
          </div>

        <?php } unset($_SESSION['status'], $_SESSION['color'], $_SESSION['icon']); ?>

        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="info rounded bg-white p-4">
	            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info rounded bg-white p-4">
	            <p><span>Tel.:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info rounded bg-white p-4">
	            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info rounded bg-white p-4">
	            <p><span>Website</span> <a href="#">yoursite.com</a></p>
	          </div>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="/subscribe" class="bg-white p-5 contact-form" method="post">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name" name="username">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email" name="useremail">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject" name="subject">
              </div>
              <div class="form-group">
                <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div>
        </div>
      </div>
    </section>



    
  