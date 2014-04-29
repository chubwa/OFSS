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
            <div class="in tab-pane <?php if(isset($activef1)){ echo 'active';}?>" id="resource">
                <div class=" tabcordion tabs-left tabbable">
                    <ul class=" nav nav-tabs nav-pills">
                        <li class="active"><a data-target=".p1" data-toggle="tab">PETROL</a></li>
                        <li class=""><a data-target=".d1" data-toggle="tab">DIESEL</a></li>
                        <li class=""><a data-target=".k1" data-toggle="tab">KEROSINE</a></li>
                        <li><a data-target=".o1" data-toggle="tab">OIL</a></li>
                    </ul>
                    <div class=" tab-content" style="display:block">
                        <div class="p1 in tab-pane active">
                            <ul class=" list-group" style="margin-top: 40px;">
                                <li class=" list-group-item-success">Petrol summaries</li>
                                </ul>
                            <table class="table table-striped table-condensed table-bordered">
                                <?php if(isset($petrol)){
                             echo '<tr><th>PETROL LITRE (L)</th><th>PURCHASED AMNT (TSHS)</th><th>EXP AMNT (TSHS)</th><th>DATE OF ENTRANCY</th></tr>';
                             foreach ($petrol->result() as $p){
                                 echo '<tr><td>'.$p->Litre_petrol.'</td><td>'.$p->purchased_amount.'</td><td>'.$p->expected_amount.'</td><td>'.$p->entray_date.'</td></tr>';
                             }
                                }?>
                            </table>
                            <div class=" pagination"></div>
                        </div>
                        <div class="d1 in tab-pane">
                            <ul class=" list-group" style="margin-top: 40px;">
                                <li class=" list-group-item-success">Diesel summaries</li>
                                </ul>
                            <table class="table table-striped table-condensed table-bordered">
                                <?php if(isset($diesel)){
                             echo '<tr><th>DIESEL LITRE (L)</th><th>PURCHASED AMNT (TSHS)</th><th>EXP AMNT (TSHS)</th><th>DATE OF ENTRANCY</th></tr>';
                             foreach ($diesel->result() as $p){
                                 echo '<tr><td>'.$p->Litre_diesel.'</td><td>'.$p->purchased_amount.'</td><td>'.$p->expected_amount.'</td><td>'.$p->entray_date.'</td></tr>';
                             }
                                }?>
                            </table>
                            <div class=" pagination"></div>
                        </div>
                        <div class="k1 in tab-pane">
                            <ul class=" list-group" style="margin-top: 40px;">
                                <li class=" list-group-item-success">Kerosine summaries</li>
                                </ul>
                            <table class="table table-striped table-condensed table-bordered">
                                <?php if(isset($kerosine)){
                             echo '<tr><th>KEROSINE LITRE (L)</th><th>PURCHASED AMNT (TSHS)</th><th>EXP AMNT (TSHS)</th><th>DATE OF ENTRANCY</th></tr>';
                             foreach ($kerosine->result() as $p){
                                 echo '<tr><td>'.$p->Litre_kerosine.'</td><td>'.$p->purchased_amount.'</td><td>'.$p->expected_amount.'</td><td>'.$p->entray_date.'</td></tr>';
                             }
                                }?>
                            </table>
                            <div class=" pagination"></div>
                        </div>
                        <div class="o1 in tab-pane">
                            <ul class=" list-group" style="margin-top: 40px;">
                                <li class=" list-group-item-success">Oil summaries</li>
                                </ul>
                            <table class="table table-striped table-condensed table-bordered">
                                <?php if(isset($oil)){
                             echo '<tr><th>OIL LITRE (L)</th><th>PURCHASED AMNT (TSHS)</th><th>EXP AMNT (TSHS)</th><th>DATE OF ENTRANCY</th></tr>';
                             foreach ($oil->result() as $p){
                                 echo '<tr><td>'.$p->Litre_oil.'</td><td>'.$p->purchased_amount.'</td><td>'.$p->expected_amount.'</td><td>'.$p->entray_date.'</td></tr>';
                             }
                                }?>
                            </table>
                            <div class=" pagination"></div>
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
                <a href="<?php echo site_url('admin_controller/summary');?>" class="list-group-item">
                        <span class="badge">
                   <?php if(($Litre_petrol-$sold_litre)<=4000){
                         echo '<blink>Petrol danger zone click.!</blink>';
                        }elseif (($Litre_kerosine-$sold_litre2)<=4000){
                            echo '<blink>Kerosine danger zone click.!</blink>';
                        }elseif (($Litre_diesel-$sold_litre1)<=4000){
                            echo '<blink>Diesel danger zone click.!</blink>';
                        }elseif (($Litre_oil-$sold_litre3)<=4000){
                            echo '<blink>Oil danger zone click.!</blink>';
                        }else{
                            echo '<blink><b>Ok</b></blink>';
                        }
                        ?>
                        </span>
                        Bissness notification
                    </a>
                <a href="<?php echo site_url('admin_controller/notify_view');?>" class="list-group-item">
                        <span class="badge">
                           <?php 
                           $res=$this->db->get_where('tb_problem',array('receiver'=>'admin','status'=>'unchecked'));
                           if($res->num_rows()>0){
                               echo '<blink>'.$this->db->count_all_results().'</blink>';
                           }  else {
                               echo '0';    
                           }
                            ?>
                        </span>
                        System alerts
                    </a>
                <a href="<?php echo site_url('admin_controller/summary');?>" class="list-group-item">
                        <span class="badge">View</span>
                        Balance in Litres
                    </a>
                     <a href="#" class="list-group-item">
                        View summary 
                    
                    </a>
                    <a href="#" class="list-group-item">
                       <span class="badge"><?php $total1=$sold_amount1+$sold_amount2+$sold_amount3+$sold_amount4;
                                $totally=$expected_amount+$expected_amount1+$expected_amount2+$expected_amount3;
                          echo ''.$totally-$total1;
                       ?> Tshs</span>
                        Outstanding profit 
                    </a>
                   <a href="#" class="list-group-item">
                       <span class="badge"><?php $total=$expected_amount+$expected_amount1+$expected_amount2+$expected_amount3;
                        echo ''.$total;
                       
                        ?> Tshs</span>
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



