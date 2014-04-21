<?php include_once 'header2.php';?>
<div id="content">
    <div class="col-lg-8">
        <ul class="nav nav-tabs  nav-justified">
            <li class="<?php if(isset($activef)){ echo 'active';}?>"><a href="#feeds" data-toggle="tab">NEW FEEDS</a></li>
            <li class="<?php if(isset($activef1)){ echo 'active';}?>"><a href="#resource" data-toggle="tab">BILLING</a></li>
            <li class="<?php if(isset($activef2)){ echo 'active';}?>"><a href="#expenses" data-toggle="tab">EXPENSES</a></li>
        </ul>
        <div class="tab-content" style="display: block" id="myTabContent">
            <div class="in tab-pane <?php if(isset($activef)){ echo 'active';}?>" id="feeds">
                <label class="text text-info text-justify">PETROL</label>
            <table class="table table-striped table-condensed">
                <tr><td>Litres of Petrol(L)</td><td><input type="text" name="ptl" class="form-control"></td><td>COST($ or TSH)</td><td><input type="text" name="cst" class="form-control"></td></tr>
                </table>
                <label class="text text-info text-justify">DIESEL</label>
                <table class="table table-striped table-condensed">
                <tr><td>Litres of Diesel(L)</td><td><input type="text" name="dtl" class="form-control"></td><td>COST($ or TSH)</td><td><input type="text" name="dst" class="form-control"></td></tr>
                </table>
                <label class="text text-info text-justify">KEROSINE</label>
                <table class="table table-striped table-condensed">
                <tr><td>Litres of Kerosine(L)</td><td><input type="text" name="ktl" class="form-control"></td><td>COST($ or TSH)</td><td><input type="text" name="kst" class="form-control"></td></tr>
                </table>
                <label class="text text-info text-justify">OIL</label>
                <table class="table table-striped table-condensed">
                <tr><td>Litres of Oil(L)</td><td><input type="text" name="otl" class="form-control"></td><td>COST($ or TSH)</td><td><input type="text" name="kst" class="form-control"></td></tr>
                </table>
               
        </div>
            <div class="in tab-pane fade <?php if(isset($activef1)){ echo 'active';}?>" id="resource">
                <div><legend><table class="table table-striped"><tr><td>To days cash money</td><td><?php echo date('d-m-Y');?></td></tr></table></legend></div>
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
                        <div class="text text-center text-info text-justify"><legend>PETROL</legend></div>
                        <ul class="nav nav-tabs nav-pills">
                            <li class="<?php if(isset($active5)){ echo'active';}?>"><a data-target=".present" data-toggle="tab">CASH MONEY</a></li>
                            <li class="<?php if(isset($active6)){ echo'active';}?>"><a data-target=".billed" data-toggle="tab">CREDIT MONEY</a></li>
                        </ul>
                        <div class="tab-content" style="display: block">
                         <div class="present in tab-pane <?php if(isset($active5)){ echo'active';}?>">
                        <?php echo form_open('dashbord/petrol');?>
                        <table class="table table-condensed">
                            <tr><td>Number of Litres</td><td><font color="red"><?php echo form_error('nlitre');?></font><input type="text" name="nlitre" class="form-control"></td></tr>
                            <tr><td>Cost($ or TSH)</td><td><font color="red"><?php echo form_error('cost');?></font><input type="text" name="cost" class="form-control"></td></tr>
                            <tr><td>Issue Date</td><td><font color="red"><?php echo form_error('issue');?></font><input type="text" name="issue" class="form-control datepicker"></td></tr>
                          </table>
                               <div class="text text-right"><button class="btn btn-primary">submit</button></div>
                        <?php echo form_close();?>
                               <?php if(isset($smg)){ echo $smg;}?>
                            </div>
                            <div class="billed in tab-pane <?php if(isset($active6)){ echo'active';}?>">
                        <?php echo form_open('dashbord/petrol_credit');?>
                        <table class="table table-condensed">
                            <tr><td>Number of Litres</td><td><font color="red"><?php echo form_error('nlitre1');?></font><input type="text" name="nlitre1" class="form-control"></td></tr>
                            <tr><td>Cost($ or TSH)</td><td><font color="red"><?php echo form_error('cost1');?></font><input type="text" name="cost1" class="form-control"></td></tr>
                            <tr><td>Name of customer's</td><td><font color="red"><?php echo form_error('ncost1');?></font><input type="text" name="ncost1" class="form-control"></td></tr>
                            <tr><td>Issue Date</td><td><font color="red"><?php echo form_error('issue1');?></font><input type="text" name="issue1" class="form-control datepicker"></td></tr>
                            <tr><td></td><td><div class="text text-right"><button class="btn btn-primary">submit</button></div></td></tr>
                        </table>
                                <?php if(isset($smg1)){ echo $smg1;}?>
                        <?php echo form_close();?>
                            </div>
                            </div>
                    </div>
                        <div class="diesel in tab-pane <?php if(isset($active1)){ echo'active';}?>">
                            <div class="text text-center text-info text-justify"><legend>DIESEL</legend></div>
                        <ul class="nav nav-tabs nav-pills">
                            <li class="<?php if(isset($active7)){ echo'active';}?>"><a data-target=".present" data-toggle="tab">CASH MONEY</a></li>
                            <li class="<?php if(isset($active8)){ echo'active';}?>"><a data-target=".billed" data-toggle="tab">CREDIT MONEY</a></li>
                        </ul>
                        <div class="tab-content" style="display: block">
                         <div class="present in tab-pane <?php if(isset($active7)){ echo'active';}?>">
                        <?php echo form_open('dashbord/diesel');?>
                        <table class="table table-condensed">
                            <tr><td>Number of Litres</td><td><font color="red"><?php echo form_error('nlitre2');?></font><input type="text" name="nlitre2" class="form-control"></td></tr>
                            <tr><td>Cost($ or TSH)</td><td><font color="red"><?php echo form_error('cost2');?></font><input type="text" name="cost2" class="form-control"></td></tr>
                            <tr><td>Issue Date</td><td><font color="red"><?php echo form_error('issue2');?></font><input type="text" name="issue2" class="form-control datepicker"></td></tr>
                          </table>
                                <div class="text text-right"><button class="btn btn-primary">submit</button></div>
                        <?php echo form_close();?>
                                <?php if(!empty($smg2)){ echo $smg2;}?>
                            </div>
                            
                            <div class="billed in tab-pane <?php if(isset($active8)){ echo'active';}?>">
                        <?php echo form_open('dashbord/diesel_credit');?>
                        <table class="table table-condensed">
                            <tr><td>Number of Litres</td><td><font color="red"><?php echo form_error('nlitre3');?></font><input type="text" name="nlitre3" class="form-control"></td></tr>
                            <tr><td>Cost($ or TSH)</td><td><font color="red"><?php echo form_error('cost3');?></font><input type="text" name="cost3" class="form-control"></td></tr>
                            <tr><td>Name of customer's</td><td><font color="red"><?php echo form_error('ncost3');?></font><input type="text" name="ncost3" class="form-control"></td></tr>
                            <tr><td>Issue Date</td><td><font color="red"><?php echo form_error('issue3');?></font><input type="text" name="issue3" class="form-control datepicker"></td></tr>
                          </table>
                                <div class="text text-right"><button class="btn btn-primary">submit</button></div>
                        <?php echo form_close();?>
                                <?php if(!empty($smg3)){ echo $smg3;}?>
                            </div>
                            </div>
                    </div>
                        
                        <div class="kerosine in tab-pane <?php if(isset($active2)){ echo'active';}?>">
                            <div class="text text-center text-info text-justify"><legend>KEROSINE</legend></div>
                        <ul class="nav nav-tabs nav-pills">
                            <li class="<?php if(isset($active9)){ echo'active';}?>"><a data-target=".present" data-toggle="tab">CASH MONEY</a></li>
                            <li class="<?php if(isset($active10)){ echo'active';}?>"><a data-target=".billed" data-toggle="tab">CREDIT MONEY</a></li>
                        </ul>
                        <div class="tab-content" style="display: block">
                         <div class="present in tab-pane <?php if(isset($active9)){ echo'active';}?>">
                        <?php echo form_open('dashbord/kerosine');?>
                        <table class="table table-condensed">
                            <tr><td>Number of Litres</td><td><font color="red"><?php echo form_error('nlitre4');?></font><input type="text" name="nlitre4" class="form-control"></td></tr>
                            <tr><td>Cost($ or TSH)</td><td><font color="red"><?php echo form_error('cost4');?></font><input type="text" name="cost4" class="form-control"></td></tr>
                            <tr><td>Issue Date</td><td><font color="red"><?php echo form_error('issue4');?></font><input type="text" name="issue4" class="form-control datepicker"></td></tr>
                            
                          </table>
                                <div class="text text-right"><button class="btn btn-primary">submit</button></div>
                        <?php echo form_close();?>
                                <?php if(!empty($smg4)){ echo $smg4;}?>
                            </div>
                            
                            <div class="billed in tab-pane <?php if(isset($active10)){ echo'active';}?>">
                        <?php echo form_open('dashbord/kerosine_credit');?>
                        <table class="table table-condensed">
                            <tr><td>Number of Litres</td><font color="red"><?php echo form_error('nlitre5');?></font><td><input type="text" name="nlitre5" class="form-control"></td></tr>
                            <tr><td>Cost($ or TSH)</td><td><font color="red"><?php echo form_error('cost5');?></font><input type="text" name="cost5" class="form-control">
                                
                                    </td></tr>
                            <tr><td>Name of customer's</td><td><font color="red"><?php echo form_error('ncost5');?></font><input type="text" name="ncost5" class="form-control"></td></tr>
                            <tr><td>Issue Date</td><td><font color="red"><?php echo form_error('issue5');?></font><input type="text" name="issue5" class="form-control datepicker"></td></tr>
                          </table>
                                <div class="text text-right"><button class="btn btn-primary">submit</button></div>
                        <?php echo form_close();?>
                                <?php if(!empty($smg5)){ echo $smg5;}?>
                            </div>
                            </div>
                    </div>
                        <div class="oil in tab-pane <?php if(isset($active3)){ echo'active';}?>">
                            <div class="text text-center text-info text-justify"><legend>OIL</legend></div>
                        <ul class="nav nav-tabs nav-pills">
                            <li class="<?php if(isset($active11)){ echo'active';}?>"><a data-target=".present" data-toggle="tab">CASH MONEY</a></li>
                            <li class="<?php if(isset($active12)){ echo'active';}?>"><a data-target=".billed" data-toggle="tab">CREDIT MONEY</a></li>
                        </ul>
                        <div class="tab-content" style="display: block">
                         <div class="present in tab-pane <?php if(isset($active11)){ echo'active';}?>">
                        <?php echo form_open('dashbord/oil');?>
                        <table class="table table-condensed">
                            <tr><td>Number of Litres</td><td><font color="red"><?php echo form_error('nlitre6');?></font><input type="text" name="nlitre6" class="form-control"></td></tr>
                            <tr><td>Cost($ or TSH)</td><td><font color="red"><?php echo form_error('cost6');?></font><input type="text" name="cost6" class="form-control"></td></tr>
                            <tr><td>Issue Date</td><td><font color="red"><?php echo form_error('issue6');?></font><input type="text" name="issue6" class="form-control datepicker"></td></tr>
                          </table>
                                <div class="text text-right"><button class="btn btn-primary">submit</button></div>
                        <?php echo form_close();?>
                                <?php if(!empty($smg6)){ echo $smg6;}?>
                            </div>
                            
                            <div class="billed in tab-pane <?php if(isset($active12)){ echo'active';}?>">
                        <?php echo form_open('dashbord/oil_credit');?>
                        <table class="table table-condensed">
                            <tr><td>Number of Litres</td><td><font color="red"><?php echo form_error('nlitre7');?></font><input type="text" name="nlitre7" class="form-control"></td></tr>
                            <tr><td>Cost($ or TSH)</td><td><font color="red"><?php echo form_error('cost7');?></font><input type="text" name="cost7" class="form-control">
                                
                                    </td></tr>
                            <tr><td>Name of customer's</td><td><font color="red"><?php echo form_error('ncost7');?></font><input type="text" name="ncost7" class="form-control"></td></tr>
                            <tr><td>Issue Date</td><td><font color="red"><?php echo form_error('issue7');?></font><input type="text" name="issue7" class="form-control datepicker"></td></tr>
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
            </div>
        
</div>
    <div class="col-lg-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <p>System Setting</p>
            </div>
            <div class="list-group">
                   <a href="#" class="list-group-item">
                        Report problem
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
</div>
<?php include_once 'footer.php';?>

