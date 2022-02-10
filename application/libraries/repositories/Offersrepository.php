<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Offersrepository {

	protected $CI;

	public function __construct() {
		$this->CI =& get_instance();
		$this->CI->load->helper('default');
	}

	public function loadData() {
		$data = loadDefaultDataFront();
		$data['offers'] = $this->CI->back_m->get_all('offers');
		$data['offers_pricelist'] = $this->CI->back_m->get_one('offers_pricelist', 1);

		return $data;

	}

	public function loadSingleData($id) {
		$data = loadDefaultDataFront();
		$data['offer'] = $this->CI->back_m->get_one('offers', $id);
		$data['gallery'] = $this->CI->back_m->get_images('gallery', 'offers', $id);
		$data['seo_description'] = $data['offer']->seo_description;
		$data['seo_title'] = $data['offer']->title;

		return $data;

	}
}