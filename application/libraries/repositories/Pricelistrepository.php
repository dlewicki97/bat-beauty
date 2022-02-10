<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pricelistrepository {

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
		$data['pricelist'] = $this->CI->back_m->get_all('pricelist');
		$data['pricelist_items'] = $this->loadPricelistItems($data['pricelist']);
		$data['pricelist_descriptions'] = $this->CI->back_m->get_one('pricelist_descriptions', 1);
		
		return $data;

	}
}