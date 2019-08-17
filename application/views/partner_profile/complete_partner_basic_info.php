<?php
if(isset($matches))
{
    foreach($matches->result() as $row)
    {
        $muser_id = $row->muser_id;
        $country = $row->country;
        $state = $row->state;
        $city = $row->city;
        $mtongue = $row->mtongue;
        $pmarital_status = $row->pmarital_status;
        $page = $row->page;
        $pageto = $row->pageto;
        $pheightto = $row->mheightto;
        $pheight = $row->global_height;
        $pskin_tone = $row->pskin_tone;
        $pbody_type = $row->pbody_type;
        $pdisability = $row->pdisability;
        $phiv_positive = $row->phiv_positive;
        $pprofile_complete = $row->pprofile_complete;
        
    }
}
?>
<section class="content">
    <section class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <!--============ Side Bar ===============================================================-->
                    <aside class="sidebar">    
                    <?php 
                        $this->load->view('site_theme/muser_navigation');   
                    ?>       
                    </aside>
                    <!--============ End Side Bar ===========================================================-->
                </div>
                <!--end col-md-3-->
                <!--============ Listing Detail =============================================================-->
                <div class="col-lg-9 col-md-12 col-sm-12">
                <!--row end -->
                <!--Description-->
                <section class=" signinbox">  
                    <h2> Partners Preference  </h2>

                    <section class="content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9 col-md-12 col-sm-12">
                                        <ul class="nav navtab" id="myTab-pills" role="tablist" style="border: 1px solid #e1e1e1;">
                                        <li class="nav-item">
                                            <a href="<?php echo base_url();?>partner_profile/partner_basic_info/<?php echo $this->tank_auth->get_user_id(); ?>" class="nav-link active" id="one-tab-pills"   role="tab" aria-controls="one-pills" aria-expanded="true">Basic preferences</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo base_url();?>partner_profile/partner_education/<?php echo $this->tank_auth->get_user_id(); ?>" class="nav-link" id="two-tab-pills"  role="tab" aria-controls="two-pills"> Education </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo base_url();?>partner_profile/partner_background/<?php echo $this->tank_auth->get_user_id(); ?>" class="nav-link" id="three-tab-pills"   role="tab" aria-controls="three-pills"> Background </a>
                                        </li>
                                        </ul>

                                        <div class="tab-content" id="myTabContent-pills">
                                            <div class="tab-pane fade show active" id="one-pills" role="tabpanel" aria-labelledby="one-tab-pills">
                                                <form action="<?php echo base_url();?>partner_profile/update_pbasic_info" method="post" >
                                                    <div class="error">
                                                    <?php
                                                        echo form_error('country');
                                                        echo form_error('state');
                                                        echo form_error('city');
                                                        echo form_error('marital_status');
                                                        echo form_error('height');
                                                        echo form_error('heightto');
                                                        echo form_error('skin_tone');
                                                        echo form_error('body_type');
                                                        echo form_error('disability');
                                                        echo form_error('hiv_positive');
                                                        ?>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                            <label for="title" class="col-form-label required">Country</label>
                                                            <?php echo $this->address->country();?>
                                                            </div>
                                                            <!--end form-group-->
                                                        </div>
                                                        <!--end col-md-8-->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                            <label for="title" class="col-form-label required">State</label>
                                                            <?php echo $this->address->state($this->muse->display_basic_info('user_profiles', array('user_profiles.id'=>$this->tank_auth->get_user_id()), 'country_id'));?>
                                                            </div>
                                                            <!--end form-group-->
                                                        </div>
                                                        <!--end col-md-8-->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                            <label for="title" class="col-form-label required">City</label>
                                                            <?php echo $this->address->city($this->muse->display_basic_info('user_profiles',  array('user_profiles.id'=>$this->tank_auth->get_user_id()), 'state_id'));?>
                                                            </div>
                                                            <!--end form-group-->
                                                        </div>
                                                        <!--end col-md-8-->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                            <label for="title" class="col-form-label required">Mother tongue</label>
                                                            <select name="mtongue">
                                                                <option value=""> Select </option>
                                                                <?php $this->muse->mtongue(); ?>
                                                            </select>
                                                            </div>
                                                            <!--end form-group-->
                                                        </div>
                                                        <!--end col-md-8-->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                            <label for="title" class="col-form-label required">Marital Status</label>
                                                            <select name="marital_status">
                                                                <option value=""> Select </option>
                                                                <option value='never married'  <?php echo set_select('marital_status', 'never married'); ?> selected> Never Married </option>
                                                                <option value="divorced" <?php echo set_select('marital_status', 'divorced'); ?>> Divorced </option>
                                                                <option value="awaiting divorced" <?php echo set_select('marital_status', 'awaiting divorced'); ?>> Awaiting Divorced </option>
                                                                <option value="widowed" <?php echo set_select('marital_status', 'widowed'); ?>> Widowed </option>  
                                                            </select>
                                                            </div>
                                                            <!--end form-group-->
                                                        </div>
                                                        <!--end col-md-8-->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                            <label for="title" class="col-form-label required">Age from </label>
                                                            <select name="age">
                                                                <option value="">Select </option>
                                                                <?php
                                                                for($i=18;$i<70;$i++)
                                                                echo "<option value='".$i."'>".$i."</option>";
                                                                ?>
                                                            </select>
                                                            </div>
                                                            <!--end form-group-->
                                                        </div>
                                                        <!--end col-md-8-->
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                            <label for="title" class="col-form-label required">Age To </label>
                                                            <select name="ageto">
                                                                <option value="">Select </option>
                                                                <?php
                                                                for($i=18;$i<70;$i++)
                                                                echo "<option '".$i."'>".$i."</option>";
                                                                ?>
                                                            </select>
                                                            </div>
                                                            <!--end form-group-->
                                                        </div>
                                                        <!--end col-md-8-->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                            <label for="title" class="col-form-label required">Height from </label>
                                                            <?php $this->muse->gheight('height', 'cheight');?> 
                                                            </div>
                                                            <!--end form-group-->
                                                        </div>
                                                        <!--end col-md-8-->
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                            <label for="title" class="col-form-label required">Height To </label>
                                                            <?php $this->muse->gheight('heightto', 'cheight');?>
                                                            </div>
                                                            <!--end form-group-->
                                                        </div>
                                                        <!--end col-md-8-->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                            <label for="title" class="col-form-label required">Skin tone</label>
                                                            <div>
                                                                <input type="radio" name="skin_tone" value="very fair" <?php echo set_radio('skin_tone', 'very fair'); ?> > Very Fair
                                                                <input type="radio" name="skin_tone" value="fair" <?php echo set_radio('skin_tone', 'fair'); ?>> Fair
                                                                <input type="radio" name="skin_tone" value="wheatish" <?php echo set_radio('skin_tone', 'wheatish'); ?> > Wheatish
                                                                <input type="radio" name="skin_tone" value="dark" <?php echo set_radio('skin_tone', 'dark'); ?> > Dark
                                                            </div>
                                                            </div>
                                                            <!--end form-group-->
                                                        </div>
                                                        <!--end col-md-8-->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                            <label for="title" class="col-form-label required">Body type</label>
                                                            <div>
                                                                <input type="radio" name="body_type" value="slim" <?php echo set_radio('body_type', 'slim'); ?> > Slim
                                                                <input type="radio" name="body_type" value="athletic" <?php echo set_radio('body_type', 'athletic'); ?>> Athletic
                                                                <input type="radio" name="body_type" value="average" <?php echo set_radio('body_type', 'average'); ?>> Average
                                                                <input type="radio" name="body_type" value="heay" <?php echo set_radio('body_type', 'heay'); ?>> Heavy
                                                            </div>
                                                            </div>
                                                            <!--end form-group-->
                                                        </div>
                                                        <!--end col-md-8-->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                            <label for="title" class="col-form-label required">Disability</label>
                                                            <div>
                                                                <input type="radio" name="disability" value="yes"> Yes
                                                                <input type="radio" name="disability" value="no" checked>No 
                                                            </div>
                                                            </div>
                                                            <!--end form-group-->
                                                        </div>
                                                        <!--end col-md-8-->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                            <label for="title" class="col-form-label required">HIV Positive</label>
                                                            <div>
                                                                <input type="radio" name="hiv_positive" value="yes"> Yes
                                                                <input type="radio" name="hiv_positive" value="no" checked>No    
                                                            </div>
                                                            <!--end form-group-->
                                                            </div>
                                                            <!--end col-md-8-->
                                                        </div>
                                                    <div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                        <div class="form-group">     
                                                            <a href="photoupdate.html" class="brand">  <button type="submit" class="btn btn-primary large icon float-right"> Update <i class="fa fa-chevron-right"></i></button></a>
                                                        </div>
                                                        <!--end form-group-->
                                                        </div>
                                                        <!--end col-md-4-->
                                                    </div>
                                                </form>
                                                <!-- hedden value send -->
                                                <input type="hidden" name="country_id" value="<?php echo $this->muse->display_basic_info('partner_basic', array('user_id'=>$muser_id), 'pcountry_id'); ?>">
                                                <input type="hidden" name="state_id" value="<?php echo $this->muse->display_basic_info('partner_basic', array('user_id'=> $muser_id), 'pstate_id'); ?>">
                                                <input type="hidden" name="city_id" value="<?php echo $this->muse->display_basic_info('partner_basic', array('user_id'=>$muser_id), 'pcity_id'); ?>">

                                                <input type="hidden" name="mtonge_id" value="<?php echo $this->muse->display_basic_info('partner_basic', array('user_id'=> $muser_id), 'pmtongue_id'); ?>">
                                                <input type="hidden" name="user_marital_status" value="<?php echo $this->muse->display_basic_info('partner_basic', array('user_id'=>$muser_id), 'pmarital_status');?>">

                                                <input type="hidden" name="mpage" value="<?php echo $this->muse->display_basic_info('partner_basic', array('user_id'=>$muser_id), 'page');?>">
                                                <input type="hidden" name="mpageto" value="<?php echo $this->muse->display_basic_info('partner_basic', array('user_id'=> $muser_id), 'pageto');?>">

                                                <input type="hidden" name="pheight" value="<?php echo $this->muse->display_basic_info('partner_basic', array('user_id'=>$muser_id), 'pheight');?>">
                                                <input type="hidden" name="pheightto" value="<?php echo $this->muse->display_basic_info('partner_basic', array('user_id'=>$muser_id), 'pheightto');?>">


                                                <input type="hidden" name="uskin_tone" value="<?php echo $this->muse->display_basic_info('partner_basic', array('user_id'=> $muser_id), 'pskin_tone');?>">
                                                <input type="hidden" name="ubody_type" value="<?php echo $this->muse->display_basic_info('partner_basic', array('user_id'=> $muser_id), 'pbody_type');?>">
                                                <input type="hidden" name="udisability" value="<?php echo $this->muse->display_basic_info('partner_basic', array('user_id' => $muser_id), 'pdisability');?>">
                                                <input type="hidden" name="uhiv_positive" value="<?php echo $this->muse->display_basic_info('partner_basic', array('user_id' => $muser_id), 'phiv_positive');?>">

                                            </div>
                                        </div>
                                    </div>  
                                    <!-- for change value -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                    $country_id 		= $('input[name=country_id]').val();
                                    $state_id 		= $('input[name=state_id]').val();
                                    $city_id 		= $('input[name=city_id]').val();
                                    $mtonuge_id 		= $('input[name=mtonge_id]').val();
                                    
                                    $page 		= $('input[name=mpage]').val();
                                    $pageto		= $('input[name=mpageto]').val();
                                    
                                    $pheight		= $('input[name=pheight]').val();
                                    $pheightto		= $('input[name=pheightto]').val();
                                    
                                    $user_marital_status 	= $('input[name=user_marital_status]').val();
                                    $uskin_tone		= $('input[name=uskin_tone]').val();
                                    $ubody_type		= $('input[name=ubody_type]').val();
                                    $udisability 		= $('input[name=udisability]').val();
                                    $uhiv_positive 	= $('input[name=uhiv_positive ]').val();
                                    $('select[name=country]').val($country_id);
                                    $('select[name=state]').val($state_id);
                                    $('select[name=city]').val($city_id);
                                    
                                    $('select[name=mtongue]').val($mtonuge_id);
                                    
                                    $('select[name=age]').val($page);
                                    $('select[name=ageto]').val($pageto);
                                    
                                    $('select[name=height]').val($pheight);
                                    $('select[name=heightto]').val($pheightto);
                                    
                                    $('select[name=marital_status]').val($user_marital_status);
                                    $('input:radio[name=skin_tone][value='+$uskin_tone+']').attr("checked", "checked");
                                    $('input:radio[name=body_type][value='+$ubody_type+']').attr("checked", "checked");
                                    $('input:radio[name=disability][value='+$udisability+']').attr("checked", "checked");
                                    $('input:radio[name=hiv_positive][value='+$uhiv_positive+']').attr("checked", "checked");
                                    });
                                    </script>
                                    <script src="<?php echo base_url();?>js/address.js"></script>       
                                </div>
                                <!--end row-->
                            </div>
                            <!--end container-->
                            <!--end block-->
                        </section>
                        <!--end content-->


                        
                    </section>    
                </div>
            </div>
        </div>
    </section>
    <!--end block-->
</section>
<!--end content-->












