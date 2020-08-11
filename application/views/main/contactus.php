<main>
        <div class="container-fluid banner--header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="">Contact Us</a></li>
                            </ol>
                        </nav>
                    </div>

                    <div class="col-12 align-self-end">
                        <div class="main--head">
                            <h3>Contact Us</h3>
                        </div>
                    </div>
                </div>


            </div>

        </div>

        <div class="container-fliud contact-two">
            <div class="container">

                <div class="row relative">
                    <div class=" col-sm-12 col-12 col-md-7 col-lg-7 mb-3 contact--content">
                        <ul>
                            <li>
                                <div class="address-section">
                                    <address>
                                        Milroc Good Earth Developer<br> 501, Milroc Lar Menezes <br>Swami Vivekanand
                                        Road<br>
                                        Panaji,
                                        Goa 403001
                                    </address>

                                </div>
                            </li>

                            <li>
                                <div class="address-section">
                                    <p><a href="tel:832 2230536">+91 832 2230536 </a></p>
                                    <p><a href="tel:832 6647080"> +91 832 6647080</a></p>
                                </div>
                            </li>

                            <li>
                                <div class="address-section">
                                    <p><a href="mailto:mail@milrocgoodearth.in"> mail@milrocgoodearth.in</a></p>
                                </div>
                            </li>

                        </ul>

                    </div>

                    <?php $error_msg = $this->session->flashdata('error_msg'); ?>
                       <?php if (isset($error_msg)): ?>
                           <div class="alert alert-danger delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i> <?php echo $error_msg; ?> &nbsp;
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                           </div>
                       <?php endif ?>

                    <div class="col-sm-12 col-12 col-md-5 col-lg-5 contact--form text-center">
                        <h3>Get in Touch </h3>
                        <p>Set Up a session with one of our custom space Managers</p>
                        <form action="<?php echo base_url('main/contactcreate') ?>" method='post' class="contactfrm">
                            <div class="form-group">
                                <label for="fullname">Full Name</label>
                                <input type="text" class="form-control" name="full_name" id="fullname" placeholder="Enter Full Name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Best email to contact you">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="text" class="form-control" name="phone_no" id="phone" placeholder="+91 000 000 0000">
                            </div>
                            <div class="form-group">
                                <label for="additional">Additional Note</label>
                                <textarea class="form-control" name="additional_note" id="additional"
                                    placeholder="Anything else we should know?" rows="3"></textarea>
                            </div>
                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
                            <div class="form-group">
                                <button class="btn btn-contact" type="submit">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </main>
