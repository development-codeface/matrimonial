  <?php
  /* database data access */
  /*block for testing 
  
 /*data retrive */
 $package;
 
 if(isset($matches))
  {
      
    foreach($matches->result() as $row)
    {
        $package          = $row;
        $name             = $row->firstname." ".$row->lastname;
        $userid           = $row->main_id;
        $marital_status   = $row->marital_status;
        $heightto         = $row->global_height;
        $mtongue          = $row->mtongue;
        $skin_tone        = $row->skin_tone;
        $body_type        = $row->body_type;
        $diet             = $row->diet;
        $smoke            = $row->smoke;
        $drink            = $row->drink;
        $edu_level        = $row->edu_level;
        $edu_field        = $row->edu_field;
        $work_with        = $row->work_with;
        $work_as          = $row->work_as;
        $religion         = $row->religion_name;
        $community        = $row->community_name;
        $sub_community    = $row->sub_community;
        $disability       = $row->disability;
        $hiv_positive     = $row->hiv_positive;
        $aboutme          = $row->about_me;
        $mobilenumber     = $row->mobile_no;
        $email            = $row->email;
        $star             = $row->star;

        $father_name        =   $row->father_name;
        $mother_name        =   $row->mother_name;
        $father_status       =   $row->father_status;
        $mother_status          =   $row->mother_status;
        $family_status          =   $row->family_status;
        $brother         =   $row->brother;
        $sister         =   $row->sister;
        $annual_income  = $row->annual_income;

        $isFetured        = false;    /*(isset($row->packagestatus) && ($row->packagestatus == 1)) ;*/
        $hobbieword       = $row->own_words;
        $age              = $this->muse->agecal($row->dob)." Year";
        $image            = isset($row->path) ?  $row->path : "img/img_not_avalable.jpg";
        if($userid == $this->tank_auth->get_user_id() && isset($row->updateprofilepic))
            $image     = $row->updateprofilepic;
    }
  }
  ?>
<!--*********************************************************************************************************-->
        <!--************ CONTENT ************************************************************************************-->
        <!--*********************************************************************************************************-->
        <section class="content">
            <section class="block">
                <div class="container">
                    <div class="row">
                        <!--============ Listing Detail =============================================================-->
                        <div class="col-lg-9 col-md-12 col-sm-12">
                            <?php if(false) {?> 
                            <div class="ribbon-featured">
                                <div class="ribbon-start"></div>
                                <div class="ribbon-content">Featured</div>
                                <div class="ribbon-end">
                                    <figure class="ribbon-shadow"></figure>
                                </div>
                            </div>
                            <?php } ?>
                            <!--Gallery Carousel-->
                            <section class=" signinbox"> <div class="row">
                                <div class="col-md-4 col-sm-12">
                            
                                <!--end section-title-->
                                <div class="gallery-carousel owl-carousel">
                                    <img src="<?php echo $image ?>" alt="" data-hash="1">
                                    <img src="<?php echo $image ?>" alt="" data-hash="2">
                                    <img src="<?php echo $image ?>" alt="" data-hash="3">
                                   
                                </div>
                                <div class="gallery-carousel-thumbs owl-carousel">
                                    <a href="#1" class="owl-thumb active-thumb background-image">
                                        <img src="<?php echo $image ?>" alt="">
                                    </a>
                                    <a href="#2" class="owl-thumb background-image">
                                        <img src="<?php echo $image ?>" alt="">
                                    </a>
                                    <a href="#3" class="owl-thumb background-image">
                                        <img src="<?php echo $image ?>" alt="">
                                    </a>
                                </div>
                            
                        </div>

                         <div class="col-md-8 col-md-8 col-sm-12"> 

                            <div class="float-right float-xs-none price">
                            <div class="id opacity-50">
                                <strong>ID: </strong><?php echo $userid ?>
                            </div>
                        </div>



                          <div class="page-title">
                    <div class="container clearfix">
                        <div class="float-left float-xs-none col-md-10">
                            <h1> <?php if(isset($name)){echo ucwords($name);} else {echo "NULL";}?>
                               
                            </h1>
                           
                            <h4 class="location">
                                <a href="#">Trivandrum, Kerala</a>
                            </h4>
                             <dl style="padding-top:30px;">
                                            <dt>Age:&nbsp;&nbsp; </dt>
                                            <dd><?php if(isset($age)){echo ucwords($age);} else {echo "NULL";}?> </dd>
                                            <dt>Religion:&nbsp;&nbsp;</dt>
                                            <dd><?php if(isset($religion)){echo ucwords($religion);} else {echo "NULL";} ?></dd>
                                             <dt>Cast:&nbsp;&nbsp;</dt>
                                            <dd> <?php if(isset($community)){echo ucwords($community);} else {echo "NULL";} ?></dd>
                                             <dt>Mobile No:&nbsp;&nbsp;</dt>
                                            <dd>   
                                            <?php if($main_id != $this->tank_auth->get_user_id()){?> 
                                                <a href="#" class=" " onclick="getcontactinf(<?php echo $userid ?>)">View Now</a>
                                            <?php } else {?>
                                                <a href="#" class=" " ><?php echo $mobilenumber ?></a>
                                            <?php } ?>
                                            </dd>
                                           <dt>Email Id:&nbsp;&nbsp;</dt>
                                            <dd> 
                                            <?php if($main_id != $this->tank_auth->get_user_id()){?>   
                                                <a href="#" class=" " onclick="getcontactinf(<?php echo $userid ?>)">View Now</a>
                                            <?php } else {?>
                                                <a href="#" class=" " ><?php echo $email  ?></a>
                                            <?php } ?>
                                            </dd>
                                        </dl>
                        </div>
                        



                    </div>
                    
                    <!--end container-->
                </div>
                <?php if($main_id != $this->tank_auth->get_user_id()){?>
                <div class="col-md-12 col-sm-12">
                    <a href="#" class="btn btn-primary text-caps small" onclick="interestset(<?php echo $userid ?>)">
                    <i class="fa fa-heart-o" aria-hidden="true"></i> Send interest</a> 
                    <a href="#" class="btn btn-secondary text-caps small" onclick="shortlistme(<?php echo $userid ?>)" ><i class="fa fa-star-o" aria-hidden="true"></i> Shortlist </a> 
                    
                        <a href="#" class="btn btn-secondary text-caps small"> <i class="fa fa-envelope-o" aria-hidden="true"></i> Send Message </a> 
                        <h3 style="margin-top:8px;margin-bottom:8px"> Send Message </h3>
				        <?php echo $this->input->get('msg');?>
                        <form action="<?php echo base_url();?>send_message" method="post">
                            <textarea style="max-height:70px;min-height:70px;max-width:805px" name="message"></textarea>
                            <input type="hidden" value="<?php echo $main_id; ?>" name="send_to">
                            <input type="submit" value="Send" class="btn btn-primary">
                        </form>
			        
                    </div>
                <?php }?>
                    
                      <!--end Gallery Carousel--> </div>


                            
                             </div></section>
                            <!--row end -->
                            <!--Description-->
                            <section class=" signinbox">
                                <h2>Description</h2>
                                <p>
                                <?php if(isset($aboutme)){echo ucwords($aboutme);} else {echo "";} ?>
                                
                                </p>
                            </section>
                            <!--end Description-->
                            <!--Details & Location-->
                            <section class=" signinbox">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h2>Personal Details</h2>
                                        <dl>
                                            <dt ><label class="b-w">Name&nbsp;</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">&nbsp;<?php if(isset($name)){echo ucwords($name);} else {echo "NULL";}?></label></dd>
                                            <dt ><label class="b-w">Age</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w"><?php if(isset($age)){echo ucwords($age);} else {echo "NULL";}?></label></dd>
                                            <dt ><label class="b-w">Height (cms)</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w"><?php if(isset($heightto)){echo $heightto;} else {echo "NULL";}?> </label></dd>
                                             <dt ><label class="b-w">Weight (Kg)</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">50.00</label></dd>
                                           <dt ><label class="b-w">Marital Status </label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w"><?php if(isset($marital_status)){echo ucwords($marital_status);} else {echo "NULL";}?> </label></dd>
                                            <dt ><label class="b-w">Mother Tongue </label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w"><?php if(isset($mtongue)){echo ucwords($mtongue);} else {echo "NULL";}?></label></dd>
                                        </dl>
                                    </div>
                                    <div class="col-md-6">
                                        <h2>&nbsp;</h2>
                                        <dl>
                                            <dt ><label class="b-w">Body Type&nbsp;</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">&nbsp;<?php if(isset($body_type)){echo ucwords($body_type);} else {echo "NULL";} ?></label></dd>
                                            <dt ><label class="b-w">Complexion</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w"><?php if(isset($skin_tone)){echo ucwords($skin_tone);} else {echo "NULL";}?></label></dd>
                                            <dt ><label class="b-w">Physical Status</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w"><?php if(isset($disability)){echo ucwords($disability);} else {echo "NULL";} ?></label></dd>
                                             <dt ><label class="b-w">Eating Habbit</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w"> <?php if(isset($diet)){echo ucwords($diet);} else {echo "NULL";} ?>
</label></dd>
                                           <dt ><label class="b-w">Smoking Habbit</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w"><?php if(isset($smoke)){echo ucwords($smoke);} else {echo "NULL";} ?> </label></dd>
                                            <dt ><label class="b-w">Drinking Habbit</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w"><?php if(isset($drink)){echo ucwords($drink);} else {echo "NULL";} ?> </label></dd>
                                        </dl>
                                    </div>
                                    
                                </div>
                            </section>
                            <!--end Details and Locations-->
                            <!--Details & Location-->
                            <section class=" signinbox">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h2>Religious Detail</h2>
                                        <dl>
                                            <dt ><label class="b-w">Religion&nbsp;</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">&nbsp;<?php if(isset($religion)){echo ucwords($religion);} else {echo "NULL";} ?></label></dd>
                                            <dt ><label class="b-w">Caste</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w"><?php if(isset($community)){echo ucwords($community);} else {echo "NULL";} ?></label></dd>
                                            <dt ><label class="b-w">Sub cast</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w"><?php if(isset($sub_community)){echo ucwords($sub_community);} else {echo "Not Specified";} ?></label></dd>
                                             <dt ><label class="b-w">Star</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w"><?php if(isset($star)){echo ucwords($star);} else {echo "";} ?> </label></dd>
                                           
                                        </dl>
                                    </div>
                                    <!--<div class="col-md-6">
                                        <h2>&nbsp;</h2>
                                        <dl>
                                            <dt ><label class="b-w">Zodiac/star sign </label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">Not Specified </label></dd>
                                            <dt ><label class="b-w">Jaathakam </label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">Suddha Jaathakam</label></dd>
                                            <dt ><label class="b-w">Raasi/Moon&nbsp;</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">&nbsp;Kanni</label></dd>
                                            <dt ><label class="b-w">Dosham</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">Slight papam</label></dd>
                                        </dl>
                                    </div> -->
                                    
                                </div>
                            </section>
                            <!--end Details and Locations-->
                             <!--Details & Location-->
                            <section class=" signinbox">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h2>Family Detail</h2>

                                        <dl>
                                            <dt ><label class="b-w">Family Type&nbsp;</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">&nbsp;<?php if(isset($family_status)){echo ucwords($family_status);} else {echo "NULL";} ?></label></dd>
                                            <dt ><label class="b-w">Father Name</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">&nbsp;<?php if(isset($father_name)){echo ucwords($father_name);} else {echo "NULL";} ?></label></dd>
                                            <dt ><label class="b-w"> Mother Name</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">&nbsp;<?php if(isset($mother_name)){echo ucwords($mother_name);} else {echo "NULL";} ?></label></dd>
                                            
                                           
                                        </dl>
                                    </div>
                                    <div class="col-md-6">
                                        <h2>&nbsp;</h2>
                                        <dl> 
                                            <dt ><label class="b-w">Father occupation</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">&nbsp;<?php if(isset($father_status)){echo ucwords($father_status);} else {echo "NULL";} ?></label></dd>
                                            <dt ><label class="b-w">Monther Occupation </label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">&nbsp;<?php if(isset($mother_status)){echo ucwords($mother_status);} else {echo "NULL";} ?> </label></dd>
                                            <dt ><label class="b-w">Brother </label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">&nbsp;<?php if(isset($brother)){echo ucwords($brother);} else {echo "NULL";} ?></label></dd>
                                            <dt ><label class="b-w">Sister </label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">&nbsp;<?php if(isset($sister)){echo ucwords($sister);} else {echo "NULL";} ?></label></dd>
                                            
                                        </dl>
                                    </div>
                                    
                                </div>
                            </section>
                            <!--end Details and Locations-->

                             <!--Description-->
                            <section class=" signinbox">
                                <h2>About Hobbies</h2>
                                <p>
                                <?php if(isset($hobbieword)){echo ucwords($hobbieword);} else {echo "";} ?>
                                
                                </p>
                            </section>
                            <!--end Description-->
                            <!--Details & Location-->
                            <section class=" signinbox">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h2>Professional Details</h2>
                                        <dl>
                                            <dt ><label class="b-w">Education&nbsp;</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">&nbsp;<?php if(isset($edu_level)){echo ucwords($edu_level);} else {echo "NULL";} ?></label></dd>
                                            <dt ><label class="b-w">Occupation</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w"><?php if(isset($work_as)){echo ucwords($work_as);} else {echo "NULL";} ?> </label></dd>
                                            
                                           
                                        </dl>
                                    </div>
                                    <div class="col-md-6">
                                        <h2>&nbsp;</h2>
                                        <dl> 
                                            
                                            <dt ><label class="b-w">Company Name</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w"><?php if(isset($work_with)){echo ucwords($work_with);} else {echo "NULL";} ?></label></dd>
                                            <dt ><label class="b-w">Yearly Income </label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w"><?php if(isset($annual_income)){echo ucwords($annual_income);} else {echo "NULL";} ?></label></dd>
                                            
                                            
                                        </dl>
                                    </div>
                                    
                                </div>
                            </section>

                             <section class=" signinbox a-bg3" style="display:none">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 class="t-c">Partner Preference</h2>
                                        <p class="t-c">Your profile matches 20 / 21 of Salu.S's preferences </p>
                                        <dl>
                                            <dt ><label class="b-w pf-sec"><img style="width: 100%;"  src=" assets/img/image-06.jpg " alt=""></label> </dt>
                                            <dd class="text-align-right"><label class="b-w pf-sec"><img style="width: 100%;" src=" assets/img/image-04.jpg" alt=""></label></dd>



                                            <dt ><i class="fa fa-check-circle pf-matchico" aria-hidden="true"></i><label class="b-w">Age (yrs)</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">27 - 30</label> <i class="fa fa-check-circle pf-matchico" aria-hidden="true"></i></dd>


 <dt ><i class="fa fa-check-circle pf-matchico" aria-hidden="true"></i><label class="b-w">Height (cms)</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">165 - 180</label> <i class="fa fa-check-circle pf-matchico" aria-hidden="true"></i></dd>

                                             <dt ><i class="fa fa-check-circle pf-matchico" aria-hidden="true"></i><label class="b-w">Physical Status</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">Normal</label> <i class="fa fa-check-circle pf-matchico" aria-hidden="true"></i></dd>

                                             <dt ><i class="fa fa-check-circle pf-matchico" aria-hidden="true"></i><label class="b-w">Mother Tongue</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">Malayalam</label> <i class="fa fa-check-circle pf-matchico" aria-hidden="true"></i></dd>
                                             <dt ><i class="fa fa-check-circle pf-matchico" aria-hidden="true"></i><label class="b-w">Religion</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">Hindu</label> <i class="fa fa-check-circle pf-matchico" aria-hidden="true"></i></dd>


                                             <dt ><i class="fa fa-check-circle pf-matchico" aria-hidden="true"></i><label class="b-w">Caste</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">Ezhava</label> <i class="fa fa-check-circle pf-matchico" aria-hidden="true"></i></dd>


                                             <dt ><i class="fa fa-check-circle pf-matchico" aria-hidden="true"></i><label class="b-w">States</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">Kerala</label> <i class="fa fa-check-circle pf-matchico" aria-hidden="true"></i></dd>

                                         
                                             <dt ><i class="fa fa-check-circle pf-matchico" aria-hidden="true"></i><label class="b-w">Eating Habbit</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">Non vegetarian</label> <i class="fa fa-check-circle pf-matchico" aria-hidden="true"></i></dd>   
                                            <dt ><i class="fa fa-check-circle pf-matchico" aria-hidden="true"></i><label class="b-w">Drinking Habbit</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">Non Drinker</label> <i class="fa fa-check-circle pf-matchico" aria-hidden="true"></i></dd>

 <dt ><i class="fa fa-check-circle pf-matchico" aria-hidden="true"></i><label class="b-w">Smoking Habbit</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">Non Smokrn</label> <i class="fa fa-check-circle pf-matchico" aria-hidden="true"></i></dd>
                                        </dl>
                                    </div>
                                    
                                </div>
                            </section>
                            <!--end Details and Locations-->
                            <!--Features-->
                            
                            <!--end Features-->
                           
                        </div>
                        <!--============ End Listing Detail =========================================================-->
                        <!--============ Sidebar ====================================================================-->
                        <div class="col-md-3">


                            
                            <!--============ End Side Bar ===========================================================-->
                         <div class="items">
                            
                         
                            <h2>More Profiles</h2>
                                
                                <?php if(isset($suggestion)){ 
                                    
                                    foreach ($suggestion->result() as $row) {
                                ?>

                                <div class="item">
                                    <!--end ribbon-->
                                    <div class="wrapper wrap-hi">
                                        <div class="image">
                                            <h3>
                                                <a href="#" class="tag category"><?php if(isset($row->work_as)){echo ucwords($row->work_as);} else {echo "";} ?></a>
                                                <a href="<?php echo base_url();?>users/<?php echo $row->muser_id;?>" class="title"><?php echo ucfirst($row->firstname); ?></a>
                               
                                            </h3>
                                            <a href="<?php echo base_url();?>users/<?php echo $row->muser_id;?>" class="image-wrapper background-image">
                                            <?php if($row->path != NULL){?>
                                                        <img src="<?php echo $row->path;?>"  alt="">
                                                <?php }else{?>                                                                    
                                                        <img src="<?php echo base_url();?>img/img_not_avalable.jpg" >              
                                                <?php } ?>
                                            </a>
                                        </div>
                                        <!--end image-->
                                        <h4 class="location">
                                            <a href="#">
                                            <?php
							                    if($row->city){
							                        echo ucfirst($row->city). ",";
							                    }
                                                echo ucfirst($row->state ).",".ucfirst($row->country);?>
                                            </a>
                                        </h4>
                                        <div class="price"><span class="appendix">User id</span><?php echo $row->muser_id;?></div>
                                        <div class="meta">
                                            <figure>
                                                <i class="fa fa-calendar-o"></i><?php echo $this->muse->agecal($row->dob) ." Year"; ?>
                                            </figure>
                                            <figure>
                                                <a href="#">
                                                <i class="fa fa-user"></i><?php  if(isset($row->global_height)){ echo ucwords($row->global_height); } else { echo ""; }?>
                                                </a>
                                            </figure>
                                        </div>
                                        <!--end meta-->
                                    
                                        <div class="padding-10">
                                            <a  href="#" class="btn  btn-primary text-caps m-l-10 btn-framed" onclick="shortlistme(<?php echo $row->muser_id;?>)" ><i class="fa fa-heart i-f-siz" aria-hidden="true"></i></a>   
                                            <a href="<?php echo base_url();?>users/<?php echo $row->muser_id;?>" class="btn btn-primary text-caps btn-framed  m-l-10 pad_16px ">View profile</a> 
                                        </div>
                                        <!--end description-->
                                    </div>
                                </div>
                                <?php } } ?>






                            </div>
                        </div>

                        <!--============ End Sidebar ================================================================-->
                    </div>
                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>
        <!--end content-->
        <script>
        function getcontactinf(userId){

            $.post("../muser/ajax_getcontact_info", {
                profileid:userId
                }, 
                function(data) {
                    alert(data);
            });
        }
           function interestset(profileid){
                $.post("../muser/ajax_interest_profile", {
                        packageId:profileid
                    }, 
                    function(data) {
                        alert(data);
                });
           }
           
           function shortlistme(profileid){
                $.post("../muser/ajax_shortlist_profile", {
                        packageId:profileid
                    }, 
                    function(data) {
                        alert(data);
                });
           }
    
        </script>








  