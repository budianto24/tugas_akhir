<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
    
    public function index()
    {
        $data['title'] = "Sistem Pakar Penyakit Tanaman Jagung";

        $data['gejala'] = $this->db->get('tb_gejala')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('pages/home', $data);
        $this->load->view('templates/footer');
    }

   public function result()
   {
		$data['judul'] = "Diagnosa";

		$data['gejala'] = $this->db->get('tb_gejala')->result_array();
		$data['penyakit'] = $this->db->get('tb_penyakit')->result_array();
		
		$this->load->view('templates/header', $data);
		$this->load->view('pages/diagnosa',$data);
		$this->load->view('templates/footer');
   }

   public function diagnosa()
   {	

   		$verify = $this->input->post('verify');

   		$nama 	= $this->input->post('nama');

   		$email 	= $this->input->post('email');


   		for ($i=1; $i <= 19; $i++) { 
   			$gejala[$i] = $this->input->post('gejala'.$i);
   		}

   		if (isset($verify)) {
   			
	   		for ($i=1; $i <= 19; $i++) { 
	   			if ($gejala[$i] == null) {
	   				$gejala[$i] = "Tidak";
	   			}else{
	   				$gejala[$i] = "Ya";
	   			}
	   		}

	   		$dataGejala = [
	   			'nama'	  => $nama,
	   			'email'	  => $email,
				'G1' => $gejala[1],
				'G2' => $gejala[2],
				'G3' => $gejala[3],
				'G4' => $gejala[4],
				'G5' => $gejala[5],
				'G6' => $gejala[6],
				'G7' => $gejala[7],
				'G8' => $gejala[8],
				'G9' => $gejala[9],
				'G10' => $gejala[10],
				'G11' => $gejala[11],
				'G12' => $gejala[12],
				'G13' => $gejala[13],
				'G14' => $gejala[14],
				'G15' => $gejala[15],
				'G16' => $gejala[16],
				'G17' => $gejala[17],
				'G18' => $gejala[18],
				'G19' => $gejala[19],
	   		];

	   		$this->session->set_userdata($dataGejala);

	   		// $this->db->insert('tb_pengujian', $dataGejala);
	   		redirect('home/result');
   		}else{
   			redirect('home');
   		}
   }


}		