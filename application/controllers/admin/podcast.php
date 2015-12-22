<?php
	class Podcast extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();

			$this->load->helper('url','form');
			$this->load->model('admin/podcast_model');
			$this->load->library('form_validation');

		}

		public function index()
		{
			$this->data['title'] = 'Podcast Management';
			$this->data['podcast'] = $this->podcast_model->get_allpodcast();
			$this->load->view('admin/podcast_view',$this->data);
		}

		public function form() {
            $go_to = $this->uri->segment(4);
            $id_selected = $this->uri->segment(5);
            
            $podcast_id = addslashes($this->input->post('podcast_id'));
            $podcast_name = addslashes($this->input->post('podcast_name'));
            
            if ($go_to == "add") {
                $this->data['title'] = 'Add Podcast';
                $this->data['action'] = 'action_add';
                
                $this->load->view('admin/category_form', $this->data);
            } elseif ($go_to == "edit") {
                $this->data['categories'] = $this->Category_model->get_category_byid($id_selected);
                $this->data['title'] = 'Edit Category';
                $this->data['action'] = 'action_edit';
                
                $this->load->view('admin/category_form', $this->data);
            } elseif ($go_to == "action_add") {
                $data = array (
                    'nama_kategori' => $category_name
                );
                $this->Category_model->insert_category($data);
                $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissable\" id=\"alert\">"
                        . "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>"
                        . "<i class=\"glyphicon glyphicon-ok\"></i> Data berhasil di insert</div>"); //pesan yang tampil setalah berhasil di insert
                redirect('admin/category');
            } elseif ($go_to == "action_edit") {
                $data = array (
                    'nama_kategori' => $category_name
                );
                $this->Category_model->update_category($category_id, $data);
                $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissable\" id=\"alert\">"
                        . "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>"
                        . "<i class=\"glyphicon glyphicon-ok\"></i> Data berhasil diupdate</div>"); //pesan yang tampil setelah berhasil di update
                redirect('admin/category');
            }
        }




	}



?>