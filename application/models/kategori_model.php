<?php
class Kategori_model extends CI_Model {
	var $id_kategori=0;
	var $nama_kategori="";
	
	function __construct()
    {
        parent::__construct();
    }
	
	function getAllKategori() 
	{
		$query = $this->db->get('kategori');
		return $query->result();
	}
}
?>