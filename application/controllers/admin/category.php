<?php
    class Category extends CI_Controller {
	public function __construct() {
            parent::__construct();

            $this->load->helper('url', 'form');
            $this->load->model('admin/Category_model');
            $this->load->library('form_validation');
	}

	public function index() {
            $this->data['title'] = 'Category Management';
            $this->data['categories'] = $this->Category_model->get_allcategory();

            $this->load->view('admin/category_view', $this->data);
	}
	
        public function form() {
            $go_to = $this->uri->segment(4);
            $id_selected = $this->uri->segment(5);
            
            $category_id = addslashes($this->input->post('category_id'));
            $category_name = addslashes($this->input->post('category_name'));
            
            if ($go_to == "add") {
                $this->data['title'] = 'Add Category';
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
        
        public function detail($id_selected) {
            $this->data['categories'] = $this->Category_model->get_category_byid($id_selected);
            $this->data['title'] = 'Detail Category';
            
            $this->load->view('admin/category_detail', $this->data);
        }
        
        public function delete($id_selected) {
            $this->Category_model->delete_category($id_selected);
            $this->session->set_flashdata("message", "<div class=\"alert alert-danger alert-dismissable\" id=\"alert\">"
                    . "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>"
                    . "<i class=\"glyphicon glyphicon-ok\"></i> Data berhasil dihapus</div>");
            redirect('admin/category');
        }
    }
?>