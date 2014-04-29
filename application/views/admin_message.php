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
            <div class="text-center text-info"><legend><label class="text-primary">Delivered Messages</label></legend></div>
             <?php if(isset($records)){ echo $records;}?>
            <table class="table table-hover">
             <?php if(isset($record)){
             echo '<tr><th>ID</th><th>SENDER</th><th>DELIVERY DATE</th><th>ACTION<b class="caret"></b></th></tr>';
               foreach ($record->result() as $row){
              echo '<tr><td>'.$row->id.'</td><td>'.$row->reporter.'</td><td>'.$row->date.'</td><td>'.anchor('admin_controller/message/'.$row->id,'<span class="badge">View</span>').'</td></tr>';    
               }
             }?>
            </table>
        </div>
    </div>
</div>

<?php include_once 'footer.php';?>

