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
                    <a href="#" class="list-group-item">
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
            <div class="panel-heading"><label>Forgot password</label></div>
            <div class="well-sm">
            <?php echo form_open('register_controller/forgot_password',array('class'=>'form-horizontal'));?>
                <label class="label-info">Please enter your Email or username to retrieve password*</label>
            <div class="control-group">
                <label class="control-label" for="InputEmail"><b>Email or Username</b></label>
                <div class="controls">
                    <font color="red"><?php echo form_error('us');?></font>
                    <input type="text" class="form-control" name="us">
                </div>
            </div>
                
            <div class="text text-center"><br>
                <?php if(!empty($data)){
                  echo '<font color="red">'.$data.'</font>';
                   }?>  
                <button type="submit" class="btn bg-primary">submit</button></div>
             </div>
             </div>
            <?php echo form_close();?>
            </div>
        </div>
            </div>
    </div>
   
    </div>
<?php include_once 'footer.php';?>



