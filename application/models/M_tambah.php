<?php
class M_tambah extends CI_Model{

    function tampil(){
		
		$this->db->order_by('id_pasien','ASC');
		$hasil = $this->db->get('pasien');
		$this->db->select('SUM(jumlah_pasien)');
		return $hasil;
    }

    function aksi_tambah($data){
        $this->db->insert('pasien',$data);
	}
	
	function grafik(){
		return $grafik = $this->db->get('pasien');
		
	}

}
