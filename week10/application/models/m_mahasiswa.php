<?php 

/**
 * 
 */
class M_mahasiswa extends CI_Model
{
	
	function get() {
		$data = $this->db->get('mahasiswa');

		return $data->result();
	}
}
 ?>