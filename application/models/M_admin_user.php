<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_admin_user extends CI_Model {
  // Fungsi untuk menampilkan semua data tabel users
  public function view(){
    return $this->db->get('tbl_users')->result();
  }
  
  // Fungsi untuk menampilkan data berdasarkan ID nya
  public function view_by($user_id){
    $this->db->where('user_id', $user_id);
    return $this->db->get('tbl_users')->row();
  }
  
  // Fungsi untuk melakukan simpan data ke tabel users
  public function add(){
    $data = array(
      "user_name" => $this->input->post('user_name'),
      "user_fullname" => $this->input->post('user_fullname'),
      "user_password" => md5($this->input->post('user_password')),
      "user_email" => $this->input->post('user_email'),
      "user_level" => $this->input->post('user_level'),
      "user_aktif" => $this->input->post('user_aktif'),
      "user_creator" => $this->session->userdata('user_name')
    );
    
    $this->db->insert('tbl_users', $data); // Untuk mengeksekusi perintah insert data
  }
  
  // Fungsi untuk melakukan ubah data berdasarkan ID 
  public function edit($user_id){
	  if($this->input->post('user_passwordlama')==$this->input->post('user_password')){
			$password = $this->input->post('user_passwordlama');
	  }else{
			$password = md5($this->input->post('user_password'));
	  }
    $data = array(
      "user_name" => $this->input->post('user_name'),
      "user_fullname" => $this->input->post('user_fullname'),
      "user_password" => $password,
      "user_email" => $this->input->post('user_email'),
      "user_level" => $this->input->post('user_level'),
      "user_aktif" => $this->input->post('user_aktif'),
	  "user_updater" => $this->session->userdata('user_name')
    );
    
    $this->db->where('user_id', $user_id);
    $this->db->update('tbl_users', $data); // Untuk mengeksekusi perintah update data
  }
  
  // Fungsi untuk melakukan aktivasi berdasarkan ID 
  public function aktivasi($user_id){
    $data = array(
      "user_aktif" => 1,
	  "user_updater" => $this->session->userdata('user_name')
    );
    
    $this->db->where('user_id', $user_id);
    $this->db->update('tbl_users', $data); // Untuk mengeksekusi perintah update data
  }
  
  // Fungsi untuk melakukan menghapus data berdasarkan ID
  public function hapus($user_id){
    $this->db->where('user_id', $user_id);
    $this->db->delete('tbl_users'); // Untuk mengeksekusi perintah delete data
  }
}