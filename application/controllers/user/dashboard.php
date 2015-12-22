<?php
    class Dashboard extends CI_Controller {
	public function __construct() {
            parent::__construct();

            $this->load->helper('url', 'form');
            $this->load->library('form_validation');
            $this->load->model('user/kategori_model');
            $this->load->model('user/posting_model');
	}

	public function index() {
            $this->data['title'] = 'Dashboard';
            $this->data['posts'] = $this->posting_model->getAllPostingOrderByDate();
            $this->data['highlights'] = $this->posting_model->getHighlightedPosting();
            $this->data['categories'] = $this->kategori_model->getAllKategori();
            $this->data['username'] = $this->session->userdata('username');
            $this->load->view('user/dashboard_view', $this->data);
	}



    }
?>