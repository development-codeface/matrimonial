<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Author: Shiva Manhar (shivamanhar)
 * Date:13/4/2015
 * class Name: Add_access
 * Descripation: Add_access in address access class use for user address input easy.
*/
class common extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
		 $this->load->database();
                $this->load->library('address');                
                $this->load->model('add');
	}
    function viewpayment(){
	    $data['page'] =     'muser/payment_option';
		$data['title'] =    'Muser | Home Page | Mplan';
        $data['descripation'] ='';
        $where_opt = "pack_status=0";
        $data['packagelist']  = $this->add->get_where_condition('packagelist','*',$where_opt);
        $data['is_logged_in'] = $this->tank_auth->is_logged_in();
		$this->load->view('site_theme/partner_containt', $data);
    } 
}
