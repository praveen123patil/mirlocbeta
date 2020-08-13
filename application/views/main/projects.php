<main>
<div class="container-fluid banner--header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="">Projects</a></li>
                        </ol>
                    </nav>
                </div>

                <div class="col-12 align-self-end">
                    <div class="main--head">
                        <h3>Projects</h3>
                    </div>
                </div>
            </div>


        </div>

    </div>

    <div class="container-fliud projects-wrapper">
        <div class="container">
            <div class="col-12">
                <div class="row col-12 justify-content-between">
                  <?php $count=0;
                  foreach($property as $obj) :
                    ?>
                    <div class="col-cus-three ">
                        <div class=" img-wrapper">
                            <div class="pr--banenr" style="background: url('<?php echo site_url(); ?>assets/images/properties/<?php echo $obj['property_image']; ?>');"></div>
                            <div class="img-head">
                                <div>
                                    <h6> <?php echo $obj['title']; ?></h6>
                                </div>
                            </div>
                            <div class="image-wrapper--text">
                                <div class="main--wapper--sec">
                                    <?php echo $obj['short_description']; ?>
                                    <a href="<?php echo site_url('/projects/'.$obj['id']); ?>" class="know--mre">Know More</a>
                                </div>
                            </div>
                        </div>

                    </div>
<?php endforeach; ?>
                    <!-- <div class="col-cus">
                        <div class=" img-wrapper">
                            <div class="pr--banenr" style="background: url(images/project1.jpg);"></div>
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

                    </div> -->
                </div>

                <!-- <div class="row col-12 justify-content-between">
                    <div class="col-cus-three ">
                        <div class=" img-wrapper">
                            <div class="pr--banenr" style="background: url(images/project1.jpg);"></div>
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
                    <div class="col-cus-three ">
                        <div class=" img-wrapper">
                            <div class="pr--banenr" style="background: url(images/project1.jpg);"></div>
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
                    <div class="col-cus-three ">
                        <div class=" img-wrapper">
                            <div class="pr--banenr" style="background: url(images/project1.jpg);"></div>
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
                </div>
                <div class="row col-12 justify-content-between">
                    <div class="col-cus">
                        <div class=" img-wrapper">
                            <div class="pr--banenr" style="background: url(images/project1.jpg);"></div>
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
                    <div class="col-cus">
                        <div class=" img-wrapper">
                            <div class="pr--banenr" style="background: url(images/project1.jpg);"></div>
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
                </div>

                <div class="row col-12 justify-content-between">
                    <div class="col-cus-three ">
                        <div class=" img-wrapper">
                            <div class="pr--banenr" style="background: url(images/project1.jpg);"></div>
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
                    <div class="col-cus-three ">
                        <div class=" img-wrapper">
                            <div class="pr--banenr" style="background: url(images/project1.jpg);"></div>
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
                    <div class="col-cus-three ">
                        <div class=" img-wrapper">
                            <div class="pr--banenr" style="background: url(images/project1.jpg);"></div>
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
                </div> -->


            </div>
        </div>
    </div>
</main>
