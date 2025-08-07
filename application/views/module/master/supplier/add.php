<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-truck" aria-hidden="true"></i> Supplier Management
            <small>Add / Edit Supplier</small>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- Left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Supplier Details</h3>
                    </div><!-- /.box-header -->

                    <!-- form start -->
                    <!-- <?php $this->load->helper('form'); ?> -->
                    <form role="form" id="addSupplier" action="#" method="post">
                        <div class="box-body">
                            <div class="row">
                                <!-- Supplier Name -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="supplier_name">Supplier Name</label>
                                        <input type="text" class="form-control required" id="supplier_name" name="supplier_name" maxlength="100" />
                                    </div>
                                </div>

                                <!-- Contact Person -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contact_person">Contact Person</label>
                                        <input type="text" class="form-control" id="contact_person" name="contact_person" maxlength="100" />
                                    </div>
                                </div>

                                <!-- Mobile Number -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile">Mobile Number</label>
                                        <input type="text" class="form-control" id="mobile" name="mobile" maxlength="15" />
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" maxlength="100" />
                                    </div>
                                </div>

                                <!-- Address -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                                    </div>
                                </div>

                                <!-- Status -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control" id="status" name="status">
                                            <option value="">Select Status</option>
                                            <!-- <option value="<?= ACTIVE ?>">Active</option>
                                            <option value="<?= INACTIVE ?>">Inactive</option> -->
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                             <a href="<?php echo base_url(); ?>supplierListing" class="btn btn-default">Back</a> 
                        </div>
                    </form>
                </div>
            </div>

            <!-- Right column -->
            <div class="col-md-4">
                <!-- <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if ($error) {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if ($success) {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?> -->

                <div class="row">
                    <div class="col-md-12">
                        <!-- <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- <script src="<?php echo base_url(); ?>assets/js/addSupplier.js" type="text/javascript"></script> -->
