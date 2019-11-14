<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_datalatih extends CI_model {

	public function getDataByKategori($kategori)
	{
		return $this->db->get_where('tb_datalatih', ['kategori' => $kategori])->result_array();
	}

}

/* End of file M_datalatih.php */
/* Location: ./application/models/M_datalatih.php */