<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-tags" aria-hidden="true"></i> Wine Shop Inventory
            <small>Edit Brand</small>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- Left column -->
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Update Brand Details</h3>
                    </div>

                    <form role="form" action="<?php echo base_url(); ?>module/brand/updateBrand" method="post" id="editBrand">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6"> 
                                    <!-- Brand Name -->
                                    <div class="form-group">
                                        <label for="brand_name">Name</label>
                                        <input type="text" class="form-control" id="brand_name" name="brand_name" 
                                               value="<?php echo isset($brandInfo->name) ? $brandInfo->name : ''; ?>" 
                                               required />
                                        <input type="hidden" name="brandId" value="<?php echo isset($brandInfo->id) ? $brandInfo->id : ''; ?>" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <!-- Status -->
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control" id="status" name="status">
                                            <option value="">Select</option>
                                            <option value="Active" <?php echo (isset($brandInfo->status) && $brandInfo->status == 'Active') ? 'selected' : ''; ?>>Active</option>
                                            <option value="Inactive" <?php echo (isset($brandInfo->status) && $brandInfo->status == 'Inactive') ? 'selected' : ''; ?>>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Update" />
                            <a href="<?php echo base_url(); ?>brandListing" class="btn btn-default">Back</a>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Right column for flash messages -->
            <div class="col-md-4">
                <?php
                $error = $this->session->flashdata('error');
                if($error) {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $error; ?>                    
                </div>
                <?php } ?>

                <?php
                $success = $this->session->flashdata('success');
                if($success) {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $success; ?>
                </div>
                <?php } ?>

                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', '</div>'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Optional JS -->
<!-- <script src="<?php echo base_url(); ?>assets/js/editBrand.js" type="text/javascript"></script> -->
