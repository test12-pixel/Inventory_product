<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-arrows-alt" aria-hidden="true"></i> Wine Shop Inventory
            <small>Edit Size</small>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- Left column -->
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Update Size Details</h3>
                    </div>

                    <!-- PHP Form Helper -->
                    <!-- <?php $this->load->helper("form"); ?> -->

                    <form role="form" action="<?php echo base_url(); ?>module/size/updateSize" method="post" id="editSize">
                        <div class="box-body">
                            <div class="row">
                                <!-- Hidden ID -->
                                <input type="hidden" name="size_Id" value="<?php echo $sizeInfo->id; ?>">

                                <!-- Size Name -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="size_name">Name <span class="text-danger">*</span></label>
                                        <input type="text"
                                               class="form-control required"
                                               id="size_name"
                                               name="size_name"
                                               value="<?php echo $sizeInfo->name; ?>"
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
                                            <option value="1" <?php if($sizeInfo->status == 1) {echo "selected";} ?>>Active</option>
                                            <option value="0" <?php if($sizeInfo->status == 0) {echo "selected";} ?>>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="<?php echo base_url(); ?>sizeListing" class="btn btn-default">Back</a>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Right column (optional for flash messages) -->
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
<!-- <script src="<?php echo base_url(); ?>assets/js/editSize.js"></script> -->
