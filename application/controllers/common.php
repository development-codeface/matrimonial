<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Author: Shiva Manhar (shivamanhar)
 * Date:13/4/2015
 * class Name: Add_access
 * Descripation: Add_access in address access class use for user address input easy.
*/
Header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
Header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
Header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE'); 

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
    
    public function profile_image_change_for_subsite()
	{
		
		if(isset($_POST['imagedata']))
		{
			/*check image is */
			$image_contents =file_get_contents($this->input->post('imagedata'));
			$image_detail = getimagesizefromstring($image_contents);  
			if(($image_detail[0] >= 200 ) AND ($image_detail[1] >= 230 ) ){

					$field = array(
				       'user_file.user_id' => $_POST['user_id'],
				       'profile_img' => 1
				       );
						
					$file_name = $this->muse->get_userfile($field, 'user_id');
			
					$create_file_name = md5($this->tank_auth->get_user_id().date("Y-m-d:h:i:sa")).".jpg";
					$myfile = fopen("upload/".$create_file_name, "w") or die("Unable to open file!");
					$txt = file_get_contents($this->input->post('imagedata'));
					fwrite($myfile, $txt);
					$insert_data = array(
						'user_id' =>$_POST['user_id'],
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
						'user_id' =>$_POST['user_id'],
						'path'=>base_url()."upload/".$create_file_name
					);
					if($file_name != NULL)
					{ 
						$user_file_id = $this->matri->insert_update_file($_POST['user_id'],$insert_data);					 
					}
					else
					{
						$user_file_id = $this->matri->insert_update_file($_POST['user_id'],$insert_data);
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
}
