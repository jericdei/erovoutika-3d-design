<!doctype html>
<html class="no-js" lang="en">
<head>
<?php include('components/head.inc.php'); ?>
    <title>Contact | 3D Modeling & Design</title>
</head>
<?php include('components/header.inc.php'); ?>
        <!-- start -->
		<!-- Start breadcumb Area -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline">
                                <h3>Contact us</h3>
                            </div>
                            <ul class="breadcrumb-bg">
                                <a href="index.php"><li class="home-bread">Home</li></a>
                                <a href="contact.php"><li>Contact Us</li> </a>   
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
        <!-- Start contact Area -->
        <div class="contact-area page-padding">
            <div class="container">
                <div class="row">
                    <div class="contact-inner">
                        <!-- Start contact icon column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="fa fa-mobile"></i>
                                    <p>
                                        <strong>Call :</strong> +(02)8370 1811 / 0906 149 7307<br>
                                        <span>Monday- Sunday (9:00 am-6:00 pm)</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Start contact icon column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="fa fa-envelope-o"></i>
                                    <p>
                                        <strong>Email : </strong>erovoutika@gmail.com<br>
                                        <strong>Web : </strong><a href="https://erovoutika.ph/"><span>https://erovoutika.ph/</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Start contact icon column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="fa fa-map-marker"></i>
                                    <p>
                                        <strong>Location : </strong>Unit A, 2367 Urdaneta Rd. <br>
                                        <span>Guadalupe Nuevo, Makati City, PH 1212</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                     <div class="col-md-6 col-sm-6 col-xs-12">
                         <!-- Start Map -->
                        <div class="map-area">
                            <div class="mapouter">
                                <div class="gmap_canvas">
                                    <iframe width="500" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Unit%20A,%202367%20Urdaneta%20Rd.%20Guadalupe%20Nuevo,%20Makati%20City,%20PH%201212&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                    <a href="https://fmovies2.org">is fmovies.to legal</a><br>
                                    <style>.mapouter{position:relative;text-align:right;height:500px;width:500px;}</style>
                                    <a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
                                    <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:500px;}</style></div></div>
                        </div>
                        <!-- End Map -->
                    </div>
                    <!-- Start Left contact -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-form">
                            <div class="row">
                                <form id="contactForm" method="POST" action="http://rockstheme.com/rocks/aievari-live/contact.php" class="contact-form">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" id="msg_subject" class="form-control" placeholder="Subject" required data-error="Please enter your message subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <textarea id="message" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                        <button type="submit" id="submit" class="add-btn contact-btn">Send Message</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                        <div class="clearfix"></div>
                                    </div>   
                                </form>  
                            </div>
                        </div>
                    </div>
                    <!-- End Left contact -->
                </div>
            </div>
        </div>
        <!-- End Contact Area -->
		<!-- end -->
        <?php
            include('components/footer.inc.php'); 
            include('components/js.inc.php');
        ?>
</html>