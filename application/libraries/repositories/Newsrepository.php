<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsrepository {

	protected $CI;

	public function __construct() {
		$this->CI =& get_instance();
		$this->CI->load->helper('default');
	}

	public function loadData() {
		$data = loadDefaultDataFront();
		$data['news'] = $this->CI->back_m->get_all('news');
		
		return $data;

	}

	public function loadSingleData($id) {
		$data = loadDefaultDataFront();
		$data['info'] = $this->CI->back_m->get_one('news', $id);
		$data['gallery'] = $this->CI->back_m->get_images('gallery', 'news', $id);
		$data['seo_description'] = $data['info']->seo_description;
		$data['seo_title'] = $data['info']->title;

		return $data;

	}
}