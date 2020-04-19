  <?php
  /* database data access */
  /*block for testing 
  
 /*data retrive */
 if(isset($matches))
  {
    foreach($matches->result() as $row)
    {
        $name             = $row->firstname." ".$row->lastname;
        $marital_status   = $row->marital_status;
        $heightto         = $row->global_height;
        $weight           = $row->weight;
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
        $ban_status       = $row->banned;
        $ban_reason       = $row->ban_reason;
        $packageid        = $row->package_id;
        $packagename      = $row->pack_name;
        $packagePrize     = $row->pack_prize;
        $mobile_no        = $row->mobile_no;
        $email            = $row->email;
        $state            = $row->state;
        $city            = $row->city;
        $packagestatus    = $row->package_status;
        $isFetured        = false; //(isset($row->packagestatus) && ($row->packagestatus == 1)) ;
        $hobbieword       = $row->own_words;
        $age              = $this->muse->agecal($row->dob)." Year";
        $aboutme          = $row->about_me;
        $image            = isset($row->path) ?  $row->path : "img/img_not_avalable.jpg";
        $filepdated       = $row->updated_profile;
        $activate         = $row->activated;
        $star             = $row->star;
        $father_name        =   $row->father_name;
        $mother_name        =   $row->mother_name;
        $father_status       =   $row->father_status;
        $mother_status          =   $row->mother_status;
        $family_status          =   $row->family_status;
        $brother         =   $row->brother;
        $sister         =   $row->sister;
        $annual_income  = $row->annual_income;
        $update_file_id   = $row->updatefileid;
        $update_about_us  = $row->useraboutus;
        $update_description  = $row->abouthobbies;
        $update_profId    = $row->update_profile_id; 
        $horoscope        = $row->horoscope; 
        $nokid            = $row->nokids; 
    }
  }
  $packagelist=array();
  if(isset($packages)){
    foreach($packages->result() as $package){
        array_push($packagelist,$package);
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
                        <div class="col-lg-12 col-md-12 col-sm-12">
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
                                <a href="#"><?php if(isset($city)){echo ucwords($city);} else {echo "";}?> , <?php if(isset($state)){echo ucwords($state);} else {echo "";}?> </a>
                            </h4>
                             <dl style="padding-top:30px;">
                                            <dt>Age:&nbsp;&nbsp; </dt>
                                            <dd><?php if(isset($age)){echo ucwords($age);} else {echo "NULL";}?> </dd>
                                            <dt>Religion:&nbsp;&nbsp;</dt>
                                            <dd><?php if(isset($religion)){echo ucwords($religion);} else {echo "NULL";} ?></dd>
                                             <dt>Cast:&nbsp;&nbsp;</dt>
                                            <dd> <?php if(isset($community)){echo ucwords($community);} else {echo "NULL";} ?></dd>
                                             <dt>Mobile No:&nbsp;&nbsp;</dt>
                                            <dd> <?php echo $mobile_no   ?></dd>
                                           <dt>Email Id:&nbsp;&nbsp;</dt>
                                            <dd>    <?php echo $email ?></dd>
                                        </dl>
                        </div>
                        



                    </div>
                    <!--end container-->
                </div><div class="col-md-12 col-sm-12"><a href="#" class="btn btn-primary text-caps small"><i class="fa fa-heart-o" aria-hidden="true"></i> Send interest</a> <a href="#" class="btn btn-secondary text-caps small"><i class="fa fa-star-o" aria-hidden="true"></i> Shortlist </a> <a href="#" class="btn btn-secondary text-caps small"> <i class="fa fa-envelope-o" aria-hidden="true"></i> Send Message </a> </div>
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
                                            <dd class="text-align-right dt-bg"><label class="b-w"><?php if(isset($weight)){echo $weight;} else {echo "NULL";}?></label></dd>
                                            <dt ><label class="b-w">Marital Status </label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w"><?php if(isset($marital_status)){echo ucwords($marital_status);} else {echo "NULL";}?> </label></dd>
                                            <?php if($marital_status == 'divorced') {?>
                                                <dt ><label class="b-w">Number of kids </label> </dt>
                                                <dd class="text-align-right dt-bg"><label class="b-w"><?php if(isset($nokid)){echo ucwords($nokid);} else {echo "No Kids";}?> </label></dd>
                                            <?php } ?>
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
                                    <!-- <div class="col-md-6">
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
                            
                            <section class=" signinbox">
                                <form class="hero-form form" action="<?php echo base_url();?>admin/banuse" method="post">   
                                <div class="row">
                                    <div class="col-md-6">
                                    <h2>Ban User with reason</h2>
                                        <div>
                                            Yes  <input type="radio" class="banuser" name="ban" value="yes" required <?php if ($ban_status == 1) echo "checked"; ?> > 
                                            No   <input type="radio" class="banuser" name="ban" value="no"  required <?php if ($ban_status == 0) echo "checked"; ?> > 
                                        </div>
                                    </div>

                                    <div class="col-md-6" id="banreason" style="display:none">
                                            <label> Reason for Ban User </label>
                                            <textarea name="reason_ban" class="form-control" rows="3" cols="25" 
                                        placeholder="Reason for Ban"> <?php echo $ban_reason?> </textarea> 
                                   </div>
                                   <input type="hidden" name="userid" value="<?php echo $userid?>" />
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                            <input type="submit" value="save" />
                                    </div>
                                </div>

                                </form>
                            </section>

                            <section class=" signinbox">
                                <form class="hero-form form" action="<?php echo base_url();?>admin/activateuser" method="post">   
                                <div class="row">
                                    <div class="col-md-6">
                                    <h2>Activate User</h2>
                                        <div>
                                            Yes  <input type="radio"  name="activate" value="yes" required <?php if ($activate == 1) echo "checked"; ?> > 
                                            No   <input type="radio"  name="activate" value="no"  required <?php if ($activate == 0) echo "checked"; ?> > 
                                        </div>
                                    </div>
                                   <input type="hidden" name="userid" value="<?php echo $userid?>" />
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                            <input type="submit" value="save" />
                                    </div>
                                </div>

                                </form>
                            </section>

                            <section class=" signinbox">
                                <h2>Horoscope</h2>
                                <p>
                                <?php if(isset($horoscope)){ ?> 
                                    <img src="<?php echo $horoscope ?>" alt="" data-hash="1">
                                <?php }else { ?> 
                                
                                <?php } ?>     
                                </p>
                            </section>




                            <?php if(isset($packagelist)) { ?>
                                <section class=" signinbox">
                                      
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2>packages</h2>
                                            
                                            <?php foreach($packagelist as $row){ ?> 
                                                <dt ><label class="b-w">Package name&nbsp;</label> </dt>
                                                <dd class="text-align-right dt-bg"><label class="b-w">&nbsp;<?php echo $row->pack_name ?></label></dd>
                                            
                                                <dt ><label class="b-w">Package prize&nbsp;</label> </dt>
                                                <dd class="text-align-right dt-bg"><label class="b-w">&nbsp;<?php echo $row->pack_prize ?></label></dd>
                                                

                                                <dt ><label class="b-w">Remaining Contact&nbsp;</label> </dt>
                                                <dd class="text-align-right dt-bg"><label class="b-w">&nbsp;<?php echo $row->contact_remaining ?></label></dd>
                                                

                                                <dt ><label class="b-w">Package expiry&nbsp;</label> </dt>
                                                <dd class="text-align-right dt-bg"><label class="b-w">&nbsp;<?php echo $row->pack_expire ?></label></dd>
                                                
                                                <dt ><label class="b-w">Package status&nbsp;</label> </dt>
                                                 <?php $activepackage = $row->package_status == 0;
                                                       if($row->package_status == 1 && isset($row->contact_remaining) && isset($row->pack_expire) ){
                                                        $activepackage  = $row->contact_remaining > 0;
                                                       }
                                                 ?>
                                                <?php if($activepackage){ ?>
                                                    
                                                    Not activate    <input type="radio" name="package" value="0"     required <?php if ($row->package_status == 0) echo "checked"; ?> > 
                                                    Active          <input type="radio" name="package" value="1"      required <?php if ($row->package_status == 1) echo "checked"; ?> > 
                                                    Rejected        <input type="radio" name="package" value="2"      required <?php if ($row->package_status == 2) echo "checked"; ?> >

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                                <button onclick= "packchanged(<?php echo $row->pack_request_id?>)">Save</button>
                                                        </div>
                                                   </div>

                                                <? } elseif($row->package_status == 2){ ?>
                                                    <dd class="text-align-right dt-bg"><label class="b-w">&nbsp;Package Rejected</label></dd>
                                                <?php }else {?>
                                                    <dd class="text-align-right dt-bg"><label class="b-w">&nbsp;Package expired</label></dd>
                                                <?php } ?>
                                            <?php } ?>     
                                        </div>   
                                    </div>
                                    

                                    
                                </section>

                            <?php } ?>



                            <?php if(isset($filepdated)){ ?>
                                <section class=" signinbox">
                                    <form class="hero-form form" action="<?php echo base_url();?>admin/approveimage" method="post"> 
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h2>Updated Profile Image</h2> 
                                                <img src="<?php echo $filepdated; ?>" alt="" data-hash="1">
                                            </div>   
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="title" class="col-form-label required">Approve</label>
                                                    <select name="status" id="religion">
                                                        <option value="-1"> Select</option>
                                                        <option value="0"> Approves</option>
                                                        <option value="1"> Rejected</option>
                                                    </select>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-8-->
                                        </div>
                                        <input type="hidden" name="updateid" value="<?php echo $update_file_id;?>" />
                                        <div class="row">
                                            <div class="col-md-12">
                                                    <input type="submit" value="save" />
                                            </div>
                                        </div>

                                    </form>  
                                </section>
                            <?php } ?>

                            <?php if(isset($update_about_us) || isset($update_description)){ ?>
                                <section class=" signinbox">
                                    <form class="hero-form form" action="<?php echo base_url();?>admin/approveuserinfo" method="post"> 
                                        <h2>Updated Profile</h2> 
                                        <div class="row">
                                            <div class="col-md-6">
                                                <dt ><label >updated about us&nbsp;</label> </dt>
                                                <dd ><label >&nbsp;<?php echo $update_about_us ?></label></dd>

                                                <dt ><label >Updated hobbies&nbsp;</label> </dt>
                                                <dd ><label >&nbsp;<?php echo $update_description ?></label></dd>

                                                
                                            </div>   
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="title" class="col-form-label required">Approve </label>
                                                    <select name="status" id="religion">
                                                        <option value="-1"> Select</option>
                                                        <option value="0"> Approves</option>
                                                        <option value="1"> Rejected</option>
                                                    </select>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-8-->
                                        </div>
                                        <input type="hidden" name="updateid" value="<?php echo $update_profId;?>" />
                                        <div class="row">
                                            <div class="col-md-12">
                                                    <input type="submit" value="save" />
                                            </div>
                                        </div>

                                    </form>  
                                </section>
                            <?php } ?>
                            

                            
                            <!--Features-->
                            
                            <!--end Features-->
                           
                        </div>
                        </div>
                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>
        <!--end content-->
        <script>
            
        $('.banuser').on('ifChanged', function(event){
            
            if(this.value == 'yes'){
                
                $('#banreason').show();
            }else {
                
                $('#banreason').hide();
            }
        });
            

            function packchanged(packId){
                $.post("../admin/package_activate", {
                    packageId:packId,
                    packagestatus:$('input[name=package]:checked').val()
                }, 
                function(data) {
                    alert(data);
                 });
            }
        </script>








  