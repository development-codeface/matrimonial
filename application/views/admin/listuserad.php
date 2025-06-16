<section class="content">

            <section class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <!--============ Side Bar ===============================================================-->
                            <aside class="sidebar">
                            <?php 
                                $this->load->view(SITE_THEME_FOR_VIEW.'site_theme/admin_navigation');   
                                $this->load->view(SITE_THEME_FOR_VIEW.'site_theme/site_search_box');
                                
                            ?>   
                            </aside>
                            <!--============ End Side Bar ===========================================================-->
                        </div>

                        <!--end col-md-3-->
                        <!--============ Listing Detail =============================================================-->
                        <div class="col-lg-9 col-md-12 col-sm-12">

                                

                       <!--============ Section Title===================================================================-->
                       <div class="padding-10" style="width:186px;">  
                                    <a href="<?php echo base_url();?>admin/addAdvertisement" class="btn btn-primary text-caps btn-framed  m-l-10 pad_16px ">Create Ad</a> 
                        </div>
                         <section class=" signinbox" id="matches_change">  
                            
                            <h2> List user add </h2>
                                
                             <!-- safir starts -->
                                <div class="loader d-flex justify-content-center " style="font-size: 35px; display: none !important;">
                                    <i class="fa-spin fa fa-circle-o-notch"></i>
                                </div>
                                
                                <!-- safir ends -->
                            <!--============ Items ==========================================================================-->
                            <div class="items grid compact grid-xl-3-items grid-lg-3-items grid-md-2-items">
                               
                                <?php
                                  //metches data retrive //
                                  if(isset($addlist)){
                                        foreach($addlist as $row){?>
                                        <div class="item">
                                    <!--end ribbon-->
                                    <div class="wrapper wrap-hi">
                                        <div class="image">
                                            <h3>
                                                <a href="<?php echo base_url();?>admin/addAdvertisement/<?php echo $row["id"];?>" class="title"><?php echo ucfirst($row["ad_name"]); ?></a>
                               
                                            </h3>
                                            <a href="<?php echo base_url();?>admin/addAdvertisement/<?php echo $row["id"];?>" class="image-wrapper background-image" >
                                            <?php
                                                if($row["ad_imagepath"] != NULL){?>
                                                        <img src="<?php echo $row["ad_imagepath"];?>"  alt="">
                                                <?php }else{?>                                                                    
                                                        <img src="<?php echo base_url();?>img/img_not_avalable.jpg" >              
                                                <?php } ?>
                                            </a>
                                        </div>
                                        <!--end image-->
                                        <div class="padding-10">  
                                            <a href="<?php echo base_url();?>admin/addAdvertisement/<?php echo $row["id"];?>" class="btn btn-primary text-caps btn-framed  m-l-10 pad_16px ">Edit Ad</a> 
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

