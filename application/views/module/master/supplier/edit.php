<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-truck" aria-hidden="true"></i> Wine Shop Inventory
            <small>Add / Edit Supplier</small>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- Left column -->
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Supplier Details</h3>
                    </div>

                    <form role="form" action="#" method="post" id="editSupplier">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="supplier_name">Supplier Name</label>
                                        <input type="text" class="form-control" id="supplier_name" name="supplier_name" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="contact_person">Contact Person</label>
                                        <input type="text" class="form-control" id="contact_person" name="contact_person" />
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="text" class="form-control" id="phone" name="phone" />
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <textarea class="form-control" id="address" name="address"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control" id="status" name="status">
                                            <option value="">Select</option>
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
                            <a href="<?php  echo base_url(); ?>/supplierListing" class="btn btn-default">Back</a>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Optional: Right column for flash messages -->
            <!--
            <div class="col-md-4">
                <?php
                // $this->load->helper('form');
                // $error = $this->session->flashdata('error');
                // if($error) {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php // echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php // } ?>

                <?php
                // $success = $this->session->flashdata('success');
                // if($success) {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php // echo $this->session->flashdata('success'); ?>
                </div>
                <?php // } ?>

                <div class="row">
                    <div class="col-md-12">
                        <?php // echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
            -->
        </div>
    </section>
</div>

<!-- Optional JS for form validation -->
<!-- <script src="<?php // echo base_url(); ?>assets/js/addSupplier.js" type="text/javascript"></script> -->
