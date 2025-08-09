<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-glass" aria-hidden="true"></i> Wine Shop Inventory
            <small>Add / Edit Product</small>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- Left column -->
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Product Details</h3>
                    </div>

                    <form role="form" action="#" method="post" id="editProduct">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="product_name">Name</label>
                                        <input type="text" class="form-control" id="product_name" name="product_name" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="brand_name">Brand Name</label>
                                        <input type="text" class="form-control" id="brand_name" name="brand_name" />
                                    </div>
                                    <div class="form-group">
                                        <label for="size">Size</label>
                                        <input type="text" class="form-control" id="size" name="size" />
                                    </div>
                                    <div class="form-group">
                                        <label for="cost_price">Cost Price</label>
                                        <input type="number" step="0.01" class="form-control" id="cost_price" name="cost_price" />
                                    </div>
                                    <div class="form-group">
                                        <label for="selling_price">Selling Price</label>
                                        <input type="number" step="0.01" class="form-control" id="selling_price" name="selling_price" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="stock_qty">Stock Quantity</label>
                                        <input type="number" class="form-control" id="stock_qty" name="stock_qty" />
                                    </div>
                                    <div class="form-group">
                                        <label for="supplier_name">Supplier Name</label>
                                        <input type="text" class="form-control" id="supplier_name" name="supplier_name" />
                                    </div>
                                    <div class="form-group">
                                        <label for="category">Category</label>
                                        <input type="text" class="form-control" id="category" name="category" />
                                    </div>
                                    <div class="form-group">
                                        <label for="expiry_date">Expiry Date</label>
                                        <input type="date" class="form-control" id="expiry_date" name="expiry_date" />
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
                             <a href="<?php echo base_url(); ?>/productListing" class="btn btn-default">Back</a>
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

<!-- Optional JS for form validation -->

<script src="<?php echo base_url(); ?>assets/js/addRole.js" type="text/javascript"></script>