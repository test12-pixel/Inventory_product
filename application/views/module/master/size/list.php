<div class="content-wrapper">
    <!-- Content Header -->
    <section class="content-header">
        <h1>
            <i class="fa fa-arrows-alt" aria-hidden="true"></i> Size Management
            <small>Add, Edit, Delete</small>
        </h1>
    </section>

    <section class="content">
        <!-- Add Button Row -->
        <div class="row mb-2">
            <div class="col-xs-12 text-right">
                <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>module/size/add">
                    <i class="fa fa-plus"></i> Add New Size
                </a>
            </div>
        </div>

        <!-- Validation Errors -->
        <div class="row">
            <div class="col-md-12">
                <?php //echo validation_errors('<div class="alert alert-danger alert-dismissable">', 
                //' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
            </div>
        </div>

        <!-- Size Table -->
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Size List</h3>
                        <div class="box-tools">
                            <form action="#" method="POST" id="searchList" class="form-inline">
                                <div class="input-group input-group-sm">
                                    <input type="text" name="searchText" value="<?php //echo $searchText; ?>" 
                                           class="form-control input-sm" placeholder="Search">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default btn-sm searchList" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div><!-- /.box-header -->

                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover table-striped table-condensed">
                            <thead>
                                <tr>
                                    <th style="width: 60px;">ID</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th class="text-center" style="width: 120px;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php //if (!empty($sizeRecords)) {
                                    //foreach ($sizeRecords as $record) { ?>
                                    <tr>
                                        <td><?php //echo $record->id; ?></td>
                                        <td><?php //echo $record->size_name; ?></td>
                                        <td>
                                            <?php //if ($record->status == 'Active') { ?>
                                                <span class="label label-success">Active</span>
                                            <?php //} else { ?>
                                                <span class="label label-warning">Inactive</span>
                                            <?php //} ?>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-info btn-sm" href="<?php echo base_url().'/module/size/edit/'; ?>" title="Edit">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a class="btn btn-danger btn-sm deleteSize" href="#" data-sizeid="<?php //echo $record->id; ?>" title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php //} 
                                //} else { ?>
                                    <tr>
                                        <td colspan="4" class="text-center">No records found.</td>
                                    </tr>
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

<!-- JS -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();
            var link = jQuery(this).get(0).href;
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "sizeListing/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
