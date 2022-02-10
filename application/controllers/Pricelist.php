<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pricelist extends CI_Controller {

	function __construct() {
		parent::__construct();
		if (!$this->db->table_exists('users')){
			$this->base_m->create_base();
		}
		$this->load->library('repositories/pricelistrepository');
	}

	public function index() {
		$data = $this->pricelistrepository->loadData();

		echo loadViewsFront('pricelist', $data);
	}

}