<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class Dashbord_model extends CI_Model{
     function __construct() {
         parent::__construct();
     }
     function petrol_insert($sn,$sold_litre,$sold_amount,$issue_date){
             $data_entry=array(
                 'seller_name'=>$sn,
                 'sold_litre'=>$sold_litre,
                 'sold_amount'=>$sold_amount,
                 'sold_date'=>$issue_date
             );
             $res1=  $this->db->get_where('tb_petrol',array('entray_date'=>$issue_date));
             $res=  $this->db->get_where('tb_petrol',array('seller_name'=>$sn,'sold_date'=>$issue_date));
             if($res->num_rows()===1){
                 $row=$res->row();
                 $data=array(
                     'seller_name'=>$sn,
                     'sold_litre'=>$row->sold_litre+$sold_litre,
                     'sold_amount'=>$row->sold_amount+$sold_amount,
                     'sold_date'=>$issue_date
                 );
                 $this->db->where('seller_name',$sn);
                 $this->db->update('tb_petrol',$data);
             }elseif($res1->num_rows()===1){
                 $row1=$res1->row();
                 $data=array(
                     'seller_name'=>$sn,
                     'sold_litre'=>$row1->sold_litre+$sold_litre,
                     'sold_amount'=>$row1->sold_amount+$sold_amount,
                     'sold_date'=>$issue_date
                 );
                 $this->db->where('entray_date',$issue_date);
                 $this->db->update('tb_petrol',$data);
             }else {
                 $this->db->insert('tb_petrol',$data_entry); 
             }
     }
     function pertol_credit($sn,$sold_litre,$sold_amount,$issue_date,$customer_credit){
         $data_entry=array(
                 'seller_name'=>$sn,
                 'sold_litre'=>$sold_litre,
                 'sold_amount'=>$sold_amount,
                 'sold_date'=>$issue_date,
                 'customer_credit_name'=>$customer_credit
             );
             $res1=  $this->db->get_where('tb_petrol',array('entray_date'=>$issue_date));
             $res=  $this->db->get_where('tb_petrol',array('seller_name'=>$sn,'sold_date'=>$issue_date));
             if($res->num_rows()===1){
                 $row=$res->row();
                 $data=array(
                     'seller_name'=>$sn,
                     'sold_litre'=>$row->sold_litre+$sold_litre,
                     'sold_amount'=>$row->sold_amount+$sold_amount,
                     'sold_date'=>$issue_date,
                     'customer_credit_name'=>$customer_credit
                 );
                 $this->db->where('seller_name',$sn);
                 $this->db->update('tb_petrol',$data);
             } elseif($res1->num_rows()===1){ 
                 $row1=$res1->row();
                 $data=array(
                     'seller_name'=>$sn,
                     'sold_litre'=>$row1->sold_litre+$sold_litre,
                     'sold_amount'=>$row1->sold_amount+$sold_amount,
                     'sold_date'=>$issue_date,
                     'customer_credit_name'=>$customer_credit
                 );
                 $this->db->where('entray_date',$issue_date);
                 $this->db->update('tb_petrol',$data);
             }else {
                 $this->db->insert('tb_petrol',$data_entry); 
             }
     }
     function diesel_insert($sn,$sold_litre,$sold_amount,$issue_date){
             $data_entry=array(
                 'seller_name'=>$sn,
                 'sold_litre'=>$sold_litre,
                 'sold_amount'=>$sold_amount,
                 'sold_date'=>$issue_date
             );
             $res1=  $this->db->get_where('tb_diesel',array('entray_date'=>$issue_date));
             $res=  $this->db->get_where('tb_diesel',array('seller_name'=>$sn,'sold_date'=>$issue_date));
             if($res->num_rows()===1){
                 $row=$res->row();
                 $data=array(
                     'seller_name'=>$sn,
                     'sold_litre'=>$row->sold_litre+$sold_litre,
                     'sold_amount'=>$row->sold_amount+$sold_amount,
                     'sold_date'=>$issue_date
                 );
                 $this->db->where('seller_name',$sn);
                 $this->db->update('tb_diesel',$data);
             }elseif($res1->num_rows()===1){  
                 $row1=$res1->row();
                 $data=array(
                     'seller_name'=>$sn,
                     'sold_litre'=>$row1->sold_litre+$sold_litre,
                     'sold_amount'=>$row1->sold_amount+$sold_amount,
                     'sold_date'=>$issue_date
                 );
                 $this->db->where('entray_date',$issue_date);
                 $this->db->update('tb_diesel',$data);
              }else {
                 $this->db->insert('tb_diesel',$data_entry); 
             }
     }
     function diesel_credit($sn,$sold_litre,$sold_amount,$issue_date,$customer_credit){
            $data_entry=array(
                 'seller_name'=>$sn,
                 'sold_litre'=>$sold_litre,
                 'sold_amount'=>$sold_amount,
                 'sold_date'=>$issue_date,
                 'customer_credit_name'=>$customer_credit
             );
             $res1=  $this->db->get_where('tb_diesel',array('entray_date'=>$issue_date));
             $res=  $this->db->get_where('tb_diesel',array('seller_name'=>$sn,'sold_date'=>$issue_date));
             if($res->num_rows()===1){
                 $row=$res->row();
                 $data=array(
                     'seller_name'=>$sn,
                     'sold_litre'=>$row->sold_litre+$sold_litre,
                     'sold_amount'=>$row->sold_amount+$sold_amount,
                     'sold_date'=>$issue_date,
                     'customer_credit_name'=>$customer_credit
                 );
                 $this->db->where('seller_name',$sn);
                 $this->db->update('tb_diesel',$data);
             }elseif($res1->num_rows()===1){  
                  $row1=$res1->row();
                 $data=array(
                     'seller_name'=>$sn,
                     'sold_litre'=>$row1->sold_litre+$sold_litre,
                     'sold_amount'=>$row1->sold_amount+$sold_amount,
                     'sold_date'=>$issue_date,
                     'customer_credit_name'=>$customer_credit
                 );
                 $this->db->where('entray_date',$issue_date);
                 $this->db->update('tb_diesel',$data);
              }else {
                 $this->db->insert('tb_diesel',$data_entry); 
             }
     }
     function kerosine_insert($sn,$sold_litre,$sold_amount,$issue_date){
            $data_entry=array(
                 'seller_name'=>$sn,
                 'sold_litre'=>$sold_litre,
                 'sold_amount'=>$sold_amount,
                 'sold_date'=>$issue_date
             );
             $res1=  $this->db->get_where('tb_kerosine',array('entray_date'=>$issue_date));
             $res=  $this->db->get_where('tb_kerosine',array('seller_name'=>$sn,'sold_date'=>$issue_date));
             if($res->num_rows()===1){
                 $row1=$res->row();
                 $data=array(
                     'seller_name'=>$sn,
                     'sold_litre'=>$row1->sold_litre+$sold_litre,
                     'sold_amount'=>$row1->sold_amount+$sold_amount,
                     'sold_date'=>$issue_date
                 );
                 $this->db->where('seller_name',$sn);
                 $this->db->update('tb_kerosine',$data);
             }elseif ($res1->num_rows()===1) {
                 $row1=$res1->row();
                 $data=array(
                     'seller_name'=>$sn,
                     'sold_litre'=>$row1->sold_litre+$sold_litre,
                     'sold_amount'=>$row1->sold_amount+$sold_amount,
                     'sold_date'=>$issue_date
                 );
                 $this->db->where('entray_date',$issue_date);
                 $this->db->update('tb_kerosine',$data);
             }else {
                 $this->db->insert('tb_kerosine',$data_entry); 
             }
     }
     function kerosine_credit($sn,$sold_litre,$sold_amount,$issue_date,$customer_credit){
             $data_entry=array(
                 'seller_name'=>$sn,
                 'sold_litre'=>$sold_litre,
                 'sold_amount'=>$sold_amount,
                 'sold_date'=>$issue_date,
                 'customer_credit_name'=>$customer_credit
             );
             $res1=  $this->db->get_where('tb_kerosine',array('entray_date'=>$issue_date));
             $res=  $this->db->get_where('tb_kerosine',array('seller_name'=>$sn,'sold_date'=>$issue_date));
             if($res->num_rows()===1){
                 $row=$res->row();
                 $data=array(
                     'seller_name'=>$sn,
                     'sold_litre'=>$row->sold_litre+$sold_litre,
                     'sold_amount'=>$row->sold_amount+$sold_amount,
                     'sold_date'=>$issue_date,
                     'customer_credit_name'=>$customer_credit
                 );
                 $this->db->where('seller_name',$sn);
                 $this->db->update('tb_kerosine',$data);
              }elseif ($res1->num_rows()===1) {
                 $row1=$res1->row();
                 $data=array(
                     'seller_name'=>$sn,
                     'sold_litre'=>$row1->sold_litre+$sold_litre,
                     'sold_amount'=>$row1->sold_amount+$sold_amount,
                     'sold_date'=>$issue_date,
                     'customer_credit_name'=>$customer_credit
                 );
                 $this->db->where('entray_date',$issue_date);
                 $this->db->update('tb_kerosine',$data);
                }else {
                 $this->db->insert('tb_kerosine',$data_entry); 
             }
     }
     function oil_insert($sn,$sold_litre,$sold_amount,$issue_date){
             $data_entry=array(
                 'seller_name'=>$sn,
                 'sold_litre'=>$sold_litre,
                 'sold_amount'=>$sold_amount,
                 'sold_date'=>$issue_date
             );
             $res1=  $this->db->get_where('tb_oil',array('entray_date'=>$issue_date));
             $res=  $this->db->get_where('tb_oil',array('seller_name'=>$sn,'sold_date'=>$issue_date));
             if($res->num_rows()===1){
                 $row=$res->row();
                 $data=array(
                     'seller_name'=>$sn,
                     'sold_litre'=>$row->sold_litre+$sold_litre,
                     'sold_amount'=>$row->sold_amount+$sold_amount,
                     'sold_date'=>$issue_date
                 );
                 $this->db->where('seller_name',$sn);
                 $this->db->update('tb_oil',$data);
             }elseif($res1->num_rows()===1){  
                  $row1=$res1->row();
                 $data=array(
                     'seller_name'=>$sn,
                     'sold_litre'=>$row1->sold_litre+$sold_litre,
                     'sold_amount'=>$row1->sold_amount+$sold_amount,
                     'sold_date'=>$issue_date
                 );
                 $this->db->where('entray_date',$issue_date);
                 $this->db->update('tb_oil',$data);
              }else {
                 $this->db->insert('tb_oil',$data_entry); 
             }
     }
     function oil_credit($sn,$sold_litre,$sold_amount,$issue_date,$customer_credit){
         $data_entry=array(
                 'seller_name'=>$sn,
                 'sold_litre'=>$sold_litre,
                 'sold_amount'=>$sold_amount,
                 'sold_date'=>$issue_date,
                 'customer_credit_name'=>$customer_credit
             );
             $res1=  $this->db->get_where('tb_oil',array('entray_date'=>$issue_date));
             $res=  $this->db->get_where('tb_oil',array('seller_name'=>$sn,'sold_date'=>$issue_date));
             if($res->num_rows()===1){
                 $row=$res->row();
                 $data=array(
                     'seller_name'=>$sn,
                     'sold_litre'=>$row->sold_litre+$sold_litre,
                     'sold_amount'=>$row->sold_amount+$sold_amount,
                     'sold_date'=>$issue_date,
                     'customer_credit_name'=>$customer_credit
                 );
                 $this->db->where('seller_name',$sn);
                 $this->db->update('tb_oil',$data);
              }elseif ($res1->num_rows()===1) {
                 $row1=$res1->row();
                 $data=array(
                     'seller_name'=>$sn,
                     'sold_litre'=>$row1->sold_litre+$sold_litre,
                     'sold_amount'=>$row1->sold_amount+$sold_amount,
                     'sold_date'=>$issue_date,
                     'customer_credit_name'=>$customer_credit
                 );
                 $this->db->where('entray_date',$issue_date);
                 $this->db->update('tb_oil',$data);
                }else {
                 $this->db->insert('tb_oil',$data_entry); 
             }
     }
 }
