<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article extends CI_Controller {
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
		$id = $this->input->get('id');
		$data['posts'] = $this->posting_model->getSelectedPosting($id);
		$this->load->view('articles/v_article_view', $data);
	}
}
?>
