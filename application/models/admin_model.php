<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  class Admin_model extends CI_Model{
      function __construct() {
          parent::__construct();
      }
      function petrol_insert($number_litres,$amount_parchased,$expected_amount,$data_entrance,$admin_name){
          $data_entry=array(
              'Litre_petrol'=>$number_litres,
              'purchased_amount'=>$amount_parchased,
              'expected_amount'=>$expected_amount,
              'entray_date'=>$data_entrance,
              'admin_name'=>$admin_name
          );
          $res=  $this->db->get_where('tb_petrol',array('entray_date'=>$data_entrance));
          if($res->num_rows()===1){
              $row=$res->row();
              $array=array(
                  'Litre_petrol'=>$row->Litre_petrol+$number_litres,
                  'purchased_amount'=>$row->purchased_amount+$amount_parchased,
                  'expected_amount'=>$row->expected_amount+$expected_amount,
                  'entray_date'=>$data_entrance,
                  'admin_name'=>$admin_name
              );
              $this->db->where('entray_date',$data_entrance);
              $this->db->update('tb_petrol',$array);
          }  else {
              $this->db->insert('tb_petrol',$data_entry); 
          }
      }
      public function diesel_insert($number_litres,$amount_parchased,$expected_amount,$data_entrance,$admin_name){
          $data_entry=array(
              'Litre_diesel'=>$number_litres,
              'purchased_amount'=>$amount_parchased,
              'expected_amount'=>$expected_amount,
              'entray_date'=>$data_entrance,
              'admin_name'=>$admin_name
          );
          $res=  $this->db->get_where('tb_diesel',array('entray_date'=>$data_entrance));
          if($res->num_rows()===1){
              $row=$res->row();
              $array=array(
                  'Litre_diesel'=>$row->Litre_diesel+$number_litres,
                  'purchased_amount'=>$row->purchased_amount+$amount_parchased,
                  'expected_amount'=>$row->expected_amount+$expected_amount,
                  'entray_date'=>$data_entrance,
                  'admin_name'=>$admin_name
              );
              $this->db->where('entray_date',$data_entrance);
              $this->db->update('tb_diesel',$array);
          }  else {
              $this->db->insert('tb_diesel',$data_entry); 
          }
      }
      public function kerosine_insert($number_litres,$amount_parchased,$expected_amount,$data_entrance,$admin_name){
          $data_entry=array(
              'Litre_kerosine'=>$number_litres,
              'purchased_amount'=>$amount_parchased,
              'expected_amount'=>$expected_amount,
              'entray_date'=>$data_entrance,
              'admin_name'=>$admin_name
          );
          $res=  $this->db->get_where('tb_kerosine',array('entray_date'=>$data_entrance));
          if($res->num_rows()===1){
              $row=$res->row();
              $array=array(
                  'Litre_kerosine'=>$row->Litre_kerosine+$number_litres,
                  'purchased_amount'=>$row->purchased_amount+$amount_parchased,
                  'expected_amount'=>$row->expected_amount+$expected_amount,
                  'entray_date'=>$data_entrance,
                  'admin_name'=>$admin_name
              );
              $this->db->where('entray_date',$data_entrance);
              $this->db->update('tb_kerosine',$array);
          }  else {
              $this->db->insert('tb_kerosine',$data_entry); 
          }
      }
      function oil_insert($number_litres,$amount_parchased,$expected_amount,$data_entrance,$admin_name){
          $data_entry=array(
              'Litre_oil'=>$number_litres,
              'purchased_amount'=>$amount_parchased,
              'expected_amount'=>$expected_amount,
              'entray_date'=>$data_entrance,
              'admin_name'=>$admin_name
          );
          $res=  $this->db->get_where('tb_oil',array('entray_date'=>$data_entrance));
          if($res->num_rows()===1){
              $row=$res->row();
              $array=array(
                  'Litre_kerosine'=>$row->Litre_oil+$number_litres,
                  'purchased_amount'=>$row->purchased_amount+$amount_parchased,
                  'expected_amount'=>$row->expected_amount+$expected_amount,
                  'entray_date'=>$data_entrance,
                  'admin_name'=>$admin_name
              );
              $this->db->where('entray_date',$data_entrance);
              $this->db->update('tb_oil',$array);
          }  else {
              $this->db->insert('tb_oil',$data_entry); 
          }
      }
  }