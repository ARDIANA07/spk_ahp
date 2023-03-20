<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct()
	{
		parent::__construct();		
		$this->load->model('m_login');
 
	}	
	public function index()
	{
		$this->load->view('v_login_index');
	}
	public function daftar()
	{
		$this->load->view('v_login_daftar');
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('welcome'));
	}
	
	function aksi_login(){
		$user_name = $this->input->post('user_name');
		$user_password = $this->input->post('user_password');
		$where = array(
			'user_name' => $user_name,
			'user_password' => $user_password
			);
		$checking = $this->m_login->check_login('tbl_users', array('user_name' => $user_name), array('user_password' => $user_password));
		
		if($checking > 0){
			foreach ($checking as $apps) {
				$data_session = array(
					'userid' => $apps->user_id,
					'user_name' => $apps->user_name,
					'nama_lengkap' => $apps->user_fullname,
					'level' => $apps->user_level,
					'aktif' => $apps->user_aktif,
					'status' => "login"
					);
	 
				$this->session->set_userdata($data_session);
				
				if($apps->user_level=="admin" and $this->session->userdata('aktif') != "0"){
					
					redirect(base_url("admin"));
				}elseif($apps->user_level=="noadmin" and $this->session->userdata('aktif') != "0"){
					
					redirect(base_url("admin"));
				}else{
					echo "User belum aktif !";
					$this->load->view('v_login_index');
				}
			
			}
		}else{
			echo "Username dan password salah !";
			$this->load->view('v_login_index');
		}
	}
	
 
}
