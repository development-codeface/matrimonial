<?php
$user_id =$this->tank_auth->get_user_id();
$num_message = $this->matri->get_some_value('message_inbox', array('user_id'=>$user_id,'view'=>0));
$num_message = $num_message->num_rows();
?>
<!--*********************************************************************************************************-->
        <!--************ HERO ***************************************************************************************-->
        <!--*********************************************************************************************************-->
        <header class="hero">
            <div class="hero-wrapper">
               <!--============ Secondary Navigation ===============================================================-->
                <div class="secondary-navigation">
                    <div class="container">
                        <ul class="left">
                            <li>
                           <span>
                                <!-- <i class="fa fa-phone"></i> --><span style="font-size: 1.25rem;
padding: 3px 0px 0px 0px;
text-transform: uppercase;
margin: 0px;">Our Helpline Number</span><br><span style="padding: 0px;
font-size: 1.6rem;
margin: 0px;">

<b>  +91 9744 44 7603</b></span>
                            </span>
                            </li>
                        </ul>
                        <!--end left-->
                        <ul class="right" class="right" style="padding: 9px;">
                           
                        <?php if(isset($user_id) && !empty(trim($user_id))) { 
                                
                                ?>
                             <li>
                                 <a href="<?php echo base_url();?>auth/logout">
                                     <i class="fa fa-sign-in"></i>Sign Out 
                                 </a>
                             </li>
                            <?php }else {?>
                                 <li>
                                     <a href="<?php echo base_url(); ?>auth/signin">
                                         <i class="fa fa-sign-in"></i>Sign In
                                     </a>
                                 </li>
                                 <li>
                                     <a href="<?php echo base_url(); ?>">
                                         <i class="fa fa-pencil-square-o"></i>Register
                                     </a>
                                 </li>
                            <?php } ?>
                        </ul>
                        <!--end right-->
                    </div>
                    <!--end container-->
                </div>
                <!--============ End Secondary Navigation ===========================================================-->
                <!--============ Main Navigation ====================================================================-->
                <div class="main-navigation">
                    <div class="container">
                        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                            <a class="navbar-brand" href="<?php echo base_url(); ?>">
                                <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbar">
                                <!--Main navigation list-->
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="<?php echo base_url();?>">Home</a>
                                       
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?php echo base_url();?>welcome/about_us">About Us</a>
                                       
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?php echo base_url();?>muser/searchResult">Search</a>
                                        <!-- 2nd level -->
                                       
                                        <!-- end 2nd level -->
                                    </li>
                                   
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url();?>common/viewpayment">Payment</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url();?>welcome/sucess_story">Success Stories</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url();?>welcome/contact_us">Contact</a>
                                    </li>
                                </ul>
                                <!--Main navigation list-->
                            </div>
                            <!--end navbar-collapse-->
                        </nav>
                        <!--end navbar-->
                    </div>
                    <!--end container-->
                </div>
                <!--============ End Main Navigation ================================================================-->
                <!--============ Page Title =========================================================================-->
                <!--============ End Page Title =====================================================================-->
                <div class="background"></div>
                <!--end background-->
            </div>
            <!--end hero-wrapper-->
        </header>
        <!--end hero-->
        <div class="page sub-page">
        
        
        