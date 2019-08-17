<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Author: Shiva Manhar (shivamanhar)
 * Date:23/4/2015
 * class Name: Muser
 * Descripation: Muser Class is after complete of user_profile Class and this class is
 * access when user complete enter his/har basic information, like education, lifestyle, background etc.
*/
class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('adminmodel');
		if (!$this->tank_auth->is_admin_in())
		{
			redirect('/auth/login/');
		}
                
    }
    function index($user_id = NULL){
	
		if($user_id == NULL)
		{
			$user_id = $this->tank_auth->get_user_id();
		}
		$data['main_id'] = (int)$user_id;		
		$data['matches'] = $this->adminmodel->total_muser_data();
		$data['page'] =     'admin/adminhome';
		$data['title'] =    'Muser | Home Page | Mplan - Mplan.in';
		$data['keywords'] ='matrimony, matrimonials, matchmaking, brides, grooms, matrimonial blog';
		$data['descripation'] ='Mplan.in best matrimonial service website. We are providing online matchmaking. We are using advanced search technology. Registraion is free. Create your profile and start searching for prospective brides and grooms today';
		$this->load->view('site_theme/site_containt', $data);    
	}
	
	function banuse(){
		$banstatus = $this->input->post('ban');
		$banreason = $this->input->post('reason_ban');
		$userid = $this->input->post('userid');
		$data = array(
                'banned' => ($banstatus == "yes") ? 1 : 0, 
                'ban_reason'=>($banstatus == "yes") ? $banreason : "",
        );
		$this->update->global_update('users','id', $userid , $data);
		redirect('admin');   
	}
	
	function paymentrequest(){	
		$data['matches'] = $this->adminmodel->pending_package_request();
		$data['page'] =     'admin/paymentrequest';
		$data['title'] =    'Muser | Home Page | Mplan - Mplan.in';
		$data['keywords'] ='matrimony, matrimonials, matchmaking, brides, grooms, matrimonial blog';
		$data['descripation'] ='Mplan.in best matrimonial service website. We are providing online matchmaking. We are using advanced search technology. Registraion is free. Create your profile and start searching for prospective brides and grooms today';
		$this->load->view('site_theme/site_containt', $data); 
	}
	function userdetail($user_id = NULL){
		if($user_id == NULL){
                echo "Profile Not Complete!";
        }else{
			
				$field_val = array(
					'users.id' => $user_id
					);
			    
			$data['main_id'] = $user_id;
			$data['matches'] = $this->adminmodel->user_details($field_val);
			$data['packages']= $this->adminmodel->get_all_user_package($field_val);
			$data['isadmin'] = $this->tank_auth->is_admin_in();
			$data['userid']  = $user_id ;
			$data['page'] =     'admin/userdetail';
			$data['title'] =    'Muser | Home Page | Mplan';
			$data['descripation'] ='';
			$this->load->view('site_theme/site_containt', $data);
        } 
	}
	function package_activate(){
		$field_val = array(
			'user_package_opt.id' => $this->input->post('packageId')
		);

		$packagelist = $this->adminmodel->get_all_user_package($field_val);
		if($packagelist->num_rows()>0)
		{
			foreach($packagelist->result() as $row)
			{
				$packagedays 	    = $row->pack_days;
				$packacontact		= $row->pack_num_contact;
				$packid             = $row->package_id;

			}
		}

        if($this->input->post('packagestatus') == '1'){
			$data = array(
				'package_status' => $this->input->post('packagestatus'), 
				'contact_remaining'=>$packacontact,
				'pack_expire'   => date('Y-m-d', strtotime("+".$packagedays." days")),
			);
		}else {
			$data = array(
				'package_status' => $this->input->post('packagestatus'), 
			);
		}
		
		$this->update->global_update('user_package_opt','id', $this->input->post('packageId') , $data);
		
		
		echo ("package added sucess fully!!! ");
	}
        
}

/* End of Muser Class */
?>