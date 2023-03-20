<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_admin_wisata extends CI_Model {
  // Fungsi untuk menampilkan semua data tabel wisata
  public function view(){
    return $this->db->get('tbl_wisata')->result();
  }
  
  // Fungsi untuk menampilkan data berdasarkan ID nya
  public function view_by($wisata_id){
    $this->db->where('wisata_id', $wisata_id);
    return $this->db->get('tbl_wisata')->row();
  }
  
  // Fungsi untuk melakukan simpan data ke tabel wisata
  public function add(){
    $data = array(
      "wisata_nama" => $this->input->post('wisata_nama'),
      "kode_wisata" => $this->input->post('kode_wisata'),
      "wisata_alamat" => $this->input->post('wisata_alamat')
    );
    
    $this->db->insert('tbl_wisata', $data); // Untuk mengeksekusi perintah insert data
  }
  
  // Fungsi untuk melakukan ubah data berdasarkan ID 
  public function edit($wisata_id){
    $data = array(
      "wisata_nama" => $this->input->post('wisata_nama'),
      "kode_wisata" => $this->input->post('kode_wisata'),
      "wisata_alamat" => $this->input->post('wisata_alamat')
    );
    
    $this->db->where('wisata_id', $wisata_id);
    $this->db->update('tbl_wisata', $data); // Untuk mengeksekusi perintah update data
  }
  
  // Fungsi untuk melakukan menghapus data berdasarkan ID 
  public function hapus($wisata_id){
    $this->db->where('wisata_id', $wisata_id);
    $this->db->delete('tbl_wisata'); // Untuk mengeksekusi perintah delete data
  }
 
}