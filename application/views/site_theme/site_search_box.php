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
                                        <select name="martial_status" class="cstm_dropdown" onchange="filter_data(this.value)" id="martial_status">
				                            <option value=""> Marital Status </option>
				                            <option value="never married"> Not Married </option>
				                            <option value="divorced"> Divorced  </option>
				                            <option value="awaiting divorced"> Awaiting Divorced </option>
				                            <option value="widowed"> Widowed </option>
			                            </select>
                                    </div>
                                    <?php if(COMMUNITY_CONDITION_ACTIVATED != true){ ?>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <?php $this->muse->get_religion("onchange='filter_data(this.value)'");?>
                                    </div>
                                    <div class="form-group">
                                        <select id="community" class="cstm_dropdown"  onchange="filter_data(this.value)" name="community"> <option value=""> Community </option></select>
                                    </div>

                                    <?php } ?>
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
                                    <div class="form-group">
                                        <select class="state cstm_dropdown" id="state" onchange='filter_data(this.value)'> <option value=""> State </option></select>
                                    </div>

                                    <div class="form-group" >
                                        <select class="city cstm_dropdown" id="city" onchange='filter_data(this.value)'> <option value=""> City </option></select>
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
                                            <select name="agefrom" id="agefrom" class="cstm_dropdown"> 
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
                                                <option value="46"> 46 </option>
                                                <option value="47"> 47 </option>
                                                <option value="48"> 48 </option>
                                                <option value="49"> 49 </option>
                                                <option value="50"> 50 </option>
                                                <option value="51"> 51 </option>
                                                <option value="52"> 52 </option>
                                                <option value="53"> 53 </option>
                                                <option value="54"> 54 </option>
                                                <option value="55"> 55 </option>
                                                <option value="56"> 56 </option>
                                                <option value="57"> 57 </option>
                                                <option value="58"> 58 </option>
                                                <option value="59"> 59 </option>
                                                <option value="60"> 60 </option>
                                                <option value="61"> 61 </option>
                                                <option value="62"> 62 </option>
                                                <option value="63"> 63 </option>
                                                <option value="64"> 64 </option>
                                                <option value="65"> 65 </option>
                                                <option value="66"> 66 </option>
                                                <option value="67"> 67 </option>
                                                <option value="68"> 68 </option>
                                                <option value="69"> 69 </option>
                                                <option value="70"> 70 </option>
                                                <option value="71"> 71 </option>
                                                <option value="72"> 72 </option>
                                                <option value="73"> 73 </option>
                                                <option value="74"> 74 </option>
                                                <option value="75"> 75 </option>
                                                <option value="76"> 76 </option>
                                                <option value="77"> 77 </option>
                                                <option value="78"> 78 </option>
                                                <option value="79"> 79 </option>
                                                <option value="80"> 80 </option>
                                                <option value="81"> 81 </option>
                                                <option value="82"> 82 </option>
                                                <option value="83"> 83 </option>
                                                <option value="84"> 84 </option>
                                                <option value="85"> 85 </option>
                                                <option value="86"> 86 </option>
                                                <option value="87"> 87 </option>
                                                <option value="88"> 88 </option>
                                                <option value="89"> 89 </option>
                                                <option value="90"> 90 </option>
                                                <option value="91"> 91 </option>
                                                <option value="92"> 92 </option>
                                                <option value="93"> 93 </option>
                                                <option value="94"> 94 </option>
                                                <option value="95"> 95 </option>
                                                <option value="96"> 96 </option>
                                                <option value="97"> 97 </option>
                                                <option value="98"> 98 </option>
                                                <option value="99"> 99 </option>
                                                <option value="100"> 100 </option>
                                                

                                            </select>
                                        </div>

                                        <div class="form-group"     >
                                            <select name="ageto" id="ageto" class="cstm_dropdown"> 
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
                                                <option value="46"> 46 </option>
                                                <option value="47"> 47 </option>
                                                <option value="48"> 48 </option>
                                                <option value="49"> 49 </option>
                                                <option value="50"> 50 </option>
                                                <option value="51"> 51 </option>
                                                <option value="52"> 52 </option>
                                                <option value="53"> 53 </option>
                                                <option value="54"> 54 </option>
                                                <option value="55"> 55 </option>
                                                <option value="56"> 56 </option>
                                                <option value="57"> 57 </option>
                                                <option value="58"> 58 </option>
                                                <option value="59"> 59 </option>
                                                <option value="60"> 60 </option>
                                                <option value="61"> 61 </option>
                                                <option value="62"> 62 </option>
                                                <option value="63"> 63 </option>
                                                <option value="64"> 64 </option>
                                                <option value="65"> 65 </option>
                                                <option value="66"> 66 </option>
                                                <option value="67"> 67 </option>
                                                <option value="68"> 68 </option>
                                                <option value="69"> 69 </option>
                                                <option value="70"> 70 </option>
                                                <option value="71"> 71 </option>
                                                <option value="72"> 72 </option>
                                                <option value="73"> 73 </option>
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