<?php
/*$this->load->view('commen/header');
$this->load->view($page);
$this->load->view('commen/footer');
?>*/

$this->load->view('site_theme/site_header');
$this->load->view('site_theme/site_menu');
$this->load->view($page);
$this->load->view('site_theme/site_footer'); ?>