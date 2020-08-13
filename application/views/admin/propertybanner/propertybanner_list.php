<!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                          <div class="panel-heading">
                               <a href='#'><i class="fa fa-list"></i> &nbsp;Floor Plan</a> <a href="<?php echo base_url('admin/propertybanner/create') ?>" class="btn btn-info btn-sm pull-right"><i class="fa fa-plus"></i> Add Floor Plan</a>

                          </div>
                            <table data-toggle="table" data-height="500" data-mobile-responsive="true" class="table-striped">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Detail</th>
                                        <th>image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php foreach($propertybanner as $obj) : ?>
                                    <tr id="tr-id-1" class="tr-class-1">
                                        <td> <a href="<?php echo site_url('admin/propertybanner/edit/'.$obj['pid']); ?>"> <?php echo $obj['title']; ?> </td> </a>
                                        <td><?php echo $obj['image_title']; ?></td>
                                        <td><img class="img-responsive" style="height:80px" alt="" src="<?php echo site_url(); ?>assets/images/properties/<?php echo $obj['image']; ?>" /></td>
                                    </tr>
                                  <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
