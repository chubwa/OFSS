<html>
    <head>
        <title>o-FSS</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/ofss.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/datepicker.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-responsive.css');?>">
        <script src="<?php echo base_url('assets/js/jquery-2.0.3.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery-1.10.2.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap-modal.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap-datepicker.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap-alert.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap-dropdown.js');?>"></script>
        <script src="<?php echo base_url('assets/js/tabcordion.js');?>"></script>
    </head>
    <body>
        <header class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav pull-right">
                        <li class="active"><a href="#">Home</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Diesel</a></li>
                                    <li><a href="#">Kerosine</a></li>
                                    <li><a href="#">Petrol</a></li>
                                </ul> 
                        </li>
                        <li><a href="#">Contacts</a></li>
                        <li><div class="btn-group">
                                <a class="btn btn-primary" href="#"><i><?php echo $this->session->userdata('username');?></i></a>
                                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" >Edit</a></li>
                                    <li><a href="<?php echo site_url('logout');?>" >Logout</a></li>
                                    <li><a href="#" >Setting</a></li>
                                    <li><a></a></li>
                                </ul>
                            </div></li>
                    </ul>
                </div>
            </div>
        </header>
        <div class="page-above">
            <div class="btn-group dropdown" id="content">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata('username');?>
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                <li><a href="#"><i></i> Profile</a></li>
                <li><a href="#"><i></i> Inbox <span class="badge">7</span></a></li>
                <li><a href="#"><i></i> Settings</a></li>
                </ul>
            </div>
        </div>
        



