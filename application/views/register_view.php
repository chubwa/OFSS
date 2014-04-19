<?php include_once 'header1.php';?>
<div id="content">
    <ul class="nav nav-tabs">
        <li></li>
    </ul>
    <div class="tab-content" style="display: block">
        <div class="col-lg-5"  id="dt">
            <div class=" panel panel-primary disabled">
                <div class="panel-heading">OFTS</div>
            <div class="panel-body">
                <p class="text-muted">Welcome to <strong>OILING FILLING TRACKING SYSTEM</strong></p>
                <p class="text-info">As to become part of this system your required to register yourself</p>
                <p class="text-info">After registering you will be enable to login OFTS</p>
                <p class="text-info">You are recommended to give the valid details of yours</p>
                <p class="text-info">No one will be responsible for any enconvinience</p>
            </div>
            </div>
        </div>
        <div class="col-lg-7" id="dt">
            <div class="panel-primary dt1">
                <div class="panel-heading"><label>Register</label></div>
                <div class="well bs-component">
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
                    <div class="form-group">
                        <label for="confirm pass" class="col-lg-4 control-label">Confirm password</label>
                        <div class="col-lg-8">
                            <font color="red" class="f6"><?php echo form_error('confpd');?></font>
                            <input type="password" name="confpd" class="form-control fs6" placeholder="confirm password">
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
<script>
    $(document).ready(function(){
      $('.sng').click(function(){
         $('form').submit(function(e){
             if($('.fs').val()===''){
                $('.f1').html().$('.f1').valueOf();
                return false;
             }elseif($('.fs1').val()===''){
                 $('.f2').valueOf();
                 return false;
             }
            $('.load').html('<img src="<?php echo base_url('img/loading.gif');?>">');
            var formdata=$(this).serializeArray();
            var formurl=$(this).attr('action');
            $.ajax({
                url:formurl,
                type:"POST",
                data:formdata,
                success:function(data){
                 $('.dt1').hide();
                 setTimeout(function(){
                    $('.load').html('<p class="alert alert-success">Successifly registered.!</p>').fadeOut(4000); 
                 },2000);
                }
            });
            e.preventDefault();
         });
         $('form').submit();
      });  
    });
</script>
<?php include_once 'footer.php';?>

