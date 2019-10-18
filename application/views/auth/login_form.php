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
if( form_error($mobile_no['name']) !='' ){
    $error_message1 .= "<small class=\"error\">".form_error($mobile_no['name'])."</small>";
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
	'placeholder'=>'Userid',
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
    <div class="page home-page">
        <!--*********************************************************************************************************-->
        <!--************ HERO ***************************************************************************************-->
        <!--*********************************************************************************************************-->
        <header class="hero has-dark-background">
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
                                <a href="<?php echo base_url();?>auth/login">
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
                                <img src="<?php echo base_url();?>assets/img/logo-inverted.png" alt="">
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
                <!--============ Page Title =========================================================================-
                <div class="page-title">
                    <div class="container">
                        <h1 class="center">
                            <a href="#">Buy</a>, <a href="#">Sell</a> or <a href="#">Find</a> What You need
                        </h1>
                    </div>
                    end container-->
                </div>
                <!--============ End Page Title =====================================================================-->
                <!--============ Hero Form ==========================================================================-->
                <form class="hero-form form" action="<?php echo base_url();?>auth/register" method="post">
                    <div class="container">


<div class="row">
     
                     <div class=" col-lg-5 col-md-8 col-sm-12 reg_box_home"> 
                     
                     <div class=" col-lg-12 col-md-12 col-sm-12 "> 
                        <div class="row">
                     <div class="logo_in"> <img style=" width: 100%;" src="<?php echo base_url();?>assets/img/logo_in.png" alt=""></div>
                     <div class="title_in"> 
                           <h1> Free Signup! </h1>
                           <p> Find Brides and Grooms </p>

                    </div></div>

  <!--============ Hero Form ==========================================================================-->
                <form class="hero-form form">
                    <div class="container">
						<!--Main Form-->
						<div class="errormessage"><?php echo $error_message1; ?></div>
                        <div class="main-search-form p-t-30">
                            <div class="form-row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <select name="profile_for" id="category" data-placeholder="Created For">
                                            <option value="">Created For</option>
                                            <option value="son" <?php echo set_select('profile_for', 'son'); ?>>Son</option>
                                            <option value="daughter" <?php echo set_select('profile_for', 'daughter'); ?>>Daughter</option>
                                            <option value="brother" <?php echo set_select('profile_for', 'brother'); ?>>Brother</option>
                                            <option value="sister" <?php echo set_select('profile_for', 'sister'); ?>>Sister</option>
                                            <option value="friend" <?php echo set_select('profile_for', 'friend'); ?>>Friend</option>
                                             <option value="self" <?php echo set_select('profile_for', 'self'); ?> selected >My self</option>
                                        </select>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-3-->
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
										<!--<input name="keyword" type="text" class="form-control" id="what" placeholder="Full name"> -->
										<?php echo form_input($firstname); ?>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-3-->
                                    <div class="col-md-12 col-sm-12">
                                    <div class="form-group m-b-0">
                                        <figure class="m-b-0">
											<label style=" font-size: 1.5rem; color:#000;">
											    <input style="position: absolute;" type="radio" name="gender" value="male" required <?php echo set_radio('gender', 'male'); ?> >
                                                Male
                                            </label>
											<label style=" font-size: 1.5rem; color:#000;">
											    <input type="radio" name="gender" value="female"  required <?php echo set_radio('gender', 'female'); ?> >
                                                Female
                                            </label>
                                        </figure>
                                    </div>
                                    <!--end form-group-->
                                </div>
								<!--end col-md-3-->
								

                               <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
									    <?php echo form_input($mobile_no); ?>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-3-->
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
										<?php echo form_input($email); ?>
                                    </div>
                                    <!--end form-group-->
                                </div>
								<!--end col-md-3-->
								
								<div class="col-md-4 col-sm-12">
                                    <div class="form-group">
									<select name="day" id="day" required>
										<option value="" label="Day" selected="selected">Day</option>
										<option value="01" label="01">01</option>
										<option value="02" label="02">02</option>
										<option value="03" label="03">03</option>
										<option value="04" label="04">04</option>
										<option value="05" label="05">05</option>
										<option value="06" label="06">06</option>
										<option value="07" label="07">07</option>
										<option value="08" label="08">08</option>
										<option value="09" label="09">09</option>
										<option value="10" label="10">10</option>
										<option value="11" label="11">11</option>
										<option value="12" label="12">12</option>
										<option value="13" label="13">13</option>
										<option value="14" label="14">14</option>
										<option value="15" label="15">15</option>
										<option value="16" label="16">16</option>
										<option value="17" label="17">17</option>
										<option value="18" label="18">18</option>
										<option value="19" label="19">19</option>
										<option value="20" label="20">20</option>
										<option value="21" label="21">21</option>
										<option value="22" label="22">22</option>
										<option value="23" label="23">23</option>
										<option value="24" label="24">24</option>
										<option value="25" label="25">25</option>
										<option value="26" label="26">26</option>
										<option value="27" label="27">27</option>
										<option value="28" label="28">28</option>
										<option value="29" label="29">29</option>
										<option value="30" label="30">30</option>
										<option value="31" label="31">31</option>
				     				</select>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-3-->
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
									<select name="month" id="month" required>
										<option value="" label="Month" selected="selected">Month</option>
										<option value="01" label="January">January</option>
										<option value="02" label="February">February</option>
										<option value="03" label="March">March</option>
										<option value="04" label="April">April</option>
										<option value="05" label="May">May</option>
										<option value="06" label="June">June</option>
										<option value="07" label="July">July</option>
										<option value="08" label="August">August</option>
										<option value="09" label="September">September</option>
										<option value="10" label="October">October</option>
										<option value="11" label="November">November</option>
										<option value="12" label="December">December</option>
                                    </select>
                                    </div>
                                    <!--end form-group-->
                                </div>
								<!--end col-md-3-->
								<div class="col-md-4 col-sm-12">
                                    <div class="form-group">
									<select name="year" id="year"  required>
                                            <option value="" label="Year" selected="selected">Year</option>
                                            <option value="2001" label="2001">2001</option>
                                            <option value="2000" label="2000">2000</option>
                                            <option value="1999" label="1999">1999</option>
                                            <option value="1998" label="1998">1998</option>
                                            <option value="1997" label="1997">1997</option>
                                            <option value="1996" label="1996">1996</option>
                                            <option value="1995" label="1995">1995</option>
                                            <option value="1994" label="1994">1994</option>
                                            <option value="1993" label="1993">1993</option>
                                            <option value="1992" label="1992">1992</option>
                                            <option value="1991" label="1991">1991</option>
                                            <option value="1990" label="1990">1990</option>
                                            <option value="1989" label="1989">1989</option>
                                            <option value="1988" label="1988">1988</option>
                                            <option value="1987" label="1987">1987</option>
                                            <option value="1986" label="1986">1986</option>
                                            <option value="1985" label="1985">1985</option>
                                            <option value="1984" label="1984">1984</option>
                                            <option value="1983" label="1983">1983</option>
                                            <option value="1982" label="1982">1982</option>
                                            <option value="1981" label="1981">1981</option>
                                            <option value="1980" label="1980">1980</option>
                                            <option value="1979" label="1979">1979</option>
                                            <option value="1978" label="1978">1978</option>
                                            <option value="1977" label="1977">1977</option>
                                            <option value="1976" label="1976">1976</option>
                                            <option value="1975" label="1975">1975</option>
                                            <option value="1974" label="1974">1974</option>
                                            <option value="1973" label="1973">1973</option>
                                            <option value="1972" label="1972">1972</option>
                                            <option value="1971" label="1971">1971</option>
                                            <option value="1970" label="1970">1970</option>
                                            <option value="1969" label="1969">1969</option>
                                            <option value="1968" label="1968">1968</option>
                                            <option value="1967" label="1967">1967</option>
                                            <option value="1966" label="1966">1966</option>
                                            <option value="1965" label="1965">1965</option>
                                            <option value="1964" label="1964">1964</option>
                                            <option value="1963" label="1963">1963</option>
                                            <option value="1962" label="1962">1962</option>
                                            <option value="1961" label="1961">1961</option>
                                            <option value="1960" label="1960">1960</option>
                                            <option value="1959" label="1959">1959</option>
                                            <option value="1958" label="1958">1958</option>
                                            <option value="1957" label="1957">1957</option>
                                            <option value="1956" label="1956">1956</option>
                                            <option value="1955" label="1955">1955</option>
                                            <option value="1954" label="1954">1954</option>
                                            <option value="1953" label="1953">1953</option>
                                            <option value="1952" label="1952">1952</option>
                                            <option value="1951" label="1951">1951</option>
                                            <option value="1950" label="1950">1950</option>
                                            <option value="1949" label="1949">1949</option>
                                            <option value="1948" label="1948">1948</option>
                                            <option value="1947" label="1947">1947</option>
                                            <option value="1946" label="1946">1946</option>
                                        </select>
                                    </div>
                                    <!--end form-group-->
                                </div>
								<!--end col-md-3-->

								

                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
										<?php echo form_password($password); ?>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-3-->
                                 <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                    <?php echo form_password($confirm_password); ?>
                                    </div>
                                    <!--end form-group-->
								</div>
								
								<div class="col-md-12 col-sm-12">
								<input type="checkbox" name="terms_conditions" checked> I agree to the <a href="<?php echo base_url();?>privacypolicy" style=" color:#f04b66 !important; "> Privacy Policy </a> and <a href="<?php echo base_url();?>terms-conditions" style=" color:#f04b66 !important; "> T&C </a>
                                </div>
								<!--end col-md-3-->
						
                                <!--end col-md-3-->
                                <div class="col-md-12 col-sm-12">
                                    <button type="submit" class="btn btn-primary width-100" style="margin-bottom: 20px;">Register Now</button>
                                </div>
                                <!--end col-md-3-->
                              
                            </div>
                            <!--end form-row-->
                        </div>
                        <!--end main-search-form-->
                       
                        <!--end alternative-search-form-->
                    </div>
                    <!--end container-->
                </form>
                <!--============ End Hero Form ======================================================================-->

                     </div>  

                     </div>  

                      <div class=" col-lg-7 col-md-4 col-sm-12 "> </div>   
                        <!--end alternative-search-form-->
                    </div></div>
                    <!--end container-->
                </form>
                <div class="container">     

                <div class="row cl-w t-c p-t-20 p-b-20 pl-bgscreen ">
              <div class="col-lg-2 col-md-2 col-sm-12 p-t-30 p-b-30 right-border-gradient f-1  ">Christian </div>

        <div class="col-lg-2 col-md-2 col-sm-12 p-t-30 p-b-30 right-border-gradient f-1" >Nair</div>
        <div class="col-lg-2 col-md-2 col-sm-12 p-t-30 p-b-30  right-border-gradient f-1" > Ezhava  </div>
        <div class="col-lg-2 col-md-2 col-sm-12 p-t-30 p-b-30   right-border-gradient f-1" >Muslim</div>
        <div class="col-lg-2 col-md-2 col-sm-12 p-t-30 p-b-30   f-1 " > Divorcee</div>



                </div>


                </div>
                <!--============ End Hero Form ======================================================================-->
                <div class="background" >
                    <div class="background-image">
                        <img src="<?php echo base_url();?>assets/img/hero-background-image-01.jpg" alt="">
                    </div>
                    <!--end background-image-->
                </div>
                <!--end background-->
            </div>
            <!--end hero-wrapper-->
        </header>
        <!--end hero-->


        <!--*********************************************************************************************************-->
        <!--************ CONTENT ************************************************************************************-->
        <!--*********************************************************************************************************-->
        <section class="content">
          
           
            <!--============ Recent Ads =============================================================================-->
            <section class="block">
                <div class="container">
                    <h1 class="m-b-30">Latest Profiles </h1>
                    <div class="items grid grid-xl-4-items grid-lg-3-items grid-md-2-items">
                        <?php if(isset($lateProfile)){ 
                            foreach($lateProfile->result() as $row){?>
                            
                            <div class="item">
                                <div class="wrapper">
                                    <div class="image">
                                        <h3>
                                        <a href="#" class="tag category"><?php if(isset($row->work_as)){echo ucwords($row->work_as);} else {echo "";} ?> </a> 
                                            <a href="<?php echo base_url();?>users/<?php echo $row->muser_id;?>" class="title"><?php echo ucfirst($row->firstname); ?></a>
                                            <!-- <span class="tag">Offer</span> -->
                                        </h3>
                                        <a href="<?php echo base_url();?>users/<?php echo $row->muser_id;?>" class="image-wrapper background-image">
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
                                    <!-- <div class="price">$75,000</div> -->
                                    
                                    <!--end meta-->
                                
                                    <!--end description-->
                                    
                                    <!--end addition-info-->
                                    <a  href="<?php echo base_url();?>users/<?php echo $row->muser_id;?>" class="btn btn-primary text-caps m-l-10 btn-framed"></i>Send Interest</a>
                                    <a href="<?php echo base_url();?>users/<?php echo $row->muser_id;?>" class="btn btn-primary text-caps btn-framed m-l-10 "></i>View profile</a>
                                </div>
                            </div>
                            <!--end item-->


                        <?php
                          }
                        }
                        ?>
                         <a href="auth/login" class="item call-to-action">
                            <div class="wrapper" style=" background: #fff; border: 1px solid #d9d9d9;}">
                                <div class="title" >
                                    <i class="fa fa-plus-square-o"></i>
                                    View More
                                    <br> Profiles
                                </div>
                            </div>
                        </a>
                        <!--end item-->
                    </div>
                </div>
                <!--end container-->
            </section>
            <!--end block-->
              <section class="block a-bg" ><form class="hero-form form">
                <div class="container">
                    <h1 class="m-b-30 t-c cl-w" style="font-size: 4.5rem;"> Search Profiles

 </h1>
                    <!--Main Form-->
                    <div class="main-search-form">
                        <div class="form-row">
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <label for="what" class="col-form-label cl-w">Looking for</label>
                                     <select name="test" id="category" data-placeholder="Select Category">
                                        <option value="1">Female</option>
                                        <option value="2">Male</option>
                                       
                                    </select>
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-3-->
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <label for="input-location" class="col-form-label cl-w">preferred location  </label>
                                    <input name="location" type="text" class="form-control" id="input-location" placeholder="Enter Location">
                                    <span class="geo-location input-group-addon" ><i class="fa fa-map-marker"></i></span>
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-3-->
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <label for="category" class="col-form-label">Religion</label>
                                    <select name="religioen" id="category" data-placeholder="Select Category">
                                        <option value="">Select Category</option>
                                        <option value="1">All</option>
                                        <option value="2">Hindu</option>
                                        <option value="3">Christian</option>
                                        <option value="4">Muslim</option>
                                        <option value="5">Others</option>
                                    </select>
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-3-->
                            <div class="col-md-3 col-sm-3">
                                 <label for="input-location" class="col-form-label">&nbsp;</label>
                                <button type="submit" class="btn btn-primary1 width-100 m-t-12">Search</button>
                            </div>
                            <!--end col-md-3-->
                        </div>
                        <!--end form-row-->
                    </div>
                    <!--end main-search-form-->
                    <!--Alternative Form-->
                    <div class="alternative-search-form opc">
                        <a href="#collapseAlternativeSearchForm" class="icon" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseAlternativeSearchForm "><i class="fa fa-plus cl-w"></i>More Options</a>
                        <div class="collapse" id="collapseAlternativeSearchForm">
                            <div class="wrapper">
                                <div class="form-row">
                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 d-xs-grid d-flex align-items-center justify-content-between">
                                        <label>
                                            <input type="checkbox" name="new">
                                            Premium only
                                        </label>
                                        <label>
                                            <input type="checkbox" name="with_photo">
                                            With Photo
                                        </label>
                                        <label>
                                            <input type="checkbox" name="new">
                                            Visited
                                        </label>
                                    </div>
                                    <!--end col-xl-6-->
                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-row">
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <input name="min_price" type="text" class="form-control small" id="min-price" placeholder="Minimum Age">
                                                    <!-- <span class="input-group-addon small">$</span> -->
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-4-->
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <input name="max_price" type="text" class="form-control small" id="max-price" placeholder="Maximum Age">
                                                   <!--  <span class="input-group-addon small">$</span> -->
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-4-->
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <select name="distance" id="distance" class="small" data-placeholder="Cast" >
                                                        <option value="">cast </option>
                                                        <option value="1">cast 1</option>
                                                        <option value="2">cast 2</option>
                                                        <option value="3">cast 3</option>
                                                        <option value="4">cast 4</option>
                                                        <option value="5">cast 5</option>
                                                    </select>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-3-->
                                        </div>
                                        <!--end form-row-->
                                    </div>
                                    <!--end col-xl-6-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end wrapper-->
                        </div>
                        <!--end collapse-->
                    </div>
                    <!--end alternative-search-form-->
                </div>
                <!--end container-->
            </form> </section>
             <!--============ Features Steps =========================================================================-->
            <section class="block">
                <div class="container">
                    <div class="block">
                        <h1 class="m-b-30">Join with us </h1>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="feature-box">
                                    <figure>
										<img src="<?php echo base_url();?>assets/icons/feature-user.png" alt="">
                                        <span>1</span>
                                    </figure>
                                    <h3>Create account with Pkeralamarry.com</h3>
                                    <!-- <p>Etiam molestie viverra dui vitae mattis. Ut velit est</p> -->
                                </div>
                                <!--end feature-box-->
                            </div>
                            <!--end col-->
                            <div class="col-md-3">
                                <div class="feature-box">
                                    <figure>
                                        <img src="<?php echo base_url();?>assets/icons/feature-upload.png" alt="">
                                        <span>2</span>
                                    </figure>
                                    <h3>Submit your profile</h3>
                                   <!--  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
                                </div>
                                <!--end feature-box-->
                            </div>
                            <!--end col-->
                            <div class="col-md-3">
                                <div class="feature-box">
                                    <figure>
                                        <img src="<?php echo base_url();?>assets/icons/feature-like.png" alt="">
                                        <span>3</span>
                                    </figure>
                                    <h3>Search genuine profiles</h3>
                                   <!--  <p>Nunc ultrices eu urna quis cursus. Sed viverra ullamcorper</p> -->
                                </div>
                                <!--end feature-box-->
                            </div>
                            <!--end col-->
                            <div class="col-md-3">
                                <div class="feature-box">
                                    <figure>
                                        <img src="<?php echo base_url();?>assets/icons/feature-wallet.png" alt="">
                                        <span>4</span>
                                    </figure>
                                    <h3>Find your companion</h3>
                                   <!--  <p>Integer nisl ipsum, sodales sed scelerisque nec, aliquet sit</p> -->
                                </div>
                                <!--end feature-box-->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end block-->
                </div>
                <!--end container-->
                <div class="background" data-background-color="#fff"></div>
                <!--end background-->
            </section>
            <!--end block-->
            <!--============ End Features Steps =====================================================================-->
            <!--============ End Recent Ads =========================================================================-->
            <!--============ Newsletter =============================================================================-->
            <section class="block">
                <div class="container">
                    <div class="box has-dark-background">
                        <div class="row align-items-center justify-content-center d-flex">
                            <div class="col-md-10 py-5">
                                <h2>Subscribe for newsletter </h2>
                                <form class="form email">
                                    <div class="form-row">
                                    
                                        <!--end col-md-4-->
                                        <div class="col-md-7 col-sm-7">
                                            <div class="form-group">
                                                <label for="newsletter_email" class="col-form-label">Your Email</label>
                                                <input name="newsletter_email" type="email" class="form-control" id="newsletter_email" placeholder="Your Email">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                        <div class="col-md-1 col-sm-1">
                                            <div class="form-group">
                                                <label class="invisible">.</label>
                                                <button type="submit" class="btn btn-primary m-t-4 width-100"><i class="fa fa-chevron-right"></i></button>
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                </form>
                                <!--end form-->
                            </div>
                        </div>
                        <div class="background">
                            <div class="background-image">
                                <img src="<?php echo base_url();?>assets/img/hero-background-image-01.jpg" alt="">
                            </div>
                            <!--end background-image-->
                        </div>
                        <!--end background-->
                    </div>
                    <!--end box-->
                </div>
                <!--end container-->
            </section>
            <!--end block-->

           <!--  <section class="block">
                <div class="container">
                    <div class="d-flex align-items-center justify-content-around">
                        <a href="#">
                            <img src="<?php echo base_url();?>assets/img/partner-1.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?php echo base_url();?>assets/img/partner-2.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?php echo base_url();?>assets/img/partner-3.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?php echo base_url();?>assets/img/partner-4.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?php echo base_url();?>assets/img/partner-5.png" alt="">
                        </a>
                    </div>
                </div>

            </section> -->

        </section>
	</div>
 
	
