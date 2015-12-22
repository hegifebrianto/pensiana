<?php
    class User_model extends CI_Model {
        var $tabel = 'user';
        
        public function __construct() {
            parent::__construct();
        }
        
        function get_alluser() {
            $query = $this->db->get($this->tabel);
            
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
        }
        function get_user_byid($id) {
            $this->db->where('id_user', $id);
            $query = $this->db->get($this->tabel);

            if ($query->num_rows() == 1) {
                return $query->result_array();
            }
        }
        
        public function insert_user($data) {
            $this->db->insert($this->tabel, $data);
            
            return TRUE;
        }
        
        public function update_user($id, $data) {
            $this->db->where('id_user', $id);
            $this->db->update($this->tabel, $data);
            
            return TRUE;
        }
        
        public function delete_user($id) {
            $this->db->where('id_user', $id);
            $this->db->delete($this->tabel);
            
            if ($this->db->affected_rows() == 1) {
                return TRUE;
            }
            return FALSE;
        }
        
        public function validate_login($username, $password) {
            $this->db->where('username', $username);
            $this->db->where('password', md5($password));
            $query = $this->db->get($this->tabel);
            
            if ($query->num_rows() == 1) {
                return TRUE;
            }
        }
        
        public function validate_registration($username) {
            $this->db->where('username', $username);
            $query = $this->db->get($this->tabel);
            
            if ($query->num_rows() == 1) {
                return TRUE;
            }
        }
    }
?>