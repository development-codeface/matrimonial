<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Author: Shiva Manhar (shivamanhar)
 * Date:23/4/2015
 * class Name: Muser
 * Descripation: Muser Class is after complete of user_profile Class and this class is
 * access when user complete enter his/har basic information, like education, lifestyle, background etc.
*/
class Muser extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		
		if (!$this->tank_auth->is_logged_in())
		{
			redirect('/auth/login/');
		}
                
        }
        function index($user_id = NULL)
        {
	
		if($user_id == NULL){
			$user_id = $this->tank_auth->get_user_id();
		}

		 $field_val = array(
			'users.id' => (int)$user_id
			);

		$field_match = array(
			'gender' => $this->muse->sex_match($this->tank_auth->get_user_id()),
			'activated' => 1
		);

		$data['main_id'] = (int)$user_id;		
		$data['matches'] = $this->matri->total_muser_data($field_val);
		$data['page'] =     'muser/mhome';
		$data['suggestion'] = $this->matri->randomuser($field_match);
		$data['title'] =    'Muser | Home Page | Mplan - Mplan.in';
		$data['keywords'] ='matrimony, matrimonials, matchmaking, brides, grooms, matrimonial blog';
		$data['descripation'] ='Mplan.in best matrimonial service website. We are providing online matchmaking. We are using advanced search technology. Registraion is free. Create your profile and start searching for prospective brides and grooms today';
		$this->load->view('site_theme/site_containt', $data);
            
        }
        function myfamily($user_id = NULL)
        {
		if($user_id == NULL)
		{
			$user_id = $this->tank_auth->get_user_id();
		}
		 $field_val = array
				(
                                   'users.id' => (int)$user_id
				);
		$data['main_id'] = $user_id;
		$data['matches'] = $this->matri->total_muser_data($field_val);
		
		$data['page'] =     'muser/myfamily';
		$data['title'] =    'Muser | Home Page | Mplan';
		$data['keywords'] ='matrimony, matrimonials, matchmaking, brides, grooms, matrimonial blog';
		$data['descripation'] ='Mplan.in best matrimonial service website. We are providing online matchmaking. We are using advanced search technology. Registraion is free. Create your profile and start searching for prospective brides and grooms today';
            /* block for tesing */
	    
	     $data['hobbies']= $this->matri->global_where('user_hobbies',array('user_id'=>$user_id));
            $data['user_family']= $this->matri->global_where('user_family',array('user_id'=>$user_id));
            $data['user_profiles']= $this->matri->global_where('user_profiles',array('user_id'=>$user_id)); 
            $this->load->view('site_theme/site_containt', $data);
        }
        function contact_me($user_id = NULL)
        {
		if($user_id == NULL)
		{
			$user_id = $this->tank_auth->get_user_id();
		}
		 $field_val = array
				(
                                   'users.id' => (int)$user_id
				);
		
		$data['main_id'] = $user_id;
		$data['matches'] = $this->matri->total_muser_data($field_val);
		$data['page'] =     'muser/contact_me';
		$data['title'] =    'Muser | Home Page | Mplan';
		$data['keywords'] ='matrimony, matrimonials, matchmaking, brides, grooms, matrimonial blog';
		$data['descripation'] ='Mplan.in best matrimonial service website. We are providing online matchmaking. We are using advanced search technology. Registraion is free. Create your profile and start searching for prospective brides and grooms today';
           /* block for testing
	     $data['hobbies']= $this->matri->global_where('user_hobbies','user_id', $user_id);
            $data['user_family']= $this->matri->global_where('user_family','user_id', $user_id);
            $data['user_profiles']= $this->matri->global_where('user_profiles','user_id', $user_id);
	   */
            $this->load->view('site_theme/site_containt', $data);
		}
		
        function matches()
        {
		
		$user_id = $this->tank_auth->get_user_id();
		
		$field_val = array(
				   'gender' => $this->muse->sex_match($this->tank_auth->get_user_id()),
				   'activated' => 1
		);
				
		
		$config['base_url'] = base_url().'muser/ajaxMaches';		
		$config['total_rows'] = $this->matri->total_muser_data($field_val)->num_rows();
		$config['per_page'] 	= 9; 
		$config["uri_segment"] = 3;
		$config["num_links"] = 3;
		//$page_segment = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;	
		
		$data['matches'] = $this->muse->mymatch($field_val, $config['per_page'], 0/*$page_segment*/);

		//print_r ($field_val); die();
		
		$config['first_link']  = 'First';
		$config['div']         = 'postList';
		/*
		$config['full_tag_open'] 	= "<nav> <ul class='pagination'>";
		$config['full_tag_close'] 	= '</ul> </nav>';
		$config['cur_tag_open'] 	= '<li class="active"><a >';
		$config['cur_tag_close'] 	= '</a></li>';
		$config['next_tag_open']	 = '<li>';
		$config['next_tag_close'] 	= '</li>';
		$config['prev_tag_open'] 	= '<li>';
		$config['prev_tag_close'] 	= '</li>';
		$config['num_tag_open'] 	= "<li>";
		$config['num_tag_close'] 	= '</li>';
		$config['first_link'] 		= 'First';
		$config['first_tag_open'] 	= '<li>';
		$config['first_tag_close'] 	= '</li>';
		$config['last_link'] 		= 'Last';
		$config['last_tag_open'] 	= '<li>';
		$config['last_tag_close'] 	= '</li>';*/
		
		$this->ajax_pagination->initialize($config);
		
		
		//$this->pagination->initialize($config); 
		$data['create_link'] = $this->pagination->create_links();
		$data['page'] =     'muser/matches';
                $data['title'] =    'Matches | Home Page | Mplan - Mplan.in | Matrimonial ';                
		$data['keywords'] ='mplan.in, Matrimonial,shaadi, free register , marriage , community, religion';
		$data['descripation'] ='mplan.in trusted matrimonial website. register now free at mplan.in marriage. you can access mobile number.';
                $data['hobbies']= $this->matri->global_where('user_hobbies', array('user_id'=>$user_id));
                $data['user_profiles']= $this->matri->global_where('user_profiles',array('user_id'=> $user_id));
		$this->load->view('site_theme/partner_containt', $data);
		
		}
		function searchResult()
        {
		$user_id = $this->tank_auth->get_user_id();
		$field_val = array(
				   'gender' => $this->muse->sex_match($this->tank_auth->get_user_id()),
				   'activated' => 1
				   
		);
		$config['base_url'] = base_url().'muser/ajaxMaches';		
		$config['total_rows'] = $this->matri->total_muser_data($field_val)->num_rows();
		$config['per_page'] 	= 9; 
		$config["uri_segment"] = 3;
		$config["num_links"] = 3;
		//$page_segment = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;	
		$data['matches'] = $this->muse->mymatch($field_val, $config['per_page'], 0/*$page_segment*/);
		$config['first_link']  = 'First';
		$config['div']         = 'postList';
		$this->ajax_pagination->initialize($config);
		$data['create_link'] = $this->pagination->create_links();
		$data['page'] =     'muser/search';
                $data['title'] =    'Matches | Home Page | Mplan - Mplan.in | Matrimonial ';                
		$data['keywords'] ='mplan.in, Matrimonial,shaadi, free register , marriage , community, religion';
		$data['descripation'] ='mplan.in trusted matrimonial website. register now free at mplan.in marriage. you can access mobile number.';
                $data['hobbies']= $this->matri->global_where('user_hobbies', array('user_id'=>$user_id));
                $data['user_profiles']= $this->matri->global_where('user_profiles',array('user_id'=> $user_id));
		$this->load->view('site_theme/partner_containt', $data);
		
        }
	function ajaxMaches()
	{
		$page = $this->input->post('page');
		if(!$page){
			$offset = 0;
		}else{
			$offset = $page;
		}
		
		$user_id = $this->tank_auth->get_user_id();
		
		$field_val = array(
				   'gender' => $this->muse->sex_match($this->tank_auth->get_user_id()),
				   'activated' => 1
		);
				
		
		$config['base_url'] = base_url().'muser/ajaxMaches';		
		$config['total_rows'] = $this->matri->total_muser_data($field_val)->num_rows();
		$config['per_page'] 	= 9; 
		$config["uri_segment"] = 3;
		$config["num_links"] = 3;
		$page_segment = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;	
		
		$data['matches'] = $this->muse->mymatch($field_val, $config['per_page'], $offset/*$page_segment*/);
		
		//pagination configuration
		$config['first_link']  = 'First';
		$config['div']         = 'postList'; //parent div tag id
		/*
		$config['full_tag_open'] 	= "<nav> <ul class='pagination'>";
		$config['full_tag_close'] 	= '</ul> </nav>';
		$config['cur_tag_open'] 	= '<li class="active"><a >';
		$config['cur_tag_close'] 	= '</a></li>';
		$config['next_tag_open']	 = '<li>';
		$config['next_tag_close'] 	= '</li>';
		$config['prev_tag_open'] 	= '<li>';
		$config['prev_tag_close'] 	= '</li>';
		$config['num_tag_open'] 	= "<li>";
		$config['num_tag_close'] 	= '</li>';
		$config['first_link'] 		= 'First';
		$config['first_tag_open'] 	= '<li>';
		$config['first_tag_close'] 	= '</li>';
		$config['last_link'] 		= 'Last';
		$config['last_tag_open'] 	= '<li>';
		$config['last_tag_close'] 	= '</li>'; */
		//$this->pagination->initialize($config);
		$this->ajax_pagination->initialize($config);
		$data['create_link'] = $this->pagination->create_links();
		//$data['page'] =     'muser/matches';
                $data['title'] =    'Matches | Home Page | Mplan - Mplan.in | Matrimonial ';                
		$data['keywords'] ='mplan.in, Matrimonial,shaadi, free register , marriage , community, religion';
		$data['descripation'] ='mplan.in trusted matrimonial website. register now free at mplan.in marriage. you can access mobile number.';
                $data['hobbies']= $this->matri->global_where('user_hobbies', array('user_id'=>$user_id));
                $data['user_profiles']= $this->matri->global_where('user_profiles',array('user_id'=> $user_id));
		$this->load->view('muser/ajaxMaches', $data);
	}

	function ajaxShortlist()
	{
		$page = $this->input->post('page');
		if(!$page){
			$offset = 0;
		}else{
			$offset = $page;
		}



        $user_id = $this->tank_auth->get_user_id();	

		$field_val = array(
			'user_shortlist.user_id' => $user_id,
 		);
		$config['base_url'] = base_url().'muser/ajaxShortlist';		
		$config['total_rows'] = $this->matri->myshortlist($field_val);
		$config['per_page'] 	= 9; 
		$config["uri_segment"] = 3;
		$config["num_links"] = 3;
		$page_segment = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;		
		$data['matches'] = $this->muse->myshortlist($field_val, $config['per_page'], $offset/*$page_segment*/);
		
		$config['first_link']  = 'First';
		$config['div']         = 'postList';
		$this->ajax_pagination->initialize($config);
		$data['create_link'] = $this->pagination->create_links();
                $data['title'] =    'Matches | Home Page | Mplan - Mplan.in | Matrimonial ';                
		$data['keywords'] ='mplan.in, Matrimonial,shaadi, free register , marriage , community, religion';
		$data['descripation'] ='mplan.in trusted matrimonial website. register now free at mplan.in marriage. you can access mobile number.';
                $data['hobbies']= $this->matri->global_where('user_hobbies', array('user_id'=>$user_id));
                $data['user_profiles']= $this->matri->global_where('user_profiles',array('user_id'=> $user_id));
		$this->load->view('muser/ajaxMaches', $data);
	}

	function ajaxInterested(){
		$page = $this->input->post('page');
		if(!$page){
			$offset = 0;
		}else{
			$offset = $page;
		}



        $user_id = $this->tank_auth->get_user_id();	

		$field_val = array(
			'user_interested.user_id' => $user_id,
		 );
		$config['base_url'] = base_url().'muser/ajaxInterested';		
		$config['total_rows'] = $this->matri->myInterested($field_val);
		$config['per_page'] 	= 9; 
		$config["uri_segment"] = 3;
		$config["num_links"] = 3;
		$page_segment = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;		
		$data['matches'] = $this->muse->myInterested($field_val, $config['per_page'], $offset/*$page_segment*/);
		
		$config['first_link']  = 'First';
		$config['div']         = 'postList';
		$this->ajax_pagination->initialize($config);
		$data['create_link'] = $this->pagination->create_links();
                $data['title'] =    'Matches | Home Page | Mplan - Mplan.in | Matrimonial ';                
		$data['keywords'] ='mplan.in, Matrimonial,shaadi, free register , marriage , community, religion';
		$data['descripation'] ='mplan.in trusted matrimonial website. register now free at mplan.in marriage. you can access mobile number.';
                $data['hobbies']= $this->matri->global_where('user_hobbies', array('user_id'=>$user_id));
                $data['user_profiles']= $this->matri->global_where('user_profiles',array('user_id'=> $user_id));
		$this->load->view('muser/ajaxMaches', $data);
	}


	function desired_partner()
	{
		$row = array();
		$edu = array();
		$lifestyle = array();
		$pbasic=  array();
		$user_id = $this->tank_auth->get_user_id();
		$data['partner_background'] = $this->matri->global_where('partner_background',  array('user_id'=> $this->tank_auth->get_user_id()));
		$data['partner_edu'] = $this->matri->global_where('partner_edu',  array('user_id'=> $this->tank_auth->get_user_id()));
		$data['partner_lifestyle'] = $this->matri->global_where('partner_lifestyle',  array('user_id'=> $this->tank_auth->get_user_id()));
		$data['partner_basic'] = $this->matri->global_where('partner_basic',  array('user_id'=> $this->tank_auth->get_user_id()));
		
		$preligion_id = NULL;
		$where_field = array(
					 'gender' => $this->muse->sex_match($this->tank_auth->get_user_id()),
					 'activated' => 1,
				     'profile_img'=>1
				     );
		foreach($data['partner_background']->result_array() as $row)
		{
			/*if($row->preligion_id != 9)
			{
			$preligion_id= $row->preligion_id;
			}*/
			$row;
		}
		
		foreach($data['partner_edu']->result_array() as $edu)
		{
			$edu;
		}
	//	if(isset($row))
	//	{
			foreach($row as $get=>$value)
			{
				if(($value != NULL) AND ($value !=0) AND ($get != 'id') AND ($get != 'user_id') AND ($get != 'psub_community'))
				{
					$field_name = preg_replace('/^p/', '', $get );
					$where_field['user_background.'.$field_name] = $value;
				}
			}
			foreach($edu as $get=>$value)
			{
				if(($value != NULL) AND ($value !=0) AND ($get != 'id') AND ($get != 'user_id') )
				{
					$field_name = preg_replace('/^p/', '', $get );
					$where_field['user_edu.'.$field_name] = $value;
				}
			}
			
			if($preligion_id != NULL)
			{
				$field_val = array(
				   'gender' => $this->muse->sex_match($this->tank_auth->get_user_id()),
				   'activated' => 1,
				   'user_background.religion_id' => $preligion_id,
				);
			}
			else
			{
				$field_val = array(
				   'gender' => $this->muse->sex_match($this->tank_auth->get_user_id()),
				   'activated' => 1
				   );
					
			}
			
			$config['base_url'] = base_url().'muser/desired_partner/';
			$config['total_rows'] = $this->matri->total_desired_partner($where_field)->num_rows();
			$config['per_page'] 	= 5; 
			$config["uri_segment"] = 3;
			$config["num_links"] = 3;
			$page_segment = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['matches'] = $this->matri->desired_partner_data($where_field, $config['per_page'], $page_segment);
			$config['full_tag_open'] 	= "<nav> <ul class='pagination'>";
			$config['full_tag_close'] 	= '</ul> </nav>';
			$config['cur_tag_open'] 	= '<li class="active"><a>';
			$config['cur_tag_close'] 	= '</a></li>';
			$config['next_tag_open']	 = '<li>';
			$config['next_tag_close'] 	= '</li>';
			$config['prev_tag_open'] 	= '<li>';
			$config['prev_tag_close'] 	= '</li>';
			$config['num_tag_open'] 	= '<li>';
			$config['num_tag_close'] 	= '</li>';
			$config['first_link'] 		= 'First';
			$config['first_tag_open'] 	= '<li>';
			$config['first_tag_close'] 	= '</li>';
			$config['last_link'] 		= 'Last';
			$config['last_tag_open'] 	= '<li>';
			$config['last_tag_close'] 	= '</li>';
			$this->pagination->initialize($config); 
			$data['create_link'] = $this->pagination->create_links();
			
			$data['page'] =     'muser/matches';
			$data['title'] =    'Matches | Home Page | Mplan - Mplan.in';
			$data['keywords'] ='matrimony, matrimonials, matchmaking, brides, grooms, matrimonial blog';
			$data['descripation'] ='Mplan.in best matrimonial service website. We are providing online matchmaking. We are using advanced search technology. Registraion is free. Create your profile and start searching for prospective brides and grooms today';
			$data['hobbies']= $this->matri->global_where('user_hobbies', array('user_id'=>$user_id));
			$data['user_profiles']= $this->matri->global_where('user_profiles',array('user_id'=>$user_id)); 
			$this->load->view('site_theme/partner_containt', $data);
	//	}
	//	else
	//	{
	//		$this->matches();	
	//	}
	}
        /* Muser inbox */
        function inbox($user_id = 12)
        {
		$user_id = (int) $user_id;
                $data['page'] =     'muser/inbox';
                $data['title'] =    'Inbox | Home Page | Mplan';
                $data['keywords'] ='matrimony, matrimonials, matchmaking, brides, grooms, matrimonial blog';
		$data['descripation'] ='Mplan.in best matrimonial service website. We are providing online matchmaking. We are using advanced search technology. Registraion is free. Create your profile and start searching for prospective brides and grooms today';
                $data['hobbies']= $this->matri->global_where('user_hobbies', array('user_id'=> $user_id));
                $data['user_profiles']= $this->matri->global_where('user_profiles',array('user_id'=>$user_id)); 
                $this->load->view('site_theme/site_containt', $data);
        }
        /*muser image gallary */
        function photo()
        {
		$user_id = $this->tank_auth->get_user_id();
		$field_val = array
				(
                   'users.id' => $this->tank_auth->get_user_id()
				);				
		$data['matches'] 		= 	$this->matri->total_muser_data($field_val);
		$data['page'] 			=     	'muser/photo';
		$data['title'] 			=    	'Photo | Mplan';
		$data['keywords'] 		=	'matrimony, matrimonials, matchmaking, brides, grooms, matrimonial blog';
		$data['descripation'] 	=	'Mplan.in best matrimonial service website. We are providing online matchmaking. We are using advanced search technology. Registraion is free. Create your profile and start searching for prospective brides and grooms today';
		$data['hobbies']		= 	$this->matri->global_where('user_hobbies', array('user_id'=> $user_id));
		$data['user_profiles']	= 	$this->matri->global_where('user_profiles',array('user_id'=> $user_id)); 
		$this->load->view('site_theme/update_containt', $data);
            
        }
	function profile_image_change()
	{
		if(isset($_POST['image-data']))
		{
			/*check image is */

			$image_contents =file_get_contents($this->input->post('image-data'));
			$image_detail = getimagesizefromstring($image_contents);
			
			if(($image_detail[0] >= 200 ) AND ($image_detail[1] >= 230 ) ){

					$field = array(
				       'user_file.user_id' => $this->tank_auth->get_user_id(),
				       'profile_img' => 1
				       );
						
					$file_name = $this->muse->get_userfile($field, 'user_id');
			
					$create_file_name = md5($this->tank_auth->get_user_id().date("Y-m-d:h:i:sa")).".jpg";
					$myfile = fopen("upload/".$create_file_name, "w") or die("Unable to open file!");
					$txt = file_get_contents($this->input->post('image-data'));
					fwrite($myfile, $txt);
					$insert_data = array(
						'user_id' =>$this->tank_auth->get_user_id(),
						'img_type'=>"jpg",
						'file_name' =>'', //file_get_contents($this->input->post('image-data')),
						'thumb'=>'',
						'profile_img' => 1,
						'upload_date' => strtotime(date('d-m-Y')),
						'path'=>base_url()."upload/".$create_file_name
						);

					$profile_image = array(
						'profile_img' => 1,
						'img_type'=>"jpg",
						'user_id' =>$this->tank_auth->get_user_id(),
						'path'=>base_url()."upload/".$create_file_name
					);
					if($file_name != NULL)
					{
						
						//$this->matri->global_update('user_file',$field, $profile_image);
						$user_file_id = $this->matri->insert_update_file($this->tank_auth->get_user_id(),$insert_data);
						/*$update_user_data = array(
							'user_id' =>$this->tank_auth->get_user_id(),
							'profile_pic'=>$user_file_id
							);
						$this->matri->adduserUpdate($this->tank_auth->get_user_id(), $update_user_data);*/
					    
						//$this->matri->global_insert('user_file', $new_profile_image);
						$this->photo();
					}
					else
					{
						echo "Sorry file not found!";die();
					}
				}
				else
				{
					
					$this->photo();
				}
		}
		else
		{
			
			$this->photo();
			
		}

		
	}
	
	function get_user_image($user_id = NULL)
	{
		if($user_id == NULL)
		{
			$this->index();
		}
		else
		{
			$data['user_id'] = $user_id;
			$data['page'] 		=     	'muser/get_user_image';
			$data['title'] 		=    	'Photo | Mplan | Matrimonials | Mplan - mplan.in';
			$data['keywords'] 	=	'matrimony, matrimonials, matchmaking, brides, grooms, matrimonial blog';
			$data['descripation'] 	=	'Mplan.in best matrimonial service website. We are providing online matchmaking. We are using advanced search technology. Registraion is free. Create your profile and start searching for prospective brides and grooms today';
			 
			$this->load->view('site_theme/partner_containt', $data);
		}
		
	}
        /*album*/
        function album()
        {
                $data['page'] =     'muser/create_album';
                $data['title'] =    'Photo Album | Mplan';
                $data['keywords'] ='matrimony, matrimonials, matchmaking, brides, grooms, matrimonial blog';
		$data['descripation'] ='Mplan.in best matrimonial service website. We are providing online matchmaking. We are using advanced search technology. Registraion is free. Create your profile and start searching for prospective brides and grooms today';
                
                $this->load->view('site_theme/partner_containt', $data);
        }
        function new_album($user_id = 12)
        {
                $this->form_validation->set_rules('album_name', 'Album Name', 'required|xss_clean|strip_tags|strtolower');                
                if($this->form_validation->run() == false)
                {
                    $this->album();
                }
                else
                {
                   
                    $data = array(
                                  'user_id'=>$user_id,
                                  'album_name'=>$this->input->post('album_name'),
                                  'album_folder'=>$this->input->post('album_name'),
                                  );
                    if($this->album->create_album('user_album', $data) == false)
                    {
                        echo "error!"; 
                    }
                    else
                    {
                        
                    }
                    
                }
        }
        /*upload Photo */
        function upload_photo($user_id = 12)
        {
                $data['page'] =     'muser/upload_image';
                $data['title'] =    'Upload Photo | Mplan';
                $data['keywords'] ='matrimony, matrimonials, matchmaking, brides, grooms, matrimonial blog';
		$data['descripation'] ='Mplan.in best matrimonial service website. We are providing online matchmaking. We are using advanced search technology. Registraion is free. Create your profile and start searching for prospective brides and grooms today';
                
                $this->load->view('site_theme/partner_containt', $data);
        }
        /*Account Upgrade*/
        function account_upgrade()
        {
                $data['page'] =     'muser/account_upgrade';
                $data['title'] =    'Account Upgrade | Mplan- Mplan.in | matrimonial';
                $data['keywords'] ='matrimony, matrimonials, matchmaking, brides, grooms, matrimonial blog';
		$data['descripation'] ='Mplan.in best matrimonial service website. We are providing online matchmaking. We are using advanced search technology. Registraion is free. Create your profile and start searching for prospective brides and grooms today';
		$this->load->view('site_theme/partner_containt', $data);
        }
        /*data filter */
        function filter_data()
        {
		$profile_img 		= 1;
		$matrial_status 	= '';
		$religion_id		= '';
		$mother_tongue_id	= '';
		$country_id 		= '';
		$state_id		= '';
		$city_id		= '';
		$edu_id			= '';
		$diet			= '';
		$disability		= '';
		$hiv_positive		= '';
		
		$get_user_search = $this->matri->global_get('user_search', array('user_id'=>$this->tank_auth->get_user_id()));
		$where_data = array(
					   'gender' => $this->muse->sex_match($this->tank_auth->get_user_id()),
					   'activated' => 1,
					   'profile_img'=>1
			);
		$data = array(
			      'user_id' 	=> 	$this->tank_auth->get_user_id(),
			      'gender'		=>	$this->muse->sex_match($this->tank_auth->get_user_id()),
			      'profile_img'	=>	1,
			      'marital_status'	=>	$this->input->post('martial_status'),
			      'religion_id'	=>	$this->input->post('religion'),
			      'mother_tongue_id'=>	$this->input->post('mtongue'),
			      'country_id'	=>	$this->input->post('country'),
			      'state_id'	=>	$this->input->post('state'),
			      'city_id'		=>	$this->input->post('city'),
			      'edu_id'		=>	$this->input->post('edu_level'),
			      'diet'		=>	$this->input->post('diet'),
			      'disability'	=>	$this->input->post('disability'),
			      'hiv_positive'	=>	$this->input->post('hiv_positive')
		);
		if($get_user_search->num_rows()<=0)
		{		
			$this->matri->global_insert('user_search', $data);
		}
		else
		{
			$this->matri->global_upldate_where('user_search',array('user_id'=>$this->tank_auth->get_user_id()),$data);
		}
		if($get_user_search->num_rows()>0)
		{
			foreach($get_user_search->result() as $row)
			{
				$profile_img 		= 1;
				$matrial_status 	= $row->marital_status;
				$religion_id		= $row->religion_id;
				$mother_tongue_id	= $row->mother_tongue_id;
				$country_id 		= $row->country_id;
				$state_id		= $row->state_id;
				$city_id		= $row->city_id;
				$edu_id			= $row->edu_id;
				$diet			= $row->diet;
				$disability		= $row->disability;
				$hiv_positive		= $row->hiv_positive;
			}
		}
		
		$field_val = array(
			'gender' 				=> $this->muse->sex_match($this->tank_auth->get_user_id()),
			'user_profiles.marital_status'		=> $this->input->post('martial_status'),			
			'user_background.religion_id'		=> $this->input->post('religion'),			
			'user_profiles.mother_tongue_id'	=> $this->input->post('mtongue'),
			'user_profiles.country_id'		=> $this->input->post('country'),
			'user_profiles.state_id'		=> $this->input->post('state'),
			'user_profiles.city_id'			=> $this->input->post('city'),			
			//'users.profile_for'			=> $this->input->post('profile_for'),			
			'education_level.id' 			=> $this->input->post('edu_level'),
			//'education_field.id' 			=> $this->input->post('edu_field'),
			//'working_with.id'			=> $this->input->post('work_with'), 
			//'working_as' 				=> $this->input->post('work_as'), 			
			//'user_lifestyle.smoke' 		=> $this->input->post('smoke'),
			'user_lifestyle.diet' 			=> $this->input->post('diet'),
			//'user_lifestyle.drink' 		=> $this->input->post('drink'),
			'user_profiles.disability'		=> $this->input->post('disability'),
			'user_profiles.hiv_positive'		=> $this->input->post('hiv_positive'),
			'activated' => 1
		);
		
		if (is_array($field_val) && count($field_val) >= 1)
		{
			foreach ($field_val as $field_key => $field_data)
			{
				if($field_data)
				{
					$where_data[$field_key] = $field_data;
				}				
			}
		}
		
		if($where_data !=NULL)
		{
			
			//$config['total_rows'] 		= $this->matri->total_desired_partner($where_data)->num_rows();
			$user_id = $this->tank_auth->get_user_id();
			
			$config['base_url'] = base_url().'muser/ajaxFilter_data';
			
			$config['total_rows'] = $this->matri->total_muser_data($where_data)->num_rows();
			$config['per_page'] 	= 9; 
			$config["uri_segment"] = 3;
			$config["num_links"] = 3;
			$page_segment = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0; //Today Change
			
			$data['matches'] = $this->muse->mymatch($where_data, $config['per_page'], 0/*$page_segment*/);
			
			//pagination configuration
			$config['first_link']  = 'First';
			$config['div']         = 'postList'; //parent div tag id
		
			/*
			$config['full_tag_open'] 	= "<nav> <ul class='pagination'>";
			$config['full_tag_close'] 	= '</ul> </nav>';
			$config['cur_tag_open'] 	= '<li class="active"><a>';
			$config['cur_tag_close'] 	= '</a></li>';
			$config['next_tag_open']	 = "<li>";
			$config['next_tag_close'] 	= '</li>';
			$config['prev_tag_open'] 	= '<li>';
			$config['prev_tag_close'] 	= '</li>';
			$config['num_tag_open'] 	= '<li >';
			$config['num_tag_close'] 	= '</li>';
			$config['first_link'] 		= 'First';
			$config['first_tag_open'] 	= '<li>';
			$config['first_tag_close'] 	= '</li>';
			$config['last_link'] 		= 'Last';
			$config['last_tag_open'] 	= '<li>';
			$config['last_tag_close'] 	= '</li>';*/
			
			$this->ajax_pagination->initialize($config);
			//$this->pagination->initialize($config); 
			$data['create_link'] = $this->pagination->create_links();
			$data['hobbies']= $this->matri->global_where('user_hobbies', array('user_id'=>$user_id));
			$data['user_profiles']= $this->matri->global_where('user_profiles',array('user_id'=> $user_id));
			$this->load->view('muser/filter_page', $data);
			
		}
        }
	/*ajax filter data */
	
	function ajaxFilter_data()
	{
		
		$page = $this->input->post('page');
		if(!$page){
			$offset = 0;
		}else{
			$offset = $page;
		}
		
		$profile_img 		= 1;
		$matrial_status 	= '';
		$religion_id		= '';
		$mother_tongue_id	= '';
		$country_id 		= '';
		$state_id		= '';
		$city_id		= '';
		$edu_id			= '';
		$diet			= '';
		$disability		= '';
		$hiv_positive		= '';
		
		$get_user_search = $this->matri->global_get('user_search', array('user_id'=>$this->tank_auth->get_user_id()));
		
		if($get_user_search->num_rows()>0)
		{
			foreach($get_user_search->result() as $row)
			{
				$profile_img 		= 1;
				$matrial_status 	= $row->marital_status;
				$religion_id		= $row->religion_id;
				$mother_tongue_id	= $row->mother_tongue_id;
				$country_id 		= $row->country_id;
				$state_id		= $row->state_id;
				$city_id		= $row->city_id;
				$edu_id			= $row->edu_id;
				$diet			= $row->diet;
				$disability		= $row->disability;
				$hiv_positive		= $row->hiv_positive;
			}
		}
		
		$field_val = array(
			'gender' 				=> $this->muse->sex_match($this->tank_auth->get_user_id()),
			'user_profiles.marital_status'		=> $matrial_status ,			
			'user_background.religion_id'		=> $religion_id,			
			'user_profiles.mother_tongue_id'	=> $mother_tongue_id,
			'user_profiles.country_id'		=> $country_id ,
			'user_profiles.state_id'		=> $state_id,
			'user_profiles.city_id'			=> $city_id,			
			//'users.profile_for'			=> $this->input->post('profile_for'),			
			'education_level.id' 			=> $edu_id,
			//'education_field.id' 			=> $this->input->post('edu_field'),
			//'working_with.id'			=> $this->input->post('work_with'), 
			//'working_as' 				=> $this->input->post('work_as'), 			
			//'user_lifestyle.smoke' 		=> $this->input->post('smoke'),
			'user_lifestyle.diet' 			=> $diet,
			//'user_lifestyle.drink' 		=> $this->input->post('drink'),
			'user_profiles.disability'		=> $disability,
			'user_profiles.hiv_positive'		=> $hiv_positive,
			'activated' => 1
		);
		
		if (is_array($field_val) && count($field_val) >= 1)
		{
			foreach ($field_val as $field_key => $field_data)
			{
				if($field_data)
				{
					 $where_data[$field_key] = $field_data;
				}
				
			}
		}
		
		if($where_data !=NULL)
		{
			
			//$config['total_rows'] 		= $this->matri->total_desired_partner($where_data)->num_rows();
			$user_id = $this->tank_auth->get_user_id();
			
			$config['base_url'] = base_url().'muser/ajaxFilter_data';
			
			$config['total_rows'] = $this->matri->total_muser_data($where_data)->num_rows();
			$config['per_page'] 	= 9; 
			$config["uri_segment"] = 3;
			$config["num_links"] = 3;
			$page_segment = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0; //Today Change
			
			$data['matches'] = $this->muse->mymatch($where_data, $config['per_page'], $offset/*$page_segment*/);
			
			//pagination configuration
			$config['first_link']  = 'First';
			$config['div']         = 'postList'; //parent div tag id
			
			$this->ajax_pagination->initialize($config);
			//$this->pagination->initialize($config); 
			$data['create_link'] = $this->pagination->create_links();
			$data['hobbies']= $this->matri->global_where('user_hobbies', array('user_id'=>$user_id));
			$data['user_profiles']= $this->matri->global_where('user_profiles',array('user_id'=> $user_id));
			$this->load->view('muser/ajaxMaches', $data);
			
		}
	}

	function ajaxpackage_add(){
		$packid = $this->input->post('package');
		$user_id = $this->tank_auth->get_user_id();
		$field = array(
			'users.id' => $user_id,
		);
		$packRequest = $this->matri->get_user_pendingpackrequest($field);
		
		foreach($packRequest->result() as $row){
			$packremaining = $row->package_status;
			$packstatus  = $row->package_status;
		}

		if(isset($packstatus) && $packstatus == 1 ){
			echo "Active Package is available on your account !!!";
		}elseif(isset($packstatus)  && $packstatus == 0){
			echo "Pending Package Request! Please contact with admin for activation";
		}else {
			$data = array(
				'userid'=>$user_id,
				'package_id'=>$packid
				  );
	
			if($this->matri->global_insert('user_package_opt', $data))
				echo "Package requested sucessfully !!! Please contact admin for additional inforamtion!!";
			else 
				echo "Package requested failed !";
		}
		
	}

	function ajax_getcontact_info(){
		$profileid = $this->input->post('profileid');
		$user_id   = $this->tank_auth->get_user_id();
		$field = array(
			'users.id' => $user_id,
		);
		$userdetail = $this->matri->get_user_packageEligible($field);

		foreach($userdetail->result() as $row){
			$expirydate = $row->pack_expire;
			$packremaining = $row->contact_remaining;
			$packageReque  = $row->packageid;
		}

		if(isset($packremaining) && $packremaining > 0){
			$data = array(
                'contact_remaining' => $packremaining-1, 
        	);
			$this->update->global_update('user_package_opt','id', $packageReque , $data);
			$userInfo = $this->matri->global_get('users', array('id'=>$profileid));
			foreach($userInfo->result() as $row){
				$mobileNumber = $row->mobile_no;
				$email        = $row->email;
			}
			echo "Mobile number : " ; 
			echo $mobileNumber  ;
			echo " Email : ";
			echo $email  ;
		}else{
			echo "You are not eligible for see contact information, Please purchase package !!";
		}
		
		
	}

	function ajax_shortlist_profile(){
		$profileid = $this->input->post('packageId');
		$user_id = $this->tank_auth->get_user_id();

		$isProfileshortlisted = $this->matri->global_get('user_shortlist', array('user_id'=>$this->tank_auth->get_user_id()));
		if($isProfileshortlisted->num_rows() < 1){
			$data = array(
				'user_id'=>$user_id,
				'profile_id'=>$profileid
				);
	
			if($this->matri->global_insert('user_shortlist', $data))
				echo "You shortlist this profile sucessfully !!!";
			else 
				echo "Action failed !!! Please try again";

		}else {
			echo "You already short list this profile !!!";
		}
	}

	function shortlistprofile(){
		$user_id = $this->tank_auth->get_user_id();	
		
		$field_val = array(
			'user_shortlist.user_id' => $user_id,
		 );
		//$result = $this->matri->myshortlist($field_val);
		$config['base_url'] = base_url().'muser/ajaxShortlist';		
		$config['total_rows'] =  0;
		$config['per_page'] 	= 9; 
		$config["uri_segment"] = 3;
		$config["num_links"] = 3;	
		$data['matches'] = $this->muse->myshortlist($field_val, $config['per_page'], 0/*$page_segment*/);
		$config['first_link']  = 'First';
		$config['div']         = 'postList';
		$this->ajax_pagination->initialize($config);
		$data['create_link'] = $this->pagination->create_links();
		$data['page'] =     'muser/shortlisting';
                $data['title'] =    'Matches | Home Page | Mplan - Mplan.in | Matrimonial ';                
		$data['keywords'] ='mplan.in, Matrimonial,shaadi, free register , marriage , community, religion';
		$data['descripation'] ='mplan.in trusted matrimonial website. register now free at mplan.in marriage. you can access mobile number.';
                $data['hobbies']= $this->matri->global_where('user_hobbies', array('user_id'=>$user_id));
                $data['user_profiles']= $this->matri->global_where('user_profiles',array('user_id'=> $user_id));
		$this->load->view('site_theme/partner_containt', $data);
		
	}

	function ajax_interest_profile(){
		$profileid = $this->input->post('packageId');
		$user_id = $this->tank_auth->get_user_id();

		$isProfileshortlisted = $this->matri->global_get('user_interested', array('user_id'=>$this->tank_auth->get_user_id()));
		if($isProfileshortlisted->num_rows() < 1){
			$data = array(
				'user_id'=>$user_id,
				'profile_id'=>$profileid
				);
	
			if($this->matri->global_insert('user_interested', $data))
				echo "Your interest send sucessfully !!!";
			else 
				echo "Action failed !!! Please try again";

		}else {
			echo "You already sent interest to this profile !!!";
		}
	}

	function interestedprofile(){
		$user_id = $this->tank_auth->get_user_id();	
		
		$field_val = array(
			'user_interested.user_id' => $user_id,
		 );
		//$result = $this->matri->myshortlist($field_val);
		$config['base_url'] = base_url().'muser/ajaxInterested';		
		$config['total_rows'] =  0;
		$config['per_page'] 	= 9; 
		$config["uri_segment"] = 3;
		$config["num_links"] = 3;	
		$data['matches'] = $this->muse->myInterested($field_val, $config['per_page'], 0/*$page_segment*/);
		$config['first_link']  = 'First';
		$config['div']         = 'postList';
		$this->ajax_pagination->initialize($config);
		$data['create_link'] = $this->pagination->create_links();
		$data['page'] =     'muser/interested';
                $data['title'] =    'Matches | Home Page | Mplan - Mplan.in | Matrimonial ';                
		$data['keywords'] ='mplan.in, Matrimonial,shaadi, free register , marriage , community, religion';
		$data['descripation'] ='mplan.in trusted matrimonial website. register now free at mplan.in marriage. you can access mobile number.';
                $data['hobbies']= $this->matri->global_where('user_hobbies', array('user_id'=>$user_id));
                $data['user_profiles']= $this->matri->global_where('user_profiles',array('user_id'=> $user_id));
		$this->load->view('site_theme/partner_containt', $data);
		
	}
	
}

/* End of Muser Class */
?>