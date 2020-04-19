<section class="sidebar side-cstm">
                                <h2>Search Profiles</h2>
                                <!--============ Side Bar Search Form ===============================================-->
                                <form action="<?php echo base_url();?>muser/filter_data" class="sidebar-form form" method="post" id="mfilter">
                                <input type="hidden" value="<?php echo $this->muse->sex_match($this->tank_auth->get_user_id()); ?>" name="gender" id="gender">    
                                <div class="form-group">
                                    <label for="email" class="col-form-label required ">Search keyword</label>
                                    <input type="text" name="keysearch" value="" id="keysearch" class="form-control valid" placeholder="Search name/id">
                                </div>
                                   <div class="form-group">
                                        <select name="martial_status" onchange="filter_data(this.value)" id="martial_status">
				                            <option value=""> Marital Status </option>
				                            <option value="never married"> Not Married </option>
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
                                        <select onchange="filter_data(this.value)" name="community"> <option value=""> Community </option></select>
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
                                   <?php if(isset($isadmin)) {?>
                                        <div class="form-group">
                                            
                                            <label>
                                                    <input type="radio" name="genderadmin" value="male" title="Male"  ?>
                                                    Male
                                                    </label>
                                                    <label>
                                                    <input type="radio" name="genderadmin" value="female" title="Female" > Female
                                                    </label>
                                        </div>

                                       
                                   <?php } ?>
                                   <div class="form-group" >
                                            <select name="agefrom"> 
                                                <option value=""> Age from </option>
                                                <option value="18"> 18 </option>
                                                <option value="19"> 19 </option>
                                                <option value="20"> 20 </option>
                                                <option value="21"> 21 </option>
                                                <option value="22"> 22 </option>
                                                <option value="23"> 23 </option>
                                                <option value="24"> 24 </option>
                                                <option value="25"> 25 </option>
                                                <option value="26"> 26 </option>
                                                <option value="27"> 27 </option>
                                                <option value="28"> 28 </option>
                                                <option value="29"> 29 </option>
                                                <option value="30"> 30 </option>
                                                <option value="31"> 31 </option>
                                                <option value="32"> 32 </option>
                                                <option value="33"> 33 </option>
                                                <option value="34"> 34 </option>
                                                <option value="35"> 35 </option>
                                                <option value="36"> 36 </option>
                                                <option value="37"> 37 </option>
                                                <option value="38"> 38 </option>
                                                <option value="39"> 39 </option>
                                                <option value="40"> 40 </option>
                                                <option value="41"> 41 </option>
                                                <option value="42"> 42 </option>
                                                <option value="43"> 43 </option>
                                                <option value="44"> 44 </option>
                                                <option value="45"> 45 </option>

                                            </select>
                                        </div>

                                        <div class="form-group"     >
                                            <select name="ageto"> 
                                                <option value=""> Age to </option>
                                                <option value="18"> 18 </option>
                                                <option value="19"> 19 </option>
                                                <option value="20"> 20 </option>
                                                <option value="21"> 21 </option>
                                                <option value="22"> 22 </option>
                                                <option value="23"> 23 </option>
                                                <option value="24"> 24 </option>
                                                <option value="25"> 25 </option>
                                                <option value="26"> 26 </option>
                                                <option value="27"> 27 </option>
                                                <option value="28"> 28 </option>
                                                <option value="29"> 29 </option>
                                                <option value="30"> 30 </option>
                                                <option value="31"> 31 </option>
                                                <option value="32"> 32 </option>
                                                <option value="33"> 33 </option>
                                                <option value="34"> 34 </option>
                                                <option value="35"> 35 </option>
                                                <option value="36"> 36 </option>
                                                <option value="37"> 37 </option>
                                                <option value="38"> 38 </option>
                                                <option value="39"> 39 </option>
                                                <option value="40"> 40 </option>
                                                <option value="41"> 41 </option>
                                                <option value="42"> 42 </option>
                                                <option value="43"> 43 </option>
                                                <option value="44"> 44 </option>
                                                <option value="45"> 45 </option>
                                            </select>
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
                                                <input type="radio" name="diet" value="non-veg" title="Diet" onclick="filter_data(this.value)" <?php echo set_radio('diet', 'non veg'); ?>> Non-Veg
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
                                    
                                    <input type="button" value="Search" onclick="filter_data(this.value)" class="btn btn-primary width-100 btn-success">
                                    <input type="hidden" id="url" value="<?php echo base_url();?>">
                                    <!--end alternative-search-form-->
                                </form>
                                <!--============ End Side Bar Search Form ===========================================-->
                            </section>