<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
		if (!$this->db->table_exists('users')){
			$this->base_m->create_base();
		}
		$this->load->library('repositories/homerepository');
	}

	public function index() {
		$data = $this->homerepository->loadData();

		echo loadViewsFront('index', $data);
	}

}