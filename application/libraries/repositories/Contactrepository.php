<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactrepository {

	protected $CI;

	public function __construct() {
		$this->CI =& get_instance();
		$this->CI->load->helper('default');
	}

	public function loadData() {
		$data = loadDefaultDataFront();
		$data['contact'] = $this->CI->back_m->get_one('contact', 1);
		
		return $data;

	}
}