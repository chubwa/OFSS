<?php include_once 'header2.php';?>
<div id="content">
    <ul class="nav nav-tabs">
        <li></li>
    </ul>
    <div class="tab-content" style="display: block">
        <div class="col-lg-4"  id="dt">
            <div class="panel panel-primary">
            <div class="panel-heading">
                <p>System Setting</p>
            </div>
            <div class="list-group">
                <a href="<?php echo site_url('register_controller');?>" class="list-group-item btn-link">
                        Send notifications to member
                   </a>
                    <a href="#" class="list-group-item">
                        Report problem
                    </a>
                <a href="<?php echo site_url('admin_controller');?>" class="list-group-item">
                        <span class="badge">0</span>
                        Back to manage product
                    </a>
                    <a href="#" class="list-group-item">
                        <span class="badge">0</span>
                        System alerts
                    </a>
                    <a href="#" class="list-group-item">
                        <span class="badge">0</span>
                        Balance in Litres
                    </a>
                     <a href="#" class="list-group-item">
                        View summary 
                    
                    </a>
                    <a href="#" class="list-group-item">
                       <span class="badge">$0</span>
                        Outstanding profit 
                    </a>
                   <a href="#" class="list-group-item">
                       <span class="badge">$1500000</span>
                        Expected Total profit 
                    </a>
            </div>
            
       </div>
        </div>
        <div class="col-lg-7" id="dt">
            <div class="panel-primary dt1">
                <div class="panel-heading"><label>Add an account</label></div>
                <div class="well bs-component">
                    <?php if(!empty($smg)){echo'<label class="label-success" style="margin-left:50px;">'. $smg.'</label>';}?>
                    <?php echo form_open('register_controller/register_form',array('class'=>'form-horizontal panel-body'));?>
                    <div class="form-group">
                        <label for="firstname" class="col-lg-4 control-label">First name</label>
                        <div class="col-lg-8">
                            <font color="red" class="f1"><?php echo form_error('fn');?></font>
                            <input type="text" name="fn" class="form-control fs" placeholder="First name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="secondname" class="col-lg-4 control-label">Second name</label>
                        <div class="col-lg-8">
                            <font color="red" class="f2"><?php echo form_error('sn');?></font>
                            <input type="text" name="sn" class="form-control fs2" placeholder="Second name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Username" class="col-lg-4 control-label">Username</label>
                        <div class="col-lg-8">
                            <font color="red" class="f3"><?php echo form_error('us');?></font>
                            <input type="text" name="us" class="form-control fs3" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Email" class="col-lg-4 control-label">Email</label>
                        <div class="col-lg-8">
                            <font color="red" class="f4"><?php echo form_error('em');?></font>
                            <input type="text" name="em" class="form-control fs4" placeholder="example@gmail.com">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-lg-4 control-label">Password</label>
                        <div class="col-lg-8">
                            <font color="red" class="f5"><?php echo form_error('pd');?></font>
                            <input type="password" name="pd" class="form-control fs5" placeholder="password">
                        </div>
                    </div>
                    <div class="text-right"><button type="submit" class="btn bg-primary sng">Sign up</button></div>
                    <?php echo form_close();?>
                </div>
            </div>
            <div class="load"></div>
        </div>
    </div>
</div>

<?php include_once 'footer.php';?>

