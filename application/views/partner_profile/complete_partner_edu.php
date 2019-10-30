<?php
$edu_where = 		 $this->tank_auth->get_user_id();
	
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
                                                <a href="<?php echo base_url();?>partner_profile/partner_basic_info/<?php echo $this->tank_auth->get_user_id(); ?>" class="nav-link" id="one-tab-pills" role="tab" aria-controls="one-pills" aria-expanded="true">Basic preferences</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?php echo base_url();?>partner_profile/partner_education/<?php echo $this->tank_auth->get_user_id(); ?>" class="nav-link active" id="two-tab-pills" role="tab" aria-controls="two-pills"> Education </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?php echo base_url();?>partner_profile/partner_background/<?php echo $this->tank_auth->get_user_id(); ?>" class="nav-link" id="three-tab-pills" role="tab" aria-controls="three-pills"> Background </a>
                                            </li>
                                        </ul>

                                        <div class="tab-content" id="myTabContent-pills">
                                            <div class="tab-pane fade show active" id="one-pills" role="tabpanel" aria-labelledby="one-tab-pills">
                                                <form action="<?php echo base_url();?>partner_profile/update_pedu" method="post">
                                                    <section class=" signinbox">
                                                        <h2>Parner Education</h2>
                                                        <div class="error">
                                                            <?php
                                                            echo '<p>'.form_error('edu_level').'</p>';
                                                            echo '<p>'.form_error('edu_field').'</p>';
                                                            echo '<p>'.form_error('work_with').'</p>';
                                                            echo '<p>'.form_error('work_as').'</p>';
                                                            echo '<p>'.form_error('annual_income').'</p>';
                                                            ?>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="title" class="col-form-label required">Education Level</label>
                                                                    <?php $this->muse->edu_level();?>
                                                                </div>
                                                                <!--end form-group-->
                                                            </div>
                                                            <!--end col-md-8-->
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="title" class="col-form-label required">Education Field</label>
                                                                    <?php $this->muse->edu_field();?>
                                                                </div>
                                                                <!--end form-group-->
                                                            </div>
                                                            <!--end col-md-8-->
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="title" class="col-form-label required">Working With</label>
                                                                    <?php $this->muse->work_with();?>
                                                                </div>
                                                                <!--end form-group-->
                                                            </div>
                                                            <!--end col-md-8-->
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="title" class="col-form-label required">Working As</label>
                                                                    <?php $this->muse->work_as();?>
                                                                </div>
                                                                <!--end form-group-->
                                                            </div>
                                                            <!--end col-md-8-->
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="title" class="col-form-label required">Annual income</label>
                                                                    <select name="annual_income">
                                                                        <option value=""> Select </option>
                                                                        <option value="60000" label="60,000">60,000</option>
                                                                        <option value="90000" label="90,000">90,000</option>
                                                                        <option value="120000" label="120,000">120,000</option>
                                                                        <option value="150000" label="150,000">150,000</option>
                                                                        <option value="180000" label="180,000">180,000</option>
                                                                        <option value="240000" label="240,000">240,000</option>
                                                                        <option value="300000" label="300,000">300,000</option>
                                                                        <option value="360000" label="360,000">360,000</option>
                                                                        <option value="500000" label="500,000">500,000</option>
                                                                        <option value="750000" label="750,000">750,000</option>
                                                                        <option value="1000000" label="greater than 10,00,000">greater than 10,00,000</option>
                                                                    </select>
                                                                </div>
                                                                <!--end form-group-->
                                                            </div>
                                                            <!--end col-md-8-->
                                                        </div>
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
                                                <input type="hidden" name="edu_level" value="<?php echo $this->muse->get_edu_value($edu_where, 'pedu_level_id') ?>">
                                                <input type="hidden" name="edu_field" value="<?php echo $this->muse->get_edu_value($edu_where, 'pedu_field_id') ?>">
                                                <input type="hidden" name="work_with" value="<?php echo $this->muse->get_edu_value($edu_where, 'pwork_with_id') ?>">
                                                <input type="hidden" name="work_as" value="<?php echo $this->muse->get_edu_value($edu_where, 'pwork_as_id') ?>">
                                                <input type="hidden" name="annual_income" value="<?php echo $this->muse->get_edu_value($edu_where, 'pannual_income'); ?>">
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
<script type="text/javascript">
    $(document).ready(function() {
        $edu_level = $('input[name=edu_level]').val();
        $edu_field = $('input[name=edu_field]').val();
        $work_with = $('input[name=work_with]').val();
        $work_as = $('input[name=work_as]').val();
        $annual_income = $('input[name=annual_income]').val();

        $('select[name=edu_level]').val($edu_level);
        $('select[name=edu_field]').val($edu_field);
        $('select[name=work_with]').val($work_with);
        $('select[name=work_as]').val($work_as);
        $('select[name=annual_income]').val($annual_income);
    });
</script>