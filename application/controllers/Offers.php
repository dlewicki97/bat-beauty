<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offers extends CI_Controller {

	function __construct() {
		parent::__construct();
		if (!$this->db->table_exists('users')){
			$this->base_m->create_base();
		}
		$this->load->library('repositories/offersrepository');
	}

	public function index() {
		$data = $this->offersrepository->loadData();

		echo loadViewsFront('offers', $data);
	}

	public function show($id) {
		$data = $this->offersrepository->loadSingleData($id);

		echo loadViewsFront('single_offer', $data);
	}

}