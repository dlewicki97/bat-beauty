<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Galleryrepository {

	protected $CI;

	public function __construct() {
		$this->CI =& get_instance();
		$this->CI->load->helper('default');
	}

	public function loadData() {
		$data = loadDefaultDataFront();
		$data['gallery_page'] = $this->CI->back_m->get_all('gallery_page');
		
		return $data;

	}
}