<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	function __construct() {
		parent::__construct();
		if (!$this->db->table_exists('users')){
			$this->base_m->create_base();
		}
		$this->load->library('repositories/galleryrepository');
	}

	public function index() {
		$data = $this->galleryrepository->loadData();

		echo loadViewsFront('gallery', $data);
	}
}