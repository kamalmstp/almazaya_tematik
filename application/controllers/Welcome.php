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

	public function search_result()
	{
		$post = $this->input->POST("search", true);
		// $search = $post("search");

		$this->db->select("*");
		$this->db->from("tematik");
		$this->db->where("title LIKE '%$post%'");

		// $this->db->query("SELECT * FROM 'tematik' WHERE title LIKE $post;");
		$title = $this->db->get();

		$data['title'] = $title->result_array();
		$this->load->view('search_result', $data);
		// redirect('welcome/search_result');

	}
}