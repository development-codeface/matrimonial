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
		$config['base_url'] = base_url().'admin/alluser';	
		$config['total_rows'] = $this->adminmodel->total_muser_data(NULL,NULL)->num_rows();
		$data['totalcount']      = $config['total_rows'];
		$data['isadmin'] = $this->tank_auth->is_admin_in();
		$config['per_page'] 	= 9; 
		$config["uri_segment"] = 3;
		$config["num_links"] = 3;	
		//$data['matches'] = $this->muse->mymatch($field_val, $config['per_page'], 0/*$page_segment*/);
		$config['first_link']  = 'First';
		$config['div']         = 'matches_change';
		$this->ajax_pagination->initialize($config);
		$data['create_link'] = $this->pagination->create_links();

		$data['matches'] = $this->adminmodel->total_muser_data($config['per_page'], 0);
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
		$data['isadmin'] = $this->tank_auth->is_admin_in();
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
		$data['isadmin'] = $this->tank_auth->is_admin_in();
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

	function blockeduser(){		
		$data['matches'] = $this->adminmodel->total_blocked_user();
		$data['page'] =     'admin/adminblockuser';
		$data['isadmin'] = $this->tank_auth->is_admin_in();
		$data['title'] =    'Muser | Home Page | Mplan - Mplan.in';
		$data['keywords'] ='matrimony, matrimonials, matchmaking, brides, grooms, matrimonial blog';
		$data['descripation'] ='Mplan.in best matrimonial service website. We are providing online matchmaking. We are using advanced search technology. Registraion is free. Create your profile and start searching for prospective brides and grooms today';
		$this->load->view('site_theme/site_containt', $data); 
	}

	function newphotoupdate(){
		$data['matches'] = $this->adminmodel->new_newphotoupdate();
		$data['page'] =     'admin/adminphotoupdated';
		$data['isadmin'] = $this->tank_auth->is_admin_in();
		$data['title'] =    'Muser | Home Page | Mplan - Mplan.in';
		$data['keywords'] ='matrimony, matrimonials, matchmaking, brides, grooms, matrimonial blog';
		$data['descripation'] ='Mplan.in best matrimonial service website. We are providing online matchmaking. We are using advanced search technology. Registraion is free. Create your profile and start searching for prospective brides and grooms today';
		$this->load->view('site_theme/site_containt', $data); 
	}
	function approveimage(){
		$imageid 		= $this->input->post('updateid');
		$imagestatus 	= $this->input->post('status');
		$updateImg = $this->matri->global_get('update_user_file', array('id'=>$imageid));
		$profile_path = "";
		$user_id = "";
		foreach($updateImg->result() as $row){
			$profile_path       = $row->path;
			$user_id   			= $row->user_id;
		}	
		if($imagestatus == 0){
			
			$profile_image = array(
				'profile_img' => 1,
				'img_type'=>"jpg",
				'user_id' =>$user_id ,
				'path'=>$profile_path 
			);
			$field = array(
				'user_file.user_id' => $user_id,
				'profile_img' => 1
				);
			$this->matri->global_update('user_file',$field, $profile_image);
			
			$update_user_data = array(
				'user_id' =>$user_id,
				'profile_pic'=>$profile_path
				);
			//$this->matri->adduserUpdate($this->tank_auth->get_user_id(), $update_user_data);
			$this->adminmodel->delete_image_update($imageid);

		}else if($imagestatus == 1){
			$this->adminmodel->delete_image_update($imageid);
		}

		redirect('/fulluserdetail/'.$user_id);
	}

	function approveuserinfo(){
		$updateid 		= $this->input->post('updateid');
		$imagestatus 	= $this->input->post('status');
		$updateprofile = $this->matri->global_get('user_update', array('id'=>$updateid));
			$profile_aboutus = "";
			$profile_aboutus_hobbies = "";
            $user_id = "";
			foreach($updateprofile->result() as $row){
        		$profile_aboutus       				= $row->description;
				$profile_aboutus_hobbies   			= $row->abouthobbies;
				$user_id                            = $row->user_id;
			}
		if($imagestatus == 0){
			
			$field = array(
				'user_id' => $user_id
				);
			if(!empty($profile_aboutus)){
				
				$profile_update = array(
					'about_me' => $profile_aboutus
				);
				
				$this->matri->global_update('user_profiles',$field, $profile_update);
			}
			
			if(!empty($profile_aboutus_hobbies)){
				
				$profile_update_hobbies = array(
					'own_words' => $profile_aboutus_hobbies
				);
				
				$this->matri->global_update('user_hobbies',$field, $profile_update_hobbies);
			}
			$this->adminmodel->delete_profile_update($updateid);

		}else if($imagestatus == 1){
			$this->adminmodel->delete_profile_update($updateid);
		}

		redirect('/fulluserdetail/'.$user_id);
	}

	function profileupdate(){
		$data['matches'] = $this->adminmodel->profileUpdateRequest();
		$data['page'] =     'admin/recentprofileupdate';
		$data['isadmin'] = $this->tank_auth->is_admin_in();
		$data['title'] =    'Muser | Home Page | Mplan - Mplan.in';
		$data['keywords'] ='matrimony, matrimonials, matchmaking, brides, grooms, matrimonial blog';
		$data['descripation'] ='Mplan.in best matrimonial service website. We are providing online matchmaking. We are using advanced search technology. Registraion is free. Create your profile and start searching for prospective brides and grooms today';
		$this->load->view('site_theme/site_containt', $data);
	}

	function inactiveuser(){
		$data['matches'] = $this->adminmodel->total_inactive_user();
		$data['page'] =     'admin/inactiveusers';
		$data['isadmin'] = $this->tank_auth->is_admin_in();
		$data['title'] =    'Muser | Home Page | Mplan - Mplan.in';
		$data['keywords'] ='matrimony, matrimonials, matchmaking, brides, grooms, matrimonial blog';
		$data['descripation'] ='Mplan.in best matrimonial service website. We are providing online matchmaking. We are using advanced search technology. Registraion is free. Create your profile and start searching for prospective brides and grooms today';
		$this->load->view('site_theme/site_containt', $data);
	}

	function activateuser(){
		$activate = $this->input->post('activate');
		$userid = $this->input->post('userid');
		$data = array(
                'activated' => ($activate == "yes") ? 1 : 0, 
        );
		$this->update->global_update('users','id', $userid , $data);
		redirect('admin');
	}

	function alluser(){
		$page = $this->input->post('page');
		if(!$page){
			$offset = 0;
		}else{
			$offset = $page;
		}
        
		$user_id = $this->tank_auth->get_user_id();
		
		$data['main_id'] = (int)$user_id;
		$config['base_url'] = base_url().'admin/alluser';	
		$config['total_rows'] = $this->adminmodel->total_muser_data(NULL,NULL)->num_rows();
		$data['totalcount']      = $config['total_rows'];
		$config['per_page'] 	= 9; 
		$config["uri_segment"] = 3;
		$data['isadmin'] = $this->tank_auth->is_admin_in();
		$config["num_links"] = 3;	
		//$data['matches'] = $this->muse->mymatch($field_val, $config['per_page'], 0/*$page_segment*/);
		$config['first_link']  = 'First';
		$config['div']         = 'matches_change';
		$this->ajax_pagination->initialize($config);
		$data['create_link'] = $this->pagination->create_links();

		$data['matches'] = $this->adminmodel->total_muser_data($config['per_page'], $offset);
		$data['page'] =     'admin/adminhome';
		$data['title'] =    'Muser | Home Page | Mplan - Mplan.in';
		$data['keywords'] ='matrimony, matrimonials, matchmaking, brides, grooms, matrimonial blog';
		$data['descripation'] ='Mplan.in best matrimonial service website. We are providing online matchmaking. We are using advanced search technology. Registraion is free. Create your profile and start searching for prospective brides and grooms today';
		$this->load->view('muser/ajaxMaches', $data);
	}
        
}

/* End of Muser Class */
?>