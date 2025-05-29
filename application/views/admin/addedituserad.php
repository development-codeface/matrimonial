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
                         <section class=" signinbox" id="matches_change">  
                            
                            <h2> List user add </h2>
                            
                             <!-- safir starts -->
                                <div class="loader d-flex justify-content-center " style="font-size: 35px; display: none !important;">
                                    <i class="fa-spin fa fa-circle-o-notch"></i>
                                </div>
                                <!-- safir ends -->
                            <!--============ Items ==========================================================================-->
                            <div class="items grid compact grid-xl-3-items grid-lg-3-items grid-md-2-items">
                            <form action="<?php echo base_url();?>admin/insert_adddetail" method="post">
                                    <section>
                                        <div class="row justify-content-center ">
                                            <div class="col-lg-7 col-md-7 signinbox">
                                                <p style="text-align: center; padding:10px;"> You can upload your profile Photos. Only JPG, PNG, BMP formats are allowed and maximum file size up to 2 MB. </p>
                                                <label class="cabinet center-block">
                                                    <figure class="fig">
                                                        <?php     
                                                            if(isset($addetail))
                                                            {   
                                                                echo "<img src = '".$addetail[0]["ad_imagepath"]."'  style='border: 2px solid #FE4D01;' alt='mplan' class='img-responsive img-thumbnail' id='item-img-output' >";
                                                                
                                                                
                                                            }else{ ?>  
                                                                <section>
                                                                    <label class="cabinet center-block">
                                                                        <figure class="fig">
                                                                        <img src="" class="gambar img-responsive img-thumbnail" id="item-img-output" />
                                                                        </figure>
                                                                        <input type="file" class="item-img file center-block" name="file_photo" />
                                                                    </label>
                                                                    <!--<div class="col-lg-8 col-md-9 col-sm-6 ">
                                                                        <div class="form-group">
                                                                            <input type="hidden" name="image-data" class="hidden-image-data" />
                                                                            <input type="submit" id="fileUpload" class="btn btn-primary large icon float-right"/>  
                                                                        </div>
                                                                    </div> -->
                                                                </section>
                                                            <?php } ?>
                                                            <input type="file" class="item-img file center-block" name="file_photo" />
                                                    </figure>
                                                </label>
                                                <div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="title" class="col-form-label required">Advertisement title</label>
                                                                    <input type="text" name="addtitle" value="<?php echo (isset($addetail)) ? $addetail[0]["ad_name"]: "" ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="title" class="col-form-label required">Advertisement discription</label>
                                                                    <textarea name="adddiscption" id="details" class="form-control" rows="4" maxlength="500"><?php echo (isset($addetail)) ?trim($addetail[0]["ad_description"]): "" ?></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="title" class="col-form-label required">Advertisement status</label>
                                                                    <?php $this->muse->gaddstatus('addstatus', '45 cstm_dropdown' ,"id='weight' required", $addetail[0]["ad_status"]);?>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="title" class="col-form-label required">Advertisement url</label>
                                                                    <input type="text" name="addurl" value="<?php echo (isset($addetail)) ? $addetail[0]["ad_url"]: "" ?>">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <input type="hidden" name="image-data" class="hidden-image-data" />
                                                        <input type="hidden" name="add_id" value="<?php echo (isset($addetail)) ? $addetail[0]['id']: ""?> "/>
                                                        <input type="submit" class="btn btn-primary large icon float-right"/>  
                                                </div>

                                            </div>
                                        </div>
                                    </section>
                                </form>                
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

