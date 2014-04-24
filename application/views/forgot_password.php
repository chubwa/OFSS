<?php include_once 'header.php';?>
<div id="content1">
    <div class="col-lg-9">
        <div class="cst">
            <div class="panel panel-primary " style="margin-left: 200px;">
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
            <ul class="nav nav-pills" style="margin-left: 100px;">
                <li><a href="<?php echo site_url('login');?>">
                        Login<span class="badge"></span>
                   </a></li>
                   <li class=""><a href="<?php echo site_url('');?>">
                        Failed to Login.?<span class="badge"></span>
                     </a>
                   </li>
                   <li><a href="<?php echo site_url('');?>">
                        Help<span class="badge">0</span>
                     </a>
                   </li>
            </ul>
            </div>
        </div>
            </div>
    </div>
   
    </div>
<?php include_once 'footer.php';?>



