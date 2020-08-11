<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Mirloc Goo Earth Properties</title>
  <link rel="stylesheet" href="<?php echo base_url()?>optimum/main/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>optimum/main/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>optimum/main/css/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url()?>optimum/main/css/animate.css">
  <link rel="stylesheet" href="<?php echo base_url()?>optimum/main/css/slick.css">
  <link rel="stylesheet" href="<?php echo base_url()?>optimum/main/css/style.css">
</head>

<body <?php if ($_SERVER['REQUEST_URI'] != '/mirlocbeta/'):?> class='other-pages' <?php endif;?>>
  <header class="<?php if ($_SERVER['REQUEST_URI'] === '/mirlocbeta/'):?> sticky <?php endif;?>">
    <div class="container-fluid">
      <div class="row top--header">
        <div class="col-md-2 col-lg-2 col-sm-2 col-2">
          <a href="#" class="navbar-brand">
            <img src="<?php echo base_url()?>optimum/main/images/logo.png" alt="Logo">
          </a>
        </div>
        <div class="col-md-10 col-lg-10 col-sm-10 col-10 desktop-menu">
          <ul class="nav justify-content-end left--col">
            <li class="nav-item"><a class="nav-link" href="mailto:mail@milrocgoodearth.in"><img src="<?php echo base_url()?>optimum/main/images/msg.png"
                  alt="">mail@milrocgoodearth.in </a> </li>
            <li class="nav-item"><a class="nav-link" href="tel:0832 223 0536"><img src="<?php echo base_url()?>optimum/main/images/call.png" alt="">0832 223
                0536/6647080</a></li>
          </ul>
          <ul class="nav justify-content-end right-col">
            <li class="nav-item"><a class="nav-link" href="#">Projects</a> </li>
            <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
            <li class="nav-item"><a class="nav-link head-btn contactmodal" href="#">Let’s Talk</a></li>
          </ul>
        </div>
        <div class="col-md-10 col-lg-10 col-sm-10 col-10 mobile-menu align-self-center">
          <ul class="nav justify-content-end left--col">
            <li class="nav-item"><a class="nav-link" href="mailto:mail@milrocgoodearth.in"><img src="<?php echo base_url()?>optimum/main/images/msg.png"
                  alt="">mail@milrocgoodearth.in </a> </li>
            <li class="nav-item"><a class="nav-link" href="tel:0832 223 0536"><img src="<?php echo base_url()?>optimum/main/images/call.png" alt="">0832 223
                0536/6647080</a></li>
          </ul>
          <div class="hamburger" id="hamburger-3">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
          </div>
        </div>
      </div>

    </div>
  </header>
  <div class="homemodal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <img src="<?php echo base_url()?>optimum/main/images/close.svg" alt="">
        </button>
        <div class="modal-head">
          <h5 class="modal-title">Let's talk about your need</h5>
          <p>Set Up a session with one of our custom space Managers</p>
        </div>

        <form action="<?php echo base_url('main/contactcreate') ?>" method='post' class="homecontact">
          <div class="form-group">
            <label for="fullname">Full Name</label>
            <input type="text" class="form-control" name="full_name" id="fullname" placeholder="Enter Full Name">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Best email to contact you">
          </div>
          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" class="form-control" id="phone" name="phone_no" placeholder="+91 000 000 0000">
          </div>
          <div class="form-group">
            <label for="additional">Additional Note</label>
            <textarea class="form-control" id="additional"  name="additional_note" placeholder="Anything else we should know?"
              rows="3"></textarea>
          </div>
          <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
          <div class="form-group">
            <button class="btn btn-contact" type="submit">Submit</button>
          </div>
        </form>
      </div>

    </div>
  </div>
