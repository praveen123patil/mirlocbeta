<main>
        <div class="homemodal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="images/close.svg" alt="">
                    </button>
                    <div class="modal-head">
                        <h5 class="modal-title">Let's talk about your need</h5>
                        <p>Set Up a session with one of our custom space Managers</p>
                    </div>

                    <form action="" class="homecontact">
                        <div class="form-group">
                            <label for="fullname">Full Name</label>
                            <input type="text" class="form-control" id="fullname" placeholder="Enter Full Name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Best email to contact you">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control" id="phone" placeholder="+91 000 000 0000">
                        </div>
                        <div class="form-group">
                            <label for="additional">Additional Note</label>
                            <textarea class="form-control" id="additional" placeholder="Anything else we should know?"
                                rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-contact" type="submit">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <!-- Banner section starts here -->
        <section id="about-banner" class="container-fluid">
            <div class="row">
                <div class="container">
                    <div class="banner-breadcrumb">
                        <ul class="breadcrumb-list">
                            <li>
                                <a href="#">home</a>
                            </li>
                            <li>
                                <a href="#">about us</a>
                            </li>
                            <li>
                                <a href="#">Csr</a>
                            </li>
                        </ul>
                    </div>
                    <div class="banner-text-wrapper">
                        <h2><span>CSR</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner section ends here -->

        <!-- Tab section starts here -->
        <section id="about-sec-tab" class="container-fluid p-0">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link " href="#about" role="tab" aria-controls="about" aria-selected="true">About
                        Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#csr" role="tab" aria-controls="csr" aria-selected="false">CSR</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="csr" role="tabpanel" aria-labelledby="csr-tab">
                    <div class="container-fluid">
                        <div class="container">
                            <div class="row csr-head-wrapper">
                                <h2><span>WE DO GOOD</span>, TO THE BEST OF OUR CAPABILITIES.</h2>
                                <h4>The following are some of the tasks we undertook with the hope and will to support
                                    local
                                    communities.</h4>
                            </div>
                            <div class="row csr-detail-wrapper">
                              <?php foreach($csr as $obj) : ?>
                                <div class="col-lg-3 col-md-12 col-sm-12 col-12 p-0">
                                    <div class="csr-listing-wrapper">
                                        <img src="<?php echo site_url(); ?>assets/images/csr/<?php echo $obj['icon']; ?>" alt="growth" class="upper-icon">
                                        <h3><?php echo $obj['title']; ?></h3>
                                        <?php echo $obj['detail']; ?>
                                        <img src="<?php echo base_url()?>optimum/main/images/multimedia-option.png" alt="growth" class="lower-icon">
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                <!-- <div class="col-lg-3 col-md-12 col-sm-12 col-12 p-0">
                                    <div class="csr-listing-wrapper">
                                        <img src="images/student.png" alt="growth" class="upper-icon">
                                        <h3>Children Development</h3>
                                        <ul>
                                            <li>We lent support to the lesser privileged children of Hamara School run
                                                by Mrs. Mangala Wagle
                                                (in charge) of Kasturba Gandhi National Memorial Trust by way of
                                                donations, free supply of
                                                uniforms and painting of the school premises.</li>
                                            <li>We undertook courtyard development and beautification projects for St.
                                                Francis Xavier Academy,
                                                Old Goa – for the intellectually disabled and differently abled
                                                children.</li>
                                        </ul>
                                        <img src="images/multimedia-option.png" alt="growth" class="lower-icon">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12 col-sm-12 col-12 p-0">
                                    <div class="csr-listing-wrapper">
                                        <img src="images/deal.png" alt="growth" class="upper-icon">
                                        <h3>Community Welfare</h3>
                                        <ul>
                                            <li>We are benefactors of the Village Panchayat of Se Old Goa. We have
                                                provided garden benches and
                                                more than 50 large garbage bins to the village.</li>
                                            <li>For the reconstruction and upgradation of the Curca Sub Health Centre,
                                                we invested more than
                                                10 lakh rupees in redevelopment.</li>
                                            <li>Since almost a decade, we’ve been making monthly contributions to the
                                                Panaji Ambulance &
                                                Welfare Trust.</li>
                                        </ul>
                                        <img src="images/multimedia-option.png" alt="growth" class="lower-icon">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12 col-sm-12 col-12 p-0">
                                    <div class="csr-listing-wrapper">
                                        <img src="images/deal.png" alt="growth" class="upper-icon">
                                        <h3>Social Partnership</h3>
                                        <ul>
                                            <li>We are proud sponsors of the annual events at Fr. Agnel College of Arts
                                                & Commerce.</li>
                                            <li>Since the past few years, we have also been supporting the annually held
                                                Monte Music Festival
                                                by Fundaçȃo Oriente.</li>
                                        </ul>
                                        <img src="images/multimedia-option.png" alt="growth" class="lower-icon">
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Tab section ends here -->



    </main>
