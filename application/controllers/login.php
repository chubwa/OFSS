<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class Login extends CI_Controller{
     function __construct() {
         parent::__construct();
         $this->load->helper('url','form','html');
         $this->load->library('form_validation');
     }
     function index(){
         $this->form_validation->set_rules('us','Username or Email','trim|required|xss_clean');
         $this->form_validation->set_rules('pd','Password','trim|required|xss_clean');
         if($this->form_validation->run()===FALSE){
             $this->load->view('home');  
         }else{
         $username=  $this->input->post('us');
         $password=  md5($this->input->post('pd'));
         $res=  $this->db->get_where('tb_user',array('email'=>$username,'password'=>$password),1);
         $res2=  $this->db->get_where('tb_user',array('username'=>$username,'password'=>$password),1);
         $row=$res->row();
         if($res->num_rows()===1){
           $sess_data=array(
               'username'=>$row->username,
               'email'=>$username,
               'logged_in'=>TRUE
           );
           $this->session->set_userdata($sess_data);
           $this->master_page($username);
         }elseif($res2->num_rows()===1){
             $row2=$res2->row();
              $sess_data=array(
                  'username'=>$username,
                  'email'=>$row2->email,
                  'logged_in'=>TRUE
              );
              $this->session->set_userdata($sess_data);
              $this->dashbord($username);
              
         } else {
               $data['records']='<font color="red">The compination of username or Email and password does not match</font>';
               $this->load->view('home',$data);
            }
        }
     }
     function master_page($username){
         $result=  $this->db->get_where('tb_user',array('email'=>$username,'position'=>'user'));
         $result1=  $this->db->get_where('tb_user',array('email'=>$username,'position'=>'admin'));
         if($result->num_rows()===1){
           $array_sess=array(
               'apartment'=>'user'
           );  
           $this->session->set_userdata($array_sess);
           redirect('dashbord');
         }elseif ($result1->num_rows()===1) {
            $array_sess=array(
                'apartment'=>'admin'
            );
            $this->session->set_userdata($array_sess);
            redirect('admin_controller');
        }
     }
     function dashbord($username){
         $query=  $this->db->get_where('tb_user',array('username'=>$username,'position'=>'user'));
         $query1=  $this->db->get_where('tb_user',array('username'=>$username,'position'=>'admin'));
         if($query->num_rows()===1){
             $sess_array=array(
                 'apartment'=>'user'
             );
             $this->session->set_userdata($sess_array);
             redirect('dashbord');
         }elseif ($query1->num_rows()===1) {
            $sess_array=array(
                'apartment'=>'admin'
            );
            $this->session->set_userdata($sess_array);
            redirect('admin_controller');
        }
     }
     
 }

