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
                                                <a href="<?php echo base_url();?>partner_profile/partner_basic_info/<?php echo $this->tank_auth->get_user_id(); ?>" class="nav-link active" id="one-tab-pills" role="tab" aria-controls="one-pills" aria-expanded="true">Basic preferences</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?php echo base_url();?>partner_profile/partner_education/<?php echo $this->tank_auth->get_user_id(); ?>" class="nav-link" id="two-tab-pills" role="tab" aria-controls="two-pills"> Education </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?php echo base_url();?>partner_profile/partner_background/<?php echo $this->tank_auth->get_user_id(); ?>" class="nav-link" id="three-tab-pills" role="tab" aria-controls="three-pills"> Background </a>
                                            </li>
                                        </ul>

                                        <div class="tab-content" id="myTabContent-pills">
                                            <div class="tab-pane fade show active" id="one-pills" role="tabpanel" aria-labelledby="one-tab-pills">
                                                <form action="<?php echo base_url();?>partner_profile/pinsert_basic_info" method="post">
                                                    <section class=" signinbox">
                                                        <h2>Personal Information</h2>
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
                                                                    <div id="state">
                                                                        <?php echo $this->address->state();?>
                                                                    </div>
                                                                </div>
                                                                <!--end form-group-->
                                                            </div>
                                                            <!--end col-md-8-->
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="title" class="col-form-label required">City</label>
                                                                    <div id="city">
                                                                        <?php echo $this->address->city();?>
                                                                    </div>
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
                                                                        <?php
                                            if(isset($mother_tongue))
                                            {
                                                foreach($mother_tongue->result() as $row)
                                                {
                                                echo "<option value='".$row->id."' ". set_select('mtongue', $row->id) .">".ucfirst($row->mtongue)."</option>";
                                                }
                                            }
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
                                                                    <label for="title" class="col-form-label required">Marital Status</label>
                                                                    <select name="marital_status">
                                                                        <option value=""> Select </option>
                                                                        <option value='never married' <?php echo set_select( 'marital_status', 'never married'); ?> selected> Not Married </option>
                                                                        <option value="divorced" <?php echo set_select( 'marital_status', 'divorced'); ?>> Divorced </option>
                                                                        <option value="awaiting divorced" <?php echo set_select( 'marital_status', 'awaiting divorced'); ?>> Awaiting Divorced </option>
                                                                        <option value="widowed" <?php echo set_select( 'marital_status', 'widowed'); ?>> Widowed </option>
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
                                                            <!--end col-md-8-->
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="title" class="col-form-label required">Skin tone</label>
                                                                    <div>
                                                                        <input type="radio" name="skin_tone" value="very fair" <?php echo set_radio( 'skin_tone', 'very fair'); ?> > Very Fair
                                                                        <input type="radio" name="skin_tone" value="fair" <?php echo set_radio( 'skin_tone', 'fair'); ?>> Fair
                                                                        <input type="radio" name="skin_tone" value="wheatish" <?php echo set_radio( 'skin_tone', 'wheatish'); ?> > Wheatish
                                                                        <input type="radio" name="skin_tone" value="dark" <?php echo set_radio( 'skin_tone', 'dark'); ?> > Dark
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
                                                                        <input type="radio" name="body_type" value="slim" <?php echo set_radio( 'body_type', 'slim'); ?> > Slim
                                                                        <input type="radio" name="body_type" value="athletic" <?php echo set_radio( 'body_type', 'athletic'); ?>> Athletic
                                                                        <input type="radio" name="body_type" value="average" <?php echo set_radio( 'body_type', 'average'); ?>> Average
                                                                        <input type="radio" name="body_type" value="heay" <?php echo set_radio( 'body_type', 'heay'); ?>> Heavy
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
                                                            <div class="col-md-6" style="display:none">
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
                                                                            <a href="photoupdate.html" class="brand">
                                                                                <button type="submit" class="btn btn-primary large icon float-right"> Update <i class="fa fa-chevron-right"></i></button>
                                                                            </a>
                                                                        </div>
                                                                        <!--end form-group-->
                                                                    </div>
                                                                    <!--end col-md-4-->
                                                                </div>
                                                    </section>
                                                </form>
                                                </div>
                                                <div class="tab-pane fade" id="two-pills" role="tabpanel" aria-labelledby="two-tab-pills"></div>
                                                <div class="tab-pane fade" id="three-pills" role="tabpanel" aria-labelledby="three-tab-pills">
                                                    <section class=" signinbox">
                                                        <h2>Religion Information</h2>
                                                    </section>
                                                </div>
                                                <div class="tab-pane fade" id="four-pills" role="tabpanel" aria-labelledby="four-tab-pills">
                                                    <section class=" signinbox">
                                                        <h2>Physical Information</h2>
                                                    </section>
                                                </div>
                                                <div class="tab-pane fade" id="five-pills" role="tabpanel" aria-labelledby="five-tab-pills">
                                                    <section class=" signinbox">
                                                        <h2>Family Information</h2>
                                                    </section>
                                                </div>
                                                <div class="tab-pane fade" id="six-pills" role="tabpanel" aria-labelledby="six-tab-pills">
                                                    <section class=" signinbox">
                                                        <h2>Educational & job Information</h2>
                                                    </section>
                                                </div>
                                                </div>
                                    </div>
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