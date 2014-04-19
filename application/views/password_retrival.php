<?php include_once 'header.php';?>
<div id="content1">
    <div class="col-lg-4">
            <div class="cst1">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <p>Failed to Login.?</p>
            </div>
            <div class="list-group">
                <a href="<?php echo site_url('login');?>" class="list-group-item">
                        Login
                   </a>
                <a href="<?php echo site_url('register_controller/forgot_password');?>" class="list-group-item">
                        Forgot password
                    </a>
                <a href="<?php echo site_url('register_controller');?>" class="list-group-item">
                        
                        Register
                    </a>
            </div>
        </div>
            </div>
    </div>
        <div class="col-lg-8">
        <div class="cst">
            <div class="panel panel-primary " style="margin-left: 80px;">
            <div class="panel-heading"><label>Update password</label></div>
            <div class="well-sm">
                <?php if(!empty($data1)){ echo $data1;}?>
            <?php echo form_open('register_controller/password_retrival',array('class'=>'form-horizontal'));?>
            <div class="control-group">
                <label class="control-label" for="InputEmail"><b>Email or Username</b></label>
                <div class="controls">
                    <input type="text" class="form-control" placeholder="<?php if(!empty($data)){ echo $data;};?>" disabled>
                </div>
            </div>
                <div class="control-group">
                <label class="control-label" for="InputEmail"><b>Password</b></label>
                <div class="controls">
                    <font color="red"><?php echo form_error('pd');?></font>
                    <input type="password" class="form-control" name="pd">
                </div>
            </div>
                <div class="control-group">
                <label class="control-label" for="InputEmail"><b>Confirm password</b></label>
                <div class="controls">
                    <font color="red"><?php echo form_error('confpd');?></font>
                    <input type="password" class="form-control" name="confpd">
                </div>
            </div>
                
            <div class="text text-center"><br> 
                <button type="submit" class="btn bg-primary">update</button></div>
             </div>
             </div>
            <?php echo form_close();?>
            </div>
        </div>
            </div>
    </div>
   
    </div>
<?php include_once 'footer.php';?>


