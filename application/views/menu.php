

    <div class="hero-wrap" style="background-image: url('assets/images/bg_3.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
            <div class="text">
						
              <div class=" heading-section text-center ftco-animate" style="border: 2px solid re">
              
                <h2 class="mb-4 text-light">
                  <i class="ri-restaurant-2-line"></i><br>
                  <p class="">Our Menu</p>
                </h2>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- --------------- FOOD MENU SECTION ---------------->
<section class="ftco-section ftco-menu bg-light">
  <div class="container-fluid px-md-4">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2 class="text-danger">
          <i class="ri-restaurant-2-line"></i><br>
          <span class="subheadin">Breakfast & Drinks</span>
        </h2>
      </div>
    </div>

    <div class="row">
      <?php foreach($menu_items as $menu_item): ?>
        <div class="col-lg-6 col-xl-4 d-flex">
          <div class="pricing-entry rounded d-flex ftco-animate">
            <div class="img" style="background-image: url(assets/images/<?= $menu_item['image'] ?>)"></div>
            <div class="desc p-4">
              <div class="d-md-flex text align-items-start">
                <h3><span><?= $menu_item['name'] ?></span></h3>
                <span class="price">$<?= $menu_item['price'] ?></span>
              </div>
              <div class="d-block">
                <p><?= $menu_item['details'] ?></p>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>


    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2 class="text-danger">
          <i class="ri-restaurant-2-line"></i><br>
          <span class="subheadin">Food Menu</span>
        </h2>
      </div>
    </div>


    <div class="row">
      <?php foreach($menu_items as $menu_item): ?>
        <div class="col-lg-6 col-xl-4 d-flex">
          <div class="pricing-entry rounded d-flex ftco-animate">
            <div class="img" style="background-image: url(assets/images/<?= $menu_item['image'] ?>)"></div>
            <div class="desc p-4">
              <div class="d-md-flex text align-items-start">
                <h3><span><?= $menu_item['name'] ?></span></h3>
                <span class="price">$<?= $menu_item['price'] ?></span>
              </div>
              <div class="d-block">
                <p><?= $menu_item['details'] ?></p>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>


  </div>
</section>