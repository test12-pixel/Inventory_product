<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-tags" aria-hidden="true"></i> Brand Management
            <small>Add / Edit Brand</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Brand Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <!-- <?php $this->load->helper("form"); ?> -->
                    <form role="form" id="addBrand" action="#" method="post">
                        <div class="box-body">
                            <div class="row">
                                <!-- Brand Name -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="brand_name">Brand Name</label>
                                        <input type="text" class="form-control required" id="brand_name" name="brand_name" maxlength="100" />
                                    </div>
                                </div>

                                <!-- Brand Description -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="brand_description">Description</label>
                                        <input type="text" class="form-control" id="brand_description" name="brand_description" maxlength="255" />
                                    </div>
                                </div>

                                <!-- Status -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control" id="status" name="status">
                                            <option value="">Select Status</option>
                                            <!-- <option value="<?= ACTIVE ?>">Active</option> -->
                                            <!-- <option value="<?= INACTIVE ?>">Inactive</option> -->
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
                            <a href="<?php echo base_url(); ?>/brandListing" class="btn btn-default">Back</a>

                        </div>
                    </form>
                </div>
            </div>

            <!-- Flash messages and validation -->
            <div class="col-md-4">
                <!-- <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error) {
                ?> -->
                <!-- <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div> -->
                <!-- <?php } ?> -->

                <!-- <?php
                    $success = $this->session->flashdata('success');
                    if($success) {
                ?> -->
                <!-- <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div> -->
                <!-- <?php } ?> -->

                <div class="row">
                    <div class="col-md-12">
                        <!-- <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- <script src="<?php echo base_url(); ?>assets/js/addRole.js" type="text/javascript"></script> -->
