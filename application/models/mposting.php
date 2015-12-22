<?php
class Mposting extends CI_Model {
 
    var $tabel = 'posting'; //variabel tabel
 
    function __construct() {
        parent::__construct();
    }
    function get_allposting() {
        $this->db->from($this->tabel);
        $query = $this->db->get()->result_array();
        return $query;
       
    }
 
    function get_posting_byid($id) {
        $this->db->from($this->tabel);
        $this->db->where('id_posting', $id);
 
        $query = $this->db->get()->result_array();
        return $query[0];
 
    }
 
    function get_insert($data){
       $this->db->insert($this->tabel, $data);
       return TRUE;
    }
 
    function get_update($id,$data) {
 
        $this->db->where('id_posting', $id);
        $this->db->update($this->tabel, $data);
 
        return TRUE;
    }
    function del_barang($id) {
        $this->db->where('id_posting', $id);
        $this->db->delete($this->tabel);
        if ($this->db->affected_rows() == 1) {
 
            return TRUE;
        }
        return FALSE;
    }
}
?>
