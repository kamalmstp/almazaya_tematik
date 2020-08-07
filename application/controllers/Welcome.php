<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	function data_schedule(){
    $year = $this->db->get_where('settings' , array('type' => 'running_year'))->row()->description;
    // $data = $this->db->get_where('class_routine', array('day' => date('l')))->result_array();
        $this->db->select('c.name as cn, sc.name as scn, sb.name as sbn, t.name as tn, cr.time_start as crts, cr.time_start_min as crtsm, cr.time_end as crte, cr.time_end_min as crtem, o.status as stts');
        $this->db->from('class_routine cr');
        $this->db->join('class c', 'cr.class_id = c.class_id');
        $this->db->join('section sc', 'cr.section_id = sc.section_id');
        $this->db->join('subject sb', 'cr.subject_id = sb.subject_id');
        $this->db->join('teacher t', 'sb.teacher_id = t.teacher_id');
        $this->db->join('online o', 't.teacher_id = o.user_id', 'left');
        $this->db->where('cr.day', date('l'));
        $this->db->where('cr.year', $year);
        $this->db->where('CAST(concat(HOUR(now()), ":", minute(now())) AS time) BETWEEN CAST(concat(time_start,":",time_start_min) AS time) and CAST(concat(time_end,":",time_end_min) AS time)');
        $this->db->order_by('sc.section_id', 'asc');
        $query = $this->db->get();
        $data = $query->result_array();
        echo json_encode($data);
  }
}
