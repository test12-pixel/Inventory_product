<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-folder" aria-hidden="true"></i> Wine Shop Inventory
            <small>Edit Category</small>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- Left column -->
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Update Category Details</h3>
                    </div>

                    <form role="form" action="<?php echo base_url(); ?>module/category/updateCategory" method="post" id="editCategory">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6"> 
                                    <!-- Category Name -->
                                    <div class="form-group">
                                        <label for="category_name">Name</label>
                                        <input type="text" class="form-control" id="category_name" name="category_name" 
                                               value="<?php echo isset($categoryInfo->name) ? $categoryInfo->name : ''; ?>" 
                                               required />
                                        <input type="hidden" name="categoryId" value="<?php echo isset($categoryInfo->id) ? $categoryInfo->id : ''; ?>" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <!-- Status -->
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control" id="status" name="status">
                                            <option value="">Select</option>
                                            <option value="Active" <?php echo (isset($categoryInfo->status) && $categoryInfo->status == 'Active') ? 'selected' : ''; ?>>Active</option>
                                            <option value="Inactive" <?php echo (isset($categoryInfo->status) && $categoryInfo->status == 'Inactive') ? 'selected' : ''; ?>>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Update" />
                            <a href="<?php echo base_url(); ?>categoryListing" class="btn btn-default">Back</a>
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
<!-- <script src="<?php echo base_url(); ?>assets/js/editCategory.js" type="text/javascript"></script> -->
