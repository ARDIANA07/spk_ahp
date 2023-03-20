<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('m_admin_user'); // Load M_admin_user ke controller ini
		$this->load->model('m_admin_wisata'); // Load M_admin_wisata ke controller ini
		$this->load->model('m_admin_kriteria'); // Load M_admin_kriteria ke controller ini
		$this->load->model('m_admin_alternatif'); // Load M_admin_alternatif ke controller ini
		$this->load->model('m_admin_ketetapan'); // Load M_admin_ketetapan ke controller ini
	}
	
	// START INI ADALAH FUNGSI FUNGSI UNTUK HALAMAN INDEX
	public function index()
    {
		$data['tbl_users'] = $this->m_admin_user->view();
        $this->load->view("v_admin_header");
        $this->load->view("v_admin_index", $data);
        $this->load->view("v_admin_footer_datatables");
    }
	// END INI ADALAH FUNGSI FUNGSI UNTUK HALAMAN INDEX
	
	// START INI ADALAH FUNGSI FUNGSI UNTUK HALAMAN USERS
	public function user()
    {
		$data['tbl_users'] = $this->m_admin_user->view();
        $this->load->view("v_admin_header");
        $this->load->view("v_admin_user", $data);
        $this->load->view("v_admin_footer_datatables");
    }		
	public function user_tambah()
    {
		$this->load->view("v_admin_header_form");
        $this->load->view("v_admin_user_add");
		$this->load->view("v_admin_footer_form");
    }
	public function user_ubah($user_id)
	{
		$data['tbl_users'] = $this->m_admin_user->view_by($user_id);
		$this->load->view("v_admin_header_form");
		$this->load->view('v_admin_user_edit', $data);
		$this->load->view("v_admin_footer_form");
	}	
	public function user_aksi_tambah()
    {
        if($this->input->post('submit')){
			$this->m_admin_user->add(); // Panggil fungsi add() yang ada di m_admin_user.php
			redirect('admin/user');
		}    
    }	
	public function user_aksi_ubah($user_id)
    {
        if($this->input->post('submit')){
			$this->m_admin_user->edit($user_id); // Panggil fungsi edit() yang ada di m_admin_user.php
			redirect('admin/user');
		}    
    }
	public function user_ubah_konfirmasi($user_id)
    {
        $this->m_admin_user->aktivasi($user_id); // Panggil fungsi edit() yang ada di m_admin_user.php
		redirect('admin/user');   
    }	
	public function user_aksi_hapus($user_id){
			$this->m_admin_user->hapus($user_id); // Panggil fungsi hapus() yang ada di m_admin_user.php
			redirect('admin/user');
	}
	// END INI ADALAH FUNGSI FUNGSI UNTUK HALAMAN USERS
	
	
	//START INI ADALAH FUNGSI FUNGSI UNTUK HALAMAN wisata
	public function wisata()
    {
		$data['tbl_wisata'] = $this->m_admin_wisata->view();
        $this->load->view("v_admin_header");
        $this->load->view("v_admin_wisata", $data);
        $this->load->view("v_admin_footer_datatables");
    }
	public function wisata_tambah()
    {
		$this->load->view("v_admin_header_form");
        $this->load->view("v_admin_wisata_add");
		$this->load->view("v_admin_footer_form");
    }
	public function wisata_ubah($wisata_id)
	{
		$data['tbl_wisata'] = $this->m_admin_wisata->view_by($wisata_id);
		$this->load->view("v_admin_header_form");
		$this->load->view('v_admin_wisata_edit', $data);
		$this->load->view("v_admin_footer_form");
	}	
	public function wisata_aksi_tambah()
    {
        if($this->input->post('submit')){
			$this->m_admin_wisata->add(); // Panggil fungsi add() yang ada di m_admin_wisata.php
			redirect('admin/wisata');
		}    
    }	
	public function wisata_aksi_ubah($wisata_id)
    {
        if($this->input->post('submit')){
			$this->m_admin_wisata->edit($wisata_id); // Panggil fungsi edit() yang ada di m_admin_wisata.php
			redirect('admin/wisata');
		}    
    }
	public function wisata_aksi_hapus($wisata_id){
			$this->m_admin_wisata->hapus($wisata_id); // Panggil fungsi hapus() yang ada di m_admin_wisata.php
			redirect('admin/wisata');
	}
	//END INI ADALAH FUNGSI FUNGSI UNTUK HALAMAN wisata
	
	//START INI ADALAH FUNGSI FUNGSI UNTUK HALAMAN KRITERIA
	public function kriteria()
    {
		$data['tbl_kriteria'] = $this->m_admin_kriteria->view();
        $this->load->view("v_admin_header");
        $this->load->view("v_admin_kriteria", $data);
        $this->load->view("v_admin_footer_datatables");
    }
	public function kriteria_tambah()
    {
		$this->load->view("v_admin_header_form");
        $this->load->view("v_admin_kriteria_add");
		$this->load->view("v_admin_footer_form");
    }
	public function kriteria_ubah($kriteria_id)
	{
		$data['tbl_kriteria'] = $this->m_admin_kriteria->view_by($kriteria_id);
		$this->load->view("v_admin_header_form");
		$this->load->view('v_admin_kriteria_edit', $data);
		$this->load->view("v_admin_footer_form");
	}	
	public function kriteria_aksi_tambah()
    {
        if($this->input->post('submit')){
			$this->m_admin_kriteria->add(); // Panggil fungsi add() yang ada di m_admin_kriteria.php
			redirect('admin/kriteria');
		}    
    }	
	public function kriteria_aksi_ubah($kriteria_id)
    {
        if($this->input->post('submit')){
			$this->m_admin_kriteria->edit($kriteria_id); // Panggil fungsi edit() yang ada di m_admin_kriteria.php
			redirect('admin/kriteria');
		}    
    }
	public function kriteria_aksi_hapus($kriteria_id){
			$this->m_admin_kriteria->hapus($kriteria_id); // Panggil fungsi hapus() yang ada di m_admin_kriteria.php
			redirect('admin/kriteria');
	}
	//END INI ADALAH FUNGSI FUNGSI UNTUK HALAMAN KRITERIA
	
	//START INI ADALAH FUNGSI FUNGSI UNTUK HALAMAN SUBKRITERIA
	public function alternatif()
    {
		$data['tbl_alternatif'] = $this->m_admin_alternatif->view();
        $this->load->view("v_admin_header");
        $this->load->view("v_admin_alternatif", $data);
        $this->load->view("v_admin_footer_datatables");
    }
	public function alternatif_tambah()
    {
		$data['tbl_kriteria'] = $this->m_admin_kriteria->view();
		$data['tbl_wisata'] = $this->m_admin_wisata->view();
		$data['tbl_alternatif'] = $this->m_admin_alternatif->view_by($alternatif_id);
		$this->load->view("v_admin_header_form");
        $this->load->view("v_admin_alternatif_add",$data);
		$this->load->view("v_admin_footer_form");
    }
	public function alternatif_ubah($alternatif_id)
	{
		$data['tbl_kriteria'] = $this->m_admin_kriteria->view();
		$data['tbl_wisata'] = $this->m_admin_wisata->view();
		$data['tbl_alternatif'] = $this->m_admin_alternatif->view_by($alternatif_id);
		$this->load->view("v_admin_header_form");
		$this->load->view('v_admin_alternatif_edit', $data);
		$this->load->view("v_admin_footer_form");
	}	
	public function alternatif_aksi_tambah()
    {
        if($this->input->post('submit')){
			$this->m_admin_alternatif->add(); // Panggil fungsi add() yang ada di m_admin_alternatif.php
			redirect('admin/alternatif');
		}    
    }	
	public function alternatif_aksi_ubah($alternatif_id)
    {
        if($this->input->post('submit')){
			$this->m_admin_alternatif->edit($alternatif_id); // Panggil fungsi edit() yang ada di m_admin_alternatif.php
			redirect('admin/alternatif');
		}    
    }
	public function alternatif_aksi_hapus($alternatif_id){
			$this->m_admin_alternatif->hapus($alternatif_id); // Panggil fungsi hapus() yang ada di m_admin_alternatif.php
			redirect('admin/alternatif');
	}
	//END INI ADALAH FUNGSI FUNGSI UNTUK HALAMAN SUBKRITERIA
	
	//START INI ADALAH FUNGSI FUNGSI UNTUK HALAMAN KETETAPAN
	public function ketetapan()
    {
		$data['tbl_ketetapan'] = $this->m_admin_ketetapan->view();
        $this->load->view("v_admin_header");
        $this->load->view("v_admin_ketetapan", $data);
        $this->load->view("v_admin_footer_datatables");
    }
	public function ketetapan_tambah()
    {
		$this->load->view("v_admin_header_form");
        $this->load->view("v_admin_ketetapan_add");
		$this->load->view("v_admin_footer_form");
    }
	public function ketetapan_ubah($ketetapan_id)
	{
		$data['tbl_ketetapan'] = $this->m_admin_ketetapan->view_by($ketetapan_id);
		$this->load->view("v_admin_header_form");
		$this->load->view('v_admin_ketetapan_edit', $data);
		$this->load->view("v_admin_footer_form");
	}	
	public function ketetapan_aksi_tambah()
    {
        if($this->input->post('submit')){
			$this->m_admin_ketetapan->add(); // Panggil fungsi add() yang ada di m_admin_ketetapan.php
			redirect('admin/ketetapan');
		}    
    }	
	public function ketetapan_aksi_ubah($ketetapan_id)
    {
        if($this->input->post('submit')){
			$this->m_admin_ketetapan->edit($ketetapan_id); // Panggil fungsi edit() yang ada di m_admin_ketetapan.php
			redirect('admin/ketetapan');
		}    
    }
	public function ketetapan_aksi_hapus($ketetapan_id){
			$this->m_admin_ketetapan->hapus($ketetapan_id); // Panggil fungsi hapus() yang ada di m_admin_ketetapan.php
			redirect('admin/ketetapan');
	}
	//END INI ADALAH FUNGSI FUNGSI UNTUK HALAMAN KETETAPAN
	
	//START INI ADALAH FUNGSI FUNGSI UNTUK HALAMAN BOBOT
	public function bobot()
    {
		$this->load->view("v_admin_header");
        $this->load->view("v_admin_bobot");
        $this->load->view("v_admin_footer_datatables");
    }
	//END INI ADALAH FUNGSI FUNGSI UNTUK HALAMAN BOBOT
}