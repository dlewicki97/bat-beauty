<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	function __construct() {
		parent::__construct();
		if (!$this->db->table_exists('users')){
			$this->base_m->create_base();
		}
		$this->load->library('repositories/newsrepository');
	}

	public function index() {
		$data = $this->newsrepository->loadData();

		echo loadViewsFront('news', $data);
	}

	public function show($id) {
		$data = $this->newsrepository->loadSingleData($id);

		echo loadViewsFront('single_news', $data);
	}

	public function add() {
		$photos = ['2020-10-22/8743.png', '2020-10-22/24010.png', '2020-10-22/offer1.png'];

		$offers = $this->back_m->get_all('offers');
		foreach($offers as $offer) {
			foreach ($photos as $photo) {
				if($offer->id != 1) {

					$this->back_m->insert('gallery', ['photo' => $photo, 'table_name' => 'offers', 'item_id' => $offer->id]);
				}
			}
		}
	}
}