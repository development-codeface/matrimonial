
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
                        <h2> Send Message </h2>
                        <section class="content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <ul class="nav navtab" id="myTab-pills" role="tablist" style="border: 1px solid #e1e1e1;">
                                            <li class="nav-item">
                                                <a href="<?php echo base_url();?>inbox/" class="nav-link" id="one-tab-pills" role="tab" aria-controls="one-pills" aria-expanded="true">inbox</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?php echo base_url();?>send/" class="nav-link active" id="two-tab-pills" role="tab" aria-controls="two-pills"> Send Message </a>
                                            </li>
                                        </ul>

                                        <div class="container" style="margin-top:4%">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    
                                                <?php if(isset($send_message) || size_of($send_message) > 0)
                                                        {
                                                            foreach($send_message->result() as $row){
                                                                
                                                                ?>
                                                            <div class="message">
                                                                <p class="sender"> 
                                                                    <a href='<?php echo (base_url()."users/".$row->send_to); ?>'>
                                                                            <p> 
                                                                                <?php echo $this->muse->display_value('users', array('id'=> $row->send_to),'firstname' ); ?>
                                                                            </p> 
                                                                    </a>
                                                                </p> 
                                                                <div class="msgcontent"><?php echo $row->message;?></div>
                                                                <div class="date"><?php echo date('d-M-Y',$row->date);?></div>
                                                            </div>
                                                        <?php
                                                            }
                                                        }else {?>
                                                            <div class="message"> No Message Available </div>
                                                        <?php } ?>
                                                    
                                                    
                                                    <?php echo $create_link;?>
                                                </div>
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

