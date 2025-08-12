<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-arrows-alt" aria-hidden="true"></i> Wine Shop Inventory
            <small>Add / Edit Size</small>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- Left column -->
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Enter Size Details</h3>
                    </div>

                    <form role="form" action="#" method="post" id="editSize">
                        <div class="box-body">
                            <div class="row">
                                <!-- Size Name -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="size_name">Name <span class="text-danger">*</span></label>
                                        <input type="text" 
                                               class="form-control" 
                                               id="size_name" 
                                               name="size_name" 
                                               placeholder="Enter size name" 
                                               required />
                                    </div>
                                </div>

                                <!-- Status -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="status">Status <span class="text-danger">*</span></label>
                                        <select class="form-control" id="status" name="status" required>
                                            <option value="">Select</option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                            <a href="<?php echo base_url(); ?>sizeListing" class="btn btn-default">Back
                            </a>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Right column for flash messages (optional) -->
            <!--
            <div class="col-md-4">
                <?php
                // $error = $this->session->flashdata('error');
                // if($error) {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php // echo $error; ?>                    
                </div>
                <?php // } ?>

                <?php
                // $success = $this->session->flashdata('success');
                // if($success) {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php // echo $success; ?>
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

<!-- Optional JS -->
<!-- <script src="<?php echo base_url(); ?>assets/js/addSize.js"></script> -->
<script src="<?php echo base_url(); ?>assets/js/addRole.js"></script>
