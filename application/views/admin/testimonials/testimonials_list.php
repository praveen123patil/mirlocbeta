<!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                          <div class="panel-heading">
                               <a href='#'><i class="fa fa-list"></i> &nbsp;Testimonials List</a> <a href="<?php echo base_url('admin/testimonials/create') ?>" class="btn btn-info btn-sm pull-right"><i class="fa fa-plus"></i> Add Testimonials </a>

                          </div>
                            <table data-toggle="table" data-height="250" data-mobile-responsive="true" class="table-striped">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php foreach($testimonials as $obj) : ?>
                                    <tr id="tr-id-1" class="tr-class-1">
                                        <td> <a href="<?php echo site_url('admin/testimonials/edit/'.$obj['id']); ?>"> <?php echo $obj['name']; ?> </td> </a>
                                        <td><?php echo $obj['message']; ?> </td>
                                    </tr>
                                  <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
