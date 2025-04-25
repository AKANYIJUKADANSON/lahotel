

    <div class="hero-wrap" style="background-image: url('assets/images/bg_3.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <!-- <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Home</a></span> / <span>Blog</span></p> -->
	            <h1 class="mb-4 bread">Our Stories</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row d-flex">

          <?php foreach($posts_list as $post): ?>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('assets/images/image_1.jpg');">
              </a>
              <div class="tex mt-3">
              	<div class="row d-flex mb-2 flex-row text-secondary" style="border: 2px solid re">
                  
                  <div class="col-6 me-2 float-start" style="border: 2px solid gree">
                    <span><i class="bi bi-person-circle me-1 fst-italic"></i> <i><?= $post['author'] ?></i></span>
                  </div>

                  <div class="col-6 float-end" style="border: 2px solid blu">
                    <span class="float-end">
                      <i class="bi bi-calendar-date me-1"></i>
                      <i><?= date('d M, Y', strtotime($post['published_on'])) ?></i></span>
                  </div>
                </div> 


                <div class="">
                  <h4 class="fs-4 fw-bolder" style="color: deepskyblue"><?= $post['title'] ?> </h4>
                </div>

                <div class="text-dark text-justify post-body">
                  <?= $post['body'] ?>
                </div>

                <a href="<?= base_url('posts/'.$post['id']) ?>" class="btn btn-secondary rounded">More info</a>
              </div>
            </div>
          </div>
          <?php endforeach; ?>

        </div>

        <div class="row d-flex mt-5">

            <div class="col-md-6 d-flex ftco-animate">
              <div class="blog-entry align-self-stretch">
                
                <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fhotelhorizonug%2Fposts%2Fpfbid0K9RuWqy8GTidSSyvmE2zLFv7rhQ6DsgnS24vjHDuKZwstuuDeHoJibMZPwGa9rNVl&show_text=true&width=300" width="500" height="853" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

              </div>
            </div>
            <div class="col-md-5 d-flex ftco-animate">
              <div class="blog-entry align-self-stretch">
                <a class="twitter-timeline" data-width="500" data-height="753" href="https://twitter.com/ntare_league?ref_src=twsrc%5Etfw">Tweets by ntare_league</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
              </div>
            </div>
          <!-- </div> -->
        </div>

        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section>