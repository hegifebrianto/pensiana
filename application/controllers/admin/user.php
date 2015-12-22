<?php
    class User extends CI_Controller {
	public function __construct() {
            parent::__construct();

            $this->load->helper('url', 'form');
            $this->load->model('admin/User_model');
            $this->load->library('form_validation');
            
	}

	public function index() {
            $this->data['title'] = 'User Management';
            $this->data['users'] = $this->User_model->get_alluser();

            $this->load->view('admin/user_view', $this->data);
	}
	
        public function form() {
            $go_to = $this->uri->segment(4);
            $id_selected = $this->uri->segment(5);
            
            $user_id = addslashes($this->input->post('user_id'));
            $user_name = addslashes($this->input->post('user_name'));
            $user_password = addslashes($this->input->post('user_password'));
            $user_fullname = addslashes($this->input->post('user_fullname'));
            $user_email = addslashes($this->input->post('user_email'));
            $user_phone = addslashes($this->input->post('user_phone'));
            $user_role = addslashes($this->input->post('user_role'));
            
            if ($go_to == "add") {
                $this->data['title'] = 'Add User';
                $this->data['action'] = 'action_add';
                
                $this->load->view('admin/user_form', $this->data);
            } elseif ($go_to == "edit") {
                $this->data['users'] = $this->User_model->get_user_byid($id_selected);
                $this->data['title'] = 'Edit User';
                $this->data['action'] = 'action_edit';
                
                $this->load->view('admin/user_form', $this->data);
            } elseif ($go_to == "action_add") {
                $data = array (
                    'role_user' => $user_role,
                    'username' => $user_name,
                    'password' => $user_password,
                    'nama' => $user_fullname,
                    'email' => $user_email,
                    'telepon' => $user_phone
                );
                $this->User_model->insert_user($data);
                $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissable\" id=\"alert\">"
                        . "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>"
                        . "<i class=\"glyphicon glyphicon-ok\"></i> Data berhasil di insert</div>"); //pesan yang tampil setalah berhasil di insert
                redirect('admin/user');
            } elseif ($go_to == "action_edit") {
                $data = array (
                    'role_user' => $user_role,
                    'username' => $user_name,
                    'password' => $user_password,
                    'nama' => $user_fullname,
                    'email' => $user_email,
                    'telepon' => $user_phone
                );
                $this->User_model->update_user($user_id, $data);
                $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissable\" id=\"alert\">"
                        . "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>"
                        . "<i class=\"glyphicon glyphicon-ok\"></i> Data berhasil diupdate</div>"); //pesan yang tampil setelah berhasil di update
                redirect('admin/user');
            }
        }
        
        public function detail($id_selected) {
            $this->data['users'] = $this->User_model->get_user_byid($id_selected);
            $this->data['title'] = 'Detail User';
            
            $this->load->view('admin/user_detail', $this->data);
        }
        
        public function delete($id_selected) {
            $this->User_model->delete_user($id_selected);
            $this->session->set_flashdata("message", "<div class=\"alert alert-danger alert-dismissable\" id=\"alert\">"
                    . "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>"
                    . "<i class=\"glyphicon glyphicon-ok\"></i> Data berhasil dihapus</div>");
            redirect('admin/user');
        }
    }
?>