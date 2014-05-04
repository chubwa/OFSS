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
         $data1=  $this->alert();
         $data2=  $this->alert1();
         $data3=  $this->alert2();
         $data4=  $this->alert3();
         $data5=  $this->alert4();
         $data6=  $this->alert5();
         $data7=  $this->alert6();
         $data8=  $this->alert7();
         $data9=  $this->show();
         $data10=  $this->show1();
         $data11=  $this->show2();
         $data12=  $this->show3();
         $data13=  $this->alert8();
         $data14=  $this->alert9();
         $data15=  $this->alert10();
         $data16=  $this->alert11();
         $data17=  $this->alert12();
         $data18=  $this->alert13();
         $data19=  $this->alert14();
         $data20=  $this->alert15();
         $data=$data1+$data2+$data3+$data4+$data5+$data6+$data7+$data8+$data9+$data10+$data11+$data12
                 +$data13+$data14+$data15+$data16+$data17+$data18+$data19+$data20;
         $data['results']=  $this->member();
         $data['petrol']=  $this->petrol_summaries();
         $data['diesel']=  $this->diesel_summaries();
         $data['kerosine']=  $this->kerosine_summaries();
         $data['oil']=  $this->oil_summaries();
         $data['activef']=TRUE;
         $data['active']=TRUE;
         $this->load->view('admin_dashbord',$data);
     }
     public function petrol(){
         $data1=  $this->alert();
         $data2=  $this->alert1();
         $data3=  $this->alert2();
         $data4=  $this->alert3();
         $data5=  $this->alert4();
         $data6=  $this->alert5();
         $data7=  $this->alert6();
         $data8=  $this->alert7();
         $data9=  $this->show();
         $data10=  $this->show1();
         $data11=  $this->show2();
         $data12=  $this->show3();
         $data13=  $this->alert8();
         $data14=  $this->alert9();
         $data15=  $this->alert10();
         $data16=  $this->alert11();
         $data17=  $this->alert12();
         $data18=  $this->alert13();
         $data19=  $this->alert14();
         $data20=  $this->alert15();
         $data=$data1+$data2+$data3+$data4+$data5+$data6+$data7+$data8+$data9+$data10+$data11+$data12
                 +$data13+$data14+$data15+$data16+$data17+$data18+$data19+$data20;
         $data['results']=  $this->member();
         $data['petrol']=  $this->petrol_summaries();
         $data['diesel']=  $this->diesel_summaries();
         $data['kerosine']=  $this->kerosine_summaries();
         $data['oil']=  $this->oil_summaries();
         $data['activef']=TRUE;
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
         $data1=  $this->alert();
         $data2=  $this->alert1();
         $data3=  $this->alert2();
         $data4=  $this->alert3();
         $data5=  $this->alert4();
         $data6=  $this->alert5();
         $data7=  $this->alert6();
         $data8=  $this->alert7();
         $data9=  $this->show();
         $data10=  $this->show1();
         $data11=  $this->show2();
         $data12=  $this->show3();
         $data13=  $this->alert8();
         $data14=  $this->alert9();
         $data15=  $this->alert10();
         $data16=  $this->alert11();
         $data17=  $this->alert12();
         $data18=  $this->alert13();
         $data19=  $this->alert14();
         $data20=  $this->alert15();
         $data=$data1+$data2+$data3+$data4+$data5+$data6+$data7+$data8+$data9+$data10+$data11+$data12
                 +$data13+$data14+$data15+$data16+$data17+$data18+$data19+$data20;
             $data['results']=  $this->member();
             $data['petrol']=  $this->petrol_summaries();
         $data['diesel']=  $this->diesel_summaries();
         $data['kerosine']=  $this->kerosine_summaries();
         $data['oil']=  $this->oil_summaries();
             $data['active1']=TRUE;
             $data['activef']=TRUE;
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
         $data1=  $this->alert();
         $data2=  $this->alert1();
         $data3=  $this->alert2();
         $data4=  $this->alert3();
         $data5=  $this->alert4();
         $data6=  $this->alert5();
         $data7=  $this->alert6();
         $data8=  $this->alert7();
         $data9=  $this->show();
         $data10=  $this->show1();
         $data11=  $this->show2();
         $data12=  $this->show3();
         $data13=  $this->alert8();
         $data14=  $this->alert9();
         $data15=  $this->alert10();
         $data16=  $this->alert11();
         $data17=  $this->alert12();
         $data18=  $this->alert13();
         $data19=  $this->alert14();
         $data20=  $this->alert15();
         $data=$data1+$data2+$data3+$data4+$data5+$data6+$data7+$data8+$data9+$data10+$data11+$data12
                 +$data13+$data14+$data15+$data16+$data17+$data18+$data19+$data20;
         $data['results']=  $this->member();
         $data['petrol']=  $this->petrol_summaries();
         $data['diesel']=  $this->diesel_summaries();
         $data['kerosine']=  $this->kerosine_summaries();
         $data['oil']=  $this->oil_summaries();
         $data['activef']=TRUE;
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
         $data1=  $this->alert();
         $data2=  $this->alert1();
         $data3=  $this->alert2();
         $data4=  $this->alert3();
         $data5=  $this->alert4();
         $data6=  $this->alert5();
         $data7=  $this->alert6();
         $data8=  $this->alert7();
         $data9=  $this->show();
         $data10=  $this->show1();
         $data11=  $this->show2();
         $data12=  $this->show3();
         $data13=  $this->alert8();
         $data14=  $this->alert9();
         $data15=  $this->alert10();
         $data16=  $this->alert11();
         $data17=  $this->alert12();
         $data18=  $this->alert13();
         $data19=  $this->alert14();
         $data20=  $this->alert15();
         $data=$data1+$data2+$data3+$data4+$data5+$data6+$data7+$data8+$data9+$data10+$data11+$data12
                 +$data13+$data14+$data15+$data16+$data17+$data18+$data19+$data20;
         $data['results']=  $this->member();
         $data['petrol']=  $this->petrol_summaries();
         $data['diesel']=  $this->diesel_summaries();
         $data['kerosine']=  $this->kerosine_summaries();
         $data['oil']=  $this->oil_summaries();
         $data['activef']=TRUE;
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
     function member(){
       $query= $this->db->get_where('tb_user');
       if($query->num_rows()>0){
           return $query; 
       }  else {
           return FALSE;
       }
     }
     public function delete($id){
       $res= $this->db->get_where('tb_user',array('id'=>$id),1);
       if($res->num_rows()===1){
           $row=$res->row();
           $this->db->where('id',$id);
           $this->db->delete('tb_user');
           $data['delete']='You have deleted'.''.$row->username. 'from the system';
           $this->load->view('admin_dashbord',$data);
       }  else {
           return FALSE; 
       }
     }
     function update($id){
         $res=  $this->db->get_where('tb_user',array('id'=>$id),1);
         if($res->num_rows()===1){
             foreach ($res->result() as $ros){
                 
                 $data_records=array(
                     'id'=>$ros->id,
                     'firstname'=>$ros->first_name,
                     'lastname'=>$ros->sec_name,
                     'username'=>$ros->username,
                     'email'=>$ros->email,
                     'position'=>$ros->position
                 );
         }
         
             unset($ros);
             $this->load->view('admin_dashbord_update',$data_records);
         }  else {
             return FALSE; 
         }
     }
     function diactivate($id){
         $data1=  $this->alert();
         $data2=  $this->alert1();
         $data3=  $this->alert2();
         $data4=  $this->alert3();
         $data5=  $this->alert4();
         $data6=  $this->alert5();
         $data7=  $this->alert6();
         $data8=  $this->alert7();
         $data9=  $this->show();
         $data10=  $this->show1();
         $data11=  $this->show2();
         $data12=  $this->show3();
         $data13=  $this->alert8();
         $data14=  $this->alert9();
         $data15=  $this->alert10();
         $data16=  $this->alert11();
         $data17=  $this->alert12();
         $data18=  $this->alert13();
         $data19=  $this->alert14();
         $data20=  $this->alert15();
         $data=$data1+$data2+$data3+$data4+$data5+$data6+$data7+$data8+$data9+$data10+$data11+$data12
                 +$data13+$data14+$data15+$data16+$data17+$data18+$data19+$data20;
         $data['results']=  $this->member();
         $data['petrol']=  $this->petrol_summaries();
         $data['diesel']=  $this->diesel_summaries();
         $data['kerosine']=  $this->kerosine_summaries();
         $data['oil']=  $this->oil_summaries();
         $data['activef2']=TRUE;
         $res=  $this->db->get_where('tb_user',array('id'=>$id,'status'=>'active'),1);
         $res1=  $this->db->get_where('tb_user',array('id'=>$id,'status'=>'diactive'),1);
         if($res->num_rows()===1){
             $active=array(
                 'id'=>$id,
                 'status'=>'diactive'
             );
             $this->db->where('id',$id);
            $this->db->update('tb_user',$active);
            $this->load->view('admin_dashbord',$data);
         }elseif($res1->num_rows()===1){  
            $diactivate=array(
                'id'=>$id,
                'status'=>'active'
            );
            $this->db->where('id',$id);
            $this->db->update('tb_user',$diactivate);
            $this->load->view('admin_dashbord',$data);
         }else {
             return FALSE;
         }
     }
     function user(){
         $data1=  $this->alert();
         $data2=  $this->alert1();
         $data3=  $this->alert2();
         $data4=  $this->alert3();
         $data5=  $this->alert4();
         $data6=  $this->alert5();
         $data7=  $this->alert6();
         $data8=  $this->alert7();
         $data9=  $this->show();
         $data10=  $this->show1();
         $data11=  $this->show2();
         $data12=  $this->show3();
         $data13=  $this->alert8();
         $data14=  $this->alert9();
         $data15=  $this->alert10();
         $data16=  $this->alert11();
         $data17=  $this->alert12();
         $data18=  $this->alert13();
         $data19=  $this->alert14();
         $data20=  $this->alert15();
         $data=$data1+$data2+$data3+$data4+$data5+$data6+$data7+$data8+$data9+$data10+$data11+$data12
                 +$data13+$data14+$data15+$data16+$data17+$data18+$data19+$data20;
       $data['results']=  $this->member();
       $data['petrol']=  $this->petrol_summaries();
       $data['diesel']=  $this->diesel_summaries();
       $data['kerosine']=  $this->kerosine_summaries();
       $data['oil']=  $this->oil_summaries();
       $data['activef2']=TRUE;
       $this->load->view('admin_dashbord',$data);
     }
     public function alert(){
         $res=  $this->db->select_sum('Litre_petrol')->from('tb_petrol')->get();
         if($res->num_rows()>0){
             foreach ($res->result() as $row){
                 $array=array(
                     'Litre_petrol'=>$row->Litre_petrol
                 );
             }
             unset($row);
             return $array;
         }
     }
     public function alert1() {
       $res1=  $this->db->select_sum('sold_litre')->from('tb_petrol')->get();
       if($res1->num_rows()>0){
           foreach ($res1->result() as $row){
               $array=array(
                   'sold_litre'=>$row->sold_litre
               );
           }
           unset($row);
           return $array;
       }
     }
      public function alert2(){
         $res=  $this->db->select_sum('Litre_diesel')->from('tb_diesel')->get();
         if($res->num_rows()>0){
             foreach ($res->result() as $row){
                 $array=array(
                     'Litre_diesel'=>$row->Litre_diesel
                 );
             }
             unset($row);
             return $array;
         }
     }
     public function alert3() {
       $res1=  $this->db->select_sum('sold_litre')->from('tb_diesel')->get();
       if($res1->num_rows()>0){
           foreach ($res1->result() as $row){
               $array=array(
                   'sold_litre1'=>$row->sold_litre
               );
           }
           unset($row);
           return $array;
       }
     }
      public function alert4(){
         $res=  $this->db->select_sum('Litre_kerosine')->from('tb_kerosine')->get();
         if($res->num_rows()>0){
             foreach ($res->result() as $row){
                 $array=array(
                     'Litre_kerosine'=>$row->Litre_kerosine
                 );
             }
             unset($row);
             return $array;
         }
     }
     public function alert5() {
       $res1=  $this->db->select_sum('sold_litre')->from('tb_kerosine')->get();
       if($res1->num_rows()>0){
           foreach ($res1->result() as $row){
               $array=array(
                   'sold_litre2'=>$row->sold_litre
               );
           }
           unset($row);
           return $array;
       }
     }
      public function alert6(){
         $res=  $this->db->select_sum('Litre_oil')->from('tb_oil')->get();
         if($res->num_rows()>0){
             foreach ($res->result() as $row){
                 $array=array(
                     'Litre_oil'=>$row->Litre_oil
                 );
             }
             unset($row);
             return $array;
         }
     }
     public function alert7() {
       $res1=  $this->db->select_sum('sold_litre')->from('tb_oil')->get();
       if($res1->num_rows()>0){
           foreach ($res1->result() as $row){
               $array=array(
                   'sold_litre3'=>$row->sold_litre
               );
           }
           unset($row);
           return $array;
       }
     }
       public function alert8() {
       $res1=  $this->db->select_sum('expected_amount')->from('tb_petrol')->get();
       if($res1->num_rows()>0){
           foreach ($res1->result() as $row){
               $array=array(
                   'expected_amount'=>$row->expected_amount
               );
           }
           unset($row);
           return $array;
       }
       }
       public function alert9() {
       $res1=  $this->db->select_sum('expected_amount')->from('tb_kerosine')->get();
       if($res1->num_rows()>0){
           foreach ($res1->result() as $row){
               $array=array(
                   'expected_amount1'=>$row->expected_amount
               );
           }
           unset($row);
           return $array;
       }
       }
       public function alert10() {
       $res1=  $this->db->select_sum('expected_amount')->from('tb_diesel')->get();
       if($res1->num_rows()>0){
           foreach ($res1->result() as $row){
               $array=array(
                   'expected_amount2'=>$row->expected_amount
               );
           }
           unset($row);
           return $array;
       }
       }
       public function alert11() {
       $res1=  $this->db->select_sum('expected_amount')->from('tb_oil')->get();
       if($res1->num_rows()>0){
           foreach ($res1->result() as $row){
               $array=array(
                   'expected_amount3'=>$row->expected_amount
               );
           }
           unset($row);
           return $array;
       }
     }
     public function alert12() {
       $res1=  $this->db->select_sum('sold_amount')->from('tb_petrol')->get();
       if($res1->num_rows()>0){
           foreach ($res1->result() as $row){
               $array=array(
                   'sold_amount1'=>$row->sold_amount
               );
           }
           unset($row);
           return $array;
       }
       }
       public function alert13() {
       $res1=  $this->db->select_sum('sold_amount')->from('tb_kerosine')->get();
       if($res1->num_rows()>0){
           foreach ($res1->result() as $row){
               $array=array(
                   'sold_amount2'=>$row->sold_amount
               );
           }
           unset($row);
           return $array;
       }
       }
       public function alert14() {
       $res1=  $this->db->select_sum('sold_amount')->from('tb_diesel')->get();
       if($res1->num_rows()>0){
           foreach ($res1->result() as $row){
               $array=array(
                   'sold_amount3'=>$row->sold_amount
               );
           }
           unset($row);
           return $array;
       }
       }
       public function alert15() {
       $res1=  $this->db->select_sum('sold_amount')->from('tb_oil')->get();
       if($res1->num_rows()>0){
           foreach ($res1->result() as $row){
               $array=array(
                   'sold_amount4'=>$row->sold_amount
               );
           }
           unset($row);
           return $array;
       }
     }
     public function summary(){
         $data1=  $this->alert();
         $data2=  $this->alert1();
         $data3=  $this->alert2();
         $data4=  $this->alert3();
         $data5=  $this->alert4();
         $data6=  $this->alert5();
         $data7=  $this->alert6();
         $data8=  $this->alert7();
         $data9=  $this->show();
         $data10=  $this->show1();
         $data11=  $this->show2();
         $data12=  $this->show3();
         $data13=  $this->alert8();
         $data14=  $this->alert9();
         $data15=  $this->alert10();
         $data16=  $this->alert11();
         $data17=  $this->alert12();
         $data18=  $this->alert13();
         $data19=  $this->alert14();
         $data20=  $this->alert15();
         $data=$data1+$data2+$data3+$data4+$data5+$data6+$data7+$data8+$data9+$data10+$data11+$data12
                 +$data13+$data14+$data15+$data16+$data17+$data18+$data19+$data20;
         $data['petrol']=  $this->petrol_summaries();
         $data['diesel']=  $this->diesel_summaries();
         $data['kerosine']=  $this->kerosine_summaries();
         $data['oil']=  $this->oil_summaries();
         $this->load->view('alert_view',$data);    
     }
     function show(){
         $res=  $this->db->get('tb_petrol');
         if($res->num_rows()>0){
             foreach ($res->result() as $row){
                 $array=array(
                     'Litre_petrol'=>$row->Litre_petrol,
                     'purchased_amount'=>$row->purchased_amount,
                     'admin_name'=>$row->admin_name,
                     'Expected_amount'=>$row->expected_amount,
                     'seller_name'=>$row->seller_name,
                     'entray_date'=>$row->entray_date,
                     'sold_litre'=>$row->sold_litre,
                     'sold_amount'=>$row->sold_amount
                 );
             }
             unset($row);
             return $array;
         }
     }
     function show1(){
         $res=  $this->db->get('tb_diesel');
         if($res->num_rows()>0){
             foreach ($res->result() as $row){
                 $array=array(
                     'Litre_diesel'=>$row->Litre_diesel,
                     'purchased_amount1'=>$row->purchased_amount,
                     'admin_name1'=>$row->admin_name,
                     'Expected_amount1'=>$row->expected_amount,
                     'seller_name1'=>$row->seller_name,
                     'entray_date1'=>$row->entray_date,
                     'sold_litre1'=>$row->sold_litre,
                     'sold_amount1'=>$row->sold_amount
                 );
             }
             unset($row);
             return $array;
         }
     }
     function show2(){
         $res=  $this->db->get('tb_kerosine');
         if($res->num_rows()>0){
             foreach ($res->result() as $row){
                 $array=array(
                     'Litre_kerosine'=>$row->Litre_kerosine,
                     'purchased_amount2'=>$row->purchased_amount,
                     'admin_name2'=>$row->admin_name,
                     'Expected_amount2'=>$row->expected_amount,
                     'seller_name2'=>$row->seller_name,
                     'entray_date2'=>$row->entray_date,
                     'sold_litre2'=>$row->sold_litre,
                     'sold_amount2'=>$row->sold_amount
                 );
             }
             unset($row);
             return $array;
         }
     }
     function show3(){
         $res=  $this->db->get('tb_oil');
         if($res->num_rows()>0){
             foreach ($res->result() as $row){
                 $array=array(
                     'Litre_oil'=>$row->Litre_oil,
                     'purchased_amount3'=>$row->purchased_amount,
                     'admin_name3'=>$row->admin_name,
                     'Expected_amount3'=>$row->expected_amount,
                     'seller_name3'=>$row->seller_name,
                     'entray_date3'=>$row->entray_date,
                     'sold_litre3'=>$row->sold_litre,
                     'sold_amount3'=>$row->sold_amount
                 );
             }
             unset($row);
             return $array;
         }
     }
     public function problem(){
         $data1=  $this->alert();
         $data2=  $this->alert1();
         $data3=  $this->alert2();
         $data4=  $this->alert3();
         $data5=  $this->alert4();
         $data6=  $this->alert5();
         $data7=  $this->alert6();
         $data8=  $this->alert7();
         $data9=  $this->show();
         $data10=  $this->show1();
         $data11=  $this->show2();
         $data12=  $this->show3();
         $data13=  $this->alert8();
         $data14=  $this->alert9();
         $data15=  $this->alert10();
         $data16=  $this->alert11();
         $data17=  $this->alert12();
         $data18=  $this->alert13();
         $data19=  $this->alert14();
         $data20=  $this->alert15();
         $data=$data1+$data2+$data3+$data4+$data5+$data6+$data7+$data8+$data9+$data10+$data11+$data12
                 +$data13+$data14+$data15+$data16+$data17+$data18+$data19+$data20;
         $data['petrol']=  $this->petrol_summaries();
         $data['diesel']=  $this->diesel_summaries();
         $data['kerosine']=  $this->kerosine_summaries();
         $data['oil']=  $this->oil_summaries();
         $this->form_validation->set_rules('txt','Problem','trim|required|xss_clean');
         $this->form_validation->set_rules('people','Receipient','trim|required|xss_clean');
         if($this->form_validation->run()===FALSE){
          $this->load->view('problem_view',$data);
         }else{
         $this->load->model('admin_model');
         $sender=  $this->session->userdata('username');
         $problem=  $this->input->post('txt');
         $receiver=  $this->input->post('people');
         $this->admin_model->reporter($sender,$problem,$receiver);
         $data['sms']='<label class="label-success">Your problem has sent.!</label>';
         $this->load->view('problem_view',$data);
         }
     }
     function notify_view(){
         $data1=  $this->alert();
         $data2=  $this->alert1();
         $data3=  $this->alert2();
         $data4=  $this->alert3();
         $data5=  $this->alert4();
         $data6=  $this->alert5();
         $data7=  $this->alert6();
         $data8=  $this->alert7();
         $data9=  $this->show();
         $data10=  $this->show1();
         $data11=  $this->show2();
         $data12=  $this->show3();
         $data13=  $this->alert8();
         $data14=  $this->alert9();
         $data15=  $this->alert10();
         $data16=  $this->alert11();
         $data17=  $this->alert12();
         $data18=  $this->alert13();
         $data19=  $this->alert14();
         $data20=  $this->alert15();
         $data=$data1+$data2+$data3+$data4+$data5+$data6+$data7+$data8+$data9+$data10+$data11+$data12
                 +$data13+$data14+$data15+$data16+$data17+$data18+$data19+$data20;
         $data['petrol']=  $this->petrol_summaries();
         $data['diesel']=  $this->diesel_summaries();
         $data['kerosine']=  $this->kerosine_summaries();
         $data['oil']=  $this->oil_summaries();
         $res=  $this->db->get_where('tb_problem',array('receiver'=>'admin','status'=>'unchecked'));
         if($res->num_rows()>0){
            $data['record']=$res;
            $this->load->view('admin_message',$data);
         }  else {
         $data['records']='<p class="alert-warning">Inbox Empty..!</p>';
         $this->load->view('admin_message',$data);
 
         }
     }
     function message($id){
         $data1=  $this->alert();
         $data2=  $this->alert1();
         $data3=  $this->alert2();
         $data4=  $this->alert3();
         $data5=  $this->alert4();
         $data6=  $this->alert5();
         $data7=  $this->alert6();
         $data8=  $this->alert7();
         $data9=  $this->show();
         $data10=  $this->show1();
         $data11=  $this->show2();
         $data12=  $this->show3();
         $data13=  $this->alert8();
         $data14=  $this->alert9();
         $data15=  $this->alert10();
         $data16=  $this->alert11();
         $data17=  $this->alert12();
         $data18=  $this->alert13();
         $data19=  $this->alert14();
         $data20=  $this->alert15();
         $res=  $this->db->get_where('tb_problem',array('id'=>$id));
         if($res->num_rows()>0){
             $this->db->where('id',$id);
             $this->db->update('tb_problem',array('status'=>'checked'));
             foreach ($res->result() as $sms){
                $data_array=array(
                    'id'=>$sms->id,
                    'problem'=>$sms->problem
                ); 
             }
             unset($sms);
             $data=$data1+$data2+$data3+$data4+$data5+$data6+$data7+$data8+$data9+$data10+$data11+$data12
                 +$data13+$data14+$data15+$data16+$data17+$data18+$data19+$data20+$data_array;
         $data['petrol']=  $this->petrol_summaries();
         $data['diesel']=  $this->diesel_summaries();
         $data['kerosine']=  $this->kerosine_summaries();
         $data['oil']=  $this->oil_summaries();
             $this->load->view('admin_message_view',$data);
         }
     }
     function sms_delete($id){
         $data1=  $this->alert();
         $data2=  $this->alert1();
         $data3=  $this->alert2();
         $data4=  $this->alert3();
         $data5=  $this->alert4();
         $data6=  $this->alert5();
         $data7=  $this->alert6();
         $data8=  $this->alert7();
         $data9=  $this->show();
         $data10=  $this->show1();
         $data11=  $this->show2();
         $data12=  $this->show3();
         $data13=  $this->alert8();
         $data14=  $this->alert9();
         $data15=  $this->alert10();
         $data16=  $this->alert11();
         $data17=  $this->alert12();
         $data18=  $this->alert13();
         $data19=  $this->alert14();
         $data20=  $this->alert15();
         $data=$data1+$data2+$data3+$data4+$data5+$data6+$data7+$data8+$data9+$data10+$data11+$data12
                 +$data13+$data14+$data15+$data16+$data17+$data18+$data19+$data20;
         $data['petrol']=  $this->petrol_summaries();
         $data['diesel']=  $this->diesel_summaries();
         $data['kerosine']= $this->kerosine_summaries();
         $data['oil']=  $this->oil_summaries();
         $res=  $this->db->get_where('tb_problem',array('id'=>$id));
         if($res->num_rows()>0){
             $this->db->where('id',$id);
             $this->db->delete('tb_problem');
             $data['records']='<p class="alert-warning">Message deleted..!</p>';
             $this->load->view('admin_message',$data);
         }  else {
         $data['records']='<p class="alert-warning">Inbox Empty..!</p>';
         $this->load->view('admin_message',$data);
         }
     }
     function petrol_summaries(){
         $this->load->library('pagination');
         $config['base_url']=  base_url().'index.php/admin_controller/';
         $config['per_page']=10;
         $config['num_links']=3;
         $config['total_rows']=  $this->db->get('tb_petrol');
         $this->pagination->initialize($config);
         $res=  $this->db->get('tb_petrol',$config['per_page'],  $this->uri->segment(3));
         return $res;
     }
     function diesel_summaries(){
         $res=  $this->db->get('tb_diesel');
         return $res;
     }
     function kerosine_summaries(){
         $res=  $this->db->get('tb_kerosine');
         return $res;
     }
     function oil_summaries(){
         $res=  $this->db->get('tb_oil');
         return $res;
     }
     function edit($id){
         
         $position=  $this->input->post('position');
         $this->load->model('admin_model');
         $this->admin_model->edit($id,$position);
         echo '<p class="alert-success">successifully updated</p>';
        
     }
 }

