<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-truck" aria-hidden="true"></i> Supplier Management
            <small>Add, Edit, Delete</small>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>module/supplier/add">
                        <i class="fa fa-plus"></i> Add New Supplier
                    </a> 
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if ($error) {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $error; ?>
                </div>
                <?php } ?>

                <?php
                    $success = $this->session->flashdata('success');
                    if ($success) {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $success; ?>
                </div>
                <?php } ?>

                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Supplier List</h3>
                        <div class="box-tools">
                            <form action="#" method="POST" id="searchList">
                                <div class="input-group">
                                    <input type="text" name="searchText" value="<?php echo isset($searchText) ? $searchText : ''; ?>" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-default searchList"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>Organisation</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th>Created On</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if (!empty($supplierRecords) && is_array($supplierRecords)) { ?>
                                <?php 
                                $srNo = isset($page) ? $page + 1 : 1;
                                foreach ($supplierRecords as $record) { ?>
                                    <tr>
                                         <td><?php echo $srNo++; ?></td>
                                        <td><?php echo isset($record->organisation) ? $record->organisation : '-'; ?></td>
                                        <td><?php echo $record->supplier_name; ?></td>
                                        <td><?php echo $record->phone; ?></td>
                                        <td><?php echo !empty($record->email) ? $record->email : '-'; ?></td>
                                        <td><?php echo $record->address; ?></td>
                                        <td>
                                            <?php if ($record->status == 'Active' || $record->status == 1) { ?>
                                                <span class="label label-success">Active</span>
                                            <?php } else { ?>
                                                <span class="label label-warning">Inactive</span>
                                            <?php } ?>
                                        </td>
                                        <td><?php echo date("d-m-Y", strtotime($record->created_at)); ?></td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-info" href="<?php echo base_url().'module/supplier/edit/'.$record->id; ?>" title="Edit"><i class="fa fa-pencil"></i></a>
                                            <a class="btn btn-sm btn-danger deleteSupplier" href="#" data-supplierid="<?php echo $record->id; ?>" title="Delete"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } else { ?>
                                <tr><td colspan="9" class="text-center">No records found.</td></tr>
                            <?php } ?>
                            </tbody>

                        </table>
                    </div>

                    <div class="box-footer clearfix">
                        <?php echo isset($this->pagination) ? $this->pagination->create_links() : ''; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
<script type="text/javascript">
 jQuery(document).ready(function(){

    // Pagination handler (you already have)
    jQuery('ul.pagination li a').click(function (e) {
        e.preventDefault();            
        var link = jQuery(this).get(0).href;            
        var value = link.substring(link.lastIndexOf('/') + 1);
        jQuery("#searchList").attr("action", baseURL + "supplierListing/" + value);
        jQuery("#searchList").submit();
    });

    // Delete supplier
    jQuery('.deleteSupplier').click(function(e){
        e.preventDefault();
        var supplierId = jQuery(this).data('supplierid');

        if(confirm("Are you sure you want to delete this supplier?")) {
            // Redirect to controller delete method
            window.location.href = baseURL + 'module/supplier/delete/' + supplierId;
        }
    });

});
</script>
