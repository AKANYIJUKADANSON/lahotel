


	<div class="hero-wrap" style="background-image: url('/assets/images/bg_3.jpg');">
      	<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
					<div class="text">
						
						<div class=" heading-section text-center ftco-animate" style="border: 2px solid re">
						
							<h2 class="mb-4 text-light">
								<i class="ri-hotel-bed-line"></i><br>
								<p class="">Our Rooms</p>
								
							</h2>

						</div>
					</div>
					
				</div>
			</div>
		</div>
    </div>

    <section class="ftco-section ftco-no-pb ftco-room">
    	<div class="row no-gutters">

			<?php foreach($rooms_list as $room): ?>
				<div class="col-lg-6 mb-5">
				<div class="room-wrap d-md-flex ftco-animate">
					<a href="#" class="img" style="background-image: url(/assets/images/<?= $room['image'] ?> )"></a>
					<div class="half left-arrow d-flex align-items-center">
					<div class="text p-4 text-center">
						<p class="star mb-0">
						<span class="ion-ios-star"></span
						><span class="ion-ios-star"></span
						><span class="ion-ios-star"></span
						><span class="ion-ios-star"></span
						><span class="ion-ios-star"></span>
						</p>
						<p class="mb-0">
						<span class="price mr-1"><?= $room['price'] ?></span>
						<span class="per">per night</span>
						</p>
						<h3 class="mb-3"><a href="rooms.html"><?= $room['type'] ?></a></h3>
						<p class="pt-1">
						<a href="<?= base_url('rooms/'.$room['id']) ?> " class="btn-custom px-3 py-2 rounded"
							>View Details <span class="icon-long-arrow-right"></span></a>
						</p>
					</div>
					</div>
				</div>
				</div>
			<?php endforeach ?>

    		</div>
    	</div>
    </section>
