<?php
class Posting_model extends CI_Model {

	function __construct()
	{
	    parent::__construct();
	}

	function getAllPostingOrderByDate()
	{
		$sql = "SELECT * FROM user, posting WHERE posting.id_user = user.id_user
				ORDER BY tanggal DESC LIMIT 3";
		return $this->db->query($sql);
	}

	function getSelectedPosting($id)
	{
		$sql = "SELECT * FROM user, posting WHERE posting.id_user = user.id_user
				AND posting.id_posting = ? ORDER BY tanggal DESC";
		return $this->db->query($sql, array($id));
	}

	function getHighlightedPosting()
	{
		$sql = "SELECT * FROM user, posting WHERE posting.id_user = user.id_user
				AND posting.highlight = 1 ORDER BY tanggal DESC LIMIT 3";
			return $this->db->query($sql);
	}

	function insertAllPosting($table, $data)
	{
		//$id_posting=0;
		//$tanggal="";
		//$judul="";
		//$isi="";
		//$path_gambar="";
		//$id_kategori=0;
		//$file='';
		
		$query = $this->db->insert($table, $data);//"insert into posting(judul,isi,path_gambar, id_kategori, highlight, popularitas, id_user) values ('$judul','$isi', '0', '$kategori', 0, 0, 0)";		
	}
}
?>
