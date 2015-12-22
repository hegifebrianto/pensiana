<?php
    class Podcast_model extends CI_Model {
        var $tabel = 'podcast';
        
        public function __construct() {
            parent::__construct();
        }
        
        function get_allpodcast() {
            $query = $this->db->get($this->tabel);
            
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
        }
        function get_podcast_byid($id) {
            $this->db->where('id_podcast', $id);
            $query = $this->db->get($this->tabel);

            if ($query->num_rows() == 1) {
                return $query->result_array();
            }
        }
        
        
        
        
        

    }
?>