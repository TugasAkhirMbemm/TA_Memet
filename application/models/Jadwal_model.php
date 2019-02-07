<?php
class Jadwal_model extends CI_Model{
     function __construct(){
        parent::__construct();  
    }
    function list_jenjang($id_jenjang){
        // ambil data barang dari tabel barang
        //$review = $this->db->get('review_ta');

        //return $review;
    	/*$this->db->select('review_ta.id_review_mhs','usulan_ta_mhs.id_usulan','usulan_ta_mhs.judul','usulan_ta_mhs.deskripsi','usulan_ta_mhs.dosen_pembimbing','usulan_ta_mhs.tgl_input','review_ta.status','review.ta.deskripsi_review');
    	$this->db->from('review_ta','usulan_ta_mhs');
    	//$this->db->join("review_ta"," usulan_ta_mhs.id_usulan = review_ta.id_usulan",'right');
    	$this->db->where("review_ta.id_review_mhs", $id_review_mhs);
*/

    	$w=$this->db->query("select jenjang.tanggal,jenjang.waktu,jenjang.tempat from jenjang");
        return $w->result();
    }
    function list(){
    $q=$this->db->query("select jadwal from jenjang");
    return $q->result();
    } 

    // function edit_jenjang($id_jenjang){
    // $sql = sprintf("update review_ta set id_review_mhs='$this->id_review_mhs',id_usulan='$this->id_usulan',nip='$this->nip',status='$this->status',deskripsi_review='$this->deskripsi_review'");
    // $this->db->query($sql);
    // }

    function edit_simpan($id_jenjang,$data){
    $this->db->where('id_jenjang',$id_jenjang);
    $this->db->update('jenjangg',$data);
    }

    function tampil_jenjang(){
        $x=$this->db->query("SELECT jenjang.tanggal,jenjang.waktu,jenjang.tempat from jenjang"); //mengambil semua data dari tabel data_users dan users
    # code...       
         //mengambil seluruh data
        return $x->result(); //mengembalikan data
    }

}