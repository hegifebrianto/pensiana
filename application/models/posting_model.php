<?php
class Posting_model extends CI_Model {
	var $id_posting=0;
	var $tanggal="";
	var $judul="";
	var $isi="";
	var $path_gambar="";
	var $id_kategori=0;

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
}
?>
