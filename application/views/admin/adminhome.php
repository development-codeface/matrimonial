<section class="content">
            <section class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <!--============ Side Bar ===============================================================-->
                            <aside class="sidebar">
                            <?php 
                                $this->load->view('site_theme/admin_navigation');   
                                $this->load->view('site_theme/site_search_box');
                                
                            ?>   
                            </aside>
                            <!--============ End Side Bar ===========================================================-->
                        </div>
                        <!--end col-md-3-->
                        <!--============ Listing Detail =============================================================-->
                        <div class="col-lg-9 col-md-12 col-sm-12">



                       <!--============ Section Title===================================================================-->
                         <section class=" signinbox" id="matches_change">  
                            <?php if(isset($matches)){ ?> 
                                <h2> Matches (<?php echo $totalcount ?> Profiles) </h2>
                            <?php } ?>

                            <!--============ Items ==========================================================================-->
                            <div class="items grid compact grid-xl-3-items grid-lg-3-items grid-md-2-items">
                                <?php
                                  //metches data retrive //
                                  if(isset($matches)){
                                        foreach($matches->result() as $row){?>
                                        <div class="item">
                                    
                                    <!--end ribbon-->
                                    <div class="wrapper wrap-hi">
                                        <div class="image">
                                            <h3>
                                                <a href="#" class="tag category"><?php if(isset($row->work_as)){echo ucwords($row->work_as);} else {echo "";} ?></a>
                                                <a href="<?php echo base_url();?>fulluserdetail/<?php echo $row->muser_id;?>" class="title"><?php echo ucfirst($row->firstname); ?></a>
                               
                                            </h3>
                                            <a href="<?php echo base_url();?>fulluserdetail/<?php echo $row->muser_id;?>" class="image-wrapper background-image">
                                            <?php
                                                if($row->path != NULL){?>
                                                        <img src="<?php echo $row->path;?>"  alt="">
                                                <?php }else{?>                                                                    
                                                        <img src="<?php echo base_url();?>img/img_not_avalable.jpg" >              
                                                <?php } ?>
                                            </a>
                                        </div>
                                        <!--end image-->
                                        <h4 class="location">
                                            <a href="#"><?php
							if($row->city)
							{
							echo ucfirst($row->city). ",";
							}
							 
                                                        echo ucfirst($row->state ).",".ucfirst($row->country);?></a>
                                        </h4>
                                        <div class="price"><span class="appendix">User id</span><?php echo $row->muser_id;?></div>
                                        <div class="meta">
                                            <figure>
                                                <i class="fa fa-calendar-o"></i><?php echo $this->muse->agecal($row->dob) ." Year"; ?>
                                            </figure>
                                            <figure>
                                                <a href="#">
                                                    <i class="fa fa-user"></i>5 Ft 3 In
                                                </a>
                                            </figure>
                                        </div>
                                        <!--end meta-->
                                    
                                     <div class="padding-10">
                                           
                                            
                                 <a href="<?php echo base_url();?>fulluserdetail/<?php echo $row->muser_id;?>" class="btn btn-primary text-caps btn-framed  m-l-10 pad_16px ">View profile</a> 
                                       </div>
                                        <!--end description-->
                                        
                                    </div>
                                </div>
                                <!--end item-->
                        <?php
                                }
                              }
                        ?>               
               
               </div>
                <!--============ End Items ==============================================================-->
                <?php echo $this->ajax_pagination->create_links(); ?>  
                            <!--end page-pagination-->
                            </div>
                        <!--end col-md-9-->
                       
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
                           
                        </div>
                    
                    </div>
                </div>
              
            </section>


            <!--end block-->
        </section>



