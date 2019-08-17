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
                    <a href="<?php echo base_url();?>update_profile/family" class="nav-link" id="five-tab-pills"   role="tab" aria-controls="three-pills">Family </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url();?>update_profile/hobbies" class="nav-link active" id="six-tab-pills"   role="tab" aria-controls="three-pills">Hobbies</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent-pills">
                <div class="tab-pane fade show active" id="one-pills" role="tabpanel" aria-labelledby="one-tab-pills">
                    <form action="<?php echo base_url();?>update_profile/update_hobbies" method="post" >
                        <section class=" signinbox">
                            <h2>Hobbies</h2>
                            <div class="error">
                                <?php
                                    echo form_error('hobbies');
                                    echo form_error('interests');
                                    echo form_error('fav_music');
                                    echo form_error('pre_movies');
                                    echo form_error('cook_food');
                                    echo form_error('own_words');
                                ?>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title" class="col-form-label required">Hobbies</label>
                                        <input type="text" name="hobby"  value="<?php echo ucwords($this->muse->display_value('user_hobbies', array('user_id' => $this->tank_auth->get_user_id()), 'hobbies')) ?>">
                                    </div>
                                <!--end form-group-->
                                </div>
                                <!--end col-md-8-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title" class="col-form-label required">Interests</label>
                                        <input type="text" name="interest" PlaceHolder="Writing, Blogging"    value="<?php echo ucwords($this->muse->display_value('user_hobbies', array('user_id' => $this->tank_auth->get_user_id()), 'interests')) ?>"> 
                                    </div>
                                <!--end form-group-->
                                </div>
                                <!--end col-md-8-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title" class="col-form-label required">Favourite music</label>
                                        <input type="text" name="fav_music" PlaceHolder="Soft, Pop, Devotional"  value="<?php echo ucwords($this->muse->display_value('user_hobbies', array('user_id' => $this->tank_auth->get_user_id()), 'fav_music')) ?>"> 
                                    </div>
                                <!--end form-group-->
                                </div>
                                <!--end col-md-8-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title" class="col-form-label required">Preferred Movie</label>
                                        <input type="text" name="pre_movie"  value="<?php echo ucwords($this->muse->display_value('user_hobbies', array('user_id'=>$this->tank_auth->get_user_id()), 'pre_movies')) ?>">
                                    </div>
                                <!--end form-group-->
                                </div>
                                <!--end col-md-8-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title" class="col-form-label required">Cooking</label>
                                        <input type="text" name="cook_food"  value="<?php echo ucwords($this->muse->display_value('user_hobbies', array('user_id' => $this->tank_auth->get_user_id()), 'cook_food')) ?>">
                                    </div>
                                <!--end form-group-->
                                </div>
                                <!--end col-md-8-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title" class="col-form-label required">In Your Own Word</label>
                                        <div>
                                            <textarea name="own_words" rows="5"  style="height:100px;text-align:left;line-height:normal"><?php echo ucwords($this->muse->display_value('user_hobbies', array('user_id' => $this->tank_auth->get_user_id()), 'own_words')) ?></textarea>
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
    </section>
</div> 


<!-- header closing --->
</div>
</div>
</section>
</section>