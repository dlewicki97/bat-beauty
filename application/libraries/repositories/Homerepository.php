<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Homerepository {

	protected $CI;

	public function __construct() {
		$this->CI =& get_instance();
		$this->CI->load->helper('default');
	}

	public function loadPricelistItems($pricelist) {
		$pricelist_items = [];

		foreach ($pricelist as $list) {
			$pricelist_items[$list->id] = $this->CI->back_m->get_all_where('pricelist_items', 'pricelist_id', $list->id);
		}

		return $pricelist_items;
	}


	public function loadData() {
		$data = loadDefaultDataFront();
		$data['slider'] = $this->CI->back_m->get_all('slider');
		$data['treatments_1'] = $this->CI->back_m->get_all_where('offers', 'offers_1', 1);
		$data['bloomea'] = $this->CI->back_m->get_one('bloomea', 1);
		$data['treatments_2'] = $this->CI->back_m->get_all_where('offers', 'offers_2', 1);
		$data['attributes_descriptions'] = $this->CI->back_m->get_one('attributes_descriptions', 1);
		$data['attributes'] = $this->CI->back_m->get_all('attributes');
		$data['pricelist'] = $this->CI->back_m->get_all('pricelist');
		$data['pricelist_items'] = $this->loadPricelistItems($data['pricelist']);
		$data['pricelist_descriptions'] = $this->CI->back_m->get_one('pricelist_descriptions', 1);
		$data['facebook'] = $this->CI->back_m->get_all('facebook');
		$data['facebook_descriptions'] = $this->CI->back_m->get_one('facebook_descriptions', 1);

		return $data;

	}
}