<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Author: Shiva Manhar (shivamanhar)
 * Date:19/5/2015
 * class Name: Forme
 * Descripation: Mplan is a matrimonial site.
 * user information.
*/
class Forme extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if (!$this->tank_auth->is_logged_in())
		{
			redirect('/auth/login/');
		}
	}
        //geting userinformation
        function get_user($user_id = NULL)
        {
            if($user_id == NULL)
            {
                echo "Profile Not Complete!";
            }
            else
            {
    
                    $field_val = array(
                        'users.id' => $user_id
                     );

                     $field_match = array(
                        'gender' => $this->muse->sex_match($this->tank_auth->get_user_id()),
                        'activated' => 1
                     );
                
                    $data['main_id'] = $user_id;
                    $data['matches'] = $this->matri->total_muser_data($field_val);
                    $data['isadmin'] = $this->tank_auth->is_admin_in();
                    $data['suggestion'] = $this->matri->randomuser($field_match);
                    $data['userid']  = $user_id ;
                    $data['page'] =     'muser/mhome';
                    $data['title'] =    'Muser | Home Page | Mplan';
                    $data['descripation'] ='';
                    $this->load->view('site_theme/site_containt', $data);
            }            
        }
}