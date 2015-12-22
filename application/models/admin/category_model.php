<?php
    class Category_model extends CI_Model {
        var $tabel = 'kategori';
        
        public function __construct() {
            parent::__construct();
        }
        
        function get_allcategory() {
            $query = $this->db->get($this->tabel);
            
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
        }
        function get_category_byid($id) {
            $this->db->where('id_kategori', $id);
            $query = $this->db->get($this->tabel);

            if ($query->num_rows() == 1) {
                return $query->result_array();
            }
        }
        
        public function insert_category($data) {
            $this->db->insert($this->tabel, $data);
            
            return TRUE;
        }
        
        public function update_category($id, $data) {
            $this->db->where('id_kategori', $id);
            $this->db->update($this->tabel, $data);
            
            return TRUE;
        }
        
        public function delete_category($id) {
            $this->db->where('id_kategori', $id);
            $this->db->delete($this->tabel);
            
            if ($this->db->affected_rows() == 1) {
                return TRUE;
            }
            return FALSE;
        }
    }
?>