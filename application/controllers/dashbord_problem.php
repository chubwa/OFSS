<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class Dashbord_problem extends CI_Controller{
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
     public function index(){
         $this->form_validation->set_rules('ustext','Problem','trim|required|xss_clean');
         $this->form_validation->set_rules('usr','Member','trim|required|xss_clean');
         if($this->form_validation->run()===FALSE){
         $this->load->view('problem_user');
     }  else {
         $this->load->model('problem_model');
         $user=  $this->session->userdata('username');
         $problem=  $this->input->post('ustext');
         $problem_choose=  $this->input->post('user');
         $this->problem_model-> problem_insert($user,$problem,$problem_choose);
     }
     }
 }