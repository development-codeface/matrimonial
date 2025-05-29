<!--*********************************************************************************************************-->

        <!--************ FOOTER *************************************************************************************-->

        <!--*********************************************************************************************************-->

        <footer class="footer">

                <div class="wrapper"> 

                    <div class="container">

                        <div class="row">

                            <div class="col-md-4">

                                <a href="#" class="brand">

                                    <img src="<?php echo base_url().SITE_THEME; ?>assets/img/logo.png" alt="">

                                </a>


                            </div>

                            <!--end col-md-5-->

 

                            <!--end col-md-3-->

                             <div class="col-md-8">

                                <h2 class="foot-tit" >Contact Us</h2>

                                <div class="row">

                                    <div class="col-md-7 col-sm-5">

                                        <nav>

                                            <ul class="list-unstyled" style="line-height: 2.3rem;">

                                                <!--<li style="line-height: 3.6rem;"><b> Address </b><br></li>

                                                 <li></li>

                                                <li >

                                                  

     Wedding Hub<br> Oyoor Road, <br>Ayoor,Near KSEB, Kollam, Kerala </li><li  style="line-height: 3.6rem;">  <b>phone:</b> +91 9633 00 4442</li><li  style="line-height: 3rem;"> <b>Email: </b>info@theweddinghub.in   







                                                </li> -->

                                         

                                            </ul>

                                        </nav>

                                    </div>

                                    <div class="col-md-5 col-sm-5">

                                        <nav>

                                            <ul class="list-unstyled" style="line-height: 2.3rem;">

                                                <li style="line-height: 3.6rem;"><b> Branch Address </b></li>

                                                <li>

Wedding hub <br/>
Thripunithura Road,<br/>
Near pay & park grand,Vyttilla junction.<br/>
Eranakulam (p.o)<br/>



                                                </li>

                                                

                                            </ul>

                                        </nav>

                                    </div>

                                </div>

                            </div>

                            <!--end col-md-4-->

                        </div> <div class="col-md-12 "> <p class="foot_cr" >Copyright © 2020 <a href="http://pkeralamarry.com"> Weddinghub </a>. Powered by <a href="http://codefacetech.com/"> Codeface Technlogies </a></p> </div>

                    </div>

                        <!--end row-->

    

                    <div class="background">

                        <div class="background-image original-size">

                            <img src="<?php echo base_url().SITE_THEME; ?>assets/img/footer-background-icons.jpg" alt="">

                        </div>

                        <!--end background-image-->

                    </div>

                    <input type="hidden" value="<?php echo base_url();?>" id="url" name="url">

                    <!--end background-->

                </div>

            </footer>

        <!--end footer-->

    <!--end page-->

	<div class="modal fade" id="cropImagePop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    <h4 class="modal-title" id="myModalLabel">Edit photo</h4>

                </div>

                <div class="modal-body">

                    <div id="upload-demo" class="center-block"></div>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    <button type="button" id="cropImageBtn" class="btn btn-primary">Crop</button>

                </div>

            </div>

        </div>

    </div>



    <script type="text/javascript" src="<?php echo base_url().SITE_THEME; ?>assets/js/popper.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url().SITE_THEME; ?>assets/bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&amp;libraries=places"></script>

    <!--<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>-->

	<script src="<?php echo base_url().SITE_THEME; ?>assets/js/selectize.min.js"></script>

	<script src="<?php echo base_url().SITE_THEME; ?>assets/js/masonry.pkgd.min.js"></script>

	<script src="<?php echo base_url().SITE_THEME; ?>assets/js/icheck.min.js"></script>

	<script src="<?php echo base_url().SITE_THEME; ?>assets/js/jquery.validate.min.js"></script>

	<script src="<?php echo base_url().SITE_THEME; ?>assets/js/custom.js"></script>

   <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.min.js"></script> 

    <script type="text/javascript">

        $(".chosen").chosen();

    </script>-->

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <script type="text/javascript">

        $(document).ready(function() {

            $('#category').select2();   //id category views\template\footer.php

            $('#day').select2(); 

            $('#month').select2(); 

            $('#year').select2(); 

        });

    </script>

</body>

<!-- codeface-->

</html>

