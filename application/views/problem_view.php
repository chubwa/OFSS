<?php include_once 'header2.php';?>
<div id="content">
    <ul class="nav nav-tabs">
        <li></li>
    </ul>
    <div class="tab-content" style="display: block">
        <div class="col-lg-3"  id="dt">
            <div class="panel panel-primary">
            <div class="panel-heading">
                <p>System Menu</p>
            </div>
            <div class="list-group">
                <a href="<?php echo site_url('register_controller');?>" class="list-group-item btn-link">
                        Send notifications to member
                   </a>
                <a href="<?php echo site_url('admin_controller/problem');?>" class="list-group-item">
                        Report problem
                    </a>
                <a href="<?php echo site_url('general_admin/change');?>" class="list-group-item">
                        Change password
                    </a>
                <a href="<?php echo site_url('admin_controller');?>" class="list-group-item">
                        <span class="badge">home</span>
                        Back to manage product
                    </a>
                    <a href="#" class="list-group-item">
                        <span class="badge"></span>
                        System alerts
                    </a>
                <a href="<?php echo site_url('admin_controller/summary');?>" class="list-group-item">
                        <span class="badge"></span>
                        Balance in Litres
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
        <div class="col-lg-9" id="dt">
            <div class="text-center">
                <ul class="list-group">
                    <li class="list-group-item"><label class="text-info"><b>Whats wrong within it</b></label></li>
                </ul>
                <?php echo form_open('admin_controller/problem');?>
                <ul class="list-group">
                    <li class="panel-heading list-group-item">Declear problem</li>
                    <li class="list-group-item text-justify">
                        Enter the encounted problem*
                        <span><textarea type="text" name="txt" class="form-control" placeholder="write your problem" required></textarea></span><br>
                        To whom you want to declear that problem
                        <span><select name="people" class="form-control" required>
                                <option value=""></option>
                                <option value="seller">Seller</option>
                                <option value="accountant">Accountant</option>
                            </select></span><br>
                            <span class="text-right"><input type="submit" class="btn btn-primary" value="REPORT"></span>
                    </li>
                </ul>
                  <?php if(!empty($sms)){echo $sms;}?>
                <?php echo form_close();?>
            </div>
    </div>
</div>

<?php include_once 'footer.php';?>


