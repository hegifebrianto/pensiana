<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Edit_posting extends CI_Controller {
 
/*******
     | CRUD barang
     | controller barang view, create, update, delete
     | by g2tech
     ***********/
    public function __construct() {
        parent::__construct();
        $this->load->model('mposting');
        $this->load->helper('form');
		    $this->load->helper('url');
    }
//class fungsi awal ketika kita panggil controller posting
    public function index()
    {
        $this->data['username']=$this->session->userdata('username');
        $this->data['title'] = 'CRUD CodeIgniter Studi Kasus Barang'; //judul title
        $this->data['qposting'] = $this->mposting->get_allposting(); //model semua posting
 
        $this->load->view('posting/v_listposting',$this->data); //load views vbarang
 
    }
 
    public function form(){
        //ambil variabel URL
        $mau_ke                 = $this->uri->segment(3);
        $idu                    = $this->uri->segment(4);
         
 
        //ambil variabel dari form
        $id                    = addslashes($this->input->post('id'));
        $tanggal                  = addslashes($this->input->post('tanggal'));
        $judul                   = addslashes($this->input->post('judul'));
        $isi                  = addslashes($this->input->post('isi'));
       
 
//mengarahkan fungsi form sesuai dengan uri segmentnya
        if ($mau_ke == "add") {//jika uri segmentnya add
            $data['title'] = 'Tambah posting';
            $data['aksi'] = 'aksi_add';
            $this->load->view('v_posting',$data);
        } else if ($mau_ke == "edit") {//jika uri segmentnya edit
            $data['qdata']  = $this->mposting->get_posting_byid($idu);
            $data['title'] = 'Edit posting';
            $data['aksi'] = 'aksi_edit';
            $this->load->view('v_posting',$data);
        } else if ($mau_ke == "aksi_add") {//jika uri segmentnya aksi_add sebagai fungsi untuk insert
            $data = array(
                'id_posting'   => $id,
                'tanggal'  => $tanggal,
                'judul' => $harga,
                'isi'=> $isi,
               
            );
            $this->mposting->get_insert($data); //model insert data barang
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil di insert</div>"); //pesan yang tampil setalah berhasil di insert
            redirect('edit_posting');
        } else if ($mau_ke == "aksi_edit") { //jika uri segmentnya aksi_edit sebagai fungsi untuk update
          $data = array(
                 'id_posting'   => $id,
                'tanggal'  => $tanggal,
                'judul' => $harga,
                'isi'=> $isi,
            );
            $this->mposting->get_update($id,$data); //modal update data barang
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil diupdate</div>"); //pesan yang tampil setelah berhasil di update
            redirect('edit_posting');
        }
 
    }
    
    public function hapus($id){ //fungsi hapus barang sesuai dengan id
 
        $hapus = $this->db->delete('posting',array('id_posting' => $id));
        $this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Postingan berhasil dihapus</div>");
        redirect('edit_posting');
    }
}
