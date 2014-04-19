<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class Dashbord extends CI_Controller{
     function __construct() {
         parent::__construct();
         $this->load->helper('url','form','html');
         $this->load->library('form_validation');
         if(!$this->session->userdata('logged_in')){
             redirect('logout'); 
         }elseif ($this->session->userdata('apartment')!=='user') {
             redirect('logout'); 
        }
     }
     function index(){
         $this->load->view('dashbord');
     }
 }

