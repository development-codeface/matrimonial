
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
                    <a href="<?php echo base_url();?>update_profile/user_background" class="nav-link active" id="four-tab-pills"   role="tab" aria-controls="three-pills">Religion </a>
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
                    <form class="form form-submit" action="<?php echo base_url();?>update_profile/udate_background" method="post" >
                        <input type="hidden" name="religion_id" value="<?php echo $this->muse->display_value('user_background', array('user_id' => $this->tank_auth->get_user_id()), 'religion_id');?>">
                        <input type="hidden" name="community_id" value="<?php echo $this->muse->display_value('user_background', array('user_id' => $this->tank_auth->get_user_id()), 'community_id');?>">
                        <input type="hidden" name="udiet" value="<?php echo $this->muse->display_value('user_lifestyle', array('user_id' => $this->tank_auth->get_user_id()), 'diet');?>">
                        <input type="hidden" name="usmoke" value="<?php echo $this->muse->display_value('user_lifestyle', array('user_id'=>$this->tank_auth->get_user_id()), 'smoke');?>">
                        <input type="hidden" name="udrink" value="<?php echo $this->muse->display_value('user_lifestyle',array('user_id'=>$this->tank_auth->get_user_id()), 'drink');?>">
                        <input type="hidden" name="nashathramval" value="<?php echo $this->muse->display_value('user_background',array('user_id'=>$this->tank_auth->get_user_id()), 'nakshathram');?>">
                        <section class=" signinbox">
                            <h2>Religion</h2>
                            <div class="error">
                                <?php
                                    echo '<p>'.form_error('religion').'</p>';
                                    echo '<p>'.form_error('community').'</p>';
                                    echo '<p>'.form_error('diet').'</p>';
                                    echo '<p>'.form_error('smoke').'</p>';
                                    echo '<p>'.form_error('drink').'</p>';
                                ?>
                            </div> 
                            <div class="message">
                                <?php
                                   if(isset($message))
                                    echo $message;
                                ?>
                            </div>   
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title" class="col-form-label required">Religion</label>
                                        <?php $this->muse->get_religion();?>
                                    </div>
                                <!--end form-group-->
                                </div>
                                <!--end col-md-8-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title" class="col-form-label required">Community</label>
                                        <div id="community">
                                            <?php $this->muse->get_community($this->muse->display_value('user_background', array('user_id'=>$this->tank_auth->get_user_id()), 'religion_id'));?>
                                        </div>
                                    </div>
                                <!--end form-group-->
                                </div>
                                <!--end col-md-8-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title" class="col-form-label required">Sub Community</label>
                                        <input type="text" name="sub_community" value="<?php echo $this->muse->display_value('user_background', array('user_id'=>$this->tank_auth->get_user_id()), 'sub_community'); ?>">
                                    </div>
                                <!--end form-group-->
                                </div>
                                <!--end col-md-8-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title" class="col-form-label required">Nakshathram</label>
                                        <?php $this->muse->get_nashathram();?>
                                    </div>
                                <!--end form-group-->
                                </div>
                                <!--end col-md-8-->
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title" class="col-form-label required">Diet</label>
                                        <div>
                                            <input type="radio" name="diet" value="veg" title="diet"> Veg
                                            <input type="radio" name="diet" value="non-veg" title="diet"> Non-Veg
                                            <input type="radio" name="diet" value="jain" title="diet" > Jain
                                            <input type="radio" name="diet" value="vegan" title="diet" > Vegan
                                        </div>
                                    </div>
                                <!--end form-group-->
                                </div>
                                <!--end col-md-8-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title" class="col-form-label required">Smoke</label>
                                        <div>
                                            <input type="radio" name="smoke" value="never smoke" checked> Never Smoke
                                            <input type="radio" name="smoke" value="smoke">  Smoke
                                        </div>
                                    </div>
                                <!--end form-group-->
                                </div>
                                <!--end col-md-8-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title" class="col-form-label required">Smoke</label>
                                        <div>
                                            <input type="radio" name="drink" value="never drinks" checked> Never Drinks
                                            <input type="radio" name="drink" value="occasionally"> Drinks Occasionally
                                            <input type="radio" name="drink" value="drinks"> Drinks
                                        </div>
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
        </div> 
    </section>
</div>
<script type="text/javascript">

     $(document).ready(function(){

	  $religion_id		= $('input[name=religion_id]').val();

	  $community_id 	= $('input[name=community_id]').val();

	  $work_with		= $('input[name=work_with]').val();

	  $work_as 		= $('input[name=work_as]').val();

	  $annual_income 	= $('input[name=annual_income]').val();

	  $diet 		= $('input[name=udiet]').val();

	  $smoke 		= $('input[name=usmoke]').val();

	  $drink 		= $('input[name=udrink]').val();

      $nashthram    = ($('input[name=nashathramval]').val())

	  $('select[name=religion]').val($religion_id);

	  $('select[name=community]').val($community_id);

	  $('select[name=work_with]').val($work_with);

	  $('select[name=work_as]').val($work_as);

	  $('select[name=annual_income]').val($annual_income);

      $('select[name=nashathram]').val($nashthram);
	  
	  $('input:radio[name=diet][value='+$diet+']').attr("checked", "checked");

	  $('input:radio[name=smoke][value='+$smoke+']').attr("checked", "checked");

	  $('input:radio[name=drink][value='+$drink+']').attr("checked", "checked");

	  

	  });

</script>               

 