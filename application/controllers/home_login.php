<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_login extends CI_Controller {
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
	$data['categories'] = $this->kategori_model->getAllKategori();
	$data['posts'] = $this->posting_model->getAllPostingOrderByDate();
	$data['highlights'] = $this->posting_model->getHighlightedPosting();
	$this->load->view('home_login/v_home_login', $data);
	}
}
?>
