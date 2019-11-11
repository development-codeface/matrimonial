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
class Adminmodel extends CI_Model
{
    function total_muser_data($count, $start)
    {
        $this->db->select('users.*, user_profiles.*, education_field.*,
                            education_level.*, working_as.*, working_with.*, user_family.*,
                            user_file.*, userfolder.*, user_background.*, user_hobbies.*,
                            user_lifestyle.* , mother_tongue.* , religion.*, community.*, height.*, 
                            countries.name as country , states.name as state, users.id as muser_id,
                              cities.name as city, height.id as hid, users.id as main_id,nashathram.name as star,user_edu.annual_income as annual_income,user_horoscop.path as horoscope');
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
        $this->db->join('user_horoscop','user_horoscop.user_id = users.id', 'left');
        $this->db->join('height', 'height.id = user_profiles.height',  'left');
        //$this->db->join('user_package_opt','user_package_opt.userid = users.id', 'left');
        $this->db->where("role ='2'");
        if(isset($start))
            $this->db->limit($count, $start); 
        $query = $this->db->get();
        return $query;
    }

    function pending_package_request()
    {
        $this->db->select('users.*, user_profiles.*, education_field.*,
                            education_level.*, working_as.*, working_with.*, user_family.*,
                            user_file.*, userfolder.*, user_background.*, user_hobbies.*,
                            user_lifestyle.* , mother_tongue.* , religion.*, community.*, height.*, 
                            countries.name as country , states.name as state, users.id as muser_id,
                              cities.name as city, height.id as hid, users.id as main_id');
                              
        $this->db->from('users');
        $this->db->join('user_package_opt','user_package_opt.userid = users.id', 'left');
        $this->db->join('packagelist','user_package_opt.package_id = packagelist.id', 'left');
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
        $this->db->join('height', 'height.id = user_profiles.height',  'left');
        $this->db->where("role ='2' ");
        $this->db->where("user_package_opt.package_status ='0'");
        $query = $this->db->get();
        return $query;
    }
    function user_details($field_val)
    {
        $this->db->select('users.*, user_profiles.*, education_field.*,
                            education_level.*, working_as.*, working_with.*, user_family.*,
                            user_file.*, userfolder.*, user_background.*, user_hobbies.*,
                            user_lifestyle.* , mother_tongue.* , religion.*, community.*, height.*, 
                            user_package_opt.*, packagelist.*, countries.name as country , states.name as state, users.id as muser_id,
                            cities.name as city, height.id as hid, users.id as main_id,update_user_file.path as updated_profile,update_user_file.id as updatefileid,
                            user_update.description as useraboutus,user_update.abouthobbies as abouthobbies,user_update.id as update_profile_id,nashathram.name as star,user_edu.annual_income as annual_income,user_horoscop.path as horoscope');
        $this->db->from('users');
        $this->db->join('user_profiles','user_profiles.user_id = users.id', 'left');
        $this->db->join('user_edu','user_edu.user_id = users.id', 'left');
        $this->db->join('education_field','education_field.id = user_edu.edu_field_id', 'left');
        $this->db->join('education_level','education_level.id = user_edu.edu_level_id','left');
        $this->db->join('working_as','working_as.id = user_edu.work_as_id', 'left');
        $this->db->join('working_with','working_with.id =user_edu.work_with_id', 'left');
        $this->db->join('user_family','user_family.user_id = users.id', 'left');
       
        $this->db->join('user_file','user_file.user_id = users.id', 'left');
        $this->db->join('user_horoscop','user_horoscop.user_id = users.id', 'left');
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
        $this->db->join('user_package_opt', 'user_package_opt.userid = users.id', 'left');
        $this->db->join('packagelist', 'user_package_opt.package_id = packagelist.id',  'left');
        $this ->db->join('update_user_file','update_user_file.user_id = users.id','left');
        $this ->db->join('user_update','user_update.user_id = users.id','left');
        $this->db->where($field_val);
        
        $query = $this->db->get();
        return $query;
    }

    function get_all_user_package($field_val){
        $this->db->select('user_package_opt.*,packagelist.*,users.*,user_package_opt.id as pack_request_id, packagelist.id as package_id,');
        $this->db->from('user_package_opt');
        $this->db->join('packagelist','user_package_opt.package_id = packagelist.id', 'left');
        $this->db->join('users','user_package_opt.userid = users.id', 'left');
        $this->db->where($field_val);
        $query = $this->db->get();
        return $query;
    }

    function total_blocked_user()
    {
        $this->db->select('users.*, user_profiles.*, education_field.*,
                            education_level.*, working_as.*, working_with.*, user_family.*,
                            user_file.*, userfolder.*, user_background.*, user_hobbies.*,
                            user_lifestyle.* , mother_tongue.* , religion.*, community.*, height.*, 
                            countries.name as country , states.name as state, users.id as muser_id,
                              cities.name as city, height.id as hid, users.id as main_id');
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
        $this->db->join('height', 'height.id = user_profiles.height',  'left');
        //$this->db->join('user_package_opt','user_package_opt.userid = users.id', 'left');
        $this->db->where("banned =1");
        $query = $this->db->get();
        return $query;
    }

    function new_newphotoupdate(){
        $this->db->select('users.*, user_profiles.*, education_field.*,
                            education_level.*, working_as.*, working_with.*, user_family.*,
                            update_user_file.*, userfolder.*, user_background.*, user_hobbies.*,
                            user_lifestyle.* , mother_tongue.* , religion.*, community.*, height.*, 
                            countries.name as country , states.name as state, users.id as muser_id,
                              cities.name as city, height.id as hid, users.id as main_id');

        $this->db->from('update_user_file');
        $this->db->join('users','update_user_file.user_id = users.id', 'left');
        $this->db->join('user_profiles','user_profiles.user_id = users.id', 'left');
        $this->db->join('user_edu','user_edu.user_id = users.id', 'left');
        $this->db->join('education_field','education_field.id = user_edu.edu_field_id', 'left');
        $this->db->join('education_level','education_level.id = user_edu.edu_level_id','left');
        $this->db->join('working_as','working_as.id = user_edu.work_as_id', 'left');
        $this->db->join('working_with','working_with.id =user_edu.work_with_id', 'left');
        $this->db->join('user_family','user_family.user_id = users.id', 'left');
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
        $this->db->join('height', 'height.id = user_profiles.height',  'left');
        //$this->db->join('user_package_opt','user_package_opt.userid = users.id', 'left');
        $query = $this->db->get();
        return $query;
    }

    function profileUpdateRequest(){
        $this->db->select('users.*, user_profiles.*, education_field.*,
                            education_level.*, working_as.*, working_with.*, user_family.*,
                            user_update.*,user_file.*, userfolder.*, user_background.*, user_hobbies.*,
                            user_lifestyle.* , mother_tongue.* , religion.*, community.*, height.*, 
                            countries.name as country , states.name as state, users.id as muser_id,
                              cities.name as city, height.id as hid, users.id as main_id');

        $this->db->from('user_update');
        $this->db->join('users','user_update.user_id = users.id', 'left');
        $this->db->join('user_profiles','user_profiles.user_id = users.id', 'left');
        $this->db->join('user_edu','user_edu.user_id = users.id', 'left');
        $this->db->join('education_field','education_field.id = user_edu.edu_field_id', 'left');
        $this->db->join('education_level','education_level.id = user_edu.edu_level_id','left');
        $this->db->join('working_as','working_as.id = user_edu.work_as_id', 'left');
        $this->db->join('working_with','working_with.id =user_edu.work_with_id', 'left');
        $this->db->join('user_family','user_family.user_id = users.id', 'left');
        $this->db->join('userfolder','userfolder.user_id = users.id', 'left');
        $this->db->join('user_file','user_file.user_id = users.id', 'left');
        $this->db->join('user_background','user_background.user_id = users.id', 'left');        
        $this->db->join('user_hobbies', 'user_hobbies.user_id = users.id',  'left');
        $this->db->join('user_lifestyle', 'user_lifestyle.user_id = users.id',  'left');
        $this->db->join('mother_tongue', 'mother_tongue.id= user_profiles.mother_tongue_id',  'left');
        $this->db->join('countries', 'countries.id = user_profiles.country_id',  'left');
        $this->db->join('cities', 'cities.id = user_profiles.city_id',  'left');
        $this->db->join('states', 'states.id = user_profiles.state_id',  'left');
        $this->db->join('religion', 'religion.id = user_background.religion_id',  'left');
        $this->db->join('community', 'community.id = user_background.community_id',  'left');
        $this->db->join('height', 'height.id = user_profiles.height',  'left');
        //$this->db->join('user_package_opt','user_package_opt.userid = users.id', 'left');
        $query = $this->db->get();
        return $query;
    }

    function total_inactive_user()
    {
        $this->db->select('users.*, user_profiles.*, education_field.*,
                            education_level.*, working_as.*, working_with.*, user_family.*,
                            user_file.*, userfolder.*, user_background.*, user_hobbies.*,
                            user_lifestyle.* , mother_tongue.* , religion.*, community.*, height.*, 
                            countries.name as country , states.name as state, users.id as muser_id,
                              cities.name as city, height.id as hid, users.id as main_id');
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
        $this->db->join('height', 'height.id = user_profiles.height',  'left');
        //$this->db->join('user_package_opt','user_package_opt.userid = users.id', 'left');
        $this->db->where("role ='2'");
        $this->db->where("activated ='0'");
        $query = $this->db->get();
        return $query;
    }

    function delete_image_update($img_id){
        $this -> db -> where('id', $img_id);
        $this -> db -> delete('update_user_file');
    }

    function delete_profile_update($update_id){
        $this -> db -> where('id', $update_id);
        $this -> db -> delete('user_update');
    }

    
   
}
/* end of matri class */
?>