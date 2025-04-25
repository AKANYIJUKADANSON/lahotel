

<div class="hero-wrap" style="background-image: url('/assets/images/bg_3.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
        <div class="text">
          
          <div class=" heading-section text-center ftco-animate" style="border: 2px solid re">
          
            <h2 class="mb-4 text-light">
              <i class="bi bi-images"></i><br>
              <p class="">Gallery</p>
            </h2>

          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>


<section class="gallery" style="border: 2px solid red">
  <div class="row gallery-contai" data-aos="fade-up" data-aos-delay="200">

    <?php foreach($photo_list as $photo): ?>
      <div class="col-lg-4 col-md-6 col-sm-1">
        <div class="gallery-wrap">  
          <img src="<?= site_url('assets/images/'.$photo['photo']) ?>" class="img-fluid" alt="">
            
          <div class="gallery-info">
            <div class="gallery-links">
                <p><?= $photo['description'] ?></p>
                <a href="<?= site_url('assets/images/'.$photo['photo']) ?>" data-gallery="galleryGallery" class="gallery-lightbox" ><i class="bi bi-eye-fill fs-1 text-white"></i> </a>
            </div>
          </div>

            <!-- <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
            </div> -->
          
        </div>
      </div>
    <?php endforeach ?>

  </div>
</section>

<!-- --------------- GALLERY SECTION ---------------->
