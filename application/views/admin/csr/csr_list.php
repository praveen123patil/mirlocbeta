<!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                          <div class="panel-heading">
                               <a href='#'><i class="fa fa-list"></i> &nbsp;Banners List</a> <a href="<?php echo base_url('admin/csr/create') ?>" class="btn btn-info btn-sm pull-right"><i class="fa fa-plus"></i> Add CSR </a>

                          </div>
                            <table data-toggle="table" data-height="250" data-mobile-responsive="true" class="table-striped">
                                <thead>
                                    <tr>
                                      <th>Title</th>
                                        <th>Detail</th>
                                        <th>Icon</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php foreach($csr as $obj) : ?>
                                    <tr id="tr-id-1" class="tr-class-1">
                                      <td> <a href="<?php echo site_url('admin/csr/edit/'.$obj['id']); ?>"> <?php echo $obj['title']; ?> </td> </a>
                                        <td> <?php echo $obj['detail']; ?> </td>
                                        <td><img class="img-responsive" style="height:80px" alt="" src="<?php echo site_url(); ?>assets/images/csr/<?php echo $obj['icon']; ?>" /></td>
                                    </tr>
                                  <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
