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
         $data1=  $this->show_records();
         $data2=  $this->show_sold();
         $data3=  $this->show_amount();
         $data4=  $this->show_sold_amount();
         $data5= $this->diesel_show();
         $data6=  $this->diesel_sold();
         $data7=  $this->diesel_sold_amount();
         $data8=  $this->diesel_amount();
         $data9=  $this->kerosine_amount();
         $data10=  $this->kerosine_show();
         $data11=  $this->kerosine_sold();
         $data12=  $this->kerosine_sold_amount();
         $data13=  $this->oil_amount();
         $data14=  $this->oil_show();
         $data15=  $this->oil_sold();
         $data16=  $this->oil_sold_amount();
         $data=$data1+$data2+$data3+$data4+$data5+$data6+$data7+$data8+$data9+$data10+$data11+$data12+$data13+$data14+$data15+$data16;
         $data['activef']=TRUE;
         $data['active']=TRUE;
         $data['active5']=TRUE;
         $this->load->view('dashbord',$data);
     }
    function petrol(){
        $data1=  $this->show_records();
         $data2=  $this->show_sold();
         $data3=  $this->show_amount();
         $data4=  $this->show_sold_amount();
         $data5= $this->diesel_show();
         $data6=  $this->diesel_sold();
         $data7=  $this->diesel_sold_amount();
         $data8=  $this->diesel_amount();
         $data9=  $this->kerosine_amount();
         $data10=  $this->kerosine_show();
         $data11=  $this->kerosine_sold();
         $data12=  $this->kerosine_sold_amount();
         $data13=  $this->oil_amount();
         $data14=  $this->oil_show();
         $data15=  $this->oil_sold();
         $data16=  $this->oil_sold_amount();
         $data=$data1+$data2+$data3+$data4+$data5+$data6+$data7+$data8+$data9+$data10+$data11+$data12+$data13+$data14+$data15+$data16;
        $data['activef']=TRUE;
        $data['active']=TRUE;
        $data['active5']=TRUE;
        unset($data['activef1']);
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
        $data1=  $this->show_records();
         $data2=  $this->show_sold();
         $data3=  $this->show_amount();
         $data4=  $this->show_sold_amount();
         $data5= $this->diesel_show();
         $data6=  $this->diesel_sold();
         $data7=  $this->diesel_sold_amount();
         $data8=  $this->diesel_amount();
         $data9=  $this->kerosine_amount();
         $data10=  $this->kerosine_show();
         $data11=  $this->kerosine_sold();
         $data12=  $this->kerosine_sold_amount();
         $data13=  $this->oil_amount();
         $data14=  $this->oil_show();
         $data15=  $this->oil_sold();
         $data16=  $this->oil_sold_amount();
         $data=$data1+$data2+$data3+$data4+$data5+$data6+$data7+$data8+$data9+$data10+$data11+$data12+$data13+$data14+$data15+$data16;
        $data['activef']=TRUE;
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
        $data1=  $this->show_records();
         $data2=  $this->show_sold();
         $data3=  $this->show_amount();
         $data4=  $this->show_sold_amount();
         $data5= $this->diesel_show();
         $data6=  $this->diesel_sold();
         $data7=  $this->diesel_sold_amount();
         $data8=  $this->diesel_amount();
         $data9=  $this->kerosine_amount();
         $data10=  $this->kerosine_show();
         $data11=  $this->kerosine_sold();
         $data12=  $this->kerosine_sold_amount();
         $data13=  $this->oil_amount();
         $data14=  $this->oil_show();
         $data15=  $this->oil_sold();
         $data16=  $this->oil_sold_amount();
         $data=$data1+$data2+$data3+$data4+$data5+$data6+$data7+$data8+$data9+$data10+$data11+$data12+$data13+$data14+$data15+$data16;
        $data['activef']=TRUE;
        $data['active1']=TRUE;
        $data['active7']=TRUE;
        unset($data['activef1']);
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
        $data1=  $this->show_records();
         $data2=  $this->show_sold();
         $data3=  $this->show_amount();
         $data4=  $this->show_sold_amount();
         $data5= $this->diesel_show();
         $data6=  $this->diesel_sold();
         $data7=  $this->diesel_sold_amount();
         $data8=  $this->diesel_amount();
         $data9=  $this->kerosine_amount();
         $data10=  $this->kerosine_show();
         $data11=  $this->kerosine_sold();
         $data12=  $this->kerosine_sold_amount();
         $data13=  $this->oil_amount();
         $data14=  $this->oil_show();
         $data15=  $this->oil_sold();
         $data16=  $this->oil_sold_amount();
         $data=$data1+$data2+$data3+$data4+$data5+$data6+$data7+$data8+$data9+$data10+$data11+$data12+$data13+$data14+$data15+$data16;
        $data['activef']=TRUE;
        $data['active1']=TRUE;
        $data['active8']=TRUE;
        unset($data['active7']);
        unset($data['active']);
        unset($data['activef1']);
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
        $data1=  $this->show_records();
         $data2=  $this->show_sold();
         $data3=  $this->show_amount();
         $data4=  $this->show_sold_amount();
         $data5= $this->diesel_show();
         $data6=  $this->diesel_sold();
         $data7=  $this->diesel_sold_amount();
         $data8=  $this->diesel_amount();
         $data9=  $this->kerosine_amount();
         $data10=  $this->kerosine_show();
         $data11=  $this->kerosine_sold();
         $data12=  $this->kerosine_sold_amount();
         $data13=  $this->oil_amount();
         $data14=  $this->oil_show();
         $data15=  $this->oil_sold();
         $data16=  $this->oil_sold_amount();
         $data=$data1+$data2+$data3+$data4+$data5+$data6+$data7+$data8+$data9+$data10+$data11+$data12+$data13+$data14+$data15+$data16;
        $data['activef']=TRUE;
        $data['active2']=TRUE;
        $data['active9']=TRUE;
        unset($data['activef1']);
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
        $data1=  $this->show_records();
         $data2=  $this->show_sold();
         $data3=  $this->show_amount();
         $data4=  $this->show_sold_amount();
         $data5= $this->diesel_show();
         $data6=  $this->diesel_sold();
         $data7=  $this->diesel_sold_amount();
         $data8=  $this->diesel_amount();
         $data9=  $this->kerosine_amount();
         $data10=  $this->kerosine_show();
         $data11=  $this->kerosine_sold();
         $data12=  $this->kerosine_sold_amount();
         $data13=  $this->oil_amount();
         $data14=  $this->oil_show();
         $data15=  $this->oil_sold();
         $data16=  $this->oil_sold_amount();
         $data=$data1+$data2+$data3+$data4+$data5+$data6+$data7+$data8+$data9+$data10+$data11+$data12+$data13+$data14+$data15+$data16;
        $data['activef']=TRUE;
        $data['active10']=TRUE;
        $data['active2']=TRUE;
        unset($data['activef1']);
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
        $data1=  $this->show_records();
         $data2=  $this->show_sold();
         $data3=  $this->show_amount();
         $data4=  $this->show_sold_amount();
         $data5= $this->diesel_show();
         $data6=  $this->diesel_sold();
         $data7=  $this->diesel_sold_amount();
         $data8=  $this->diesel_amount();
         $data9=  $this->kerosine_amount();
         $data10=  $this->kerosine_show();
         $data11=  $this->kerosine_sold();
         $data12=  $this->kerosine_sold_amount();
         $data13=  $this->oil_amount();
         $data14=  $this->oil_show();
         $data15=  $this->oil_sold();
         $data16=  $this->oil_sold_amount();
         $data=$data1+$data2+$data3+$data4+$data5+$data6+$data7+$data8+$data9+$data10+$data11+$data12+$data13+$data14+$data15+$data16;
        $data['active3']=TRUE;
        $data['activef']=TRUE;
        $data['active11']=TRUE;
        unset($data['active2']);
        unset($data['active1']);
        unset($data['active']);
        unset($data['activef1']);
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
        $data1=  $this->show_records();
        $data2=  $this->show_sold();
        $data3=  $this->show_amount();
        $data4=  $this->show_sold_amount();
        $data5= $this->diesel_show();
        $data6=  $this->diesel_sold();
        $data7=  $this->diesel_sold_amount();
        $data8=  $this->diesel_amount();
        $data9=  $this->kerosine_amount();
        $data10=  $this->kerosine_show();
        $data11=  $this->kerosine_sold();
        $data12=  $this->kerosine_sold_amount();
        $data13=  $this->oil_amount();
        $data14=  $this->oil_show();
        $data15=  $this->oil_sold();
        $data16=  $this->oil_sold_amount();
        $data=$data1+$data2+$data3+$data4+$data5+$data6+$data7+$data8+$data9+$data10+$data11+$data12+$data13+$data14+$data15+$data16;
        $data['activef']=TRUE;
        $data['active3']=TRUE;
        $data['active12']=TRUE;
        unset($data['active11']);
        unset($data['active2']);
        unset($data['active1']);
        unset($data['active']);
        unset($data['activef1']);
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
    function show_amount(){
        $result1=  $this->db->select_sum('purchased_amount')->from('tb_petrol')->get();
        if($result1->num_rows()>0){
            foreach ($result1->result() as $row){
                    $array_records=array(
                        'purchased_amount'=>$row->purchased_amount
                    );
            }
            unset($row);
            return $array_records;
        }  else {
            $array_records=array(
                'purchased_amount'=>'No cash of Petrol found'
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
             return $array;
        }
    }
    function show_sold_amount(){
        $res1=  $this->db->select_sum('sold_amount')->from('tb_petrol')->get();
        if($res1->num_rows()===1){
            foreach ($res1->result() as $ro){
                $array=array(
                    'sold_amount'=>$ro->sold_amount
                );
            }
            unset($ro);
            return $array;
        }else{
            $array=array(
            'sold_amount'=>'No customer'
        );
        return $array;
    }
 }
 function diesel_show(){
   $result=  $this->db->select_sum('Litre_diesel')->from('tb_diesel')->get();
        if($result->num_rows()>0){
            foreach ($result->result() as $row){
                    $array_records=array(
                        'number_litre1'=>$row->Litre_diesel
                    );
            }
            unset($row);
            return $array_records;
        }  else {
            $array_records=array(
                'number_litre1'=>'No litres of diesel found'
            );
            return $array_records;
        }  
 }
 function diesel_sold(){
     $res=  $this->db->select_sum('sold_litre')->from('tb_diesel')->get();
        if($res->num_rows()===1){
            foreach ($res->result() as $ro){
                $array=array(
                    'sold_litres1'=>$ro->sold_litre
                );
            }
            unset($ro);
            return $array;
        }else{
            $array=array(
            'sold_litres1'=>'No customer'
        );
        return $array;
        }
 }
 function diesel_amount(){
     $result1=  $this->db->select_sum('purchased_amount')->from('tb_diesel')->get();
        if($result1->num_rows()>0){
            foreach ($result1->result() as $row){
                    $array_records=array(
                        'purchased_amount1'=>$row->purchased_amount
                    );
            }
            unset($row);
            return $array_records;
        }  else {
            $array_records=array(
                'purchased_amount1'=>'No cash of diesel found'
            );
            return $array_records;
        }
 }
 function diesel_sold_amount(){
     $res1=  $this->db->select_sum('sold_amount')->from('tb_diesel')->get();
        if($res1->num_rows()===1){
            foreach ($res1->result() as $ro){
                $array=array(
                    'sold_amount1'=>$ro->sold_amount
                );
            }
            unset($ro);
            return $array;
        }else{
            $array=array(
            'sold_amount1'=>'No customer'
        );
            return $array;
    }
 }
 function kerosine_show(){
   $result=  $this->db->select_sum('Litre_kerosine')->from('tb_kerosine')->get();
        if($result->num_rows()>0){
            foreach ($result->result() as $row){
                    $array_records=array(
                        'number_litre2'=>$row->Litre_kerosine
                    );
            }
            unset($row);
            return $array_records;
        }  else {
            $array_records=array(
                'number_litre2'=>'No litres of kerosine found'
            );
            return $array_records;
        }  
 }
 function kerosine_sold(){
     $res=  $this->db->select_sum('sold_litre')->from('tb_kerosine')->get();
        if($res->num_rows()===1){
            foreach ($res->result() as $ro){
                $array=array(
                    'sold_litres2'=>$ro->sold_litre
                );
            }
            unset($ro);
            return $array;
        }else{
            $array=array(
            'sold_litres2'=>'No customer'
        );
        return $array;
        }
 }
 function kerosine_amount(){
     $result1=  $this->db->select_sum('purchased_amount')->from('tb_kerosine')->get();
        if($result1->num_rows()>0){
            foreach ($result1->result() as $row){
                    $array_records=array(
                        'purchased_amount2'=>$row->purchased_amount
                    );
            }
            unset($row);
            return $array_records;
        }  else {
            $array_records=array(
                'purchased_amount2'=>'No cash of kerosine found'
            );
            return $array_records;
        }
 }
 function kerosine_sold_amount(){
     $res1=  $this->db->select_sum('sold_amount')->from('tb_kerosine')->get();
        if($res1->num_rows()===1){
            foreach ($res1->result() as $ro){
                $array=array(
                    'sold_amount2'=>$ro->sold_amount
                );
            }
            unset($ro);
            return $array;
        }else{
            $array=array(
            'sold_amount2'=>'No customer'
        );
        return $array;
    }
 }
 function oil_show(){
   $result=  $this->db->select_sum('Litre_oil')->from('tb_oil')->get();
        if($result->num_rows()>0){
            foreach ($result->result() as $row){
                    $array_records=array(
                        'number_litre3'=>$row->Litre_oil
                    );
            }
            unset($row);
            return $array_records;
        }  else {
            $array_records=array(
                'number_litre3'=>'No litres of diesel found'
            );
            return $array_records;
        }  
 }
 function oil_sold(){
     $res=  $this->db->select_sum('sold_litre')->from('tb_oil')->get();
        if($res->num_rows()===1){
            foreach ($res->result() as $ro){
                $array=array(
                    'sold_litres3'=>$ro->sold_litre
                );
            }
            unset($ro);
            return $array;
        }else{
            $array=array(
            'sold_litres3'=>'No customer'
        );
        return $array;
        }
 }
 function oil_amount(){
     $result1=  $this->db->select_sum('purchased_amount')->from('tb_oil')->get();
        if($result1->num_rows()>0){
            foreach ($result1->result() as $row){
                    $array_records=array(
                        'purchased_amount3'=>$row->purchased_amount
                    );
            }
            unset($row);
            return $array_records;
        }  else {
            $array_records=array(
                'purchased_amount3'=>'No cash of diesel found'
            );
            return $array_records;
        }
 }
 function oil_sold_amount(){
     $res1=  $this->db->select_sum('sold_amount')->from('tb_oil')->get();
        if($res1->num_rows()===1){
            foreach ($res1->result() as $ro){
                $array=array(
                    'sold_amount3'=>$ro->sold_amount
                );
            }
            unset($ro);
            return $array;
        }else{
            $array=array(
            'sold_amount3'=>'No customer'
        );
        return $array;
    }
 }

}

