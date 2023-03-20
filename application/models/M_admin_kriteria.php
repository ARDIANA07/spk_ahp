<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_admin_kriteria extends CI_Model {
  // Fungsi untuk menampilkan semua data tabel kriteria
  public function view(){
    return $this->db->get('tbl_kriteria')->result();
  }
  
  // Fungsi untuk menampilkan data berdasarkan ID nya
  public function view_by($kriteria_id){
    $this->db->where('kriteria_id', $kriteria_id);
    return $this->db->get('tbl_kriteria')->row();
  }
  
  // Fungsi untuk melakukan simpan data ke tabel kriteria
  public function add(){
    $data = array(
      "kriteria_id" => $this->input->post('kriteria_id'),
      "kriteria_nama" => $this->input->post('kriteria_nama'),
      "kriteria_nilai" => $this->input->post('kriteria_nilai')
    );
    
    $this->db->insert('tbl_kriteria', $data); // Untuk mengeksekusi perintah insert data
  }
  
  // Fungsi untuk melakukan ubah data berdasarkan ID 
  public function edit($kriteria_id){
    $data = array(
      "kriteria_nama" => $this->input->post('kriteria_nama'),
      "kriteria_nilai" => $this->input->post('kriteria_nilai')
    );
    
    $this->db->where('kriteria_id', $kriteria_id);
    $this->db->update('tbl_kriteria', $data); // Untuk mengeksekusi perintah update data
  }
  
  
  // Fungsi untuk melakukan menghapus data berdasarkan ID
  public function hapus($kriteria_id){
    $this->db->where('kriteria_id', $kriteria_id);
    $this->db->delete('tbl_kriteria'); // Untuk mengeksekusi perintah delete data
  }
}