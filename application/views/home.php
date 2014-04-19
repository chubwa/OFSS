<?php include_once 'header.php';?>
<div id="content1">
    <div class="col-lg-4">
            <div class="cst1">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <p>Failed to Login.?</p>
            </div>
            <div class="list-group">
                   <a href="#" class="list-group-item">
                        Report problem
                   </a>
                <a href="<?php echo site_url('register_controller/forgot_password');?>" class="list-group-item">
                        Forgot password
                    </a>
                    <a href="#" class="list-group-item">
                        <span class="badge">0</span>
                        Help
                    </a>
            </div>
        </div>
            </div>
    </div>
        <div class="col-lg-8">
          <div class="cst">
            <div class="panel panel-primary " style="margin-left: 80px;">
            <div class="panel-heading"><label>Login</label></div>
            <div class="well-sm">
                <?php if(!empty($records)){
            echo $records;
            }?>
            <?php echo form_open('login',array('class'=>'form-horizontal'));?>
            <div class="control-group">
                <label class="control-label" for="InputEmail"><b>Email or Username</b></label>
                <div class="controls">
                    <font color="red"><?php echo form_error('us');?></font>
                    <input type="text" class="form-control" name="us">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label"><b>Password</b></label>
                <div class="controls">
                    <font color="red"><?php echo form_error('pd');?></font>
                    <input type="password" name="pd" class="form-control">
                </div>
            </div>
                 <div class="control-group">
                    <div class="controls">
                    <label class="checkbox">
                    <input type="checkbox"> Remember me
                    </label>
                        
                    <button type="submit" class="btn bg-primary">Sign in</button>
                    </div>
                    </div>
            <?php echo form_close();?>
            </div>
        </div>
            </div>
    </div>
   
    </div>
<?php include_once 'footer.php';?>

