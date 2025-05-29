        <!--*********************************************************************************************************-->
        <!--************ FOOTER *************************************************************************************-->
        <!--*********************************************************************************************************-->
         <footer class="footer">
                <div class="wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="#" class="brand">
                                    <img src="<?php echo base_url().SITE_THEME; ?>assets/img/logo.png" alt="">
                                </a>
                                <p style="text-align: justify; width: 77%;">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A warm welcome to pkeralamarry.com, a marriage helpline service. We assure that we will choose your partner for you. Every life has its own charm in each stage and a married life is no expectation.
                                    
                                </p>
                            </div>
                            <!--end col-md-5-->
                            <div class="col-md-3">
                                <h2 class="foot-tit">Quick Links</h2>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <nav>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="<?php echo base_url();?>">
    
        Home
        
    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url();?>welcome/about_us">About Us
        </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url();?>muser/searchResult">Search
           </a>
                                                </li>
                                                
                                                 <li>
                                                    <a href="<?php echo base_url();?>common/viewpayment">Payment
        </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <nav>
                                            <ul class="list-unstyled">
                                               
                                                <li>
                                                    <a href="<?php echo base_url();?>welcome/sucess_story">Success Stories
    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url();?>welcome/contact_us">
        Contact</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url();?>auth/signin">Sign In</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url();?>">Register</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!--end col-md-3-->
                             <div class="col-md-5">
                                <h2 class="foot-tit" >Contacts</h2>
                                <div class="row">
                                    <div class="col-md-7 col-sm-5">
                                        <nav>
                                            <ul class="list-unstyled" style="line-height: 2.3rem;">
                                                <li style="line-height: 3.6rem;"><b> Address </b><br></li>
                                                 <li></li>
                                                <li >
                                                  
    Pkerala Marriage<br> Near Canara Bank Road <br>Collectrate, Kollam, Kerala </li><li  style="line-height: 3.6rem;">  <b>phone:</b> +91 7510 98 8227</li><li  style="line-height: 3rem;"> <b>Email: </b>info@pkeralamarry.com   



                                                </li>
                                         
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col-md-5 col-sm-5">
                                        <nav>
                                            <ul class="list-unstyled" style="line-height: 2.3rem;">
                                                <li style="line-height: 3.6rem;"><b> Branch Address </b></li>
                                                <li>
Pkerala Marriage <br> T B junction,<br> Attingal, Kerala, 695101

                                                </li>
                                                
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!--end col-md-4-->
                        </div> <div class="col-md-12 "> <p class="foot_cr" >Copyright © 2019 <a href="http://pkeralamarry.com"> Pkeralamarry </a>. Powered by <a href="http://codefacetech.com/"> Codeface Technlogies </a></p> </div>
                    </div>
                        <!--end row-->
    
                    <div class="background">
                        <div class="background-image original-size">
                            <img src="<?php echo base_url(); ?>assets/img/footer-background-icons.jpg" alt="">
                        </div>
                        <!--end background-image-->
                    </div>
                    <input type="hidden" value="<?php echo base_url();?>" id="url" name="url">
                    <!--end background-->
                </div>
            </footer>
    <!--end footer-->
    <div class="modal fade" id="cropImagePop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit photo</h4>
                </div>
                <div class="modal-body">
                    <div id="upload-demo" class="center-block"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" id="cropImageBtn" class="btn btn-primary">Crop</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="<?php echo base_url().SITE_THEME; ?>assets/js/popper.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url().SITE_THEME; ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&amp;libraries=places"></script>
	<script src="<?php echo base_url().SITE_THEME;?>assets/js/selectize.min.js"></script>
	<script src="<?php echo base_url().SITE_THEME;?>assets/js/masonry.pkgd.min.js"></script>
	<script src="<?php echo base_url().SITE_THEME;?>assets/js/icheck.min.js"></script>
	<script src="<?php echo base_url().SITE_THEME;?>assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url().SITE_THEME;?>assets/js/filter_data.js?version=2"></script>
    <script src="<?php echo base_url().SITE_THEME;?>assets/js/croppie.js"></script>
	<script src="<?php echo base_url().SITE_THEME;?>assets/js/icheck.min.js"></script>
	<script src="<?php echo base_url().SITE_THEME;?>assets/js/jquery-validate.bootstrap-tooltip.min.js"></script>
	<script src="<?php echo base_url().SITE_THEME;?>assets/js/jQuery.MultiFile.min.js"></script>
	<script src="<?php echo base_url().SITE_THEME;?>assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url().SITE_THEME;?>assets/js/custom.js"></script>


    <!-- <script src="<?php echo base_url().SITE_THEME;?>assets/js/choosen.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.min.js"></script>
    <script type="text/javascript">
        $(".chosen").chosen();
    </script> -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#martial_status').select2(); 
            $('#mtongue').select2(); 
            $('#edu_level').select2(); 
            $('#country').select2();  
            $('#religion').select2();  
            $('#community').select2();  
            $('.city').select2();  
            $('.state').select2();   
            $('#agefrom').select2();  
            $('#ageto').select2();             
            $('#edu_field').select2();  
            $('#working_with').select2();  
            $('#work_as').select2(); 
            $('#annual_income').select2(); 
            $('#nashathram').select2(); 
            $('#father_status').select2(); 
            $('#mother_status').select2(); 
            $('#family_status').select2(); 
            $('#number_child').select2(); 
            $('#heightto').select2(); 
            $('#weight').select2();
            $('#height').select2();   
            $('#day').select2(); 
            $('#month').select2(); 
            $('#year').select2(); 

              //id category nair_theme\site_theme\site_footer.php
        });
    </script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
                            <script type="text/javascript">
                                        $(function () {
                                            $('.form_datetime').datetimepicker();
                                        });
                                    </script>
     <script type="text/javascript">

            var Common = function ($) {  
                var root_site_url = "<?=PARENT_WEBSITE_BASE_URL?>"; 
                var updateProfilePic = function() {
                    $('body').on('click', '#fileUpload', function (e) {
                        e.preventDefault();
                        var ImageData = $('.hidden-image-data').val();
                        var user_id = <?=$this->tank_auth->get_user_id()?>;
                        var params = {
                            imagedata: ImageData,
                            user_id:user_id,                            
                        } 
                        $.post(root_site_url+'muser/profile_image_change_for_subsite', $.param(params), function (res) {
                            window.location.reload();
                        });

                    });
                }               
                return {
                    init : function () {      
                       updateProfilePic();  
                    },
                }

            } (jQuery)
            
            $(function(){ 
                Common.init(); 
            });
    </script>
</body>

<!-- codeface-->
</html>