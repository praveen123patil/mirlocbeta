<!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                          <div class="panel-heading">
                               <a href='#'><i class="fa fa-list"></i> &nbsp;Banners List</a> <a href="<?php echo base_url('admin/homebanner/create') ?>" class="btn btn-info btn-sm pull-right"><i class="fa fa-plus"></i> Add Banners </a>

                          </div>
                            <table data-toggle="table" data-height="250" data-mobile-responsive="true" class="table-striped">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Detail</th>
                                        <th>image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php foreach($banner as $obj) : ?>
                                    <tr id="tr-id-1" class="tr-class-1">
                                        <td> <a href="<?php echo site_url('admin/homebanner/edit/'.$obj['id']); ?>"> <?php echo $obj['banner_title']; ?> </td> </a>
                                        <td><?php echo $obj['banner_details']; ?></td>
                                        <td><img class="img-responsive" style="height:80px" alt="" src="<?php echo site_url(); ?>assets/images/banners/<?php echo $obj['banner_image']; ?>" /></td>
                                    </tr>
                                  <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
