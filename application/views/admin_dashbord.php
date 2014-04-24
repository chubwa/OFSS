<?php include_once 'header2.php';?>
<div id="content">
    <div class="col-lg-8">
        <ul class="nav nav-tabs  nav-justified">
            <li class="<?php if(isset($active)){ echo 'active';}?>"><a href="#feeds" data-toggle="tab">ADD PRODUCT</a></li>
            <li class=""><a href="#resource" data-toggle="tab">SOLD LITRES</a></li>
            <li><a href="#expenses" data-toggle="tab">EXPENSES</a></li>
        </ul>
        <div class="tab-content" style="display: block" id="myTabContent">
            <div class="in tab-pane active" id="feeds">
            <div class="tabcordion tabs-left tabbable">
                <ul class="nav nav-tabs nav-pills">
                    <li class="<?php if(isset($active)){ echo 'active';}?>"><a data-target=".petrol" data-toggle="tab">PETROL</a></li>
                    <li class="<?php if(isset($active1)){ echo 'active';}?>"><a data-target=".diesel" data-toggle="tab">DIESEL</a></li>
                    <li class="<?php if(isset($active2)){ echo 'active';}?>"><a data-target=".kerosine" data-toggle="tab">KEROSINE</a></li>
                    <li class="<?php if(isset($active3)){ echo 'active';}?>"><a data-target=".oil" data-toggle="tab">OIL</a></li>
                </ul>
            <div class="tab-content" style="display: block">
                <div class="petrol in tab-pane <?php if(isset($active)){echo'active';}?>">
                            <legend class="text text-info text-justify"><label>PETROL</label></legend>
                            <?php echo form_open('admin_controller/petrol');?>
                            <table class="table table-condensed table-striped">
                                <tr><td><label>Number of Litres</label></td><td><font color="red"><?php echo form_error('nl');?></font><input type="text" name="nl" class="form-control"></td></tr>
                                <tr><td><label>Amount used($ or TSHS)</label></td><td><font color="red"><?php echo form_error('amnt');?></font><input type="text" name="amnt" class="form-control"></td></tr>
                                <tr><td><label>Expected Amount</label></td><td><font color="red"><?php echo form_error('exp');?></font><input type="text" name="exp" class="form-control"></td></tr>
                                <tr><td><label>Date of Entering data</label></td><td><font color="red"><?php echo form_error('date');?></font><input type="text" name="date" class="form-control datepicker"></td></tr>
                            </table>
                            <div class="text text-center"><button class="btn btn-primary">ADD</button></div>
                            <?php echo form_close();?>
                            <?php if(!empty($smg)){echo $smg;}?>
                        </div>
                    <div class="diesel in tab-pane <?php if(isset($active1)){ echo 'active';}?>">
                        <legend class="text text-info text-justify"><label>DIESEL</label></legend>
                            <?php echo form_open('admin_controller/diesel');?>
                            <table class="table table-condensed table-striped">
                                <tr><td><label>Number of Litres</label></td><td><font color="red"><?php echo form_error('nl1');?></font><input type="text" name="nl1" class="form-control"></td></tr>
                                <tr><td><label>Amount used($ or TSHS)</label></td><td><font color="red"><?php echo form_error('amnt1');?></font><input type="text" name="amnt1" class="form-control"></td></tr>
                                <tr><td><label>Expected Amount</label></td><td><font color="red"><?php echo form_error('exp1');?></font><input type="text" name="exp1" class="form-control"></td></tr>
                                <tr><td><label>Date of Entering data</label></td><td><font color="red"><?php echo form_error('date1');?></font><input type="text" name="date1" class="form-control datepicker"></td></tr>
                            </table>
                            <div class="text text-center"><button class="btn btn-primary">ADD</button></div>
                            <?php echo form_close();?>
                            <?php if(!empty($smg1)){echo $smg1;}?>
                    </div>
                        <div class="kerosine in tab-pane <?php if(isset($active2)){ echo 'active';}?>">
                            <legend class="text text-info text-justify"><label>KEROSINE</label></legend>
                            <?php echo form_open('admin_controller/kerosine');?>
                            <table class="table table-condensed table-striped">
                                <tr><td><label>Number of Litres</label></td><td><font color="red"><?php echo form_error('nl2');?></font><input type="text" name="nl2" class="form-control"></td></tr>
                                <tr><td><label>Amount used($ or TSHS)</label></td><font color="red"><?php echo form_error('amnt2');?></font><td><input type="text" name="amnt2" class="form-control"></td></tr>
                                <tr><td><label>Expected Amount</label></td><td><font color="red"><?php echo form_error('exp2');?></font><input type="text" name="exp2" class="form-control"></td></tr>
                                <tr><td><label>Date of Entering data</label></td><td><font color="red"><?php echo form_error('date2');?><input type="text" name="date2" class="form-control datepicker"></td></tr>
                            </table>
                            <div class="text text-center"><button class="btn btn-primary">ADD</button></div>
                            <?php echo form_close();?>
                               <?php if(!empty($smg2)){echo $smg2;}?>
                    </div>
                        <div class="oil in tab-pane <?php if(isset($active3)){ echo 'active';}?>">
                            <legend class="text text-info text-justify"><label>OIL</label></legend>
                            <?php echo form_open('admin_controller/oil');?>
                            <table class="table table-condensed table-striped">
                                <tr><td><label>Number of Litres</label></td><td><font color="red"><?php echo form_error('nl3');?></font><input type="text" name="nl3" class="form-control"></td></tr>
                                <tr><td><label>Amount used($ or TSHS)</label></td><td><font color="red"><?php echo form_error('amnt3');?></font><input type="text" name="amnt3" class="form-control"></td></tr>
                                <tr><td><label>Expected Amount</label></td><td><font color="red"><?php echo form_error('exp3');?></font><input type="text" name="exp3" class="form-control"></td></tr>
                                <tr><td><label>Date of Entering data</label></td><td><font color="red"><?php echo form_error('date3');?></font><input type="text" name="date3" class="form-control datepicker"></td></tr>
                            </table>
                            <div class="text text-center"><button class="btn btn-primary">ADD</button></div>
                            <?php echo form_close();?>
                            <?php if(!empty($smg3)){ echo $smg3;}?>
                        </div>
                </div>
                    </div>
            </div>
                    
                </div>
            </div>
    <div class="col-lg-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <p>System Setting</p>
            </div>
            <div class="list-group">
                <a href="<?php echo site_url('register_controller');?>" class="list-group-item btn-link">
                        Create member account
                   </a>
                    <a href="#" class="list-group-item">
                        Change password
                    </a>
                    <a href="#" class="list-group-item">
                        <span class="badge">0</span>
                        Bissness notification
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
    <script>
    $('.datepicker').datepicker();
    </script>
</div>
<?php include_once 'footer.php';?>



