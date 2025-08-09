<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-balance-scale" aria-hidden="true"></i> Wine Shop Inventory
            <small>Add / Edit Unit</small>
        </h1>
    </section>
    
    <section class="content">
        <div class="row">
            <!-- Left column -->
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Unit Details</h3>
                    </div>

                    <form role="form" action="#" method="post" id="editUnit">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="unit_name">Name</label>
                                        <input type="text" class="form-control" id="unit_name" name="unit_name" placeholder="e.g. 100 ml" required />
                                    </div>
                                </div>

                                <div class="col-md-6">
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
                            <a href="<?php echo base_url(); ?>unitListing" class="btn btn-default">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
