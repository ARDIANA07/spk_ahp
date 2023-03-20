<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_admin_ketetapan extends CI_Model {
  // Fungsi untuk menampilkan semua data tabel ketetapan
  public function view(){
    return $this->db->get('tbl_ketetapan')->result();
  }
  
  // Fungsi untuk menampilkan data berdasarkan ID nya
  public function view_by($ketetapan_id){
    $this->db->where('ketetapan_id', $ketetapan_id);
    return $this->db->get('tbl_ketetapan')->row();
  }
  
  // Fungsi untuk melakukan simpan data ke tabel ketetapans
  public function add(){
    $data = array(
      "ketetapan_id" => $this->input->post('ketetapan_id'),
      "ketetapan_nama" => $this->input->post('ketetapan_nama'),
      "ketetapan_n" => $this->input->post('ketetapan_n'),
      "ketetapan_nilai" => $this->input->post('ketetapan_nilai'),
      "ketetapan_creator" => $this->session->userdata('user_name')
    );
    
    $this->db->insert('tbl_ketetapan', $data); // Untuk mengeksekusi perintah insert data
  }
  
  // Fungsi untuk melakukan ubah data berdasarkan ID 
  public function edit($ketetapan_id){
    $data = array(
      "ketetapan_nama" => $this->input->post('ketetapan_nama'),
      "ketetapan_n" => $this->input->post('ketetapan_n'),
      "ketetapan_nilai" => $this->input->post('ketetapan_nilai'),
	  "ketetapan_updater" => $this->session->userdata('user_name')
    );
    
    $this->db->where('ketetapan_id', $ketetapan_id);
    $this->db->update('tbl_ketetapan', $data); // Untuk mengeksekusi perintah update data
  }
  
  
  // Fungsi untuk melakukan menghapus data berdasarkan ID
  public function hapus($ketetapan_id){
    $this->db->where('ketetapan_id', $ketetapan_id);
    $this->db->delete('tbl_ketetapan'); // Untuk mengeksekusi perintah delete data
  }
}