
    <div class="hero-wrap" style="background-image: url('/assets/images/bg_3.jpg');">
      	<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
					<div class="text">
						
						<div class=" heading-section text-center ftco-animate" style="border: 2px solid re">
						
							<h2 class="mb-4 text-light">
								<i class="ri-hotel-bed-line"></i><br>
								<p class="">Room Details</p>
								
							</h2>

						</div>
					</div>
					
				</div>
			</div>
		</div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
          	<div class="row">

          		<div class="col-md-12 ftco-animate">
          			<div class="single-slider owl-carousel">
          				<div class="item">
          					<div class="room-img" style="background-image: url(/assets/images/room-4.jpg);"></div>
          				</div>
          				<div class="item">
          					<div class="room-img" style="background-image: url(/assets/images/room-5.jpg);"></div>
          				</div>
          				<div class="item">
          					<div class="room-img" style="background-image: url(/assets/images/room-6.jpg);"></div>
          				</div>
          			</div>
          		</div>
          		<div class="col-md-12 room-single mt-4 mb-5 ftco-animate">
          			<h2 class="mb-4"><?= $room_details['type']; ?> <span>- (<?= $room_details['rooms_available']; ?> Available rooms)</span></h2>
    						<p><?= $room_details['description'] ?></p>
    						<div class="d-md-flex mt-5 mb-5">
    							<ul class="list">
	    							<li><span>Max:</span> <?= $room_details['num_of_people']; ?> Persons</li>
	    							<li><span>Size:</span> 45 m2</li>
	    						</ul>
    						</div>
    						
          		</div>

          		<div class="col-md-12 room-single ftco-animate mb-5 mt-4">
          			<h3 class="mb-4">Take A Tour</h3>
          			<div class="block-16">
		              <figure>
		                <img src="/assets/images/room-4.jpg" alt="Image placeholder" class="img-fluid">
		                <a href="https://vimeo.com/45830194" class="play-button popup-vimeo"><span class="icon-play"></span></a>
		              </figure>
		            </div>
          		</div>

          	</div>
          </div> 

          <div class="col-lg-4 sidebar ftco-animate pl-md-5">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon ion-ios-search"></span>
                  <input type="text" class="form-control" placeholder="Search...">
                </div>
              </form>
            </div>

            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Categories</h3>
                <li><a href="#">Properties <span>(12)</span></a></li>
                <li><a href="#">Home <span>(22)</span></a></li>
                <li><a href="#">House <span>(37)</span></a></li>
                <li><a href="#">Villa <span>(42)</span></a></li>
                <li><a href="#">Apartment <span>(14)</span></a></li>
                <li><a href="#">Condominium <span>(140)</span></a></li>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Recent Blog</h3>

              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(/assets/images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Oct 30, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>

              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(/assets/images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Oct 30, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>

            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Tag Cloud</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">dish</a>
                <a href="#" class="tag-cloud-link">menu</a>
                <a href="#" class="tag-cloud-link">food</a>
                <a href="#" class="tag-cloud-link">sweet</a>
                <a href="#" class="tag-cloud-link">tasty</a>
                <a href="#" class="tag-cloud-link">delicious</a>
                <a href="#" class="tag-cloud-link">desserts</a>
                <a href="#" class="tag-cloud-link">drinks</a>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>

        </div>

        <a href="/booking/<?= $room_details['id'] ?>" class="btn-primary btn-lg rounded text-light fw-bolder p-3">PROCEED TO BOOK</a>
      </div>
    </section>
