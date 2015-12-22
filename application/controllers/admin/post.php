<?php
    class Post extends CI_Controller {
	public function __construct() {
            parent::__construct();

            $this->load->helper('url', 'form');
            $this->load->model('admin/Post_model');
            $this->load->library('form_validation');
	}

	public function index() {
            $this->data['title'] = 'Post Management';
            $this->data['posts'] = $this->Post_model->get_allpost();

            $this->load->view('admin/post_view', $this->data);
	}
	
        public function form() {
            $go_to = $this->uri->segment(4);
            $id_selected = $this->uri->segment(5);
            
            $id_posting = addslashes($this->input->post('id_posting'));
            $tanggal = addslashes($this->input->post('tanggal'));
            $judul = addslashes($this->input->post('judul'));
            $isi = addslashes($this->input->post('isi'));
            $path_gambar = addslashes($this->input->post('path_gambar'));
            $id_kategori = addslashes($this->input->post('id_kategori'));
            $highlight = addslashes($this->input->post('highlight'));
            $popularitas = addslashes($this->input->post('popularitas'));
            $id_user = addslashes($this->input->post('id_user'));
            
            if ($go_to == "add") {
                $this->data['title'] = 'Add Posting';
                $this->data['action'] = 'action_add';
                
                $this->load->view('admin/post_form', $this->data);
            } elseif ($go_to == "edit") {
                $this->data['posts'] = $this->Post_model->get_posting_byid($id_selected);
                $this->data['title'] = 'Edit User';
                $this->data['action'] = 'action_edit';
                
                $this->load->view('admin/post_form', $this->data);
            } elseif ($go_to == "action_add") {
                $data = array (
                    'id_posting' => $id_posting,
                    'tanggal' => $tanggal,
                    'judul' => $judul,
                    'isi' => $isi,
                    'path_gambar' => $path_gambar,
                    'id_kategori' => $id_kategori,
                    'highlight'=> $highlight,
                    'popularitas'=> $popularitas,
                    'id_user'=> $id_user
                );
                $this->Post_model->insert_posting($data);
                $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissable\" id=\"alert\">"
                        . "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>"
                        . "<i class=\"glyphicon glyphicon-ok\"></i> Data berhasil di insert</div>"); //pesan yang tampil setalah berhasil di insert
                redirect('admin/user');
            } elseif ($go_to == "action_edit") {
                $data = array (
                    'id_posting' => $id_posting,
                    'tanggal' => $tanggal,
                    'judul' => $judul,
                    'isi' => $isi,
                    'path_gambar' => $path_gambar,
                    'id_kategori' => $id_kategori,
                    'highlight'=> $highlight,
                    'popularitas'=> $popularitas,
                    'id_user'=> $id_user
                );
                $this->Post_model->update_posting($id_posting, $data);
                $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissable\" id=\"alert\">"
                        . "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>"
                        . "<i class=\"glyphicon glyphicon-ok\"></i> Data berhasil diupdate</div>"); //pesan yang tampil setelah berhasil di update
                redirect('admin/post');
            }
        }
        
        public function detail($id_selected) {
            $this->data['posts'] = $this->Post_model->get_posting_byid($id_selected);
            $this->data['title'] = 'Detail Posting';
            
            $this->load->view('admin/post_detail', $this->data);
        }
        
        public function delete($id_selected) {
            $this->Post_model->delete_posting($id_selected);
            $this->session->set_flashdata("message", "<div class=\"alert alert-danger alert-dismissable\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\">"
                    . "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>"
                    . "<i class=\"glyphicon glyphicon-ok\"></i> Data berhasil dihapus</div>");
            redirect('admin/post');
        }
    }
?>