<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-truck" aria-hidden="true"></i> Supplier Management
            <small>Edit Supplier</small>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- Left column: Edit Form -->
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Update Supplier Details</h3>
                    </div>

                    <!-- Edit Supplier Form -->
                    <form role="form" action="<?php echo base_url('module/Supplier/updateSupplier'); ?>" method="post" id="editSupplier">
                        <div class="box-body">
                            <div class="row">

                                <!-- Organisation -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="organisation">Organisation</label>
                                        <input type="text" class="form-control required" id="organisation" name="organisation" 
                                               value="<?php echo set_value('organisation', $record->organisation); ?>" maxlength="150" required />
                                    </div>
                                </div>

                                <!-- Supplier Name -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="supplier_name">Supplier Name</label>
                                        <input type="text" class="form-control required" id="supplier_name" name="supplier_name" 
                                               value="<?php echo set_value('supplier_name', $record->supplier_name); ?>" maxlength="100" required />
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control required" id="phone" name="phone" 
                                               value="<?php echo set_value('phone', $record->phone); ?>" maxlength="15" required />
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email (optional)</label>
                                        <input type="email" class="form-control" id="email" name="email" 
                                               value="<?php echo set_value('email', $record->email); ?>" maxlength="100" />
                                    </div>
                                </div>

                                <!-- Address -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <textarea class="form-control required" id="address" name="address" rows="3"><?php echo set_value('address', $record->address); ?></textarea>
                                    </div>
                                </div>

                                <!-- Status -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control required" id="status" name="status">
                                            <option value="">Select Status</option>
                                            <option value="1" <?php echo set_select('status', '1', $record->status == 1); ?>>Active</option>
                                            <option value="0" <?php echo set_select('status', '0', $record->status == 0); ?>>Inactive</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <input type="hidden" name="id" value="<?php echo $record->id; ?>">
                            <input type="submit" class="btn btn-primary" value="Update" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                            <a href="<?php echo base_url('module/supplier/supplierListing'); ?>" class="btn btn-default">Back</a>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Right column: Flash messages -->
            <div class="col-md-4">
                <?php
                    $error = $this->session->flashdata('error');
                    if ($error) {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $error; ?>
                </div>
                <?php } ?>

                <?php
                    $success = $this->session->flashdata('success');
                    if ($success) {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $success; ?>
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
