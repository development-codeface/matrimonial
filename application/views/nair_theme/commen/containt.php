<?php
/*$this->load->view(SITE_THEME_FOR_VIEW.'commen/header');
$this->load->view(SITE_THEME_FOR_VIEW.$page);
$this->load->view(SITE_THEME_FOR_VIEW.'commen/footer');
?>*/

$this->load->view(SITE_THEME_FOR_VIEW.'site_theme/site_header');
$this->load->view(SITE_THEME_FOR_VIEW.'site_theme/site_menu');
$this->load->view(SITE_THEME_FOR_VIEW.$page);
$this->load->view(SITE_THEME_FOR_VIEW.'site_theme/site_footer'); ?>