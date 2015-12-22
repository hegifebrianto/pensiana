<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posting extends CI_Controller {
	var $data = array();
	
	function __construct()
	{
	    // Call the Controller constructor
	    parent::__construct();

	    $this->load->helper('form');
	    $this->load->helper('url');

	}

	public function index()
	{
		
		$judul=$this->input->post('judul');
		$isi=$this->input->post('isi');
		$file=$this->input->post('file');
		if($file==NULL) {
			$file="../satu/dua/";
		}
		$kategori=$this->input->post('kategori');
		$tgl = date('Y-m-d H:i:s');

		
		if($judul!=''&& $isi!='')
		{
			$data = array(
				"tanggal" => $tgl,
				"judul" => $judul,
				"isi" => $isi,
				"path_gambar" => $file,
				"id_kategori" => $kategori,
				"highlight" => 0,
				"popularitas" => 0,
				"id_user" => 0
			);
			$this->load->model('posting_user_model');
			$this->posting_user_model->insertAllPosting("posting", $data);
			redirect('edit_posting');
		}
		
		$this->load->view('posting/v_posting');
		
	}
}
?>
