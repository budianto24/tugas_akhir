<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('M_penyakit');
	}

	public function index()
	{
		$data['title'] = "Data Penyakit";
		
		$data['penyakit'] = $this->M_penyakit->getAllData();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('pages/admin/datapenyakit', $data);
        $this->load->view('templates/admin/footer');
	}

}

/* End of file Penyakit.php */
/* Location: ./application/controllers/admin/Penyakit.php */