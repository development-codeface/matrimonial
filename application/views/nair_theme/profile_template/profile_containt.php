<?php
//it is basic template style
//$this->load->view(SITE_THEME_FOR_VIEW.'profile_template/profile_header');
$this->load->view(SITE_THEME_FOR_VIEW.'site_theme/site_header');
$this->load->view(SITE_THEME_FOR_VIEW.'site_theme/site_menu');
$this->load->view(SITE_THEME_FOR_VIEW.'profile_template/profile_menu');
$this->load->view(SITE_THEME_FOR_VIEW.$page);
$this->load->view(SITE_THEME_FOR_VIEW.'site_theme/site_footer');
//$this->load->view(SITE_THEME_FOR_VIEW.'profile_template/profile_footer');
?>
