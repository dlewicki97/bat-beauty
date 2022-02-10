<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct() {
		parent::__construct();
		if (!$this->db->table_exists('users')){
			$this->base_m->create_base();
		}
		$this->load->library('repositories/contactrepository');
	}

	public function index() {
		$data = $this->contactrepository->loadData();

		echo loadViewsFront('contact', $data);
	}
}