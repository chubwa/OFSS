<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class Admin_controller extends CI_Controller{
     function __construct() {
         parent::__construct();
         $this->load->helper('url','form','html');
         $this->load->library('form_validation');
         if(!$this->session->userdata('logged_in')){
             redirect('logout');  
         }elseif ($this->session->userdata('apartment')!=='admin') {
             redirect('logout'); 
        }
     }
     function index(){
         $data['active']=TRUE;
         $this->load->view('admin_dashbord',$data);
     }
     public function petrol(){
         $data['active']=TRUE;
         $this->form_validation->set_rules('nl','Number of Litres','trim|required|numeric|xss_clean');
         $this->form_validation->set_rules('amnt','Amount Purchased','trim|required|alpha_numeric|xss_clean');
         $this->form_validation->set_rules('exp','Expected Amount','trim|required|alpha_numeric|xss_clean');
         $this->form_validation->set_rules('date','Expected Amount','trim|required|xss_clean');
         if($this->form_validation->run()===FALSE){
             $this->load->view('admin_dashbord',$data);
         }  else {
             $this->load->model('admin_model');
             $admin_name=  $this->session->userdata('username');
             $number_litres=  $this->input->post('nl');
             $amount_parchased=  $this->input->post('amnt');
             $expected_amount=  $this->input->post('exp');
             $data_entrance=  $this->input->post('date');
             $this->admin_model->petrol_insert($number_litres,$amount_parchased,$expected_amount,$data_entrance,$admin_name);
             $data['smg']='<p class="text-center alert-success">Successifully added</p>';
             $this->load->view('admin_dashbord',$data);
         }
         
         }
         public function diesel(){
             $data['active1']=TRUE;
             unset($data['active']);
         $this->form_validation->set_rules('nl1','Number of Litres','trim|required|numeric|xss_clean');
         $this->form_validation->set_rules('amnt1','Amount Purchased','trim|required|alpha_numeric|xss_clean');
         $this->form_validation->set_rules('exp1','Expected Amount','trim|required|alpha_numeric|xss_clean');
         $this->form_validation->set_rules('date1','Expected Amount','trim|required|xss_clean');
         if($this->form_validation->run()===FALSE){
             $this->load->view('admin_dashbord',$data);
         }  else {
             $this->load->model('admin_model');
             $number_litres=  $this->input->post('nl1');
             $admin_name=  $this->session->userdata('username');
             $amount_parchased=  $this->input->post('amnt1');
             $expected_amount=  $this->input->post('exp1');
             $data_entrance=  $this->input->post('date1');
             $this->admin_model->diesel_insert($number_litres,$amount_parchased,$expected_amount,$data_entrance,$admin_name);
             $data['smg1']='<p class="text-center alert-success">Successifully added</p>';
             $this->load->view('admin_dashbord',$data);
         }
     }
     function kerosine(){
         $data['active2']=TRUE;
         unset($data['active1']);
         $this->form_validation->set_rules('nl2','Number of Litres','trim|required|numeric|xss_clean');
         $this->form_validation->set_rules('amnt2','Amount Purchased','trim|required|alpha_numeric|xss_clean');
         $this->form_validation->set_rules('exp2','Expected Amount','trim|required|alpha_numeric|xss_clean');
         $this->form_validation->set_rules('date2','Expected Amount','trim|required|xss_clean');
         if($this->form_validation->run()===FALSE){
             $this->load->view('admin_dashbord',$data);
         }  else {
             $this->load->model('admin_model');
             $number_litres=  $this->input->post('nl2');
             $admin_name=  $this->session->userdata('username');
             $amount_parchased=  $this->input->post('amnt2');
             $expected_amount=  $this->input->post('exp2');
             $data_entrance=  $this->input->post('date2');
             $this->admin_model->kerosine_insert($number_litres,$amount_parchased,$expected_amount,$data_entrance,$admin_name);
             $data['smg2']='<p class="text-center alert-success">Successifully added</p>';
             $this->load->view('admin_dashbord',$data);
         }
     }
     function oil(){
         $data['active3']=TRUE;
         unset($data['active2']);
         $this->form_validation->set_rules('nl3','Number of Litres','trim|required|numeric|xss_clean');
         $this->form_validation->set_rules('amnt3','Amount Purchased','trim|required|alpha_numeric|xss_clean');
         $this->form_validation->set_rules('exp3','Expected Amount','trim|required|alpha_numeric|xss_clean');
         $this->form_validation->set_rules('date3','Expected Amount','trim|required|xss_clean');
         if($this->form_validation->run()===FALSE){
             $this->load->view('admin_dashbord',$data);
         }  else {
             $this->load->model('admin_model');
             $number_litres=  $this->input->post('nl3');
             $admin_name=  $this->session->userdata('username');
             $amount_parchased=  $this->input->post('amnt3');
             $expected_amount=  $this->input->post('exp3');
             $data_entrance=  $this->input->post('date3');
             $this->admin_model->oil_insert($number_litres,$amount_parchased,$expected_amount,$data_entrance,$admin_name);
             $data['smg3']='<p class="text-center alert-success">Successifully added</p>';
             $this->load->view('admin_dashbord',$data);
         }
     }
 
 }

