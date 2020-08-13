  <main>
    <section class="container-fluid" id="projects-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Projects</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href=""><?php echo $properties['title']; ?></a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>


    <section class="container-fluid" id="project-details-two">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-lg-3 col-12 side--nav">
                    <ul>
                        <li class="active"><span></span><a href="">OVERVIEW</a></li>
                        <li><span></span><a href="">PROJECT FEATURES</a></li>
                        <li><span></span><a href="">SITE PLAN</a></li>
                        <!-- <li><span></span><a href="">FLOOR PLAN</a></li> -->
                    </ul>
                </div>

                <div class="col-md-9 col-lg-9 col-sm-12 col-12 content-navigation">
                    <div class="section-wrap" id="project-deatail-one">
                        <div class="video-sec relative">
                            <div id="proj-car" class="carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators">
                                <?php $count=0;
                                $indicators = '';
                                foreach($properties_banner as $obj) :
                                  $count++;
                                 if ($count === 1)
                                 {
                                    $class = 'active';
                                 }
                                 else
                                 {
                                    $class = '';
                                 }?>
                                <li data-target="#proj-car" data-slide-to="' . $count . '" class="' . $class . '"></li>
                                <?php endforeach; ?>
                              </ol>
                              <div class="carousel-inner">
                                <?php $count=0;
                                $indicators = '';
                                foreach($properties_banner as $obj) :
                                  $count++;
                                 if ($count === 1)
                                 {
                                    $class = 'active';
                                 }
                                 else
                                 {
                                    $class = '';
                                 }?>
                                <div class="carousel-item <?php echo $class; ?>">
                                  <img src="<?php echo site_url(); ?>assets/images/properties/<?php echo $obj['image']; ?>" class="img-fluid w-100">
                                </div>
                                <div class="play--btn modal-videos"
                                      data-vsrc="https://s2.q4cdn.com/482484005/files/videos/EOP_REIT_August-2019_BestVersion.mp4">
                                      <span>VIDEO</span>
                                    </div>
                                <?php endforeach; ?>
                                <!-- <div class="carousel-item">
                                  <img src="<?php echo base_url()?>optimum/main/images/kadamba.png" class="img-fluid w-100">
                                </div>
                                <div class="carousel-item">
                                  <img src="<?php echo base_url()?>optimum/main/images/kadamba.png" class="img-fluid w-100">
                                </div> -->
                              </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-wrap" id="project-deatail-two">
                        <div class="row justify-content-between">
                            <div class="custom-project-col">
                              <h3><?php echo $properties['title']; ?></h3>
                                <?php echo $properties['short_description']; ?>
                            </div>
                            <div class="custom-project-col">
                                <a href="#">
                                    <img src="<?php echo site_url(); ?>assets/images/properties/<?php echo $properties['logo']; ?>" class="img-fluid" alt="">
                                    <span>GO TO SITE</span>
                                </a>
                            </div>
                            <?php echo $properties['description']; ?>
                        </div>

                    </div>

                    <div class="section-wrap">
                        <hr>
                    </div>

                    <div class="section-wrap" id="project-detail-three">
                        <h4>PROJECT FEATURES</h4>
                        <?php echo $properties['features']; ?>
                    </div>

                    <div class="section-wrap">
                        <hr>
                    </div>

                    <div class="section-wrap" id="project-detail-four">
                        <h4>SITE PLAN</h4>
                        <img src="<?php echo site_url();?>assets/images/properties/<?php echo $properties['site_plan']; ?>" class="img-fluid" alt="">
                    </div>

                    <div class="section-wrap">
                        <hr>
                    </div>

                    <div class="section-wrap" id="project-detail-five">
                        <h4>LOCATION MAP</h4>
                        <?php echo $properties['location_map']; ?>
                    </div>

                    <div class="section-wrap">
                        <hr>
                    </div>

                    <!-- <div class="section-wrap" id="project-detail-six">
                        <h4>FLOOR PLAN</h4>
                        <div class="row justify-content-between">
                            <div class="site-pan">
                                <img src="<?php echo base_url()?>optimum/main/images/kadamba_plan_a.png" class="img-fluid w-100" alt="">
                            </div>

                            <div class="site-pan">
                                <img src="<?php echo base_url()?>optimum/main/images/kadamba_plan_d.png" class="img-fluid w-100" alt="">
                            </div>
                            <div class="site-pan">
                                <img src="<?php echo base_url()?>optimum/main/images/kadamba_plan_h.png" class="img-fluid w-100" alt="">
                            </div>

                        </div>
                    </div> -->

                </div>
            </div>
        </div>
    </section>
</main>
