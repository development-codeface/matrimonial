<div class="col-lg-9 col-md-12 col-sm-12">
    <section class=" signinbox">
        <div class="col-md-12">
            <h2>Profile Edit</h2>
            <ul class="nav navtab" id="myTab-pills" role="tablist" style="border: 1px solid #e1e1e1;">
                <li class="nav-item">
                    <a href="<?php echo base_url();?>update_profile/index" class="nav-link " id="one-tab-pills" role="tab" aria-controls="one-pills" aria-expanded="true">Personal</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url();?>update_profile/photo" class="nav-link" id="two-tab-pills" role="tab" aria-controls="two-pills"> Profile Image </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url();?>update_profile/education" class="nav-link" id="three-tab-pills" role="tab" aria-controls="three-pills"> Education & Carrer </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url();?>update_profile/user_background" class="nav-link" id="four-tab-pills" role="tab" aria-controls="three-pills">Religion </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url();?>update_profile/family" class="nav-link" id="five-tab-pills" role="tab" aria-controls="three-pills">Family </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url();?>update_profile/hobbies" class="nav-link" id="six-tab-pills" role="tab" aria-controls="three-pills">Hobbies</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url();?>update_profile/horoscop" class="nav-link active" id="six-tab-pills" role="tab" aria-controls="three-pills">Horoscope</a>
                </li>

            </ul>
            <div class="tab-content" id="myTabContent-pills">
                <div class="tab-pane fade show active" id="one-pills" role="tabpanel" aria-labelledby="one-tab-pills">
                    <?php /*<section class=" signinbox content a-bg2">
                        <section class="block">
                            <div class="container">
                                <form action="<?php echo base_url();?>muser/profile_horo_change" method="post">
                                    <section>
                                        <div class="row justify-content-center ">
                                            <div class="col-lg-7 col-md-7 signinbox">
                                                <p style="text-align: center; padding:10px;"> You can upload Your Horoscope Here </p>
                                                <label class="cabinet center-block">
                                                    <figure class="fig">
                                                        <?php     
                                                            if($this->muse->display_value('user_horoscop', array('user_id'=>$this->tank_auth->get_user_id(), 'profile_img'=>1), 'user_id') >= 1)
                                                            {
                                                                echo "<img src = '".$this->muse->display_my_horo(array('users.id'=>$this->tank_auth->get_user_id()))."'  style='border: 2px solid #FE4D01;' alt='mplan' class='img-responsive img-thumbnail' id='item-img-output' /> <a href='".$this->muse->display_my_horo(array('users.id'=>$this->tank_auth->get_user_id()))."'>download</a>";
                                                                
                                                            }else{
                                                                redirect('update_profile/photo');
                                                            }?>
                                                    </figure>
                                                    <input type="file" class="item-img file center-block" name="file_photo" />
                                                </label>
                                                <div class="col-lg-8 col-md-9 col-sm-6 ">
                                                    <div class="form-group">
                                                        <input type="hidden" name="image-data" class="hidden-image-data" />
                                                        <input type="submit" id="fileUpload"  class="btn btn-primary large icon float-right"/>  
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </section>
                                </form>
                                <!--end form-submit-->
                            </div>
                            <!--end container-->
                        </section> 
                    </section> */?>

                     <form action="<?php echo base_url();?>muser/profile_horo_change" method="post" >
                        <input type="hidden" name="user_id" value="<?=$user_id?>">  
                        <section class=" signinbox">
                            <h2>Horoscope</h2>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title" class="col-form-label required">Birth Time  </label>

                                       <input type="datetime-local" name="birth_time"  value="<?php echo $this->muse->display_value('user_horoscop', array('user_id'=>$user_id), 'birth_time'); ?>"> 
                                    <label style="color: red; margin: 5px auto;">(<b> Format: </b> Month/Day/Year Hour:Minute AM/PM )</label>
                                    </div>
                                     
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title" class="col-form-label required">Birth Place</label>
                                        <input type="text" name="birth_place"  value="<?php echo $this->muse->display_value('user_horoscop', array('user_id'=>$user_id), 'birth_place'); ?>">
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary large icon float-right"> Update <i class="fa fa-chevron-right"></i></button>
                                </div>
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
 <script>
   isResize  = true;
 </script>               

<!-- header closing --->
</div>
</div>
</section>
</section>                
     <script type="text/javascript">
            $(function () {
                $('#datetimepicker').datetimepicker({
                    locale: 'ru'
                });
            });
        </script>