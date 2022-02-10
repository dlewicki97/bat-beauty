<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function loadDefaultData() {
    $CI = &get_instance();
	$data['mails'] = $CI->back_m->get_all('mails');
	$data['user'] = $CI->back_m->get_one('users', $_SESSION['id']);
	$data['media'] = $CI->back_m->get_all('media');
	$data['settings'] = $CI->back_m->get_one('settings', 1);
	$data['contact'] = $CI->back_m->get_one('contact_settings', 1);
	$data['api_gallery'] = apiGalleryRows();
	
    return $data;
}


function loadDefaultDataFront(){
	$CI = &get_instance();
	$data['settings'] = $CI->back_m->get_one('settings', 1);
	$data['contact_settings'] = $CI->back_m->get_one('contact_settings', 1);
	$data['subpages'] = $CI->back_m->get_all_where('subpages', 'active', 1);
	$data['contact_icons'] = $CI->back_m->get_all('contact_icons');
	$data['footer_offers'] = $CI->back_m->get_with_limit('offers', 4);
	$data['contact_descriptions'] = $CI->back_m->get_one('contact_descriptions', 1);
	$data['current_subpage'] = $CI->uri->segment(1) == null ? $CI->back_m->get_one('subpages', 7) : $CI->back_m->get_subpage($CI->uri->segment(1));
	$data['seo_description'] = $data['current_subpage']->seo_description;
	$data['seo_title'] = $data['current_subpage']->title;

	return $data;
}
