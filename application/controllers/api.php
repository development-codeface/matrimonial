<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Author: Shiva Manhar (shivamanhar)
 * Date:23/4/2015
 * class Name: Muser
 * Descripation: Muser Class is after complete of user_profile Class and this class is
 * access when user complete enter his/har basic information, like education, lifestyle, background etc.
*/
class Api extends CI_Controller
{
	function __construct()
	{
		parent::__construct(); 
                
    }
    function index(){	
    	$data = array( 
            "mohammad" => array (
               "physics" => 35,
               "maths" => 30,	
               "chemistry" => 39
            ),
            
            "qadir" => array (
               "physics" => 30,
               "maths" => 32,
               "chemistry" => 29
            ),
            
            "zara" => array (
               "physics" => 31,
               "maths" => 22,
               "chemistry" => 39
            )
         );
 		echo json_encode($data);
    }
}