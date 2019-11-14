<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datalatih extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('M_datalatih');
		$this->load->model('M_gejala');
		$this->load->model('M_penyakit');
	}

	public function index()
	{
		$data['title'] = "Data Latih";


		$pilihan = $this->input->post('pilihan');
		
		$data['gejala'] = $this->M_gejala->getAllData();

		$data['penyakit'] = $this->M_penyakit->getAllData();

		$data['datalatih'] = $this->M_datalatih->getDataByKategori($pilihan);

        $this->load->view('templates/admin/header', $data);
        $this->load->view('pages/admin/datalatih', $data);
        $this->load->view('templates/admin/footer');
	}
}