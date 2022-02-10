<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutrepository {

	protected $CI;

	public function __construct() {
		$this->CI =& get_instance();
		$this->CI->load->helper('default');
	}

	public function loadData() {
		$data = loadDefaultDataFront();
		$data['about'] = $this->CI->back_m->get_one('about', 1);
		$data['owner'] = $this->CI->back_m->get_one('owner', 1);
		
		return $data;

	}
}