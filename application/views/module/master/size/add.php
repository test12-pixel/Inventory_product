<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-arrows-v" aria-hidden="true"></i> Size Management
            <small>Add / Edit Size</small>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- Left column -->
            <div class="col-md-12">
                <!-- General form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Size Details</h3>
                    </div><!-- /.box-header -->

                    <!-- form start -->
                    <!-- <?php $this->load->helper("form"); ?> -->
                    <form role="form" id="addSize" action="#" method="post">
                        <div class="box-body">
                            <div class="row">
                                <!-- Size Name -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="size_name">Name</label>
                                        <input type="text" class="form-control required" id="size_name" name="size_name" maxlength="100" />
                                    </div>
                                </div>

                                <!-- Status -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control" id="status" name="status">
                                            <option value="">Select Status</option>
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
                            <a href="<?php echo base_url(); ?>/sizeListing" class="btn btn-default">Back</a>
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

<!-- <script src="<?php echo base_url(); ?>assets/js/addSize.js" type="text/javascript"></script> -->
