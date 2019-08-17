<section class="sidebar side-cstm">
                                <h2>Search Profiles</h2>
                                <!--============ Side Bar Search Form ===============================================-->
                                <form action="<?php echo base_url();?>muser/filter_data" class="sidebar-form form" method="post" id="mfilter">
                                <input type="hidden" value="<?php echo $this->muse->sex_match($this->tank_auth->get_user_id()); ?>" name="gender" id="gender">    
                                   <div class="form-group">
                                        <select name="martial_status" onchange="filter_data(this.value)" id="martial_status">
				                            <option value=""> Marital Status </option>
				                            <option value="never married"> Never Married </option>
				                            <option value="divorced"> Divorced  </option>
				                            <option value="awaiting divorced"> Awaiting Divorced </option>
				                            <option value="widowed"> Widowed </option>
			                            </select>
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <?php $this->muse->get_religion("onchange='filter_data(this.value)'");?>
                                    </div>

                                    <div class="form-group" id="community">
                                        <select onchange="filter_data(this.value)" > <option value=""> Community </option></select>
                                    </div>

                                    <!--end form-group-->
                                    <div class="form-group">
                                        <?php $this->muse->mother_tongue("onchange='filter_data(this.value)'");?>
                                    </div>

                                    <div class="form-group">
                                        <?php echo $this->muse->edu_level("onchange='filter_data(this.value)'"); ?>
                                    </div>

                                    <div class="form-group">
                                        <?php $this->address->country(); ?>
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group" id="state">
                                        <select onchange='filter_data(this.value)'> <option value=""> State </option></select>
                                    </div>

                                    <div class="form-group" id="city">
                                        <select onchange='filter_data(this.value)'> <option value=""> City </option></select>
                                    </div>
                                     <!--Alternative Form-->
                                    <div class="alternative-search-form" style="padding-bottom: 2rem;">
                                        <a href="#collapseAlternativeSearchForm" class="icon" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseAlternativeSearchForm"><i class="fa fa-plus"></i>More Options</a>
                                        <div class="collapse" id="collapseAlternativeSearchForm">
                                            <div class="wrapper">
                                            
                                                <label>
                                                <input type="radio" name="diet" value="veg" title="Diet" onclick="filter_data(this.value)" <?php echo set_radio('diet', 'veg'); ?>>
                                                Veg
                                                </label>
                                                <label>
                                                <input type="radio" name="diet" value="non veg" title="Diet" onclick="filter_data(this.value)" <?php echo set_radio('diet', 'non veg'); ?>> Non-Veg
                                                </label>
                                                <label>
                                                <input type="radio" name="diet" value="jain" title="Diet" onclick="filter_data(this.value)" <?php echo set_radio('diet', 'jain'); ?>> Jain
                                                </label>
                                                <label>
                                                <input type="radio" name="diet" value="jain" title="Diet" onclick="filter_data(this.value)" <?php echo set_radio('diet', 'jain'); ?>> Jain
                                                </label>

                                            </div>
                                            <!--end wrapper-->
                                        </div>
                                        <!--end collapse-->
                                    </div>
                                    <!--end form-group-->
                                    
                                    <!--<input type="submit" value="Search" class="btn btn-primary width-100 btn-success"> -->
                                    <input type="hidden" id="url" value="<?php echo base_url();?>">
                                    <!--end alternative-search-form-->
                                </form>
                                <!--============ End Side Bar Search Form ===========================================-->
                            </section>