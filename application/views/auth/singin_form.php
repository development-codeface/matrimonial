<?php
/*form validation */
$email = array(
	'type' =>'email',
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'required' =>'required',
	'placeholder'=>'Email ID',
	'class'	=> 'form-control',
);
$firstname = array(
	'name'	=> 'firstname',
	'id'	=> 'firstname',
	'value'	=> set_value('firstname'),
	'maxlength'	=> 20,
	'required' =>'required',
	'placeholder'=>'Full Name ',
	'class'	=> 'form-control',
	
);
$lastname = array(
	'name'	=> 'lastname',
	'id'	=> 'lastname',
	'value'	=> set_value('lastname'),
	'maxlength'	=> 20,
	'required' =>'required',
	'placeholder'=>'Last Name ',
	'class'	=> 'form-control',
);
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'required' =>'required',
	'placeholder'=>'Password',
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'class'	=> 'form-control',
);
$confirm_password = array(
	'name'	=> 'confirm_password',
	'id'	=> 'confirm_password',
	'required' =>'required',
	'placeholder'=>'Confirm Password ',
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'class'	=> 'form-control',
);
$mobile_no = array(
	'type' =>'tel',
	'name' => 'mobile_no',
	'required' =>'required',
	'id' => 'phone',
	'placeholder'=>'Mob Number',
	'value' => set_value('mobile_no'),
	
	'class'	=> 'form-control',
		   );
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);

$error_message1 = '';
if( form_error($email['name']) !=''){
$error_message1 = "<small class=\"error\">".str_replace("Login field", "Email field", form_error($email['name']) )."</small>";
}

if(isset($errors[$email['name']])){
$error_message1 .= "<small class=\"error\">".str_replace("Login", "Email", $errors[$email['name']] )."</small>";
}

if( form_error($firstname['name']) !='' ){
$error_message1 .= "<small class=\"error\">".form_error($firstname['name'])."</small>";
}

if(isset($errors[$firstname['name']])){
$error_message1 .= "<small class=\"error\">".$errors[$firstname['name']]."</small>";
}

if( form_error($lastname['name']) !='' ){
$error_message1 .= "<small class=\"error\">".form_error($lastname['name'])."</small>";
}

if(isset($errors[$lastname['name']])){
$error_message1 .= "<small class=\"error\">".$errors[$lastname['name']]."</small>";
}

if( form_error($password['name']) !='' ){
$error_message1 .= "<small class=\"error\">".form_error($password['name'])."</small>";
}

if( form_error($confirm_password['name']) !='' ){
$error_message1 .= "<small class=\"error\">".form_error($confirm_password['name'])."</small>";
}
$captcha_registration =NULL ; //shiva manhar block
$captcha_content = '';
if ($captcha_registration) {
	if ($use_recaptcha) {
		$captcha_content = '
		<div id="account-signup-divider" class="shared-divider">
			<div class="shared-divider-label">
				<span>Confirmation Code</span>
			</div>
		</div>

		<div id="recaptcha_image"></div>
		<a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
		<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type(\'audio\')">Get an audio CAPTCHA</a></div>
		<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type(\'image\')">Get an image CAPTCHA</a></div>

		<div class="recaptcha_only_if_image">Enter the words above</div>
		<div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
		<input type="text" id="recaptcha_response_field" name="recaptcha_response_field" />

		<div id="account-signup-divider" class="shared-divider"></div>
		';

		$captcha_content .= $recaptcha_html;
	} else {
		$captcha_content = '
		<div id="account-signup-divider" class="shared-divider">
			<div class="shared-divider-label">
				<span>Confirmation Code</span>
			</div>
		</div>

		<p>Enter the code exactly as it appears:</p>
		'.$captcha_html.'
		<p>'.form_label('Confirmation Code', $captcha['id']).'</p>
		<p>'.form_input($captcha).'</p>

		<div id="account-signup-divider" class="shared-divider"></div>
		';
	}
}

if( form_error('recaptcha_response_field') !=''){
$error_message1 = "<small class=\"error\">".form_error('recaptcha_response_field')."</small>";
}

if( form_error($captcha['name']) !=''){
$error_message1 .= "<small class=\"error\">".form_error($captcha['name'])."</small>";
}

if( form_error('terms_conditions') !='' ){
$error_message1 .= "<small class=\"error\">".form_error('terms_conditions')."</small>";
}

?>

<?php

$login = array(
	'type' => 'email',
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'class'	=> 'form-control',
	'placeholder'=>'Your Email',
);
if(isset($login_by_username) AND isset($login_by_email))
{
	if ($login_by_username AND $login_by_email) {
		$login_label = 'Email or login';
	} else if ($login_by_username) {
		$login_label = 'Login';
	} else {
		$login_label = 'Email';
	}
}
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'placeholder' => 'Password',
	'class'	=> 'form-control',//small input-text',
	'placeholder'=>'Password',
);
$remember = array(
	'name'	=> 'remember',
	'id'	=> 'remember',
	'value'	=> 1,
	'checked'	=> set_value('remember'),
);

$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);


$error_message = '';
if( form_error($login['name']) !=''){
$error_message = "<small class=\"error\">".str_replace("Login field", "Email field", form_error($login['name']) )."</small>";
}

if(isset($errors[$login['name']])){
$error_message .= "<small class=\"error\">".str_replace("Login", "Email", $errors[$login['name']] )."</small>";
}

if(isset($errors['banned'])){
	$error_message .= "<small class=\"error\">".str_replace("Login", "Email", $errors['banned'] )."</small>";
}


if( form_error($password['name']) !='' ){
$error_message .= "<small class=\"error\">".form_error($password['name'])."</small>";
}



if(isset($errors[$password['name']])){
$error_message .= "<small class=\"error\">".$errors[$password['name']]."</small>";
}



	$captcha_content = '';
if(isset($show_captcha))
{
	if ($show_captcha) {
		if ($use_recaptcha) {
			$captcha_content = '
			<div id="account-signup-divider" class="shared-divider">
				<div class="shared-divider-label">
					<span>Confirmation Code</span>
				</div>
			</div>
	
			<div id="recaptcha_image"></div>
			<a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
			<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type(\'audio\')">Get an audio CAPTCHA</a></div>
			<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type(\'image\')">Get an image CAPTCHA</a></div>
	
			<div class="recaptcha_only_if_image">Enter the words above</div>
			<div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
			<input type="text" id="recaptcha_response_field" name="recaptcha_response_field" />
	
			<div id="account-signup-divider" class="shared-divider"></div>';
	
			$captcha_content .= $recaptcha_html;
		} else {
			$captcha_content = '
			<div id="account-signup-divider" class="shared-divider">
				<div class="shared-divider-label">
					<span>Confirmation Code</span>
				</div>
			</div>
	
			<p>Enter the code exactly as it appears:</p>
			'.$captcha_html.'
			<p>'.form_label('Confirmation Code', $captcha['id']).'</p>
			<p>'.form_input($captcha).'</p>
	
			<div id="account-signup-divider" class="shared-divider"></div>
			';
		}
	}
	
	if( form_error('recaptcha_response_field') !=''){
	$error_message = "<small class=\"error\">".form_error('recaptcha_response_field')."</small>";
	}
	
	if( form_error($captcha['name']) !=''){
	$error_message = "<small class=\"error\">".form_error($captcha['name'])."</small>";
	}
}
?>

<body>
    <div class="page sub-page">
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
                           
                            <li>
                                <a href="#">
                                    <i class="fa fa-sign-in"></i>Sign In
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>auth/register">
                                    <i class="fa fa-pencil-square-o"></i>Register
                                </a>
                            </li>
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
                            <a class="navbar-brand" href="<?php echo base_url();?>">
                                <img src="<?php echo base_url();?>assets/img/logo.png" alt="">
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
               <div class="page-title">
                    <div class="container">
                        <h1 class="center">
                            Log In Or <a href="<?php echo base_url();?>auth/register">Register Now</a>
                    </div>
                    <!--end container-->
                </div>
                <!--============ End Page Title =====================================================================-->
                <div class="background"></div>
                <!--end background-->
            </div>
            <!--end hero-wrapper-->
        </header>
        <!--end hero-->
        <!--end hero-->

        <!--*********************************************************************************************************-->
        <!--************ CONTENT ************************************************************************************-->
        <!--*********************************************************************************************************-->
        <section class="content a-bg2">
            <section class="block">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-7 signinbox">
                            <form action="<?php echo base_url();?>auth/login" method="post" class='nicely'>
                                <div class="errormessage">
									<?php echo $error_message; ?>

								
								</div>
                                <div class="form-group">
                                    <label for="email" class="col-form-label required ">Email</label>
                                    <?php echo form_input($login); ?>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="password" class="col-form-label required">Password</label>
                                    <?php echo form_password($password); ?>
                                </div>
                                <!--end form-group-->
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <label>
                                    <?php echo form_checkbox($remember); ?>
                                        Remember Me
                                    </label>
                                    <a href="myprofile.html">
                                    <button type="submit" class="btn btn-primary">Sign In</button></a>
                                </div>
                            </form>
                            <hr>
                            <p>
                               Troubles with signing? <a href="<?php echo base_url();?>auth/forgot_password/" class="forgot">Click here.</a>
                            </p>
                        </div>
                        <!--end col-md-6-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>
        <!--end content-->
    </div>
 
	
