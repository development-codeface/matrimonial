<?php
$this->load->view(SITE_THEME_FOR_VIEW.'site_theme/site_header');
$this->load->view(SITE_THEME_FOR_VIEW.'site_theme/site_menu');

//$this->load->view(SITE_THEME_FOR_VIEW.'site_theme/site_aboutme');
//$this->load->view(SITE_THEME_FOR_VIEW.'site_theme/muser_menu');
$this->load->view(SITE_THEME_FOR_VIEW.$page);
$this->load->view(SITE_THEME_FOR_VIEW.'site_theme/site_footer');
?>
