<?php
$partner_key = array(
		     'partner_background.user_id' => $this->tank_auth->get_user_id(),
		     );

if(isset($matches))
{
    foreach($matches->result() as $row)
    {
        $religion = $row->religion_name;
        $community = $row->community_name;
        $sub_community = $row->psub_community;
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
                                                <a href="<?php echo base_url();?>partner_profile/partner_basic_info/<?php echo $this->tank_auth->get_user_id(); ?>" class="nav-link" id="one-tab-pills" role="tab" aria-controls="one-pills" aria-expanded="true">Basic preferences</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?php echo base_url();?>partner_profile/partner_education/<?php echo $this->tank_auth->get_user_id(); ?>" class="nav-link" id="two-tab-pills" role="tab" aria-controls="two-pills"> Education </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?php echo base_url();?>partner_profile/partner_background/<?php echo $this->tank_auth->get_user_id(); ?>" class="nav-link active" id="three-tab-pills" role="tab" aria-controls="three-pills"> Background </a>
                                            </li>
                                        </ul>

                                        <div class="tab-content" id="myTabContent-pills">
                                            <div class="tab-pane fade show active" id="one-pills" role="tabpanel" aria-labelledby="one-tab-pills">
                                                <form action="<?php echo base_url();?>partner_profile/update_pbackground" method="post">
                                                    <section class=" signinbox">
                                                        <h2>Parner background</h2>
                                                        <div class="error">
                                                            <?php
                                                            echo '<p>'.form_error('religion').'</p>';
                                                            echo '<p>'.form_error('community').'</p>';
                                                            echo '<p>'.form_error('diet').'</p>';
                                                            echo '<p>'.form_error('smoke').'</p>';
                                                            echo '<p>'.form_error('drink').'</p>';
                                                            ?>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="title" class="col-form-label required">Religion</label>
                                                                    <?php $this->muse->get_religion();?>
                                                                </div>
                                                                <!--end form-group-->
                                                            </div>
                                                            <!--end col-md-8-->
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="title" class="col-form-label required">Community</label>
                                                                    <div id="community">
                                                                        <?php $this->muse->get_community($this->muse->partner_background($partner_key, 'preligion_id'));?>
                                                                    </div>
                                                                </div>
                                                                <!--end form-group-->
                                                            </div>
                                                            <!--end col-md-8-->
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="title" class="col-form-label required">Sub Community</label>
                                                                    <input type="text" name="sub_community" value="<?php echo $this->muse->partner_background($partner_key, 'psub_community'); ?>">
                                                                </div>
                                                                <!--end form-group-->
                                                            </div>
                                                            <!--end col-md-8-->
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="title" class="col-form-label required">Diet</label>
                                                                    <div>
                                                                        <input type="radio" name="diet" value="veg" title="Veg"> Veg
                                                                        <input type="radio" name="diet" value="non-veg" title="Non-Veg"> Non-Veg
                                                                        <input type="radio" name="diet" value="jain" title="Jain"> Jain
                                                                        <input type="radio" name="diet" value="vegan" title="Vegan"> Vegan
                                                                        <div>
                                                                        </div>
                                                                        <!--end form-group-->
                                                                    </div>
                                                                    <!--end col-md-8-->
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="title" class="col-form-label required">Smoke</label>
                                                                            <div>
                                                                                <input type="radio" name="smoke" value="never smoke" checked> Never Smoke
                                                                                <input type="radio" name="smoke" value="smoke"> Smoke
                                                                            </div>
                                                                        </div>
                                                                        <!--end form-group-->
                                                                    </div>
                                                                    <!--end col-md-8-->
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="title" class="col-form-label required">Drink</label>
                                                                            <div>
                                                                                <input type="radio" name="drink" value="never drinks" checked> Never Drinks
                                                                                <input type="radio" name="drink" value="occasionally"> Drinks Occasionally
                                                                                <input type="radio" name="drink" value="drinks"> Drinks
                                                                            </div>
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
                                                <input type="hidden" name="religion_id" value="<?php echo $this->muse->partner_background($partner_key, 'preligion_id');?>">
                                                <input type="hidden" name="community_id" value="<?php echo $this->muse->partner_background($partner_key, 'pcommunity_id');?>">
                                                <input type="hidden" name="pdiet" value="<?php echo $this->muse->display_value('partner_lifestyle', array('user_id'=>$this->tank_auth->get_user_id()), 'pdiet');?>">
                                                <input type="hidden" name="psmoke" value="<?php echo $this->muse->display_value('partner_lifestyle', array('user_id'=>$this->tank_auth->get_user_id()), 'psmoke');?>">
                                                <input type="hidden" name="pdrink" value="<?php echo $this->muse->display_value('partner_lifestyle', array('user_id'=> $this->tank_auth->get_user_id()), 'pdrink');?>">

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
<script type="text/javascript">
     $(document).ready(function(){
	  $religion_id		= $('input[name=religion_id]').val();
	  $community_id 	= $('input[name=community_id]').val();
	  $work_with		= $('input[name=work_with]').val();
	  $work_as 		= $('input[name=work_as]').val();
	  $annual_income 	= $('input[name=annual_income]').val();
	  $pdiet 		= $('input[name=pdiet]').val();
	  $psmoke 		= $('input[name=psmoke]').val();
	  $pdrink 		= $('input[name=pdrink]').val();
	  
	  $('select[name=religion]').val($religion_id);
	  $('select[name=community]').val($community_id);
	  $('select[name=work_with]').val($work_with);
	  $('select[name=work_as]').val($work_as);
      $('select[name=annual_income]').val($annual_income);
      $('input:radio[name=diet]').filter('[value='+$pdiet+']').prop('checked', true);
	  //$('input:radio[name=diet][value='+$pdiet+']').attr("checked", "checked");
	  $('input:radio[name=smoke][value='+$psmoke+']').attr("checked", "checked");
	  $('input:radio[name=drink][value='+$pdrink+']').attr("checked", "checked");
	  
	  });
</script>

