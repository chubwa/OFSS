<?php include_once 'header2.php';?>
<div id="content">
    <ul class="nav nav-tabs">
        <li></li>
    </ul>
    <div class="tab-content" style="display: block">
        <div class="col-lg-4"  id="dt">
            <div class="panel panel-primary">
            <div class="panel-heading">
                <p>System Menu</p>
            </div>
            <div class="list-group">
                <a href="<?php echo site_url('register_controller');?>" class="list-group-item btn-link">
                        Send notifications to member
                   </a>
                    <a href="#" class="list-group-item">
                        Report problem
                    </a>
                <a href="<?php echo site_url('general_admin/change');?>" class="list-group-item">
                        Change password
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
                <a href="<?php echo site_url('admin_controller/user');?>" class="list-group-item">
                        View user's 
                    
                    </a>
                    <a href="#" class="list-group-item">
                       <span class="badge">$0</span>
                        Outstanding profit 
                    </a>
                   <a href="#" class="list-group-item">
                       <span class="badge">$1500000</span>
                        Expected Total profit 
                    </a>
                   <a href="<?php echo site_url('logout');?>" class="list-group-item" >
                     Logout</a>
            </div>
            
       </div>
        </div>
        <div class="col-lg-6" id="dt">
            <div class="panel-primary dt1">
                <div class="panel-heading"><label>Update user account</label></div>
                <div class="well">
                    <?php echo form_open('',array('class'=>'form-horizontal'));?>
                    <div class="form-group">
                        <label for="firstname" class="col-lg-4 control-label">First name</label>
                        <div class="col-lg-8">
                            <table class="table table-condensed table-responsive"><tr><td><?php echo ''.$firstname;?></td></tr></table>
                        </div>
                    <div class="form-group">
                        <label for="secondname" class="col-lg-4 control-label">Second name</label>
                        <div class="col-lg-8">
                            <table class="table table-condensed table-responsive"><tr><td><?php echo ''.$lastname;?></td></tr></table>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Username" class="col-lg-4 control-label">Username</label>
                        <div class="col-lg-8">
                            <table class="table table-condensed table-responsive"><tr><td><?php echo ''.$username;?></td></tr></table>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Email" class="col-lg-4 control-label">Email</label>
                        <div class="col-lg-8">
                            <table class="table table-condensed table-responsive"><tr><td><?php echo ''.$email;?></td></tr></table>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="position" class="col-lg-4 control-label">Position</label>
                        <div class="col-lg-8">
                            <table class="table table-condensed table-responsive"><tr><td><?php echo ''.$position;?></td><td class="menu"><a href=""><img src="<?php echo base_url('img/39.png');?>">Edit</a>
                                    </td></tr></table>
                            <table class=" table table-condensed" id="sct">
                                               <?php echo form_open('',array('class'=>'form-inline'));?>
                                <tr><td><input type="text" name="edit" class="form-control input-sm"></td><td>
                                                <input type="submit" class="btn btn-primary" value="EDIT">
                                                <?php echo form_close();?></td></tr></table>
                                     </div>
                                     </div>
                </div>
            </div>
            <div class="load"></div>
        </div>
        </div>
        </div>
        
   <script>
   $(document).ready(function(){
   $('#sct').hide();
   $('.menu').click(function(){
   $('#sct').show();
    });
   });
</script>
<?php include_once 'footer.php';?>

