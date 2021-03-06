<?php

/*form validation */

$father_name = array(

	'type' =>'text',

	'name'	=> 'father_name',

	'value'	=> set_value('father_name'),

	'required' =>'required',	

);
$mother_name = array(

	'type' =>'text',

	'name'	=> 'mother_name',

	'value'	=> set_value('mother_name'),

	'required' =>'required',	

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
                 'type' => 'number',
                 'name' => 'brother',
                 'value' => set_value('brother'),
                 
                 );
$sister = array(
                'type' => 'number',
                 'name' => 'sister',
                 'value' => set_value('sister'),
                
                );
?>




<!-- end header information -->


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
                <li class="nav-item">
                    <a href="<?php echo base_url();?>update_profile/horoscop" class="nav-link" id="six-tab-pills" role="tab" aria-controls="three-pills">Horoscope</a>
                </li>
            </ul>             
            <div class="tab-content" id="myTabContent-pills">
                <div class="tab-pane fade show active" id="one-pills" role="tabpanel" aria-labelledby="one-tab-pills">
                    <form class="form form-submit" action="<?php echo base_url();?>update_profile/insert_family" method="post" >
                        <section class=" signinbox">
                            <h2>My family</h2>
                            <div class="error">
                            <?php
                                echo '<p>'.form_error('father_name').'</p>';
                                echo '<p>'.form_error('mother_name').'</p>';
                                echo '<p>'.form_error('father_status').'</p>';
                                echo '<p>'.form_error('mother_status').'</p>';
                                echo '<p>'.form_error('family_status').'</p>';
                                echo '<p>'.form_error('brother').'</p>';
                                echo '<p>'.form_error('sister').'</p>';
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
                                        <label for="title" class="col-form-label required">Number of Brother(s)</label>
                                        <?php echo form_input($brother);?>
                                    </div>
                                <!--end form-group-->
                                </div>
                                <!--end col-md-8-->
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title" class="col-form-label required">Number of Sister(s)</label>
                                        <?php echo form_input($sister);?>
                                    </div>
                                <!--end form-group-->
                                </div>
                                <!--end col-md-8-->
                            </div>
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
                <div class="tab-pane fade" id="two-pills" role="tabpanel" aria-labelledby="two-tab-pills"></div>
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
            </div>
        </div>
    </section>
</div> 


<!-- header closing --->
</div>
</div>
</section>
</section>


