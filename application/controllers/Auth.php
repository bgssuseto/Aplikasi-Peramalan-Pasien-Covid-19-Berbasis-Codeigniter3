
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_tambah');
	}

	public function index(){
		//read data api
		$readapi = file_get_contents('https://api.kawalcorona.com/indonesia');
		$data['positif'] = json_decode($readapi,TRUE);
		$this->load->view('templates/header');
		$this->load->view('auth/index',$data);
		$this->load->view('templates/footer');

	}
	public function input(){
		$this->load->view('templates/header');
		$this->load->view('data/index');
		$this->load->view('templates/footer');
	}
	public function pasien(){
		$hasil['data'] =$this->M_tambah->tampil();
		$this->load->view('templates/header');
		$this->load->view('covid/index',$hasil);
		$this->load->view('templates/footer');
		
		
	}
	public function peramalan(){
		$this->load->view('templates/header');
		$this->load->view('peramalan/index');
		$this->load->view('templates/footer');

	}

	public function prediksi(){
		$hasil['data'] =$this->M_tambah->tampil();
		$this->load->view('templates/header');
		$this->load->view('prediksi/index',$hasil);
		$this->load->view('templates/footer');
		
	}
	 

	public function tambah(){
		$minggu = $this->input->post('minggu');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$pasien = $this->input->post('jumlah_pasien');

		$data = [
			'minggu' => $minggu,
			'bulan' => $bulan,
			'tahun' => $tahun,
			'jumlah_pasien' => $pasien

		];

		 $this->M_tambah->aksi_tambah($data);
		 redirect('auth/pasien');
	
	}
}


