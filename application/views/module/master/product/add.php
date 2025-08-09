<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-user-circle-o" aria-hidden="true"></i> Product Management
        <small>Add / Edit Product</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Product Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                   <form role="form" id="addProduct" action="#" method="post">
    <div class="box-body">
        <div class="row">
            <!-- Product Name -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="product_name">Name</label>
                    <input type="text" class="form-control required" id="product_name" name="product_name" maxlength="100" />
                </div>
            </div>

            <!-- Category -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control required" id="category" name="category">
                        <option value="">Select Category</option>
                        <option value="Wine">Wine</option>
                        <option value="Whisky">Whisky</option>
                        <option value="Beer">Beer</option>
                        <option value="Vodka">Vodka</option>
                        <option value="Rum">Rum</option>
                    </select>
                </div>
            </div>

            <!-- Brand -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="brand">Brand</label>
                    <input type="text" class="form-control" id="brand" name="brand" maxlength="50" />
                </div>
            </div>

            <!-- Size/Volume -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="size">Size / Volume</label>
                    <input type="text" class="form-control" id="size" name="size" placeholder="750ml / 1L etc." />
                </div>
            </div>

            <!-- Quantity in Stock -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="quantity">Quantity in Stock</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" />
                </div>
            </div>

            <!-- Purchase Price -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="purchase_price">Purchase Price (₹)</label>
                    <input type="number" step="0.01" class="form-control" id="purchase_price" name="purchase_price" />
                </div>
            </div>

            <!-- Selling Price -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="selling_price">Selling Price (₹)</label>
                    <input type="number" step="0.01" class="form-control" id="selling_price" name="selling_price" />
                </div>
            </div>

            <!-- MRP -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="mrp">MRP (₹)</label>
                    <input type="number" step="0.01" class="form-control" id="mrp" name="mrp" />
                </div>
            </div>

            <!-- Batch Number -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="batch_no">Batch Number</label>
                    <input type="text" class="form-control" id="batch_no" name="batch_no" />
                </div>
            </div>

            <!-- Barcode -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="barcode">Barcode</label>
                    <input type="text" class="form-control" id="barcode" name="barcode" />
                </div>
            </div>

            <!-- Expiry Date -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="expiry_date">Expiry Date</label>
                    <input type="date" class="form-control" id="expiry_date" name="expiry_date" />
                </div>
            </div>

            <!-- Status -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="">Select Status</option>
                        <option value="<?= ACTIVE ?>">Active</option>
                        <option value="<?= INACTIVE ?>">Inactive</option>
                    </select>
                </div>
            </div>
        </div>
    </div><!-- /.box-body -->

    <div class="box-footer">
        <input type="submit" class="btn btn-primary" value="Submit" />
        <input type="reset" class="btn btn-default" value="Reset" />
        <a href="<?php echo base_url(); ?>productListing" class="btn btn-default">Back</a>
    </div>
</form>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>    
    </section>
    
</div>
<script src="<?php echo base_url(); ?>assets/js/addRole.js" type="text/javascript"></script>