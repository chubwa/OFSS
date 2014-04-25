<?php include_once 'header2.php';?>
<div id="content">
    <div class="col-lg-8">
        <ul class="nav nav-tabs  nav-justified">
            <li class="<?php if(isset($activef)){ echo 'active';}?>"><a href="#feeds" data-toggle="tab">ORDERING</a></li>
            <li class="<?php if(isset($activef1)){ echo 'active';}?>"><a href="#resource" data-toggle="tab">PRODUCT REVIEW</a></li>
            <li class="<?php if(isset($activef2)){ echo 'active';}?>"><a href="#expenses" data-toggle="tab">MANAGE USER</a></li>
        </ul>
        <div class="tab-content" style="display: block" id="myTabContent">
            <div class="in tab-pane <?php if(isset($activef)){ echo 'active';}?>" id="feeds">
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
                                <tr><td><label>Amount used($ or TSHS)</label></td><td><font color="red"><?php echo form_error('amnt2');?></font><input type="text" name="amnt2" class="form-control"></td></tr>
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
            <div class="in tab-pane <?php if(isset($activef2)){ echo 'active';}?>" id="expenses">
                <legend><label class="text text-center text-justify text-info">Records of Company workers</label></legend>
                <table class="table table-condensed table-striped table-hover table-bordered">
                    <?php if(isset($results)){
                     echo '<tr><th>ID</th><th>FIRST NAME</th><th>LAST NAME</th><th>USERNAME</th><th colspan="3" class="text-center">ACTION<b class="caret"></b></th></tr>';
                     foreach ($results->result() as $row){
                         echo '<tr><td>'.$row->id.'</td><td>'.$row->first_name.'</td><td>'.$row->sec_name.'</td><td>'.$row->username.'</td><td><img src="'.base_url('img/51.png').'">'.' '.anchor('admin_controller/delete/'.$row->id,'Delete',array('onclick'=>"return confirm('Are you sure you want to delete this person.?')")).'</td><td><img src="'.base_url('img/39.png').'">'.anchor('admin_controller/update/'.$row->id,'Update').'</td><td><img src="'.base_url('img/46.png').'">'.anchor('admin_controller/diactivate/'.$row->id,'Deactivate',array('onclick'=>"return confirm('Are you sure you want to diactivate this person.?')")).'</td></tr>';
                     } 
                     }else {
                      echo '<label class="text-info">No records found.!</label>'; 
                    }?>
                    
                </table>
                <?php if(!empty($delete)){    echo '<label class="text-danger">'.$delete.'</label>';}?>
            </div>  
                </div>
            </div>
    <div class="col-lg-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <p> <img src="<?php echo base_url('img/35.png');?>">System Menu</p>
            </div>
            <div class="list-group">
                <a href="<?php echo site_url('register_controller');?>" class="list-group-item btn-link">
                    <span><img src="<?php echo base_url('img/14.png');?>"></span>   
                    Create member account
                   </a>
                <a href="<?php echo site_url('general_admin/change');?>" class="list-group-item">
                        Change password
                    </a>
                    <a href="#" class="list-group-item">
                        <img src="<?php echo base_url('img/74.png');?>"> <span class="badge">0</span>
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
                   <a href="<?php echo site_url('logout');?>" class="list-group-item" >
                     Logout</a>
            </div>
            
       </div>
        </div>
    <script>
    $('.datepicker').datepicker();
    </script>
<?php include_once 'footer.php';?>



