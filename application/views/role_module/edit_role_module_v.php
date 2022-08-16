<div id="3rd_panel" class="grid">
    <div class="grid-header">
        <i class="fa fa-calendar"></i>
        <span class="grid-title">EDIT <strong>ROLE</strong></span>
    </div>
    <div class="grid-body">
        <?php echo form_open('budget/role_module_c/update_role', 'class="form-horizontal"'); ?>
        <div hidden class="form-group">
            <label class="col-sm-4 control-label">Role</label>
            <div class="col-sm-8">
                <input name="INT_ID_ROLE" value="<?php echo $role->INT_ID_ROLE; ?>"   class="form-control"  required type="text">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Role</label>
            <div class="col-sm-8">
                <input name="CHR_ROLE" value="<?php echo trim($role->CHR_ROLE); ?>"  autofocus class="form-control" maxlength="20" required type="text">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Modules</label>
            <div class="col-sm-8">
                <select name="INT_ID_FUNCTION[]" multiple id="e2" class="form-control" style="width:240px">
                    <?php
                   
                    $x = 1;
                    foreach ($module as $module_data) {
                        echo '<optgroup label="' . $module_data->CHR_MODULE . '">';
                        foreach ($function as $function_data) {
                            if ($module_data->INT_ID_MODULE == $function_data->INT_ID_MODULE) {
                                foreach ($rm as $rm_data) {
                                    if ($rm_data->INT_ID_FUNCTION == $function_data->INT_ID_FUNCTION) {
                                        ?>
                                        <option selected value="<?php echo $function_data->INT_ID_FUNCTION; ?>"><?php echo $function_data->CHR_FUNCTION; ?></option>
                                        <?php
                                        $x = $function_data->INT_ID_FUNCTION;
                                    }
                                }
                                if ($x != $function_data->INT_ID_FUNCTION) {
                                    ?>
                                    <option value="<?php echo $function_data->INT_ID_FUNCTION; ?>"><?php echo $function_data->CHR_FUNCTION; ?></option>
                                    <?php
                                }
                            }
                        }
                        echo '</optgroup>';
                    }
                    ?> 

                </select>
            </div>
        </div>
        
        


        <div class="form-group text-center">
            <div class="btn-group">
                <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save</button>
                <?php echo anchor('budget/role_module_c', 'Cancel', 'class="btn btn-default"'); ?>

            </div>
        </div>

        <?php echo form_close(); ?>
    </div>
</div>
