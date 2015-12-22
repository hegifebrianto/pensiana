<?php
    class Dashboard extends CI_Controller {
	public function __construct() {
            parent::__construct();

            $this->load->helper('url', 'form');
            $this->load->library('form_validation');
	}

	public function index() {
            $this->data['title'] = 'Admin Dashboard';

            $this->load->view('admin/dashboard_view', $this->data);
	}
    }
?>