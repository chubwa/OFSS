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
         $data['activef']=TRUE;
         $this->load->view('dashbord',$data);
     }
    function petrol(){
        $data['activef1']=TRUE;
        $data['active']=TRUE;
        $data['active5']=TRUE;
        unset($data['activef']);
        $this->form_validation->set_rules('nlitre','Sold Litres','trim|required|numeric|xss_clean');
        $this->form_validation->set_rules('cost','Sold Amount','trim|required|alpha_numeric|xss_clean');
        $this->form_validation->set_rules('issue','Sold date','trim|required|xss_clean');
        if($this->form_validation->run()===FALSE){
            $this->load->view('dashbord',$data);
        }  else {
            $this->load->model('dashbord_model');
            $sn=  $this->session->userdata('username');
            $sold_litre=  $this->input->post('nlitre');
            $sold_amount=  $this->input->post('cost');
            $issue_date=  $this->input->post('issue');
            $this->dashbord_model->petrol_insert($sn,$sold_litre,$sold_amount,$issue_date);
            $data['smg']='<p class="text-center label-success">Recorded successiffuly.!</p>';
            $this->load->view('dashbord',$data);
        }
    }
    function petrol_credit(){
        $data['activef1']=TRUE;
        $data['active']=TRUE;
        $data['active6']=TRUE;
        unset($data['active5']);
        $this->form_validation->set_rules('nlitre1','Sold Litres','trim|required|numeric|xss_clean');
        $this->form_validation->set_rules('cost1','Sold Amount','trim|required|alpha_numeric|xss_clean');
        $this->form_validation->set_rules('ncost1','Customer name','trim|required|xss_clean');
        $this->form_validation->set_rules('issue1','Sold date','trim|required|xss_clean');
        if($this->form_validation->run()===FALSE){
            $this->load->view('dashbord',$data);
        }  else {
            $this->load->model('dashbord_model');
            $sn=  $this->session->userdata('username');
            $sold_litre=  $this->input->post('nlitre1');
            $sold_amount=  $this->input->post('cost1');
            $customer_credit=  $this->input->post('ncost1');
            $issue_date=  $this->input->post('issue1');
            $this->dashbord_model->pertol_credit($sn,$sold_litre,$sold_amount,$issue_date,$customer_credit);
            $data['smg1']='<p class="text-center label-success">Recorded successiffuly.!</p>';
            $this->load->view('dashbord',$data);
        }
    }
    function diesel(){
        $data['activef1']=TRUE;
        $data['active1']=TRUE;
        $data['active7']=TRUE;
        unset($data['activef']);
        unset($data['active']);
        $this->form_validation->set_rules('nlitre2','Sold Litres','trim|required|numeric|xss_clean');
        $this->form_validation->set_rules('cost2','Sold Amount','trim|required|alpha_numeric|xss_clean');
        $this->form_validation->set_rules('issue2','Sold date','trim|required|xss_clean');
        if($this->form_validation->run()===FALSE){
            $this->load->view('dashbord',$data);
        }  else {
            $this->load->model('dashbord_model');
            $sn=  $this->session->userdata('username');
            $sold_litre=  $this->input->post('nlitre2');
            $sold_amount=  $this->input->post('cost2');
            $issue_date=  $this->input->post('issue2');
            $this->dashbord_model->diesel_insert($sn,$sold_litre,$sold_amount,$issue_date);
            $data['smg2']='<p class="text-center label-success">Recorded successiffuly.!</p>';
            $this->load->view('dashbord',$data);
        }
    }
    function diesel_credit(){
        $data['activef1']=TRUE;
        $data['active1']=TRUE;
        $data['active8']=TRUE;
        unset($data['active7']);
        unset($data['active']);
        unset($data['activef']);
        $this->form_validation->set_rules('nlitre3','Sold Litres','trim|required|numeric|xss_clean');
        $this->form_validation->set_rules('cost3','Sold Amount','trim|required|alpha_numeric|xss_clean');
        $this->form_validation->set_rules('ncost3','Customer name','trim|required|xss_clean');
        $this->form_validation->set_rules('issue3','Sold date','trim|required|xss_clean');
        if($this->form_validation->run()===FALSE){
            $this->load->view('dashbord',$data);
        }  else {
            $this->load->model('dashbord_model');
            $sn=  $this->session->userdata('username');
            $sold_litre=  $this->input->post('nlitre3');
            $sold_amount=  $this->input->post('cost3');
            $customer_credit=  $this->input->post('ncost3');
            $issue_date=  $this->input->post('issue3');
            $this->dashbord_model->diesel_credit($sn,$sold_litre,$sold_amount,$issue_date,$customer_credit);
            $data['smg3']='<p class="text-center label-success">Recorded successiffuly.!</p>';
            $this->load->view('dashbord',$data);
        }
    }
    function kerosine(){
        $data['activef1']=TRUE;
        $data['active2']=TRUE;
        $data['active9']=TRUE;
        unset($data['activef']);
        unset($data['active1']);
        unset($data['active']);
        $this->form_validation->set_rules('nlitre4','Sold Litres','trim|required|numeric|xss_clean');
        $this->form_validation->set_rules('cost4','Sold Amount','trim|required|alpha_numeric|xss_clean');
        $this->form_validation->set_rules('issue4','Sold date','trim|required|xss_clean');
        if($this->form_validation->run()===FALSE){
            $this->load->view('dashbord',$data);
        }  else {
            $this->load->model('dashbord_model');
            $sn=  $this->session->userdata('username');
            $sold_litre=  $this->input->post('nlitre4');
            $sold_amount=  $this->input->post('cost4');
            $issue_date=  $this->input->post('issue4');
            $this->dashbord_model->kerosine_insert($sn,$sold_litre,$sold_amount,$issue_date);
            $data['smg4']='<p class="text-center label-success">Recorded successiffuly.!</p>';
            $this->load->view('dashbord',$data);
        }
    }
    function kerosine_credit(){
        $data['activef1']=TRUE;
        $data['active10']=TRUE;
        $data['active2']=TRUE;
        unset($data['activef']);
        unset($data['active9']);
        unset($data['active1']);
        unset($data['active']);
        $this->form_validation->set_rules('nlitre5','Sold Litres','trim|required|numeric|xss_clean');
        $this->form_validation->set_rules('cost5','Sold Amount','trim|required|alpha_numeric|xss_clean');
        $this->form_validation->set_rules('ncost5','Customer name','trim|required|xss_clean');
        $this->form_validation->set_rules('issue5','Sold date','trim|required|xss_clean');
        if($this->form_validation->run()===FALSE){
            $this->load->view('dashbord',$data);
        }  else {
            $this->load->model('dashbord_model');
            $sn=  $this->session->userdata('username');
            $sold_litre=  $this->input->post('nlitre5');
            $sold_amount=  $this->input->post('cost5');
            $customer_credit=  $this->input->post('ncost5');
            $issue_date=  $this->input->post('issue5');
            $this->dashbord_model->kerosine_credit($sn,$sold_litre,$sold_amount,$issue_date,$customer_credit);
            $data['smg5']='<p class="text-center label-success">Recorded successiffuly.!</p>';
            $this->load->view('dashbord',$data);
        }
    }
    function oil(){
        $data['active3']=TRUE;
        $data['activef1']=TRUE;
        $data['active11']=TRUE;
        unset($data['active2']);
        unset($data['active1']);
        unset($data['active']);
        unset($data['activef']);
        $this->form_validation->set_rules('nlitre6','Sold Litres','trim|required|numeric|xss_clean');
        $this->form_validation->set_rules('cost6','Sold Amount','trim|required|alpha_numeric|xss_clean');
        $this->form_validation->set_rules('issue6','Sold date','trim|required|xss_clean');
        if($this->form_validation->run()===FALSE){
            $this->load->view('dashbord',$data);
        }  else {
            $this->load->model('dashbord_model');
            $sn=  $this->session->userdata('username');
            $sold_litre=  $this->input->post('nlitre6');
            $sold_amount=  $this->input->post('cost6');
            $issue_date=  $this->input->post('issue6');
            $this->dashbord_model->oil_insert($sn,$sold_litre,$sold_amount,$issue_date);
            $data['smg6']='<p class="text-center label-success">Recorded successiffuly.!</p>';
            $this->load->view('dashbord',$data);
        }
    }
    function oil_credit(){
        $data['activef1']=TRUE;
        $data['active3']=TRUE;
        $data['active12']=TRUE;
        unset($data['active11']);
        unset($data['active2']);
        unset($data['active1']);
        unset($data['active']);
        unset($data['activef']);
        $this->form_validation->set_rules('nlitre7','Sold Litres','trim|required|numeric|xss_clean');
        $this->form_validation->set_rules('cost7','Sold Amount','trim|required|alpha_numeric|xss_clean');
        $this->form_validation->set_rules('ncost7','Customer name','trim|required|xss_clean');
        $this->form_validation->set_rules('issue7','Sold date','trim|required|xss_clean');
        if($this->form_validation->run()===FALSE){
            $this->load->view('dashbord',$data);
        }  else {
            $this->load->model('dashbord_model');
            $sn=  $this->session->userdata('username');
            $sold_litre=  $this->input->post('nlitre7');
            $sold_amount=  $this->input->post('cost7');
            $customer_credit=  $this->input->post('ncost7');
            $issue_date=  $this->input->post('issue7');
            $this->dashbord_model->oil_credit($sn,$sold_litre,$sold_amount,$issue_date,$customer_credit);
            $data['smg7']='<p class="text-center label-success">Recorded successiffuly.!</p>';
            $this->load->view('dashbord',$data);
        }
    }
    function show_records(){
        $result=  $this->db->select_sum('Litre_petrol')->from('tb_petrol')->get();
        if($result->num_rows()>0){
            foreach ($result->result() as $row){
                    $array_records=array(
                        'number_litre'=>$row->Litre_petrol
                    );
            }
            unset($row);
            return $array_records;
        }  else {
            $array_records=array(
                'number_litre'=>'No litres of Petrol found'
            );
            return $array_records;
        }
    }
    function show_sold(){
        $res=  $this->db->select_sum('sold_litre')->from('tb_petrol')->get();
        if($res->num_rows()===1){
            foreach ($res->result() as $ro){
                $array=array(
                    'sold_litres'=>$ro->sold_litre
                );
            }
            unset($ro);
            return $array;
        }else{
            $array=array(
            'sold_litres'=>'No customer'
        );
        }
    }
 }

