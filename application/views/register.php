<?php include("inc/header.php");?>
<div class="container">
    <?php echo form_open("welcome/adminSignup",['class'=>'form=horizontal']);?>
    <?php if($msg = $this->session->flashdata('message')):?>
        <div class="row">
            <div class="col-md-6">
                <div class="alert alert-dismissible alert-success">
                    <?php echo $msg;?>    
                </div>
            </div>
        </div>   
    <?php endif;?>     
    <h3>ADMIN REGISTRATION</h3>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">Username</label>
                <div class="col-md-9">
                    <?php echo form_input(['name' =>'username','class' =>'form-control','placeholder'=>'Username','value'=>set_value('username')]);?>
                </div>
                <?php echo form_error ('username','<div class="col-md-9 text-danger">','</div>');?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">Email</label>
                <div class="col-md-9">
                    <?php echo form_input(['name' =>'email','class' =>'form-control','placeholder'=>'Email','value'=>set_value('email')]);?>
                </div>
                <?php echo form_error ('email','<div class="col-md-9 text-danger">','</div>');?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">Gender</label>
                <div class="col-md-9">
                    <select class="form-control" name="gender">
                        <option value="">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>    
                </div>
                <?php echo form_error ('gender','<div class="col-md-9 text-danger">','</div>');?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">Role</label>
                <div class="col-md-9">
                    <select class="form-control" name="role_id">
                        <option value="">Select</option>
                        <?php if(count($roles)):?>
                            <?php foreach($roles as $role):?>
                                <option value="<?php echo $role->role_id; ?>"><?php echo $role->rolename; ?></option>
                            <?php endforeach;?>
                        <?php endif; ?>
                    </select>    
                </div>
                <?php echo form_error('role_id','<div class="col-md-9 text-danger">','</div>');?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">Password</label>
                <div class="col-md-9">
                    <?php echo form_password(['name' =>'password','class' =>'form-control','placeholder'=>'Password']);?>
                </div>
                <?php echo form_error ('password','<div class="col-md-9 text-danger">','</div>');?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">Password Again</label>
                <div class="col-md-9">
                    <?php echo form_password(['name' =>'confpwd','class' =>'form-control','placeholder'=>'Password Again']);?>
                </div>
                <?php echo form_error ('confpwd','<div class="col-md-9 text-danger">','</div>');?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <div class="col-md-offset-3 col-md-9">
                    <button type="submit" class="btn btn-primary">REGISTER</button>
                    <?php echo anchor("Welcome","BACK",['class'=>'btn btn-primary']);?>
                </div>
            </div>
        </div>
    </div>
    <?php echo form_close();?>
</div>
<?php include("inc/footer.php");?> 


