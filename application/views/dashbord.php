<?php include_once 'header2.php';?>
<div id="content">
    <div class="col-lg-8">
        <ul class="nav nav-tabs  nav-justified nav-pills">
            <li class="<?php if(isset($activef)){ echo 'active';}?>"><a href="#feeds" data-toggle="tab">SALES</a></li>
            <li class="<?php if(isset($activef1)){ echo 'active';}?>"><a href="#resource" data-toggle="tab">NEW FEEDS</a></li>
            <li class="<?php if(isset($activef2)){ echo 'active';}?>"><a href="#expenses" data-toggle="tab">EXPENSES</a></li>
        </ul>
        <div class="tab-content" style="display: block" id="myTabContent">
             <div class="in tab-pane <?php if(isset($activef)){ echo 'active';}?>" id="feeds">
                <table class="table table-striped table-condensed"><tr><td>To days cash money</td><td><?php echo date('d-m-Y');?></td></tr></table>
                <div class="tabcordion tabs-left tabbable">
                <ul class="nav nav-tabs nav-pills">
                    <li class="<?php if(isset($active)){ echo'active';}?>"><a data-target=".petrol" data-toggle="tab">PETROL</a></li>
                    <li class="<?php if(isset($active1)){ echo'active';}?>"><a data-target=".diesel" data-toggle="tab">DIESEL</a></li>
                    <li class="<?php if(isset($active2)){ echo'active';}?>"><a data-target=".kerosine" data-toggle="tab">KEROSINE</a></li>
                    <li class="<?php if(isset($active3)){ echo'active';}?>"><a data-target=".oil" data-toggle="tab">OIL</a></li>
                    <li class="<?php if(isset($active4)){ echo'active';}?>"><a data-target=".total" data-toggle="tab">TOTAL</a></li>
                </ul>
                    <div class="tab-content" style="display: block">
                    <div class="petrol in tab-pane <?php if(isset($active)){ echo'active';}?>">
                        <div class="text text-center text-info text-justify"><label>PETROL</label></div>
                        <ul class="nav nav-tabs nav-pills">
                            <li class="<?php if(isset($active5)){ echo'active';}?>"><a data-target=".present" data-toggle="tab">CASH MONEY</a></li>
                            <li class="<?php if(isset($active6)){ echo'active';}?>"><a data-target=".billed" data-toggle="tab">CREDIT MONEY</a></li>
                        </ul>
                        <div class="tab-content" style="display: block">
                         <div class="present in tab-pane <?php if(isset($active5)){ echo'active';}?>">
                        <?php echo form_open('dashbord/petrol');?>
                        <table class="table table-condensed">
                            <tr><td><label>Number of Litres</label></td><td><font color="red"><?php echo form_error('nlitre');?></font><input type="text" name="nlitre" class="form-control input-sm" id="inpuSmall"></td></tr>
                            <tr><td><label>Cost($ or TSH)</label></td><td><font color="red"><?php echo form_error('cost');?></font><input type="text" name="cost" class="form-control input-sm"></td></tr>
                            <tr><td><label>Issue Date</label></td><td><font color="red"><?php echo form_error('issue');?></font><input type="text" name="issue" class="form-control datepicker input-sm"></td></tr>
                          </table>
                               <div class="text text-right"><button class="btn btn-primary">submit</button></div>
                        <?php echo form_close();?>
                               <?php if(isset($smg)){ echo $smg;}?>
                            </div>
                            <div class="billed in tab-pane <?php if(isset($active6)){ echo'active';}?>">
                        <?php echo form_open('dashbord/petrol_credit');?>
                        <table class="table table-condensed">
                            <tr><td><label>Number of Litres</label></td><td><font color="red"><?php echo form_error('nlitre1');?></font><input type="text" name="nlitre1" class="form-control input-sm"></td></tr>
                            <tr><td><label>Cost($ or TSH)</label></td><td><font color="red"><?php echo form_error('cost1');?></font><input type="text" name="cost1" class="form-control input-sm"></td></tr>
                            <tr><td><label>Name of customer's</label></td><td><font color="red"><?php echo form_error('ncost1');?></font><input type="text" name="ncost1" class="form-control input-sm"></td></tr>
                            <tr><td><label>Issue Date</label></td><td><font color="red"><?php echo form_error('issue1');?></font><input type="text" name="issue1" class="form-control datepicker input-sm"></td></tr>
                            <tr><td></td><td><div class="text text-right"><button class="btn btn-primary">submit</button></div></td></tr>
                        </table>
                                <?php if(isset($smg1)){ echo $smg1;}?>
                        <?php echo form_close();?>
                            </div>
                            </div>
                    </div>
                        <div class="diesel in tab-pane <?php if(isset($active1)){ echo'active';}?>">
                            <div class="text text-center text-info text-justify"><label>DIESEL</label></div>
                        <ul class="nav nav-tabs nav-pills">
                            <li class="<?php if(isset($active7)){ echo'active';}?>"><a data-target=".present" data-toggle="tab">CASH MONEY</a></li>
                            <li class="<?php if(isset($active8)){ echo'active';}?>"><a data-target=".billed" data-toggle="tab">CREDIT MONEY</a></li>
                        </ul>
                        <div class="tab-content" style="display: block">
                         <div class="present in tab-pane <?php if(isset($active7)){ echo'active';}?>">
                        <?php echo form_open('dashbord/diesel');?>
                        <table class="table table-condensed">
                            <tr><td><label>Number of Litres</label></td><td><font color="red"><?php echo form_error('nlitre2');?></font><input type="text" name="nlitre2" class="form-control input-sm"></td></tr>
                            <tr><td><label>Cost($ or TSH)</label></td><td><font color="red"><?php echo form_error('cost2');?></font><input type="text" name="cost2" class="form-control input-sm" id="inputSmall"></td></tr>
                            <tr><td><label>Issue Date</label></td><td><font color="red"><?php echo form_error('issue2');?></font><input type="text" name="issue2" class="form-control datepicker input-sm"></td></tr>
                          </table>
                                <div class="text text-right"><button class="btn btn-primary">submit</button></div>
                        <?php echo form_close();?>
                                <?php if(!empty($smg2)){ echo $smg2;}?>
                            </div>
                            
                            <div class="billed in tab-pane <?php if(isset($active8)){ echo'active';}?>">
                        <?php echo form_open('dashbord/diesel_credit');?>
                        <table class="table table-condensed">
                            <tr><td><label>Number of Litres</label></td><td><font color="red"><?php echo form_error('nlitre3');?></font><input type="text" name="nlitre3" class="form-control input-sm"></td></tr>
                            <tr><td><label>Cost($ or TSH)</label></td><td><font color="red"><?php echo form_error('cost3');?></font><input type="text" name="cost3" class="form-control input-sm"></td></tr>
                            <tr><td><label>Name of customer's</label></td><td><font color="red"><?php echo form_error('ncost3');?></font><input type="text" name="ncost3" class="form-control input-sm"></td></tr>
                            <tr><td><label>Issue Date</label></td><td><font color="red"><?php echo form_error('issue3');?></font><input type="text" name="issue3" class="form-control datepicker input-sm"></td></tr>
                          </table>
                                <div class="text text-right"><button class="btn btn-primary">submit</button></div>
                        <?php echo form_close();?>
                                <?php if(!empty($smg3)){ echo $smg3;}?>
                            </div>
                            </div>
                    </div>
                        <div class="kerosine in tab-pane <?php if(isset($active2)){ echo'active';}?>">
                            <div class="text text-center text-info text-justify"><label>KEROSINE</label></div>
                        <ul class="nav nav-tabs nav-pills">
                            <li class="<?php if(isset($active9)){ echo'active';}?>"><a data-target=".present" data-toggle="tab">CASH MONEY</a></li>
                            <li class="<?php if(isset($active10)){ echo'active';}?>"><a data-target=".billed" data-toggle="tab">CREDIT MONEY</a></li>
                        </ul>
                        <div class="tab-content" style="display: block">
                         <div class="present in tab-pane <?php if(isset($active9)){ echo'active';}?>">
                        <?php echo form_open('dashbord/kerosine');?>
                        <table class="table table-condensed">
                            <tr><td><label>Number of Litres</label></td><td><font color="red"><?php echo form_error('nlitre4');?></font><input type="text" name="nlitre4" class="form-control input-sm"></td></tr>
                            <tr><td><label>Cost($ or TSH)</label></td><td><font color="red"><?php echo form_error('cost4');?></font><input type="text" name="cost4" class="form-control input-sm"></td></tr>
                            <tr><td><label>Issue Date</label></td><td><font color="red"><?php echo form_error('issue4');?></font><input type="text" name="issue4" class="form-control datepicker input-sm"></td></tr>
                            
                          </table>
                                <div class="text text-right"><button class="btn btn-primary">submit</button></div>
                        <?php echo form_close();?>
                                <?php if(!empty($smg4)){ echo $smg4;}?>
                            </div>
                        <div class="billed in tab-pane <?php if(isset($active10)){ echo'active';}?>">
                        <?php echo form_open('dashbord/kerosine_credit');?>
                        <table class="table table-condensed">
                        <tr><td><label>Number of Litres</label></td><font color="red"><?php echo form_error('nlitre5');?></font><td><input type="text" name="nlitre5" class="form-control input-sm"></td></tr>
                        <tr><td><label>Cost($ or TSH)</label></td><td><font color="red"><?php echo form_error('cost5');?></font><input type="text" name="cost5" class="form-control input-sm"></td></tr>
                        <tr><td><label>Name of customer's</label></td><td><font color="red"><?php echo form_error('ncost5');?></font><input type="text" name="ncost5" class="form-control input-sm"></td></tr>
                        <tr><td><label>Issue Date</label></td><td><font color="red"><?php echo form_error('issue5');?></font><input type="text" name="issue5" class="form-control datepicker input-sm"></td></tr>
                          </table>
                                <div class="text text-right"><button class="btn btn-primary">submit</button></div>
                        <?php echo form_close();?>
                                <?php if(!empty($smg5)){ echo $smg5;}?>
                            </div>
                            </div>
                    </div>
                        <div class="oil in tab-pane <?php if(isset($active3)){ echo'active';}?>">
                            <div class="text text-center text-info text-justify"><label>OIL</label></div>
                        <ul class="nav nav-tabs nav-pills">
                            <li class="<?php if(isset($active11)){ echo'active';}?>"><a data-target=".present" data-toggle="tab">CASH MONEY</a></li>
                            <li class="<?php if(isset($active12)){ echo'active';}?>"><a data-target=".billed" data-toggle="tab">CREDIT MONEY</a></li>
                        </ul>
                        <div class="tab-content" style="display: block">
                         <div class="present in tab-pane <?php if(isset($active11)){ echo'active';}?>">
                        <?php echo form_open('dashbord/oil');?>
                        <table class="table table-condensed">
                            <tr><td><label>Number of Litres</label></td><td><font color="red"><?php echo form_error('nlitre6');?></font><input type="text" name="nlitre6" class="form-control input-sm"></td></tr>
                            <tr><td><label>Cost($ or TSH)</label></td><td><font color="red"><?php echo form_error('cost6');?></font><input type="text" name="cost6" class="form-control input-sm"></td></tr>
                            <tr><td><label>Issue Date</label></td><td><font color="red"><?php echo form_error('issue6');?></font><input type="text" name="issue6" class="form-control datepicker input-sm"></td></tr>
                          </table>
                                <div class="text text-right"><button class="btn btn-primary">submit</button></div>
                        <?php echo form_close();?>
                                <?php if(!empty($smg6)){ echo $smg6;}?>
                            </div>
                            
                            <div class="billed in tab-pane <?php if(isset($active12)){ echo'active';}?>">
                        <?php echo form_open('dashbord/oil_credit');?>
                        <table class="table table-condensed">
                            <tr><td><label>Number of Litres</label></td><td><font color="red"><?php echo form_error('nlitre7');?></font><input type="text" name="nlitre7" class="form-control input-sm"></td></tr>
                            <tr><td><label>Cost($ or TSH)</label></td><td><font color="red"><?php echo form_error('cost7');?></font><input type="text" name="cost7" class="form-control input-sm"></td></tr>
                            <tr><td><label>Name of customer's</label></td><td><font color="red"><?php echo form_error('ncost7');?></font><input type="text" name="ncost7" class="form-control input-sm"></td></tr>
                            <tr><td><label>Issue Date</label></td><td><font color="red"><?php echo form_error('issue7');?></font><input type="text" name="issue7" class="form-control datepicker input-sm"></td></tr>
                          </table>
                                <div class="text text-right"><button class="btn btn-primary">submit</button></div>
                        <?php echo form_close();?>
                                <?php if(!empty($smg7)){ echo $smg7;}?>
                            </div>
                            </div>
                    </div>
                        
                    </div>
                </div>
                <script>
                    $('.datepicker').datepicker();
                    </script> 
        </div>
            <div class="in tab-pane fade <?php if(isset($activef1)){ echo 'active';}?>" id="resource">
                <ul class="list-group">
                   <li class="list-group-item-heading text-info">For Petrol</li>
                    <li class="list-group-item">
                        <span class="badge"><?php echo ''.$number_litre-$sold_litres;?> Litres</span>
                    Remained Litres of petrol
                    </li>
                    <li class="list-group-item">
                        <span class="badge"><?php echo ''.$purchased_amount;?> TSHS</span>
                    Purchased amount
                  </li>
                   <li class="list-group-item-heading text-info">For diesel    </li>
                   <li class="list-group-item">
                        <span class="badge"><?php echo ''.$number_litre1-$sold_litres1;?> Litres</span>
                    Remained Litres of diesel
                    </li>
                    <li class="list-group-item">
                        <span class="badge"><?php echo ''.$purchased_amount1;?> TSHS</span>
                    Purchased amount
                    </li>
                    <li class="list-group-item-heading text-info">For Kerosine    </li>
                   <li class="list-group-item">
                        <span class="badge"><?php echo ''.$number_litre2-$sold_litres2;?> Litres</span>
                    Remained Litres of kerosine
                    </li>
                    <li class="list-group-item">
                        <span class="badge"><?php echo ''.$purchased_amount2;?> TSHS</span>
                    Purchased amount
                    </li>
                    <li class="list-group-item-heading text-info">For  Oil</li>
                   <li class="list-group-item">
                        <span class="badge"><?php echo ''.$number_litre3-$sold_litres3;?> Litres</span>
                    Remained Litres of oil
                    </li>
                    <li class="list-group-item">
                        <span class="badge"><?php echo ''.$purchased_amount3;?> TSHS</span>
                    Purchased amount
                    </li>
                </ul>
            </div>
            </div>
       </div>
       <div class="col-lg-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <p>System Menu</p>
            </div>
            <div class="list-group">
                   <a href="#" class="list-group-item">
                        Report problem
                   </a>
                <a href="<?php echo site_url('general_setup/change');?>" class="list-group-item">
                        Change password
                    </a>
                <a href="<?php echo site_url('dashbord/count');?>" class="list-group-item">
                        <span class="badge">
                        <?php
                        $res1=$this->db->get_where('tb_problem',array('receiver'=>'seller','status'=>'unchecked'));
                        if($res1->num_rows()>0){
                            echo'<blink>'. $this->db->count_all_results().'</blink>';
                         } else {
                            echo '0'; 
                         }
                            ?>
                        </span>
                        System notification
                    </a>
                <a href="<?php echo site_url('dashbord/view');?>" class="list-group-item">
                        <span class="badge"></span>
                        Balance in Litres
                    </a>
                    <a href="#" class="list-group-item">
                        View summary 
                    
                    </a>
                     
                <a href="<?php echo site_url('logout');?>" class="list-group-item" >
                     Logout</a>
            </div>
            
       </div>
        </div>
</div>
<?php include_once 'footer.php';?>

