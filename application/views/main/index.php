<main>



  <!-- Banner Carousel -->
  <section class="container-fluid">
    <div class="row">
      <div class="col p-0">
        <!-- carousel code -->
        <div id="homeCarousel" class="carousel slide carousel-fade">
          <ol class="carousel-indicators">
            <?php $count=0;
            $indicators = '';
            foreach($banner as $obj) :
              $count++;
             if ($count === 1)
             {
                $class = 'active';
             }
             else
             {
                $class = '';
             }?>
          <li data-target="#homeCarousel" data-slide-to="' . $count . '" class="' . $class . '"></li>
            <!-- <li data-target="#homeCarousel" data-slide-to="1"></li>
            <li data-target="#homeCarousel" data-slide-to="2"></li> -->
            <?php endforeach; ?>
          </ol>
          <div class="carousel-inner ">

            <!-- first slide -->
              <?php $count=0;
              $indicators = '';
              foreach($banner as $obj) :
                $count++;
               if ($count === 1)
               {
                  $class = 'active';
               }
               else
               {
                  $class = '';
               }?>
            <div class="carousel-item <?php echo $class; ?>" style="background-image: url('<?php echo site_url(); ?>assets/images/banners/<?php echo $obj['banner_image']; ?>">
              <div class="carousel-caption d-md-block">
                <h1 data-animation="animated bounceInLeft">
                <?php echo $obj['banner_title']; ?>
                </h1>
                <p data-animation="animated bounceInRight">
                  <?php echo $obj['banner_details']; ?>
                </p>
                <button class="btn btn-hme">VIEW PROJECTS<span><img src="<?php echo base_url()?>optimum/main/images/arrow1.png" alt=""></span></button>
              </div>
            </div>
          <?php endforeach; ?>
          </div>

        </div>
      </div>
    </div>
    </div>

  </section>
  <!-- Ends Here -->

  <!-- Philosophy Section Starts Here -->

  <div class="container-fluid" id="philosophy">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-12 col-12 phil-content">
          <h3 class="text-head">The <span>Milroc</span> Philosopy</h3>
          <p>We believe in the power of good and sustainable construction that designs not only a beautiful lifestyle
            and residence, but also enables the life and environment around it to flourish. Our capacity lies within
            the will to build not just better homes, but better futures for generations to come.</p>
          <a href="#" class="btn btn-typ1">Discover More<span><img src="<?php echo base_url()?>optimum/main/images/arrow2.png" alt=""></span></a>
        </div>

        <div class="col-md-6 col-lg-6 col-sm-12 col-12">
          <div class="d-flex flex-wrap justify-content-between">
            <div class="timers-section">
              <h5><label class="timer">500</label>+</h5>
              <span>Our Associations</span>
            </div>
            <div class="timers-section">
              <h5><label class="timer">360</label>+</h5>
              <span>Property Sold</span>
            </div>
            <div class="timers-section">
              <h5><label class="timer">1</label>+</h5>
              <span>Rent Property</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Ends Here -->


  <!-- Featured Projects Section -->

  <div class="container-fluid" id="featured-projects">
    <div class="container">
      <h3 class="text-center text-head"> <span> Featured </span> Projects </h3>
      <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12 col-12 project--list  pr-lg-0" id="pro--col">
          <div class="img-wrapper">
            <img src="<?php echo base_url()?>optimum/main/images/project1.jpg" class="img-fluid w-100" alt="">
            <div class="img-head">
              <div>
                <h6> Milroc Vista do Mar</h6>
              </div>
            </div>
            <div class="image-wrapper--text">
              <div class="main--wapper--sec">
                <h6> Milroc Colina </h6>
                <p> Milroc Colina at Pilar - Goa Velha</p>
                <p> 2 and 3 BHK Apartments</p>
                <a href="#" class="know--mre">Know More</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 col-sm-12 col-12 project--list pr--right">
          <div class="img-wrapper mb-2">
            <div class="pro--col" style="background: url('<?php echo base_url()?>optimum/main/images/project1.jpg')"> </div>
            <div class="img-head">
              <div>
                <h6> Plots at Raia</h6>
              </div>
            </div>
            <div class="image-wrapper--text">
              <div class="main--wapper--sec">
                <h6> Milroc Colina </h6>
                <p> Milroc Colina at Pilar - Goa Velha</p>
                <p> 2 and 3 BHK Apartments</p>
                <a href="#" class="know--mre">Know More</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-7 col-md-12 col-sm-12 col-12 project--list pr--list--left  pr-lg-0">
          <div class=" img-wrapper">
            <img src="<?php echo base_url()?>optimum/main/images/project1.jpg" class="img-fluid w-100" alt="">
            <div class="img-head">
              <div>
                <h6> Milroc Vista do Mar</h6>
              </div>
            </div>
            <div class="image-wrapper--text">
              <div class="main--wapper--sec">
                <h6> Milroc Colina </h6>
                <p> Milroc Colina at Pilar - Goa Velha</p>
                <p> 2 and 3 BHK Apartments</p>
                <a href="#" class="know--mre">Know More</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-5 col-md-5 col-sm-12 col-12 project--list pr--list--right pr--right ">
          <div class="img-wrapper mb-2">
            <img src="<?php echo base_url()?>optimum/main/images/project1.jpg" class="img-fluid w-100" alt="">
            <div class="img-head">
              <div>
                <h6> Plots at Raia</h6>
              </div>
            </div>
            <div class="image-wrapper--text">
              <div class="main--wapper--sec">
                <h6> Milroc Colina </h6>
                <p> Milroc Colina at Pilar - Goa Velha</p>
                <p> 2 and 3 BHK Apartments</p>
                <a href="#" class="know--mre">Know More</a>
              </div>
            </div>
          </div>

          <div class="img-wrapper">
            <img src="<?php echo base_url()?>optimum/main/images/project1.jpg" class="img-fluid w-100" alt="">
            <div class="img-head">
              <div>
                <h6> Milroc Colina at Pilar - Goa Velha</h6>
              </div>
            </div>
            <div class="image-wrapper--text">
              <div class="main--wapper--sec">
                <h6> Milroc Colina </h6>
                <p> Milroc Colina at Pilar - Goa Velha</p>
                <p> 2 and 3 BHK Apartments</p>
                <a href="#" class="know--mre">Know More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a href="#" class="btn btn-typ1">View All<span><img src="<?php echo base_url()?>optimum/main/images/arrow2.png" alt=""></span></a>
    </div>
  </div>

  <!-- Ends Here -->


  <!-- Green Solutions Starts Here -->

  <div class="container-fluid" id="green-section">
    <div class="container">
      <h3 class="text-center text-head"> <span>Green </span> Solutions</h3>
      <div class="row pt-5">
        <div class="col-12">
          <div class="owl-carousel" id="green-carousel">
            <?php foreach($green_solutions as $obj) : ?>
            <div class="item">
              <div class="green-section">
                <div>
                  <img src="<?php echo site_url(); ?>assets/images/green_solutions/<?php echo $obj['image']; ?>" class="img-fluid" alt="">
                </div>
                <h6><?php echo $obj['title']; ?></h6>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Ends Here -->

  <!-- Testimonial Seection Starts Here -->

  <div class="container-fluid" id="client-testtmonial">
    <div class="container">
      <h3 class="text-center text-head"> <span>Clients</span> Testimonial</h3>
      <div class="row">
        <div class="col-12">
          <div class="owl-carousel" id="client-carousel">
            <?php foreach($testimonials as $obj) : ?>
            <div class="item">
              <div class="client-item">
                <div>
                  <?php echo $obj['message']; ?>
                </div>

                <h4><?php echo $obj['name']; ?></h4>
              </div>

            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>

  </div>


  <!-- Ends Here -->



</main>
