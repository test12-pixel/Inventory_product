<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-tags" aria-hidden="true"></i> Wine Shop Inventory
            <small>Add / Edit Brand</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <!-- Left column -->
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Brand Details</h3>
                    </div>

                    <form role="form" action="#" method="post" id="editBrand">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="brand_name">Brand Name</label>
                                        <input type="text" class="form-control" id="brand_name" name="brand_name" required />
                                    </div>

                                    <div class="form-group">
                                        <label for="brand_code">Brand Code</label>
                                        <input type="text" class="form-control" id="brand_code" name="brand_code" />
                                    </div>

                                    <div class="form-group">
                                        <label for="manufacturer">Manufacturer</label>
                                        <input type="text" class="form-control" id="manufacturer" name="manufacturer" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="origin_country">Country of Origin</label>
                                        <input type="text" class="form-control" id="origin_country" name="origin_country" />
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
                            <a href="<?php echo base_url(); ?>brandListing" class="btn btn-default">Back</a>
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

        <!-- Brand Listing -->
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Brand List</h3>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Brand Name</th>
                                    <th>Brand Code</th>
                                    <th>Manufacturer</th>
                                    <th>Country</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!--
                                <?php
                                // if (!empty($brandList)) {
                                //     $i = 1;
                                //     foreach ($brandList as $brand) {
                                ?>
                                <tr>
                                    <td><?php // echo $i++; ?></td>
                                    <td><?php // echo $brand->brand_name; ?></td>
                                    <td><?php // echo $brand->brand_code; ?></td>
                                    <td><?php // echo $brand->manufacturer; ?></td>
                                    <td><?php // echo $brand->origin_country; ?></td>
                                    <td>
                                        <?php // echo ($brand->status == 1) ? 'Active' : 'Inactive'; ?>
                                    </td>
                                </tr>
                                <?php // } } else { ?>
                                -->
                                <tr>
                                    <td colspan="6" class="text-center">No records found.</td>
                                </tr>
                                <!-- <?php // } ?> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Optional JS -->
<!-- <script src="<?php echo base_url(); ?>assets/js/addBrand.js" type="text/javascript"></script> -->
<script src="<?php echo base_url(); ?>assets/js/addRole.js" type="text/javascript"></script>