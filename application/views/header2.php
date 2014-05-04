<html>
    <head>
        <title>o-FSS</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/ofss.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/datepicker.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-responsive.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/open-iconic-bootstrap.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.dataTables.css');?>">
        <script src="<?php echo base_url('assets/js/jquery-2.0.3.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery-1.10.2.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap-modal.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap-datepicker.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap-alert.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap-dropdown.js');?>"></script>
        <script src="<?php echo base_url('assets/js/tabcordion.js');?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.dataTables.min.js');?>"></script>
    </head>
    <body>
        <header class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav pull-right">
                        <li class="active"><a href="#" class="fa fa-home">Home</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" class="fa fa-share">Diesel</a></li>
                                    <li><a href="#" class=" fa fa-list-ol">Kerosine</a></li>
                                    <li><a href="#" class="fa fa-share-square-o">Petrol</a></li>
                                </ul> 
                        </li>
                        <li><a href="#">Contacts</a></li>
                        <li><div class="btn-group open">
                                <a class="btn btn-primary" href="#"><i class="fa fa-user fa-fw"></i> <?php echo $this->session->userdata('username');?></a>
                                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
                                  <span class="fa fa-caret-down"></span></a>
                                  <ul class="dropdown-menu">
                                      <li><a href="<?php echo site_url('admin_profile');?>"><i class="fa fa-pencil fa-fw"></i> Profile</a></li>
                                  <li><a href="#"><i class="fa fa-trash-o fa-fw"></i> Delete</a></li>
                                  <li><a href="#"><i class="fa fa-cogs fa-fw"></i> Setting</a></li>
                                </ul>
                              </div></li>
                    </ul>
                </div>
            </div>
        </header>
        <div class="page-above">
            
        </div>
        



