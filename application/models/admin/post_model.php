<?php
    class Post_model extends CI_Model {
        var $tabel = 'posting';
        
        public function __construct() {
            parent::__construct();
        }
        
        function get_allpost() {
            
            $query = $this->db->get($this->tabel);
            
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
        }
        function get_posting_byid($id) {
            $this->db->where('id_posting', $id);
            $query = $this->db->get($this->tabel);

            if ($query->num_rows() == 1) {
                return $query->result_array();
            }
        }
        
        public function insert_posting($data) {
            $this->db->insert($this->tabel, $data);
            
            return TRUE;
        }
        
        public function update_posting($id, $data) {
            $this->db->where('id_posting', $id);
            $this->db->update($this->tabel, $data);
            
            return TRUE;
        }
        
        public function delete_posting($id) {
            $this->db->where('id_posting', $id);
            $this->db->delete($this->tabel);
            
            if ($this->db->affected_rows() == 1) {
                return TRUE;
            }
            return FALSE;
        }
    }
?>