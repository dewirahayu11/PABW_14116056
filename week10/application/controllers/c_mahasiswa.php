<?php 

/**
 * 
 */
class C_Mahasiswa extends CI_Controller
{
		public function index() {
		$this->load->model('m_mahasiswa');

		$get = $this->m_mahasiswa->get();

		$data['nim'] = $get[0]->nim;
		$data['nama'] = $get[0]->nama;
		$data['alamat'] = $get[0]->alamat;
		$data['tanggal_lahir'] = $get[0]->tanggal_lahir;

		$this->load->view('v_mahasiswa',$data);

	
}
}
 ?>