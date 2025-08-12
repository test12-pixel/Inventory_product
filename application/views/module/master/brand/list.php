<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-tags" aria-hidden="true"></i> Brand Management
        <small>Add, Edit, Delete</small>
      </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>module/brand/add"><i class="fa fa-plus"></i> Add New Brand</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <?php
                    //$this->load->helper('form');
                    //$error = $this->session->flashdata('error');
                    //if($error) {
                ?>
                <div class="row">
                    <div class="col-md-12">
                        <?php //echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Brand List</h3>
                    <div class="box-tools">
                        <form action="#" method="POST" id="searchList">
                            <div class="input-group">
                              <input type="text" name="searchText" value="<?php //echo $searchText; ?>" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                              <div class="input-group-btn">
                                <button class="btn btn-sm btn-default searchList"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div><!-- /.box-header -->

                <div class="box-body table-responsive no-padding">
                 <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Status</th>
                      <th class="text-center">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php //if (!empty($brandRecords)) {
                      //foreach ($brandRecords as $record) { ?>
                        <tr>
                          <td><?php //echo $record->id; ?></td>
                          <td><?php //echo $record->brand_name; ?></td>
                          <td>
                            <?php //if ($record->status == 'Active') { ?>
                              <span class="label label-success">Active</span>
                            <?php //} else { ?>
                              <span class="label label-warning">Inactive</span>
                            <?php //} ?>
                          </td>
                          <td class="text-center">
                            <a class="btn btn-sm btn-info" href="<?php echo base_url().'/module/brand/edit/'; ?>" title="Edit"><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-sm btn-danger deleteBrand" href="#" data-brandid="<?php //echo $record->id; ?>" title="Delete"><i class="fa fa-trash"></i></a>
                          </td>
                        </tr>
                      <?php //} 
                    //} else { ?>
                      <tr><td colspan="4" class="text-center">No records found.</td></tr>
                    <?php //} ?>
                  </tbody>
                </table>
                </div><!-- /.box-body -->

                <div class="box-footer clearfix">
                    <?php //echo $this->pagination->create_links(); ?>
                </div>
              </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();            
            var link = jQuery(this).get(0).href;            
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "brandListing/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
