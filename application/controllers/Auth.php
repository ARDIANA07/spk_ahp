<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent :: __construct();
        $this->load->library('form_validation');
     
    }

    public function index()
    {
        $this->form_validation->set_rules('email','Email','required|trim|valid_email');
        $this->form_validation->set_rules('password','Password','required|trim');

        if($this->form_validation->run()==false){
            $data['title'] ='SISFO Login';
            $this->load->view('login_admin');
        } else{
            //setelah validasi
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user =$this->db->get_where('tb_user',['email' =>$email])->row_array();
        
        //jika user ada
        if($user){
                //cek passwor
                if(password_verify($password, $user['password'])){
                    $data =[
                        'email' => $user['email']
                        // 'role_id' =>$user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    redirect('admin');
            }else{
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">User is not active !</div>');
                redirect('auth'); 
            }
        }else{
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Email is not register </div>');
            redirect('auth'); 
        }
        }

        public function logout()
        {
            $this->session->unset_userdata('email');
            // $this->session->unset_userdata('role_id');
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">You have been lagged out ! </div>');
            redirect('welcome'); 

        }

        public function registration()
        {
            $this->form_validation->set_rules('name','Nama Lengkap','required|trim');
            $this->form_validation->set_rules('email','Email','required|trim|valid_email');
            $this->form_validation->set_rules('password','Password','required|trim');

        if($this->form_validation->run()==false){

            $data['title'] ='SISFO Register';
            $this->load->view('register_admin',$data);

            }else{
                $data =[
                    'name' =>$this->input->post('name'),
                    'email' =>$this->input->post('email'),
                    'password' =>password_hash($this->input->post('password'),PASSWORD_DEFAULT),
                    // 'role_id' => 1,
                    'date_created' => time()
                    ];
        
                    $this->db->insert('tb_user',$data);
                    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Congratulations !! your acount has been creared. please login ! </div>');
                    redirect('auth');
            }
    }
   
    }