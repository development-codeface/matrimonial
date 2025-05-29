<div class="col-lg-9 col-md-12 col-sm-12">
    <section class=" signinbox">
        <div class="col-md-12">
            <h2>Profile Edit</h2>
            <ul class="nav navtab" id="myTab-pills" role="tablist" style="border: 1px solid #e1e1e1;">
                <li class="nav-item">
                    <a href="<?php echo base_url();?>update_profile/index" class="nav-link active" id="one-tab-pills"   role="tab" aria-controls="one-pills" aria-expanded="true">Personal</a>
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
                    <a href="<?php echo base_url();?>update_profile/family" class="nav-link" id="five-tab-pills"   role="tab" aria-controls="three-pills">Family </a>
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
                    <form class="form form-submit" action="<?php echo base_url();?>user_profile/insert_basic_info" method="post" >
                        <section class=" signinbox">
                            <h2>Personal Information</h2>
                            <div class="error">
                                <?php
                                    echo form_error('country');
                                    echo form_error('state');
                                    echo form_error('city');
                                    echo form_error('marital_status');
                                    echo form_error('heightto');
                                    echo form_error('skin_tone');
                                    echo form_error('body_type');
                                    echo form_error('disability');
                                    echo form_error('hiv_positive');
                                ?>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title" class="col-form-label required">Country</label>
                                        <?php echo $this->address->country();?>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-8-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title" class="col-form-label required">State Living In</label>
                                        <div id="state">
                                            <?php echo $this->address->state($this->muse->display_basic_info('user_profiles', array('user_id' => $this->tank_auth->get_user_id()), 'country_id'));?>
                                        </div>
                                    </div>
                                <!--end form-group-->
                                </div>
                                <!--end col-md-8-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title" class="col-form-label required">City Living In</label>
                                        <div id="city">
                                            <?php echo $this->address->city($this->muse->display_basic_info('user_profiles', array('user_id' =>$this->tank_auth->get_user_id()), 'state_id'));?>
                                        </div>
                                    </div>
                                <!--end form-group-->
                                </div>
                                <!--end col-md-8-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title" class="col-form-label required">Mother Tongue</label>
                                        <select name="mtongue">
                                            <option value=""> Select </option>
                                            <?php $this->muse->mtongue(); ?>
                                        </select>
                                    </div>
                                <!--end form-group-->
                                </div>
                                <!--end col-md-8-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title" class="col-form-label required">Marital Status</label>
                                        <select name="marital_status" required>
                                            <option value=""> Select </option>
                                            <option value='never married'  <?php echo set_select('marital_status', 'never married'); ?> > Not Married </option>
                                            <option value="divorced" <?php echo set_select('marital_status', 'divorced'); ?>> Divorced </option>
                                            <option value="awaiting divorced" <?php echo set_select('marital_status', 'awaiting divorced'); ?>> Awaiting Divorced </option>
                                            <option value="widowed" <?php echo set_select('marital_status', 'widowed'); ?>> Widowed </option>
                                        </select>
                                    </div>
                                <!--end form-group-->
                                </div>
                                <!--end col-md-8-->
                            </div>
                            <div class="row" id="children" style="display:none;">
                                <div class="col-md-6">
                                <label for="title" class="col-form-label required">No. of child</label>
                                <select name="number_child">
                                    <option value="0" <?php echo set_select( 'nokids', '0'); ?> selected> No Child </option>
                                    <option value='1' <?php echo set_select( 'nokids', '1'); ?> > 1 </option>
                                    <option value="2" <?php echo set_select( 'nokids', '2'); ?>> 2</option>
                                    <option value="3" <?php echo set_select( 'nokids', '3'); ?>> 3</option>
                                    <option value="4" <?php echo set_select( 'nokids', '4'); ?>> 4 </option>
                                    <option value="5" <?php echo set_select( 'nokids', '5'); ?>> 5 </option>
                                    <option value="6" <?php echo set_select( 'nokids', '6'); ?>> 6 </option>
                                    <option value="7" <?php echo set_select( 'nokids', '7'); ?>> > 6 </option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title" class="col-form-label required">Height</label>
                                        <?php $this->muse->gheight('heightto', '' ,"id='heightto' required");?>
                                    </div>
                                <!--end form-group-->
                                </div>
                                <!--end col-md-8-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title" class="col-form-label required">Weights</label>
                                        <?php $this->muse->gweight('weight', '45' ,"id='weight' required");?>
                                    </div>
                                <!--end form-group-->
                                </div>
                                <!--end col-md-8-->
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title" class="col-form-label required">Skin Tone</label>
                                        <div>
                                            <input type="radio" name="skin_tone" value="very fair" <?php echo set_radio('skin_tone', 'very fair'); ?> > Very Fair
                                            <input type="radio" name="skin_tone" value="fair" <?php echo set_radio('skin_tone', 'fair'); ?> > Fair
                                            <input type="radio" name="skin_tone" value="wheatish" <?php echo set_radio('skin_tone', 'wheatish'); ?> > Wheatish
                                            <input type="radio" name="skin_tone" value="dark" <?php echo set_radio('skin_tone', 'dark'); ?> > Dark
                                        </div>
                                    </div>
                                <!--end form-group-->
                                </div>
                                <!--end col-md-8-->
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title" class="col-form-label required">Body Type</label>
                                        <div>
                                            <input type="radio" name="body_type" value="slim" <?php echo set_radio('body_type', 'slim'); ?> > Slim
                                            <input type="radio" name="body_type" value="athletic" <?php echo set_radio('body_type', 'athletic'); ?> > Athletic
                                            <input type="radio" name="body_type" value="average" <?php echo set_radio('body_type', 'average'); ?> > Average
                                            <input type="radio" name="body_type" value="heay" <?php echo set_radio('body_type', 'heay'); ?> > Heavy
                                        </div>
                                    </div>
                                <!--end form-group-->
                                </div>
                                <!--end col-md-8-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title" class="col-form-label required">Disability</label>
                                        <div>
                                            <input type="radio" name="disability" value="yes"> Yes
                                            <input type="radio" name="disability" value="no" checked>No                
                                        </div>
                                    </div>
                                <!--end form-group-->
                                </div>
                                <!--end col-md-8-->
                            </div>
                            <div class="row" >
                                <div class="col-md-6" style="display:none">
                                    <div class="form-group">
                                        <label for="title" class="col-form-label required">HIV Positive</label>
                                        <div>
                                            <input type="radio" name="hiv_positive" value="yes"> Yes
                                            <input type="radio" name="hiv_positive" value="no" checked>No                
                                        </div>
                                    </div>
                                <!--end form-group-->
                                </div>
                                <!--end col-md-8-->
                            </div>
                            <div class="row">
                                <div class="col-md-12">        
                                    <div class="form-group">
                                            <label for="details" class="col-form-label">About yourself</label>
                                            <textarea name="aboutme" id="details" class="form-control" rows="4" maxlength="500"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">     
                                            <button type="submit" class="btn btn-primary large icon float-right"> Update <i class="fa fa-chevron-right"></i></button>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-4-->
                            </div>
                        </section>
                    </form>
                    <input type="hidden" name="country_id" value="<?php echo $this->muse->display_basic_info('user_profiles', array('user_id' => $this->tank_auth->get_user_id()), 'country_id'); ?>">          
                    <input type="hidden" name="state_id" value="<?php echo $this->muse->display_basic_info('user_profiles',array( 'user_id' => $this->tank_auth->get_user_id()), 'state_id'); ?>">
                    <input type="hidden" name="city_id" value="<?php echo $this->muse->display_basic_info('user_profiles', array('user_id' => $this->tank_auth->get_user_id()), 'city_id'); ?>">
                    <input type="hidden" name="user_height" value="<?php echo $this->muse->display_basic_info('user_profiles', array('user_id' => $this->tank_auth->get_user_id()), 'hid'); ?>">        
                    <input type="hidden" name="mtonge_id" value="<?php echo $this->muse->display_basic_info('user_profiles', array('user_id' => $this->tank_auth->get_user_id()), 'mother_tongue_id'); ?>">
                    <input type="hidden" name="user_marital_status" value="<?php echo $this->muse->display_basic_info('user_profiles', array('user_id' => $this->tank_auth->get_user_id()), 'marital_status');?>">  
                    <input type="hidden" name="uskin_tone" value="<?php echo $this->muse->display_basic_info('user_profiles', array('user_id' =>$this->tank_auth->get_user_id()), 'skin_tone');?>">
                    <input type="hidden" name="ubody_type" value="<?php echo $this->muse->display_basic_info('user_profiles', array('user_id' =>$this->tank_auth->get_user_id()), 'body_type');?>">
                    <input type="hidden" name="udisability" value="<?php echo $this->muse->display_basic_info('user_profiles', array('user_id' => $this->tank_auth->get_user_id()), 'disability');?>">  
                    <input type="hidden" name="uhiv_positive" value="<?php echo $this->muse->display_basic_info('user_profiles', array( 'user_id' =>$this->tank_auth->get_user_id()), 'hiv_positive');?>">
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


<script src="<?php echo base_url();?>js/address.js"></script>

<!-- for change value -->




<!-- header closing --->
</div>
</div>
</section>
</section>


























