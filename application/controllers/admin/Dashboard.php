<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['title'] = "Dashboard";

		$data['datalatih'] = $this->db->query('SELECT COUNT(id_datalatih) as total FROM tb_datalatih')->row_array();

		$data['penyakit'] = $this->db->query('SELECT COUNT(kode_penyakit) as total FROM tb_penyakit')->row_array();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('pages/admin/dashboard', $data);
        $this->load->view('templates/admin/footer');
	}
}