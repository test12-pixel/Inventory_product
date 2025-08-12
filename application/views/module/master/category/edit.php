<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-tags" aria-hidden="true"></i> Wine Shop Inventory
            <small>Add / Edit Category</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <!-- Left column -->
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Category Details</h3>
                    </div>

                    <form role="form" action="#" method="post" id="editCategory">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6"> 
                                    <!-- Category Name -->
                                    <div class="form-group">
                                        <label for="category_name">Name</label>
                                        <input type="text" class="form-control" id="category_name" name="category_name" required />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <!-- Status -->
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
                            <a href="<?php echo base_url(); ?>categoryListing" class="btn btn-default">Back</a>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Right column for flash messages -->
            <div class="col-md-4">
                <!--
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
                -->
            </div>
        </div>
    </section>
</div>

<!-- Optional JS -->
<!-- <script src="<?php echo base_url(); ?>assets/js/addCategory.js" type="text/javascript"></script> -->
<script src="<?php echo base_url(); ?>assets/js/addRole.js" type="text/javascript"></script>
