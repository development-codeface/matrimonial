<?php
/*form validation */
$father_name = array(
	'type' =>'text',
	'name'	=> 'father_name',
	'value'	=> $this->muse->display_value('user_family', array('user_id' =>$this->tank_auth->get_user_id()), 'father_name'),
	'required' =>'required',
	'style' => 'width:95%'
);

$mother_name = array(
	'type' =>'text',
	'name'	=> 'mother_name',
	'value'	=> $this->muse->display_value('user_family', array('user_id' =>$this->tank_auth->get_user_id()), 'mother_name'),
	'required' =>'required',
	'style' => 'width:95%'
);

$father_status = array(
    '' => 'Select',
    'employed' => 'Employed',
    'business' => 'Business',
    'professional' => 'Professional',
    'retired' => 'Retired',
    'not employed' => 'Not Employed',
    'passed away' => 'Passed away',
);

$mother_status = array(
    '' => 'Select',
    'homemaker' => 'Homemaker',
    'employed' => 'Employed',
    'business' => 'Business',
    'professional' => 'Professional',
    'retired' => 'Retired',
    'not employed' => 'Not Employed',
    'passed away' => 'Passed away',
);

$family_status = array(
		       ''=> 'Select',
		       'rich'=> 'Rich',
		       'upper middle class' => 'Upper Middle Class',
		       'middle' => 'Middle Class'
);

$brother = array(
                 'type' => 'text',
                 'name' => 'brother',
                 'value' => $this->muse->display_value('user_family', array('user_id' =>$this->tank_auth->get_user_id()), 'brother'),                
                 );

$sister = array(
                'type' => 'text',
                'name' => 'sister',
                'value' => $this->muse->display_value('user_family', array('user_id' =>$this->tank_auth->get_user_id()), 'sister'),   
                );

?>




<div class="col-lg-9 col-md-12 col-sm-12">
<section class=" signinbox">
  <div class="col-md-12">
       <h2>Profile Edit</h2>
       <ul class="nav navtab" id="myTab-pills" role="tablist" style="border: 1px solid #e1e1e1;">
           <li class="nav-item">
               <a href="<?php echo base_url();?>update_profile/index" class="nav-link" id="one-tab-pills"   role="tab" aria-controls="one-pills" aria-expanded="true">Personal</a>
           </li>
           <li class="nav-item">
               <a href="<?php echo base_url();?>update_profile/photo" class="nav-link" id="two-tab-pills"  role="tab" aria-controls="two-pills"> Profile Image </a>
           </li>
           <li class="nav-item">
               <a href="<?php echo base_url();?>update_profile/education" class="nav-link" id="three-tab-pills"   role="tab" aria-controls="three-pills"> Education & Carrer </a>
           </li>
           <li class="nav-item">
               <a href="<?php echo base_url();?>update_profile/user_background" class="nav-link" id="four-tab-pills"   role="tab" aria-controls="three-pills">Religion </a>
           </li>
           <li class="nav-item">
               <a href="<?php echo base_url();?>update_profile/family" class="nav-link active" id="five-tab-pills"   role="tab" aria-controls="three-pills">Family </a>
           </li>
           <li class="nav-item">
               <a href="<?php echo base_url();?>update_profile/hobbies" class="nav-link" id="six-tab-pills"   role="tab" aria-controls="three-pills">Hobbies</a>
           </li>
       </ul>
        


                            
                            
                            
                            <div class="tab-content" id="myTabContent-pills">
                                    <div class="tab-pane fade show active" id="one-pills" role="tabpanel" aria-labelledby="one-tab-pills">
                                        <form class="form form-submit" action="<?php echo base_url();?>update_profile/update_family" method="post" >
                                        
                                         <section class=" signinbox">
                                            <h2>My family</h2>
                                                <div class="error">
                                                <?php
                                                    echo form_error('father_name');
                                                    echo form_error('mother_name');
                                                    echo form_error('father_status');
                                                    echo form_error('mother_status');
                                                    echo form_error('family_status');
                                                    echo form_error('brother');
                                                    echo form_error('sister');
                                                ?>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="title" class="col-form-label required">Father's Name</label>
                                                            <?php echo form_input($father_name); ?> 
                                                        </div>
                                                    <!--end form-group-->
                                                    </div>
                                                    <!--end col-md-8-->
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="title" class="col-form-label required">Father's Status</label>
                                                            <?php echo form_dropdown('father_status', $father_status ,'');?>
                                                        </div>
                                                    <!--end form-group-->
                                                    </div>
                                                    <!--end col-md-8-->
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="title" class="col-form-label required">Mother's Name</label>
                                                            <?php echo form_input($mother_name); ?> 
                                                        </div>
                                                    <!--end form-group-->
                                                    </div>
                                                    <!--end col-md-8-->
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="title" class="col-form-label required">Mother's Status</label>
                                                            <?php echo form_dropdown('mother_status', $mother_status, '');?>
                                                        </div>
                                                    <!--end form-group-->
                                                    </div>
                                                    <!--end col-md-8-->
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="title" class="col-form-label required">Family Status</label>
                                                            <?php echo form_dropdown('family_status', $family_status, ''); ?>
                                                        </div>
                                                    <!--end form-group-->
                                                    </div>
                                                    <!--end col-md-8-->
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="title" class="col-form-label required">Brother's</label>
                                                            <?php echo form_input($brother);?>
                                                        </div>
                                                    <!--end form-group-->
                                                    </div>
                                                    <!--end col-md-8-->
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="title" class="col-form-label required">Sister's</label>
                                                            <?php echo form_input($sister);?>
                                                        </div>
                                                    <!--end form-group-->
                                                    </div>
                                                    <!--end col-md-8-->
                                                </div>
                                                <input type="hidden" name="ufather_status" value="<?php  echo $this->muse->display_value('user_family', array('user_id' => $this->tank_auth->get_user_id()), 'father_status'); ?>">
                                                <input type="hidden" name="umother_status" value="<?php  echo $this->muse->display_value('user_family', array('user_id' => $this->tank_auth->get_user_id()), 'mother_status'); ?>">
                                                <input type="hidden" name="ufamily_status" value="<?php  echo $this->muse->display_value('user_family', array('user_id' => $this->tank_auth->get_user_id()), 'family_status'); ?>">

                                                




                            


                            <div class="row">
                                
                                
                                
                                <div class="col-md-12">
                                    <div class="form-group">     
                                        <a href="photoupdate.html" class="brand">  <button type="submit" class="btn btn-primary large icon float-right"> Update <i class="fa fa-chevron-right"></i></button></a>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-4-->
                            </div>
                        </section>
                    </form>
                </div>


                                    <div class="tab-pane fade" id="two-pills" role="tabpanel" aria-labelledby="two-tab-pills">
                                        
                                    </div>


                                    <div class="tab-pane fade" id="three-pills" role="tabpanel" aria-labelledby="three-tab-pills">
                                      <section class=" signinbox">
                                        <h2>Religion Information</h2>
                            
                                        </section>
                                    </div>

                                  <div class="tab-pane fade" id="four-pills" role="tabpanel" aria-labelledby="four-tab-pills">
                                        <section class=" signinbox">
                            <h2>Physical Information</h2>
                            
                            
                            

                                       
                            
                        </section>
                                    </div>

                         <div class="tab-pane fade" id="five-pills" role="tabpanel" aria-labelledby="five-tab-pills">
                                      <section class=" signinbox">
                                        <h2>Family Information</h2>
                            
                            
                            
                            
                        </section>
                                    </div>
                                    <div class="tab-pane fade" id="six-pills" role="tabpanel" aria-labelledby="six-tab-pills">
                                         <section class=" signinbox">
                            <h2>Educational & job Information</h2>
                            
                            
                            
                        </section>
                </div>
                <script type="text/javascript">
                    $(document).ready(function(){
                        $father_status 		= $('input[name=ufather_status]').val();
                        $mother_status 		= $('input[name=umother_status]').val();
                        $family_status 		= $('input[name=ufamily_status]').val();
                        $('select[name=father_status]').val($father_status);
                        $('select[name=mother_status]').val($mother_status);
                        $('select[name=family_status]').val($family_status);
                    });
                </script>












    