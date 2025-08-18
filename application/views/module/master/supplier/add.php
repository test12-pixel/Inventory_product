<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-truck" aria-hidden="true"></i> Supplier Management
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

                    <?php $this->load->helper('form'); ?>
                    <form role="form" id="addSupplier" action="<?php echo base_url('module/Supplier/addNewSupplier'); ?>" method="post">
                        <div class="box-body">
                            <div class="row">
                                <!-- Organisation -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="organisation">Organisation</label>
                                        <input type="text" class="form-control required" id="organisation" name="organisation" maxlength="150" value="<?php echo set_value('organisation'); ?>" />
                                    </div>
                                </div>

                                <!-- Supplier Name -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="supplier_name">Supplier Name</label>
                                        <input type="text" class="form-control required" id="supplier_name" name="supplier_name" maxlength="100" value="<?php echo set_value('supplier_name'); ?>" />
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control required" id="phone" name="phone" maxlength="15" value="<?php echo set_value('phone'); ?>" />
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email (optional)</label>
                                        <input type="email" class="form-control" id="email" name="email" maxlength="100" value="<?php echo set_value('email'); ?>" />
                                    </div>
                                </div>

                                <!-- Address -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <textarea class="form-control required" id="address" name="address" rows="3"><?php echo set_value('address'); ?></textarea>
                                    </div>
                                </div>

                                <!-- Status -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control required" id="status" name="status">
                                            <option value="">Select Status</option>
                                            <option value="1" <?php echo set_select('status', '1'); ?>>Active</option>
                                            <option value="0" <?php echo set_select('status', '0'); ?>>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                            <a href="<?php echo base_url('master/supplierListing'); ?>" class="btn btn-default">Back</a> 
                        </div>
                    </form>
                </div>
            </div>

            <!-- Right column -->
            <div class="col-md-4">
                <?php
                    $error = $this->session->flashdata('error');
                    if ($error) {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <?php echo $error; ?>                    
                </div>
                <?php } ?>

                <?php  
                    $success = $this->session->flashdata('success');
                    if ($success) {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <?php echo $success; ?>
                </div>
                <?php } ?>

                <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', '<button type="button" class="close" data-dismiss="alert">×</button></div>'); ?>
            </div>
        </div>
    </section>
</div>

<script src="<?php echo base_url(); ?>assets/js/addSupplier.js" type="text/javascript"></script>
