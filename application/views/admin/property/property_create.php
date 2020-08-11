
<!-- Start Page Content -->

<div class="row">
  <div class="col-lg-12">


    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-plus"></i> &nbsp;Add New Property<a href="<?php echo site_url('admin/testimonials/index/'); ?>" class="btn btn-info btn-sm pull-right"><i class="fa fa-list"></i> Property List </a>

      </div>
      <div class="panel-body table-responsive">

        <?php $error_msg = $this->session->flashdata('error_msg'); ?>
        <?php if (isset($error_msg)): ?>
        <div class="alert alert-danger delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i> <?php echo $error_msg; ?> &nbsp;
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
        </div>
        <?php endif ?>


      <form method="post" action="<?php echo base_url('admin/properties/create') ?>" class="form-horizontal" enctype="multipart/form-data" novalidate>
        <div class="form-group">
          <label class="col-md-12" for="example-text">Property Title</label>
          <div class="col-sm-12">
            <input type="text" name="title" class="form-control">
          </div>
        </div>


        <div class="form-group">
          <label class="col-md-12" for="example-text">Short Description</label>
          <div class="col-sm-12">
            <textarea class="form-control" rows="5" name='short_description'></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-12" for="example-text">Description</label>
            <div class="col-sm-12">
              <textarea class="form-control" rows="5" name='description'></textarea>
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-12" for="example-text">Features</label>
          <div class="col-sm-12">
            <textarea class="form-control" rows="5" name='features'></textarea>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-12" for="example-text">Location Map</label>
          <div class="col-sm-12">
            <textarea class="form-control" rows="5" name='location_map'></textarea>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-12" for="example-text">Video Link</label>
          <div class="col-sm-12">
            <textarea class="form-control" rows="5" name='video_link'></textarea>
          </div>
        </div>

        <h3 class="box-title">Property Image</h3>
        <label for="input-file-now-custom-1">You can add a default value</label>
          <input type="file" name='userfile' id="input-file-now-custom-1" class="dropify" data-default-file="<?php echo base_url();?>optimum/plugins/bower_components/dropify/src/images/test-image-1.jpg" />
        <hr>

        <h3 class="box-title">Logo</h3>
        <label for="input-file-now-custom-1">You can add a default value</label>
          <input type="file" name='userfile2' id="input-file-now-custom-1" class="dropify" data-default-file="<?php echo base_url();?>optimum/plugins/bower_components/dropify/src/images/test-image-1.jpg" />
        <hr>

        <h3 class="box-title">Site Plan</h3>
        <label for="input-file-now-custom-1">You can add a default value</label>
          <input type="file" name='userfile3' id="input-file-now-custom-1" class="dropify" data-default-file="<?php echo base_url();?>optimum/plugins/bower_components/dropify/src/images/test-image-1.jpg" />
        <hr>

      <!-- CSRF token -->
        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-5">
          <button type="submit" class="btn btn-info btn-rounded btn-sm"> <i class="fa fa-plus"></i>&nbsp;&nbsp;Save</button>
          </div>
        </div>
      </form>
    </div>

  </div>
</div>
</div>
</div>

    <!-- End Page Content -->
