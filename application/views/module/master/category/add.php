<div class="content-wrapper">
    <!-- Content Header -->
    <section class="content-header">
        <h1>
            <i class="fa fa-folder" aria-hidden="true"></i> Category Management
            <small>Add Category</small>
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

                    <!-- Form Start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addCategory" action="<?php echo base_url(); ?>module/category/addNewCategory" method="post">
                        <div class="box-body">
                            <div class="row">
                                <!-- Category Name -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="category_name">Category Name</label>
                                        <input type="text" class="form-control required" id="category_name" name="category_name" maxlength="100" value="<?php echo set_value('category_name'); ?>" />
                                    </div>
                                </div>

                                <!-- Status -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control" id="status" name="status">
                                            <option value="">Select Status</option>
                                            <option value="Active" <?php echo set_select('status', 'Active'); ?>>Active</option>
                                            <option value="Inactive" <?php echo set_select('status', 'Inactive'); ?>>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Submit & Actions -->
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                            <a href="<?php echo base_url(); ?>module/category" class="btn btn-default">Back</a>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Flash messages and validation -->
            <div class="col-md-12">
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
