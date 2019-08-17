<section class="content">
            <section class="block">
                <div class="container">

                    <section>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="pricing box description">
                                    <h2 class="opacity-30">Package</h2>
                                    <ul>
                                        <li>Package Dayes</li>
                                        <li>Contacts</li>
                                        <li>Profile Highlighter</li>
                                        <li>View horoscope</li>
                                    </ul>
                                </div>
                                <!--end pricing-box description-->
                            </div>


                            <?php if(isset($packagelist)){
                                    foreach($packagelist->result() as $row)
                                    { ?> 
                                        
                            
                            <!--end col-md-4-->
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="pricing box   <?php if($row->pack_fetured ==1) echo "featured"; ?>">
                                    <h2><?php echo $row->pack_name;?></h2>
                                    <figure>₹ <?php echo $row->pack_prize;?></figure>
                                    <ul>
                                        <li class="available"><?php echo $row->pack_days;?> days</li>
                                        <li class="available"><?php echo $row->pack_num_contact;?> Verified Contacts</li>
                                        <li class="available"><i class="fa fa-check"></i></li>
                                        <li class="available"><i class="fa fa-check"></i></li>
                                        <input type="hidden" id="pack_id" value="<?php echo $row->id;?>"/>
                                    
                                    </ul>
                                    <?php if($is_logged_in) {?>
                                        <button style="border: 2px solid #fff;
    width: 78%;" class="btn btn-primary btn-rounded" onclick="request_package(<?php echo $row->id;?>)">Select</button>
                                    <?php } ?> 
                                </div>
                                <!--end pricing-box-->
                            </div>
                            <!--end col-md-3-->
                        <?php }
                                } ?>
                        <input type="hidden" id="url" value="<?php echo base_url();?>"/>
                        </div>
                    </section>

                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>
        <!--end content-->
        <script>
            function request_package(packid){
                
            $.post($('#url').val()+"muser/ajaxpackage_add",{
                package:packid
                },function(data){
                    alert(data);
                    
                    });
            }
        </script>   