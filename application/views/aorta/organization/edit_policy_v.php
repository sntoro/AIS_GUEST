<aside class="right-side">
    <section class="content-header">
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('index.php/basis/home_c/') ?>">Home</a></li>
            <li><a href="<?php echo base_url('index.php/aorta/master_data_c/manage_policy') ?>">Manage Policy</a></li>
            <li><a href="#"><strong>Edit Policy</strong></a></li>
        </ol>
    </section>

    <section class="content">
        <?php
        if (validation_errors()) {
            echo '<div class = "alert alert-danger"><strong>WARNING !</strong>' . validation_errors() . '</div >';
        }
        echo form_open('aorta/master_data_c/update_policy', 'class="form-horizontal"');
        ?>

        <div class="row">
            <div class="col-md-12">
                <div class="grid">
                    <div class="grid-header">
                        <i class="fa fa-sitemap"></i>
                        <span class="grid-title"><strong>EDIT</strong> POLICY</span>
                        <div class="pull-right grid-tools">
                            <a data-widget="collapse" title="Collapse"><i class="fa fa-chevron-up"></i></a>
                        </div>
                    </div>
                    <div class="grid-body">
                        <input name="POLICY_KEY" class="form-control" type="hidden" value="<?php echo $data->POLICY_KEY; ?>">

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Policy Description</label>
                            <div class="col-sm-5">
                                <input name="POLICY_DESC" class="form-control" maxlength="40" required type="text" value="<?php echo $data->POLICY_DESC; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Policy Value</label>
                            <div class="col-sm-5">
                                <input name="POLICY_VAL" class="form-control" required type="number" style="width: 120px;" value="<?php echo $data->POLICY_VAL; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-5">
                                <div class="btn-group">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Update</button>
                                    <?php echo anchor('aorta/master_data_c/manage_policy', 'Cancel', 'class="btn btn-default"');
                                    echo form_close();
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
</aside>

