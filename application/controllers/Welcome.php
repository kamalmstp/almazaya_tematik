<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		// $berita = $this->db->get('posts')->result_array();
		$this->db->select("*");
		$this->db->from("tematik");
		$file = $this->db->get();

		$data['file'] = $file->result_array();
		$this->load->view('welcome_message', $data);
	}
}
