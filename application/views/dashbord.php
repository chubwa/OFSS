<?php include_once 'header2.php';?>
<div id="content">
    <div class="col-lg-8">
        <ul class="nav nav-tabs  nav-justified">
            <li class="active"><a href="#feeds" data-toggle="tab">NEW FEEDS</a></li>
            <li><a href="#resource" data-toggle="tab">BILLING</a></li>
            <li><a href="#expenses" data-toggle="tab">EXPENSES</a></li>
        </ul>
        <div class="tab-content" style="display: block" id="myTabContent">
            <div class="in tab-pane active" id="feeds">
            <div class=""><legend>PETROL</legend></div>
            <table class="table table-striped">
                <?php echo form_open();?>
                <tr><td>Litres of Petrol(L)</td><td><input type="text" name="ptl" class="form-control"></td><td>COST($ or TSH)</td><td><input type="text" name="cst" class="form-control"></td></tr>
                </table>
                <div><legend>DIESEL</legend></div>
                <table class="table table-striped">
                <tr><td>Litres of Diesel(L)</td><td><input type="text" name="dtl" class="form-control"></td><td>COST($ or TSH)</td><td><input type="text" name="dst" class="form-control"></td></tr>
                </table>
                <div><legend>KEROSINE</legend></div>
                <table class="table table-striped">
                <tr><td>Litres of Kerosine(L)</td><td><input type="text" name="ktl" class="form-control"></td><td>COST($ or TSH)</td><td><input type="text" name="kst" class="form-control"></td></tr>
                </table>
                <div class="text text-right"><button class="btn btn-primary">submit</button></div>
                <?php echo form_close();?>
            
        </div>
            <div class="in tab-pane fade" id="resource">
                <div><legend><table class="table table-striped"><tr><td>To days cash money</td><td><?php echo date('d-m-Y');?></td></tr></table></legend></div>
                <div class="tabcordion tabs-left tabbable">
                <ul class="nav nav-tabs nav-pills">
                    <li class="active"><a data-target=".petrol" data-toggle="tab">PETROL</a></li>
                    <li><a data-target=".diesel" data-toggle="tab">DIESEL</a></li>
                    <li><a data-target=".kerosine" data-toggle="tab">KEROSINE</a></li>
                    <li><a data-target=".total" data-toggle="tab">TOTAL</a></li>
                </ul>
                    <div class="tab-content" style="display: block">
                    <div class="petrol in tab-pane active">
                        <div class="text text-center text-info text-justify"><legend>PETROL</legend></div>
                        <ul class="nav nav-tabs nav-pills">
                            <li class="active"><a data-target=".present" data-toggle="tab">PRESENT MONEY</a></li>
                            <li><a data-target=".billed" data-toggle="tab">BILLED MONEY</a></li>
                        </ul>
                        <div class="tab-content" style="display: block">
                         <div class="present in tab-pane active">
                        <?php echo form_open();?>
                        <table class="table">
                            <tr><td>Number of Litres</td><td><input type="text" name="nlitre" class="form-control"></td></tr>
                            <tr><td>Cost($ or TSH)</td><td><input type="text" name="cost" class="form-control"></td></tr>
                          </table>
                                <div class="text text-right"><button class="btn btn-primary">submit</button></div>
                        <?php echo form_close();?>
                            </div>
                            
                            <div class="billed in tab-pane">
                        <?php echo form_open();?>
                        <table class="table">
                            <tr><td>Number of Litres</td><td><input type="text" name="nlitre1" class="form-control"></td></tr>
                            <tr><td>Cost($ or TSH)</td><td><input type="text" name="cost1" class="form-control"></td></tr>
                          </table>
                                <div class="text text-right"><button class="btn btn-primary">submit</button></div>
                        <?php echo form_close();?>
                            </div>
                            </div>
                    </div>
                        <div class="diesel in tab-pane">
                            <div class="text text-center text-info text-justify"><legend>DIESEL</legend></div>
                        <ul class="nav nav-tabs nav-pills">
                            <li class="active"><a data-target=".present" data-toggle="tab">PRESENT MONEY</a></li>
                            <li><a data-target=".billed" data-toggle="tab">BILLED MONEY</a></li>
                        </ul>
                        <div class="tab-content" style="display: block">
                         <div class="present in tab-pane active">
                        <?php echo form_open();?>
                        <table class="table">
                            <tr><td>Number of Litres</td><td><input type="text" name="nlitre" class="form-control"></td></tr>
                            <tr><td>Cost($ or TSH)</td><td><input type="text" name="cost" class="form-control"></td></tr>
                          </table>
                                <div class="text text-right"><button class="btn btn-primary">submit</button></div>
                        <?php echo form_close();?>
                            </div>
                            
                            <div class="billed in tab-pane">
                        <?php echo form_open();?>
                        <table class="table">
                            <tr><td>Number of Litres</td><td><input type="text" name="nlitre1" class="form-control"></td></tr>
                            <tr><td>Cost($ or TSH)</td><td><input type="text" name="cost1" class="form-control"></td></tr>
                          </table>
                                <div class="text text-right"><button class="btn btn-primary">submit</button></div>
                        <?php echo form_close();?>
                            </div>
                            </div>
                    </div>
                        
                        <div class="kerosine in tab-pane">
                            <div class="text text-center text-info text-justify"><legend>KEROSINE</legend></div>
                        <ul class="nav nav-tabs nav-pills">
                            <li class="active"><a data-target=".present" data-toggle="tab">PRESENT MONEY</a></li>
                            <li><a data-target=".billed" data-toggle="tab">BILLED MONEY</a></li>
                        </ul>
                        <div class="tab-content" style="display: block">
                         <div class="present in tab-pane active">
                        <?php echo form_open();?>
                        <table class="table">
                            <tr><td>Number of Litres</td><td><input type="text" name="nlitre" class="form-control"></td></tr>
                            <tr><td>Cost($ or TSH)</td><td><input type="text" name="cost" class="form-control"></td></tr>
                          </table>
                                <div class="text text-right"><button class="btn btn-primary">submit</button></div>
                        <?php echo form_close();?>
                            </div>
                            
                            <div class="billed in tab-pane">
                        <?php echo form_open();?>
                        <table class="table">
                            <tr><td>Number of Litres</td><td><input type="text" name="nlitre1" class="form-control"></td></tr>
                            <tr><td>Cost($ or TSH)</td><td>
                                    
                                        <input type="text" name="cost1" class="form-control">
                                
                                    </td></tr>
                          </table>
                                <div class="text text-right"><button class="btn btn-primary">submit</button></div>
                        <?php echo form_close();?>
                            </div>
                            </div>
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

