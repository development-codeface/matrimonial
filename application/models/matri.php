<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



/**

 * Matri

 *

 * This model represents matrimonial user  data base. It can be used

 * for address access, insert, delete.

 *

 * @package	models

 * Class Name   Matri

 * @author	shiva manhar (shivamanhar)

 * Date         22/4/2015

 * 

 */

class Matri extends CI_Model

{

     public function __construct()

     {

         

     }

    //db insert in any table , any data

    function global_insert($table_name, $data)

    {

        $query = $this->db->insert($table_name, $data);

        return $this->db->insert_id();

    }

    //db select in any table

    function global_select($table_name)

    {

        $query = $this->db->get($table_name);

        return $query;

    }

 /*   function get_website_details()

    {

        $this->db->select('*');

        $this->db->from('website_details as A');

        $this->db->join('religion as B', 'A.religion_id = B.id','left');

        $this->db->join('community as C', 'A.community_id= B.id','left');

        $query = $this->db->get();

        return $query;

    }

    public function get_user_community_db($userId='')

    { 

        if($userId){

            $this->db->select('A.*,B.religion_id,C.religion_name,B.community_id,D.community_name,B.sub_community');

            $this->db->from('users as A');

            $this->db->join('user_background as B', 'A.id = B.user_id','left');

            $this->db->join('religion as C', 'B.religion_id = C.id','left');

            $this->db->join('community as D', 'B.community_id = D.id','left');

            $this->db->where('A.id',$userId);

            $query = $this->db->get();

            return  $query;             

        }

    }*/

    //get value

    function global_get($table_name, $where_field=NULL , $per_page = NULL, $page_segment = NULL, $order_by = NULL)

    {

        if($where_field != NULL)

        {

            $this->db->where($where_field);

        }

        if(($per_page != NULL) AND ($page_segment != NULL) )

        {

            $this->db->limit($per_page, $page_segment);

        }

        $this->db->select("*");

        if(($order_by != NULL))

        {

        $this->db->order_by($order_by);

        }

        $get_value = $this->db->get($table_name);

        return $get_value;

    }

      function global_get_limit($table_name, $where_field=NULL , $per_page = NULL, $page_segment = NULL, $order_by = NULL)

    {

        if($where_field != NULL)

        {

            $this->db->where($where_field);

        }

        

            $this->db->limit($per_page, $page_segment);

        

        $this->db->select("*");

        if(($order_by != NULL))

        {

        $this->db->order_by($order_by);

        }

        $get_value = $this->db->get($table_name);

        return $get_value;

    }

    function global_update($table_name, $where_field, $data)

    {

        $this->db->where($where_field);

        $this->db->update($table_name, $data);

        return $this->db->affected_rows();

    }

    //dh select in any table but using where condition

    //select  *from user_profiles left join countries on countries.id = user_profiles.country_id left join states on states.id = user_profiles.state_id left join cities on cities.id =  user_profiles.city_id

    function global_where($table_name, $where_field)

    {

        if($table_name == 'user_profiles')

        {

            $this->db->select('user_profiles.*,height.*,  mtongue,

                              countries.name as country , states.name as state,

                              cities.name as city, height.id as hid');

            $this->db->from('user_profiles');

            $this->db->join('mother_tongue', 'mother_tongue.id = user_profiles.mother_tongue_id',  'left');

            $this->db->join('countries', 'countries.id = user_profiles.country_id',  'left');

            $this->db->join('states', 'states.id = user_profiles.state_id',  'left');

            $this->db->join('cities', 'cities.id = user_profiles.city_id', 'left');



            $this->db->join('height', 'height.id = user_profiles.height',  'left');

            $this->db->where($where_field);

            $query = $this->db->get();

            return  $query;

        }

        else

        {

        $this->db->where($where_field);

        $query = $this->db->get($table_name);

        return $query;

        }

    }

    //select user_edu but it not direct work we need to join table

    //here use diferent method

    function select_edu($field_val)

    {

        $this->db->select('education_field.*,



                            education_level.*, working_as.*, working_with.*, user_edu.*');

        $this->db->from('user_edu');

        $this->db->join('education_field', 'education_field.id = user_edu.edu_field_id',  'left');

        $this->db->join('education_level', 'education_level.id = user_edu.edu_level_id',  'left');

        $this->db->join('working_with', 'working_with.id = user_edu.work_with_id',  'left');

        $this->db->join('working_as', 'working_as.id = user_edu.work_as_id',  'left');



        $this->db->where($field_val);

        $query = $this->db->get();

        return  $query;

    }

    function get_community($table_name, $field, $val)

    {

        $this->db->where($field, $val);

        $this->db->order_by("community_name", "asc"); 

        $query = $this->db->get($table_name);

        return $query;

    }

    

    /* select where and where condition*/

    function and_where($table_name, $field_val)

    {

        $this->db->where($field_val);

        $query = $this->db->get($table_name);

        return $query;

    }

    

    /*global update */    

    function global_upldate($table_name, $field, $val, $data)

    {

        $this->db->where($field, $val);

        $query =  $this->db->update($table_name, $data);

        return $query;

    }



    /*update global_update_where*/



    function global_upldate_where($table_name, $field, $data)



    {



        $this->db->where($field);



        $query =  $this->db->update($table_name, $data);



        return $this->db->affected_rows();



    } 



     



    

    /* join table for geting user background */

    function get_user_background($userid)

    {

        $this->db->select('*');

        $this->db->from('user_background');

        $this->db->join('religion', 'religion.id =user_background.religion_id',  'left');

        $this->db->join('community', 'community.id = user_background.community_id',  'left');        

        $this->db->where('user_id', $userid);

        $query = $this->db->get();

        return  $query;

    }

    

    /*match data filter for user */

    //safir

    function muser_data( $field_val, $per_page, $page_segment)

    {

        //var_dump($field_val);exit;

        $this->db->select(' users.id,

                            users.firstname, 

                            users.dob, 

                            users.activated, 

                            users.gender, 

                            user_profiles.*,                                              

                            working_as.*,   

                            user_file.*,  

                            countries.name as country , 

                            states.name as state, 

                            users.id as muser_id,

                            cities.name as city , 

                            users.id as main_id');

        $this->db->from('users');

        $this->db->join('user_profiles','user_profiles.user_id = users.id', 'left');

        $this->db->join('user_edu','user_edu.user_id = users.id', 'left');

        $this->db->join('working_as','working_as.id = user_edu.work_as_id', 'left');

        $this->db->join('user_file','user_file.user_id = users.id', 'left');

        $this->db->join('countries', 'countries.id = user_profiles.country_id',  'left');

        $this->db->join('cities', 'cities.id = user_profiles.city_id',  'left');

        $this->db->join('states', 'states.id = user_profiles.state_id',  'left');

        $this->tank_auth->communityConditions(); 



        $this->db->where('users.delete_status','No');

        

        $this->db->where($field_val);

        $this->db->order_by("users.id", "desc"); 

        $this->db->limit($per_page, $page_segment);       

        $query = $this->db->get();

        return $query;

    }

    //safir

   /* function muser_data( $field_val, $per_page, $page_segment)

    {

        $this->db->select('users.*, user_profiles.*, education_field.*,

                            education_level.*, working_as.*, working_with.*, user_family.*,

                            user_file.*, userfolder.*, user_background.*, user_hobbies.*,

                            user_lifestyle.* , mother_tongue.* , religion.*, community.*, 

                            countries.name as country , states.name as state, users.id as muser_id,

                              cities.name as city , users.id as main_id');

        $this->db->from('users');

        $this->db->join('user_profiles','user_profiles.user_id = users.id', 'left');

        $this->db->join('user_edu','user_edu.user_id = users.id', 'left');

        $this->db->join('education_field','education_field.id = user_edu.edu_field_id', 'left');

        $this->db->join('education_level','education_level.id = user_edu.edu_level_id','left');

        $this->db->join('working_as','working_as.id = user_edu.work_as_id', 'left');

        $this->db->join('working_with','working_with.id =user_edu.work_with_id', 'left');

        $this->db->join('user_family','user_family.user_id = users.id', 'left');

       

        $this->db->join('user_file','user_file.user_id = users.id', 'left');

        $this->db->join('userfolder','userfolder.user_id = users.id', 'left');

        $this->db->join('user_background','user_background.user_id = users.id', 'left');        

        $this->db->join('user_hobbies', 'user_hobbies.user_id = users.id',  'left');

        $this->db->join('user_lifestyle', 'user_lifestyle.user_id = users.id',  'left');

        $this->db->join('mother_tongue', 'mother_tongue.id= user_profiles.mother_tongue_id',  'left');

        $this->db->join('countries', 'countries.id = user_profiles.country_id',  'left');

        $this->db->join('cities', 'cities.id = user_profiles.city_id',  'left');

        $this->db->join('states', 'states.id = user_profiles.state_id',  'left');

        $this->db->join('religion', 'religion.id = user_background.religion_id',  'left');

        $this->db->join('community', 'community.id = user_background.community_id',  'left');

        

        $this->db->where($field_val);

        //$this->db->where('file_name IS NOT NULL');

        $this->db->order_by("users.id", "desc"); 

        $this->db->limit($per_page, $page_segment);       

        $query = $this->db->get();

        return $query;

    }*/

    function muser_data_search( $field_val,$keywordVal, $adminparam, $per_page, $page_segment)

    {



        $this->db->select('users.*, user_profiles.*, education_field.*,

                            education_level.*, working_as.*, working_with.*, user_family.*,

                            user_file.*, userfolder.*, user_background.*, user_hobbies.*,

                            user_lifestyle.* , mother_tongue.* , religion.*, community.*, 

                            countries.name as country , states.name as state, users.id as muser_id,

                              cities.name as city , users.id as main_id');

        $this->db->from('users');

        $this->db->join('user_profiles','user_profiles.user_id = users.id', 'left');

        $this->db->join('user_edu','user_edu.user_id = users.id', 'left');

        $this->db->join('education_field','education_field.id = user_edu.edu_field_id', 'left');

        $this->db->join('education_level','education_level.id = user_edu.edu_level_id','left');

        $this->db->join('working_as','working_as.id = user_edu.work_as_id', 'left');

        $this->db->join('working_with','working_with.id =user_edu.work_with_id', 'left');

        $this->db->join('user_family','user_family.user_id = users.id', 'left');

       

        $this->db->join('user_file','user_file.user_id = users.id', 'left');

        $this->db->join('userfolder','userfolder.user_id = users.id', 'left');

        $this->db->join('user_background','user_background.user_id = users.id', 'left');        

        $this->db->join('user_hobbies', 'user_hobbies.user_id = users.id',  'left');

        $this->db->join('user_lifestyle', 'user_lifestyle.user_id = users.id',  'left');

        $this->db->join('mother_tongue', 'mother_tongue.id= user_profiles.mother_tongue_id',  'left');

        $this->db->join('countries', 'countries.id = user_profiles.country_id',  'left');

        $this->db->join('cities', 'cities.id = user_profiles.city_id',  'left');

        $this->db->join('states', 'states.id = user_profiles.state_id',  'left');

        $this->db->join('religion', 'religion.id = user_background.religion_id',  'left');

        $this->db->join('community', 'community.id = user_background.community_id',  'left');        

        $this->tank_auth->communityConditions('false'); 

        $this->db->where($field_val);

        $this->db->where('users.delete_status','No');

        if($adminparam != null &&  isset($adminparam['agefrom']) && strlen ($adminparam['agefrom']) > 0  

            && $adminparam['agefrom'] > 0 && isset($adminparam['ageto']) && strlen ($adminparam['ageto']) > 0 && $adminparam['ageto'] > 0) {

                $this->db->where("TIMESTAMPDIFF(YEAR, DATE_FORMAT(FROM_UNIXTIME(users.dob), '%Y-%m-%d' ) , CURDATE()) >=",$adminparam['agefrom'],FALSE);

                $this->db->where("TIMESTAMPDIFF(YEAR, DATE_FORMAT(FROM_UNIXTIME(users.dob), '%Y-%m-%d' ) , CURDATE()) <=",$adminparam['ageto'],FALSE);

        }



        if(isset($keywordVal) && strlen($keywordVal)){

            // $this->db->like('users.username', $keywordVal, 'both');

            // $this->db->or_like('users.id', $keywordVal, 'both');

            // $this->db->or_like('users.firstname', $keywordVal, 'both');

            // $this->db->or_like('users.lastname', $keywordVal, 'both');

            $like = '(`users`.`username` LIKE "%'.$keywordVal.'%" OR ';

            $like .= '`users`.`id` LIKE "%'.$keywordVal.'%" OR ';

            $like .= '`users`.`firstname` LIKE "%'.$keywordVal.'%" OR ';

            $like .= '`users`.`lastname` LIKE "%'.$keywordVal.'%" )';

            $this->db->where($like);

        }

        //$this->db->where('file_name IS NOT NULL');

        //$this->db->where('users.delete_status','No');

        

        $this->db->order_by("users.id", "desc"); 

        $this->db->limit($per_page, $page_segment);     

        $query = $this->db->get(); 

        return $query;

    }



    function total_muser_data_search($field_val,$key,$adminparam)

    {

       // var_dump($field_val,$key,$adminparam);exit;

        $this->db->select('users.*, 

                            user_profiles.*, 

                            education_field.*,

                            education_level.*, 

                            working_as.*, 

                            working_with.*, 

                            user_family.*,

                            user_file.*, 

                            userfolder.*, 

                            user_background.*, 

                            user_hobbies.*,

                            user_lifestyle.* , 

                            mother_tongue.* , 

                            religion.*, 

                            community.*, 

                            height.*, 

                            countries.name as country , 

                            states.name as state, 

                            users.id as muser_id,

                            cities.name as city, 

                            height.id as hid, 

                            users.id as main_id,

                            update_user_file.path as updateprofilepic,

                            nashathram.name as star,

                            user_edu.annual_income as annual_income,

                            user_horoscop.path as horoscope');

        $this->db->select("TIMESTAMPDIFF(YEAR, DATE_FORMAT(FROM_UNIXTIME(users.dob), '%Y-%m-%d' ) , CURDATE()) AS age", FALSE);

        $this->db->from('users');

        $this->db->join('user_profiles','user_profiles.user_id = users.id', 'left');

        $this->db->join('user_edu','user_edu.user_id = users.id', 'left');

        $this->db->join('education_field','education_field.id = user_edu.edu_field_id', 'left');

        $this->db->join('education_level','education_level.id = user_edu.edu_level_id','left');

        $this->db->join('working_as','working_as.id = user_edu.work_as_id', 'left');

        $this->db->join('working_with','working_with.id =user_edu.work_with_id', 'left');

        $this->db->join('user_family','user_family.user_id = users.id', 'left');

       

        $this->db->join('user_file','user_file.user_id = users.id', 'left');

        $this->db->join('userfolder','userfolder.user_id = users.id', 'left');

        $this->db->join('user_background','user_background.user_id = users.id', 'left'); 

        $this->db->join('nashathram','nashathram.id = user_background.nakshathram', 'left');        

        $this->db->join('user_hobbies', 'user_hobbies.user_id = users.id',  'left');

        $this->db->join('user_lifestyle', 'user_lifestyle.user_id = users.id',  'left');

        $this->db->join('mother_tongue', 'mother_tongue.id= user_profiles.mother_tongue_id',  'left');

        $this->db->join('countries', 'countries.id = user_profiles.country_id',  'left');

        $this->db->join('cities', 'cities.id = user_profiles.city_id',  'left');

        $this->db->join('states', 'states.id = user_profiles.state_id',  'left');

        $this->db->join('religion', 'religion.id = user_background.religion_id',  'left');

        $this->db->join('community', 'community.id = user_background.community_id',  'left');



        $this->db->join('height', 'height.id = user_profiles.height',  'left');

        $this->db->join('update_user_file','update_user_file.user_id = users.id', 'left');

        $this->db->join('user_horoscop','user_horoscop.user_id = users.id', 'left');

        $this->tank_auth->communityConditions('false'); 



        $this->db->where($field_val);

        $this->db->where('users.delete_status','No');

        if($adminparam != null &&  isset($adminparam['agefrom']) && $adminparam['agefrom'] > 0 && strlen ($adminparam['agefrom']) > 0  

            && isset($adminparam['ageto']) && strlen ($adminparam['ageto']) > 0 && $adminparam['ageto'] > 0 ){

                $this->db->where("TIMESTAMPDIFF(YEAR, DATE_FORMAT(FROM_UNIXTIME(users.dob), '%Y-%m-%d' ) , CURDATE()) >=",$adminparam['agefrom'],FALSE);

                $this->db->where("TIMESTAMPDIFF(YEAR, DATE_FORMAT(FROM_UNIXTIME(users.dob), '%Y-%m-%d' ) , CURDATE()) <=",$adminparam['ageto'],FALSE);

        }

        

        if(isset($key) && strlen($key) > 0){

            // $this->db->like('users.username', $key, 'both');

            // $this->db->or_like('users.id', $key, 'both');

            // $this->db->or_like('users.firstname', $key, 'both');

            // $this->db->or_like('users.lastname', $key, 'both');



            $like = '(`users`.`username` LIKE "%'.$key.'%" OR ';

            $like .= '`users`.`id` LIKE "%'.$key.'%" OR ';

            $like .= '`users`.`firstname` LIKE "%'.$key.'%" OR ';

            $like .= '`users`.`lastname` LIKE "%'.$key.'%" )';

            $this->db->where($like);

        }   

        $query = $this->db->get();

        // $this->db->where($field_val);

        //$this->db->where('users.delete_status1','No');



        return $query;

    }

    //safir===========================================================

    function total_muser_data($field_val)

    {

        $this->db->select('users.*');

        $this->db->from('users'); 

        $this->tank_auth->communityConditions();         

        $this->db->where('users.delete_status','No'); 

        $this->db->where($field_val); 

        $query = $this->db->get(); 

        return $query;

    }

    function total_muser_data_new($field_val)

    {

        $this->db->select(' users.*, 

                            user_profiles.*, 

                            education_field.*,

                            education_level.*, 

                            working_as.*, 

                            working_with.*, 

                            user_family.*,

                            user_file.*, 

                            userfolder.*, 

                            user_background.*, 

                            user_hobbies.*,

                            user_lifestyle.* , 

                            mother_tongue.* , 

                            religion.*, 

                            community.*, 

                            height.*, 

                            countries.name as country , 

                            states.name as state, 

                            users.id as muser_id,

                            cities.name as city, 

                            height.id as hid, 

                            users.id as main_id,

                            user_package_opt.package_status as packagestatus,

                            update_user_file.path as updateprofilepic,

                            nashathram.name as star,

                            user_edu.annual_income as annual_income,

                            user_horoscop.path as horoscope,

                            user_horoscop.birth_time as horoscope_birth_time,

                            user_horoscop.birth_place as horoscope_birth_place,

                            useradvertisement.ad_imagepath,

                            useradvertisement.ad_url
');

        $this->db->from('users');

        $this->db->join('user_profiles','user_profiles.user_id = users.id', 'left');

        $this->db->join('user_edu','user_edu.user_id = users.id', 'left');

        $this->db->join('education_field','education_field.id = user_edu.edu_field_id', 'left');

        $this->db->join('education_level','education_level.id = user_edu.edu_level_id','left');

        $this->db->join('working_as','working_as.id = user_edu.work_as_id', 'left');

        $this->db->join('working_with','working_with.id =user_edu.work_with_id', 'left');

        $this->db->join('user_family','user_family.user_id = users.id', 'left');

       

        $this->db->join('user_file','user_file.user_id = users.id', 'left');

        $this->db->join('userfolder','userfolder.user_id = users.id', 'left');

        $this->db->join('user_background','user_background.user_id = users.id', 'left'); 

        $this->db->join('nashathram','nashathram.id = user_background.nakshathram', 'left');        

        $this->db->join('user_hobbies', 'user_hobbies.user_id = users.id',  'left');

        $this->db->join('user_lifestyle', 'user_lifestyle.user_id = users.id',  'left');

        $this->db->join('mother_tongue', 'mother_tongue.id= user_profiles.mother_tongue_id',  'left');

        $this->db->join('countries', 'countries.id = user_profiles.country_id',  'left');

        $this->db->join('cities', 'cities.id = user_profiles.city_id',  'left');

        $this->db->join('states', 'states.id = user_profiles.state_id',  'left');

        $this->db->join('religion', 'religion.id = user_background.religion_id',  'left');

        $this->db->join('community', 'community.id = user_background.community_id',  'left');



        $this->db->join('height', 'height.id = user_profiles.height',  'left');

        $this->db->join('user_package_opt','user_package_opt.userid = users.id', 'left');

        $this->db->join('update_user_file','update_user_file.user_id = users.id', 'left');

        $this->db->join('user_horoscop','user_horoscop.user_id = users.id', 'left');

        $this->db->join('useradvertisement','users.user_add = useradvertisement.id', 'left');

        $this->tank_auth->communityConditions('false'); 

        $this->db->where('users.delete_status','No'); 



        $this->db->where($field_val); 

        $query = $this->db->get();

 

        return $query;

    }

    //safir ends========================================================================================

    /*function total_muser_data($field_val)

    {

        $this->db->select(' users.*, 

                            user_profiles.*, 

                            education_field.*,

                            education_level.*, 

                            working_as.*, 

                            working_with.*, 

                            user_family.*,

                            user_file.*, 

                            userfolder.*, 

                            user_background.*, 

                            user_hobbies.*,

                            user_lifestyle.* , 

                            mother_tongue.* , 

                            religion.*, 

                            community.*, 

                            height.*, 

                            countries.name as country , 

                            states.name as state, 

                            users.id as muser_id,

                            cities.name as city, 

                            height.id as hid, 

                            users.id as main_id,

                            user_package_opt.package_status as packagestatus,

                            update_user_file.path as updateprofilepic,

                            nashathram.name as star,

                            user_edu.annual_income as annual_income,

                            user_horoscop.path as horoscope');

        $this->db->from('users');

        $this->db->join('user_profiles','user_profiles.user_id = users.id', 'left');

        $this->db->join('user_edu','user_edu.user_id = users.id', 'left');

        $this->db->join('education_field','education_field.id = user_edu.edu_field_id', 'left');

        $this->db->join('education_level','education_level.id = user_edu.edu_level_id','left');

        $this->db->join('working_as','working_as.id = user_edu.work_as_id', 'left');

        $this->db->join('working_with','working_with.id =user_edu.work_with_id', 'left');

        $this->db->join('user_family','user_family.user_id = users.id', 'left');

       

        $this->db->join('user_file','user_file.user_id = users.id', 'left');

        $this->db->join('userfolder','userfolder.user_id = users.id', 'left');

        $this->db->join('user_background','user_background.user_id = users.id', 'left'); 

        $this->db->join('nashathram','nashathram.id = user_background.nakshathram', 'left');        

        $this->db->join('user_hobbies', 'user_hobbies.user_id = users.id',  'left');

        $this->db->join('user_lifestyle', 'user_lifestyle.user_id = users.id',  'left');

        $this->db->join('mother_tongue', 'mother_tongue.id= user_profiles.mother_tongue_id',  'left');

        $this->db->join('countries', 'countries.id = user_profiles.country_id',  'left');

        $this->db->join('cities', 'cities.id = user_profiles.city_id',  'left');

        $this->db->join('states', 'states.id = user_profiles.state_id',  'left');

        $this->db->join('religion', 'religion.id = user_background.religion_id',  'left');

        $this->db->join('community', 'community.id = user_background.community_id',  'left');



        $this->db->join('height', 'height.id = user_profiles.height',  'left');

        $this->db->join('user_package_opt','user_package_opt.userid = users.id', 'left');

        $this->db->join('update_user_file','update_user_file.user_id = users.id', 'left');

        $this->db->join('user_horoscop','user_horoscop.user_id = users.id', 'left');

        $this->db->where($field_val); 

        $query = $this->db->get();

 

        return $query;

    }*/



    /*method for Desired Partner */

    function desired_partner_data( $field_val, $per_page, $page_segment)

    {

        $this->db->select('users.*, user_profiles.*, education_field.*,

                            education_level.*, working_as.*, working_with.*, user_family.*,

                            user_file.*, userfolder.*, user_background.*, user_hobbies.*,

                            user_lifestyle.* , mother_tongue.* , religion.*, community.*, 

                            countries.name as country , states.name as state, users.id as muser_id,

                              cities.name as city, users.id as main_id');

        $this->db->from('users');

        $this->db->join('user_profiles','user_profiles.user_id = users.id', 'left');

        $this->db->join('user_edu','user_edu.user_id = users.id', 'left');

        $this->db->join('education_field','education_field.id = user_edu.edu_field_id', 'left');

        $this->db->join('education_level','education_level.id = user_edu.edu_level_id','left');

        $this->db->join('working_as','working_as.id = user_edu.work_as_id', 'left');

        $this->db->join('working_with','working_with.id =user_edu.work_with_id', 'left');

        $this->db->join('user_family','user_family.user_id = users.id', 'left');

       

        $this->db->join('user_file','user_file.user_id = users.id', 'left');

        $this->db->join('userfolder','userfolder.user_id = users.id', 'left');

        $this->db->join('user_background','user_background.user_id = users.id', 'left');        

        $this->db->join('user_hobbies', 'user_hobbies.user_id = users.id',  'left');

        $this->db->join('user_lifestyle', 'user_lifestyle.user_id = users.id',  'left');

        $this->db->join('mother_tongue', 'mother_tongue.id= user_profiles.mother_tongue_id',  'left');

        $this->db->join('countries', 'countries.id = user_profiles.country_id',  'left');

        $this->db->join('cities', 'cities.id = user_profiles.city_id',  'left');

        $this->db->join('states', 'states.id = user_profiles.state_id',  'left');

        $this->db->join('religion', 'religion.id = user_background.religion_id',  'left');

        $this->db->join('community', 'community.id = user_background.community_id',  'left');

        $this->db->where('users.delete_status','No'); 

        

         $this->db->where($field_val);

         

        $this->db->where('file_name IS NOT NULL');

         

        $this->db->order_by("users.id", "desc"); 

        $this->db->limit($per_page, $page_segment);       

        $query = $this->db->get();

        return $query;

    }

    function total_desired_partner($field_val)

    {

        $this->db->select('users.*, user_profiles.*, education_field.*,

                            education_level.*, working_as.*, working_with.*, user_family.*,

                            user_file.*, userfolder.*, user_background.*, user_hobbies.*,

                            user_lifestyle.* , mother_tongue.* , religion.*, community.*, 

                            countries.name as country , states.name as state,

                              cities.name as city');

        $this->db->from('users');

        $this->db->join('user_profiles','user_profiles.user_id = users.id', 'left');

        $this->db->join('user_edu','user_edu.user_id = users.id', 'left');

        $this->db->join('education_field','education_field.id = user_edu.edu_field_id', 'left');

        $this->db->join('education_level','education_level.id = user_edu.edu_level_id','left');

        $this->db->join('working_as','working_as.id = user_edu.work_as_id', 'left');

        $this->db->join('working_with','working_with.id =user_edu.work_with_id', 'left');

        $this->db->join('user_family','user_family.user_id = users.id', 'left');

       

        $this->db->join('user_file','user_file.user_id = users.id', 'left');

        $this->db->join('userfolder','userfolder.user_id = users.id', 'left');

        $this->db->join('user_background','user_background.user_id = users.id', 'left');        

        $this->db->join('user_hobbies', 'user_hobbies.user_id = users.id',  'left');

        $this->db->join('user_lifestyle', 'user_lifestyle.user_id = users.id',  'left');

        $this->db->join('mother_tongue', 'mother_tongue.id= user_profiles.mother_tongue_id',  'left');

        $this->db->join('countries', 'countries.id = user_profiles.country_id',  'left');

        $this->db->join('cities', 'cities.id = user_profiles.city_id',  'left');

        $this->db->join('states', 'states.id = user_profiles.state_id',  'left');

        $this->db->join('religion', 'religion.id = user_background.religion_id',  'left');

        $this->db->join('community', 'community.id = user_background.community_id',  'left');

        $this->db->where('users.delete_status','No'); 



        $this->db->where($field_val);

        

        $this->db->where('file_name IS NOT NULL');

        $query = $this->db->get();

        return $query;

    } 

     

     

    /*partner like data retrive*/

    function partner_data($field_val)

    {

        $this->db->select('partner_basic.*,

                          mother_tongue.*, height.*,

                          countries.name as country ,

                          states.name as state,

                          cities.name as city, users.id as muser_id, height.id as hid,



                          aheight.global_height as mheightto'                         

                          );

        

        $this->db->from('users');

        $this->db->join('partner_basic','partner_basic.user_id= users.id');

        $this->db->join('countries', 'countries.id = partner_basic.pcountry_id',  'left');

        $this->db->join('cities', 'cities.id = partner_basic.pcity_id',  'left');

        $this->db->join('states', 'states.id = partner_basic.pstate_id',  'left');

        $this->db->join('mother_tongue', 'mother_tongue.id = partner_basic.pmtongue_id',  'left');

        $this->db->join('height', 'height.id = partner_basic.pheight',  'left');



        $this->db->join('height as aheight', 'aheight.id = partner_basic.pheightto',  'left');

        $this->db->where('users.delete_status','No'); 



        $this->db->where($field_val);

        $query = $this->db->get();

        return $query;

    }



    function getUserPhoto($field_val){

        $this->db->select('users.*,user_file.*,update_user_file.path as userfilepath');

        $this->db->from('users');

        $this->db->join('user_file','user_file.user_id = users.id', 'left');

        $this->db->join('update_user_file','update_user_file.user_id = users.id', 'left');

        $this->db->where('users.delete_status','No'); 



        $this->db->where($field_val);

        $query = $this->db->get();

        return $query;

    } 



    function getUserHoro($field_val){

        $this->db->select('users.*,user_horoscop.*');

        $this->db->from('users');

        $this->db->join('user_horoscop','user_horoscop.user_id = users.id', 'left');

        $this->db->where('users.delete_status','No'); 



        $this->db->where($field_val);

        $query = $this->db->get();

        return $query;

    } 

    

    /*get partner background */

    function get_partner_background($field_val)

    {

        $this->db->select('partner_background.*,

                          religion.*,

                          community.*');

        $this->db->from('users');

         $this->db->join('partner_background', 'partner_background.user_id = users.id',  'left');

        $this->db->join('religion', 'religion.id = partner_background.preligion_id',  'left');

        $this->db->join('community', 'community.id = partner_background.pcommunity_id',  'left');

        $this->db->where('users.delete_status','No'); 



        $this->db->where($field_val);

        $query = $this->db->get();

        return $query;

    }

   /* get partner education */

   function get_partner_education($user_id)

   {

        $this->db->select('education_field.*,

                            education_level.*, working_as.*, working_with.*, partner_edu.*');

        $this->db->from('partner_edu');

        $this->db->join('education_field','education_field.id = partner_edu.pedu_field_id', 'left');

        $this->db->join('education_level','education_level.id = partner_edu.pedu_level_id','left');

        $this->db->join('working_as','working_as.id = partner_edu.pwork_as_id', 'left');

        $this->db->join('working_with','working_with.id =partner_edu.pwork_with_id', 'left');   



        $this->db->where('user_id', $user_id);

        $query = $this->db->get();

        return  $query;    

   }

   // get user file */

   

   function get_userfile($field_val)

   {

        $this->db->select('user_file.*,

                          userfolder.*');

        $this->db->from('user_file');

        $this->db->join('userfolder','userfolder.id =user_file.folder_id', 'left');  

        $this->db->where($field_val);

        $query = $this->db->get();

        return  $query;  

   }

    

    /*for muse method golbal access value */

   function get_some_value($table, $where_field)

   {

        $this->db->where($where_field);

        $query = $this->db->get($table);

        return $query;

   }



   function get_user_packageEligible($field_val)

    {

        $this->db->select('users.*,user_package_opt.*,user_package_opt.id as packageid');

        $this->db->from('users');

        $this->db->join('user_package_opt', 'users.id = user_package_opt.userid',  'left');

        $this->db->where($field_val);

        $this->db->where('pack_expire > CURDATE()');

        $this->db->where('user_package_opt.package_status = 1');

        $this->db->where('user_package_opt.contact_remaining > 0');

        $this->db->where('users.delete_status','No'); 



        $query = $this->db->get();

        return  $query;

    }



    function get_user_pendingpackrequest($field_val)

    {

        $this->db->select('users.*,user_package_opt.*,user_package_opt.id as packageid');

        $this->db->from('users');

        $this->db->join('user_package_opt', 'users.id = user_package_opt.userid',  'left');

        $this->db->where($field_val);

        $this->db->where('pack_expire > CURDATE()');

        $this->db->where('user_package_opt.contact_remaining > 0');

        $this->db->where('users.delete_status','No'); 



        $query = $this->db->get();

        return  $query;

    }



    function shortlistedprofile( $field_val, $per_page, $page_segment)

    {

        $this->db->select('users.*, user_profiles.*, education_field.*,

                            education_level.*, working_as.*, working_with.*, user_family.*,

                            user_file.*, userfolder.*, user_background.*, user_hobbies.*,

                            user_lifestyle.* , mother_tongue.* , religion.*, community.*, 

                            countries.name as country , states.name as state, users.id as muser_id,

                              cities.name as city , users.id as main_id');

        $this->db->from('user_shortlist');

        $this->db->join('users','user_shortlist.profile_id = users.id', 'left');

        $this->db->join('user_profiles','user_profiles.user_id = users.id', 'left');

        $this->db->join('user_edu','user_edu.user_id = users.id', 'left');

        $this->db->join('education_field','education_field.id = user_edu.edu_field_id', 'left');

        $this->db->join('education_level','education_level.id = user_edu.edu_level_id','left');

        $this->db->join('working_as','working_as.id = user_edu.work_as_id', 'left');

        $this->db->join('working_with','working_with.id =user_edu.work_with_id', 'left');

        $this->db->join('user_family','user_family.user_id = users.id', 'left');

       

        $this->db->join('user_file','user_file.user_id = users.id', 'left');

        $this->db->join('userfolder','userfolder.user_id = users.id', 'left');

        $this->db->join('user_background','user_background.user_id = users.id', 'left');        

        $this->db->join('user_hobbies', 'user_hobbies.user_id = users.id',  'left');

        $this->db->join('user_lifestyle', 'user_lifestyle.user_id = users.id',  'left');

        $this->db->join('mother_tongue', 'mother_tongue.id= user_profiles.mother_tongue_id',  'left');

        $this->db->join('countries', 'countries.id = user_profiles.country_id',  'left');

        $this->db->join('cities', 'cities.id = user_profiles.city_id',  'left');

        $this->db->join('states', 'states.id = user_profiles.state_id',  'left');

        $this->db->join('religion', 'religion.id = user_background.religion_id',  'left');

        $this->db->join('community', 'community.id = user_background.community_id',  'left');

        $this->db->where('users.delete_status','No'); 

        

        $this->db->where($field_val);

        $this->db->where('file_name IS NOT NULL');

        $this->db->order_by("users.id", "desc"); 

        if(isset($per_page) && isset($page_segment) && $per_page != null && $page_segment != null)

            $this->db->limit($per_page, $page_segment);       

        $query = $this->db->get();

        return $query;

    }



    function shortlistedInterested( $field_val, $per_page, $page_segment)

    {

        $this->db->select('users.*, user_profiles.*, education_field.*,

                            education_level.*, working_as.*, working_with.*, user_family.*,

                            user_file.*, userfolder.*, user_background.*, user_hobbies.*,

                            user_lifestyle.* , mother_tongue.* , religion.*, community.*, 

                            countries.name as country , states.name as state, users.id as muser_id,

                              cities.name as city , users.id as main_id');

        $this->db->from('user_interested');

        $this->db->join('users','user_interested.profile_id = users.id', 'left');

        $this->db->join('user_profiles','user_profiles.user_id = users.id', 'left');

        $this->db->join('user_edu','user_edu.user_id = users.id', 'left');

        $this->db->join('education_field','education_field.id = user_edu.edu_field_id', 'left');

        $this->db->join('education_level','education_level.id = user_edu.edu_level_id','left');

        $this->db->join('working_as','working_as.id = user_edu.work_as_id', 'left');

        $this->db->join('working_with','working_with.id =user_edu.work_with_id', 'left');

        $this->db->join('user_family','user_family.user_id = users.id', 'left');

       

        $this->db->join('user_file','user_file.user_id = users.id', 'left');

        $this->db->join('userfolder','userfolder.user_id = users.id', 'left');

        $this->db->join('user_background','user_background.user_id = users.id', 'left');        

        $this->db->join('user_hobbies', 'user_hobbies.user_id = users.id',  'left');

        $this->db->join('user_lifestyle', 'user_lifestyle.user_id = users.id',  'left');

        $this->db->join('mother_tongue', 'mother_tongue.id= user_profiles.mother_tongue_id',  'left');

        $this->db->join('countries', 'countries.id = user_profiles.country_id',  'left');

        $this->db->join('cities', 'cities.id = user_profiles.city_id',  'left');

        $this->db->join('states', 'states.id = user_profiles.state_id',  'left');

        $this->db->join('religion', 'religion.id = user_background.religion_id',  'left');

        $this->db->join('community', 'community.id = user_background.community_id',  'left');

        $this->db->where('users.delete_status','No'); 

        

        $this->db->where($field_val);

        $this->db->where('file_name IS NOT NULL');

        $this->db->order_by("users.id", "desc"); 

        if(isset($per_page) && isset($page_segment) && $per_page != null && $page_segment != null)

            $this->db->limit($per_page, $page_segment);       

        $query = $this->db->get();

        return $query;

    }

    //safir ===================================================================================

    function getlatestprofile(){

        $this->db->select(' users.id, 

                            users.firstname,

                            users.created,

                            user_profiles.country_id,

                            user_profiles.city_id,

                            user_profiles.state_id,

                            user_file.*,  

                            working_as.work_as,

                            countries.name as country, 

                            states.name as state, 

                            users.id as muser_id,

                            cities.name as city, 

                            users.id as main_id');

        $this->db->from('users');

        $this->db->join('user_profiles','user_profiles.user_id = users.id', 'left');

        $this->db->join('user_file','user_file.user_id = users.id', 'left');

        $this->db->join('user_edu','user_edu.user_id = users.id', 'left');

        $this->db->join('working_as','working_as.id = user_edu.work_as_id', 'left');

        $this->db->join('countries', 'countries.id = user_profiles.country_id',  'left');

        $this->db->join('cities', 'cities.id = user_profiles.city_id',  'left');

        $this->db->join('states', 'states.id = user_profiles.state_id',  'left');



        $this->tank_auth->communityConditions(); 



        $this->db->where('users.delete_status','No'); 

        $this->db->where('file_name IS NOT NULL');

        $this->db->order_by("users.created", "desc"); 

        $this->db->limit(3, 0);       

        $query = $this->db->get();

        return $query;

    }//safir ends ==================================================================================

    /*function getlatestprofile(){

        $this->db->select('users.*, user_profiles.*, education_field.*,

                            education_level.*, working_as.*, working_with.*, user_family.*,

                            user_file.*, userfolder.*, user_background.*, user_hobbies.*,

                            user_lifestyle.* , mother_tongue.* , religion.*, community.*, 

                            countries.name as country , states.name as state, users.id as muser_id,

                              cities.name as city , users.id as main_id');

        $this->db->from('users');

        $this->db->join('user_profiles','user_profiles.user_id = users.id', 'left');

        $this->db->join('user_edu','user_edu.user_id = users.id', 'left');

        $this->db->join('education_field','education_field.id = user_edu.edu_field_id', 'left');

        $this->db->join('education_level','education_level.id = user_edu.edu_level_id','left');

        $this->db->join('working_as','working_as.id = user_edu.work_as_id', 'left');

        $this->db->join('working_with','working_with.id =user_edu.work_with_id', 'left');

        $this->db->join('user_family','user_family.user_id = users.id', 'left');

       

        $this->db->join('user_file','user_file.user_id = users.id', 'left');

        $this->db->join('userfolder','userfolder.user_id = users.id', 'left');

        $this->db->join('user_background','user_background.user_id = users.id', 'left');        

        $this->db->join('user_hobbies', 'user_hobbies.user_id = users.id',  'left');

        $this->db->join('user_lifestyle', 'user_lifestyle.user_id = users.id',  'left');

        $this->db->join('mother_tongue', 'mother_tongue.id= user_profiles.mother_tongue_id',  'left');

        $this->db->join('countries', 'countries.id = user_profiles.country_id',  'left');

        $this->db->join('cities', 'cities.id = user_profiles.city_id',  'left');

        $this->db->join('states', 'states.id = user_profiles.state_id',  'left');

        $this->db->join('religion', 'religion.id = user_background.religion_id',  'left');

        $this->db->join('community', 'community.id = user_background.community_id',  'left');

        $this->db->where('file_name IS NOT NULL');

        $this->db->order_by("users.created", "desc"); 

        $this->db->limit(3, 0);       

        $query = $this->db->get();

        return $query;

    }*/





    function randomuser($field_val){

        $this->db->select('users.*, user_profiles.*, education_field.*,

                            education_level.*, working_as.*, working_with.*, user_family.*,

                            user_file.*, userfolder.*, user_background.*, user_hobbies.*,

                            user_lifestyle.* , mother_tongue.* , religion.*, community.*, 

                            countries.name as country , states.name as state, users.id as muser_id,

                              cities.name as city , users.id as main_id');

        $this->db->from('users');

        $this->db->join('user_profiles','user_profiles.user_id = users.id', 'left');

        $this->db->join('user_edu','user_edu.user_id = users.id', 'left');

        $this->db->join('education_field','education_field.id = user_edu.edu_field_id', 'left');

        $this->db->join('education_level','education_level.id = user_edu.edu_level_id','left');

        $this->db->join('working_as','working_as.id = user_edu.work_as_id', 'left');

        $this->db->join('working_with','working_with.id =user_edu.work_with_id', 'left');

        $this->db->join('user_family','user_family.user_id = users.id', 'left');

       

        $this->db->join('user_file','user_file.user_id = users.id', 'left');

        $this->db->join('userfolder','userfolder.user_id = users.id', 'left');

        $this->db->join('user_background','user_background.user_id = users.id', 'left');        

        $this->db->join('user_hobbies', 'user_hobbies.user_id = users.id',  'left');

        $this->db->join('user_lifestyle', 'user_lifestyle.user_id = users.id',  'left');

        $this->db->join('mother_tongue', 'mother_tongue.id= user_profiles.mother_tongue_id',  'left');

        $this->db->join('countries', 'countries.id = user_profiles.country_id',  'left');

        $this->db->join('cities', 'cities.id = user_profiles.city_id',  'left');

        $this->db->join('states', 'states.id = user_profiles.state_id',  'left');

        $this->db->join('religion', 'religion.id = user_background.religion_id',  'left');

        $this->db->join('community', 'community.id = user_background.community_id',  'left');

        $this->tank_auth->communityConditions('false'); 

        $this->db->where('users.delete_status','No'); 



        $this->db->where('file_name IS NOT NULL');

        $this->db->order_by("RAND()"); 

        $this->db->limit(5, 0); 

        $this->db->where($field_val);      

        $query = $this->db->get();

        return $query;

    }

    function addAdvertiseUpdate($add_id,$field_val){

        $this->db->where('id',$add_id);

        $q = $this->db->get('useradvertisement');
        
        if ( $q->num_rows() > 0 ) 

        {
            
            $this->db->where('id',$add_id);

            $this->db->update('useradvertisement',$field_val);

        } else {
            
            $this->db->insert('useradvertisement',$field_val);

        }

    }


    function adduserUpdate($user_id,$field_val){

        $this->db->where('user_id',$user_id);

        $q = $this->db->get('user_update');

        if ( $q->num_rows() > 0 ) 

        {

            $this->db->where('user_id',$user_id);

            $this->db->update('user_update',$field_val);

        } else {

            $this->db->insert('user_update',$field_val);

        }

    }



    function insert_update_file($user_id,$field_val){

        $result;

        $this->db->where('user_id',$user_id);

        $q = $this->db->get('update_user_file');

        if ( $q->num_rows() > 0 ) 

        {

            $this->db->where('user_id',$user_id);

            $this->db->update('update_user_file',$field_val);

            $result = $q->result_array()[0]['id'];

        } else {

            $this->db->insert('update_user_file',$field_val);

            $result =  $this->db->insert_id();

        }



        return $result; 

    }



    function insert_update_horo($user_id,$field_val){

        $result;

        $this->db->where('user_id',$user_id);

        $q = $this->db->get('user_horoscop');

       // var_dump($q->result_array());exit;

        if ( $q->num_rows() > 0 ) 

        {

            $this->db->where('user_id',$user_id);

            $this->db->update('user_horoscop',$field_val);

            $result = $q->result_array()[0]['id'];

        } else {

            $this->db->insert('user_horoscop',$field_val);

            $result =  $this->db->insert_id();

        }



        return $result; 

    }



    function get_user_about($field_val){

        $this->db->select('users.*, user_profiles.*, user_update.*');

        $this->db->from('users');

        $this->db->join('user_profiles','user_profiles.user_id = users.id', 'left');

        $this->db->join('user_update','user_update.user_id = users.id', 'left');

        $this->db->where('users.delete_status','No'); 



        $this->db->where($field_val);      

        $query = $this->db->get();

        return $query;

    }



    function get_user_about_hobbies($field_val){

        $this->db->select('users.*, user_hobbies.*, user_update.*');

        $this->db->from('users');

        $this->db->join('user_hobbies','user_hobbies.user_id = users.id', 'left');

        $this->db->join('user_update','user_update.user_id = users.id', 'left');

        $this->db->where('users.delete_status','No'); 



        $this->db->where($field_val);      

        $query = $this->db->get();

        return $query;

    }



    

   

   

}

/* end of matri class */

?>