
    <!-- Start Page Content -->

    <div class="row">
        <div class="col-lg-12">


           <div class="panel panel-info">
                <div class="panel-heading">
                     <i class="fa fa-plus"></i> &nbsp;<?php echo $csr['title']; ?><a href="<?php echo site_url('admin/csr/delete/'.$csr['id']); ?>" class="btn btn-info btn-sm pull-right"><i class="fa fa-trash-o"></i> Delete Banner </a>

                </div>
                <div class="panel-body table-responsive">

				 <?php $error_msg = $this->session->flashdata('error_msg'); ?>
            <?php if (isset($error_msg)): ?>
                <div class="alert alert-danger delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i> <?php echo $error_msg; ?> &nbsp;
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
            <?php endif ?>


                    <form method="post" action="<?php echo base_url('admin/csr/update') ?>" class="form-horizontal" enctype="multipart/form-data" novalidate>
                      <input type="hidden" name="id" value="<?php echo $csr['id']; ?>">
                       <div class="form-group">
                 	<label class="col-md-12" for="example-text">Title</label>
                    <div class="col-sm-12">
                                            <input type="text" name="title" class="form-control" value='<?php echo $csr['title']; ?>'>
                                        </div>
                                    </div>

                                    <div class="form-group">
                          	<label class="col-md-12" for="example-text">Details</label>
                             <div class="col-sm-12">
                                                     <textarea class="form-control" rows="5" name='detail'> <?php echo $csr['detail']; ?></textarea>
                                                 </div>
                                             </div>

                                    <h3 class="box-title">File Upload</h3>
                              <label for="input-file-now-custom-1">You can add a default value</label>
                              <input type="file" name='userfile' id="input-file-now-custom-1" class="dropify" data-default-file="<?php echo base_url();?>assets/images/csr/<?php echo $csr['icon']; ?>" />
                                  </div>
                       <hr>
                            <!-- CSRF token -->
                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
  <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-5">
                                  <button type="submit" class="btn btn-info btn-rounded btn-sm"> <i class="fa fa-plus"></i>&nbsp;&nbsp;Edit</button>
                            </div>
                        </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- End Page Content -->
