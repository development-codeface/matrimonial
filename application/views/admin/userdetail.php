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
        $packagestatus    = $row->package_status;
        $isFetured        = false; //(isset($row->packagestatus) && ($row->packagestatus == 1)) ;
        $hobbieword       = $row->own_words;
        $age              = $this->muse->agecal($row->dob)." Year";
        $aboutme          = $row->about_me;
        $image            = isset($row->path) ?  $row->path : "img/img_not_avalable.jpg";
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
                                <strong>ID: </strong>NH347921
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
                                            <dd>    <a href="#" class=" ">View Now</a></dd>
                                           <dt>Email Id:&nbsp;&nbsp;</dt>
                                            <dd>    <a href="#" class=" ">View Now</a></dd>
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
                                            <dd class="text-align-right dt-bg"><label class="b-w">Not Specified</label></dd>
                                             <dt ><label class="b-w">Star</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">Ayilyam</label></dd>
                                           
                                        </dl>
                                    </div>
                                    <div class="col-md-6">
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
                                    </div>
                                    
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
                                            <dd class="text-align-right dt-bg"><label class="b-w">&nbsp;Nuclear Family</label></dd>
                                            <dt ><label class="b-w">Family Value</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">Orthodox</label></dd>
                                            <dt ><label class="b-w">Family Status</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">Middle class</label></dd>
                                            
                                           
                                        </dl>
                                    </div>
                                    <div class="col-md-6">
                                        <h2>&nbsp;</h2>
                                        <dl> 
                                            <dt ><label class="b-w">Native</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">Not Specified</label></dd>
                                            <dt ><label class="b-w">Brothers </label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">One </label></dd>
                                            <dt ><label class="b-w">Sisters </label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">None</label></dd>
                                            
                                        </dl>
                                    </div>
                                    
                                </div>
                            </section>
                            <!--end Details and Locations-->

                             <!--Description-->
                            <section class=" signinbox">
                                <h2>About Family</h2>
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
                                            <dt ><label class="b-w">College</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">MGCE</label></dd>
                                            <dt ><label class="b-w">School</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">VPSHSS</label></dd>
                                            
                                           
                                        </dl>
                                    </div>
                                    <div class="col-md-6">
                                        <h2>&nbsp;</h2>
                                        <dl> 
                                            <dt ><label class="b-w">Occupation</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w"><?php if(isset($work_as)){echo ucwords($work_as);} else {echo "NULL";} ?></label></dd>
                                            <dt ><label class="b-w">Company Name</label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w"><?php if(isset($work_with)){echo ucwords($work_with);} else {echo "NULL";} ?></label></dd>
                                            <dt ><label class="b-w">Yearly Income </label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">6 lac</label></dd>
                                            <dt ><label class="b-w">Sisters </label> </dt>
                                            <dd class="text-align-right dt-bg"><label class="b-w">None</label></dd>
                                            
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








  