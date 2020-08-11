<!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                          <div class="panel-heading">
                               <a href='#'><i class="fa fa-list"></i> &nbsp;Property List</a> <a href="<?php echo base_url('admin/properties/create') ?>" class="btn btn-info btn-sm pull-right"><i class="fa fa-plus"></i> Add Property </a>

                          </div>
                            <table data-toggle="table" data-height="500" data-mobile-responsive="true" class="table-striped">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Short Description</th>
                                        <th>Video Link</th>
                                        <th>Property Image</th>
                                        <th>Logo</th>
                                        <th>Site Plan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php foreach($property as $obj) : ?>
                                    <tr id="tr-id-1" class="tr-class-1">
                                        <td> <a href="<?php echo site_url('admin/properties/edit/'.$obj['id']); ?>"> <?php echo $obj['title']; ?> </td> </a>
                                        <td><?php echo $obj['short_description']; ?></td>
                                        <td><?php echo $obj['video_link']; ?></td>
                                        <td><img class="img-responsive" style="height:80px" alt="" src="<?php echo site_url(); ?>assets/images/properties/<?php echo $obj['property_image']; ?>" /></td>
                                        <td><img class="img-responsive" style="height:80px" alt="" src="<?php echo site_url(); ?>assets/images/properties/<?php echo $obj['logo']; ?>" /></td>
                                        <td><img class="img-responsive" style="height:80px" alt="" src="<?php echo site_url(); ?>assets/images/properties/<?php echo $obj['site_plan']; ?>" /></td>
                                    </tr>
                                  <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
