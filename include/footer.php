<?php include 'cmoon/includes/dbconnect.php';

error_reporting(0);

$sql = $conn->query("SELECT * FROM details where id='1' ");
$result = $sql->fetch(PDO::FETCH_ASSOC); 
?>
<?php
$social_links1 = $conn->query("SELECT * FROM social_links where id='1' ");
$social_links = $social_links1->fetch(PDO::FETCH_ASSOC); ?>



<!-- Main Footer -->
    <footer class="main-footer style-three">
        <!--Widgets Section-->
        <div class="widgets-section" style="background-image: url(uploads/<?php echo $result['footer_logo'];?>);">
            <div class="auto-container">
                <div class="row">
                    <!--Big Column-->
                    <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <!--Footer Column-->
                            <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget about-widget">
                                    <div class="text">
                                         <h2 class="widget-title">Departments</h2>
                                        <p><?php echo $result['footer_context'];?></p>
                                    </div>
                                    <ul class="social-icon-three">
                                        <li><a href="<?php echo $social_links['facebook'];?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="<?php echo $social_links['youtube'];?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="<?php echo $social_links['twitter'];?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="<?php echo $social_links['skype'];?>" target="_blank"><i class="fab fa-skype"></i></a></li>
                                        <li><a href="<?php echo $social_links['linkedin'];?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget">
                                    <h2 class="widget-title">Quick Links</h2>
                                    <ul class="user-links">
                                        <li><a href="about">About Us</a></li>
                                        <li><a href="facilities">Facilities</a></li>
                                        <li><a href="patient-education">Patient Education</a></li>
                                        <li><a href="photos">Photos</a></li>
                                        <li><a href="videos">Videos</a></li>
                                        <li><a href="contact">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Big Column-->
                    <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <!--Footer Column-->
                                <div class="footer-widget">
                                    <h2 class="widget-title">Services</h2>
                                    <ul class="user-links">
                                        <?php 
                                        
                                        $services1 = $conn->query("SELECT * FROM services");
                                        while($services= $services1->fetch(PDO::FETCH_ASSOC)){ ?>
                                        <li><a href="service-details/<?php echo $services['p_link'];?>"><?php echo $services['title'];?></a></li>
                                        <!-- <li><a href="#">Restorative Dentistry</a></li>
                                        <li><a href="#">Root Canal Treatments</a></li>
                                        <li><a href="#">Crowns and Bridges</a></li>
                                        <li><a href="#">Orthodontic Treatments</a></li>
                                        <li><a href="#">Surgical Dentistry</a></li>-->
                                    <?php } ?>
                                    </ul>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <!--Footer Column-->
                                <div class="footer-widget contact-widget">
                                    <h2 class="widget-title">Contact Us</h2>
                                     <!--Footer Column-->
                                    <div class="widget-content">
                                        <ul class="contact-list">
                                            <li>
                                                <span class="icon flaticon-placeholder"></span>
                                                <div class="text"><?php echo $result['address'];?></div>
                                            </li>

                                            <li>
                                                <span class="icon flaticon-call-1"></span>
                                                <div class="text"><?php echo $result['call_timings'];?></div>
                                                <a href="tel:<?php echo $result['site_number'];?>"><strong><?php echo $result['site_number'];?></strong></a>
                                            </li>

                                            <li>
                                                <span class="icon flaticon-email"></span>
                                                <div class="text"><?php echo $result['footer_name'];?><br>
                                                <a href="mailto:<?php echo $result['site_email'];?>"><strong><?php echo $result['site_email'];?></strong></a></div>
                                            </li>
                                            
                                            <li>
                                                <span class="icon flaticon-back-in-time"></span>
                                                <div class="text"><?php echo $result['office_timings'];?><br>
                                                <strong><?php echo $result['close_timings'];?></strong></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Footer Bottom-->
        <div class="footer-bottom">
            <!-- Scroll To Top -->
            <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
            
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="footer-nav">
                        <ul class="clearfix">
                           <li> <a href="https://thecolourmoon.com" target="_blank">Made With <i class="fa fa-heart"></i> By Colour Moon</a></li> 
                        </ul>
                    </div>
                    
                    <div class="copyright-text">
                        <p>Copyright © 2020 - 2021 <a href="#"><?php echo $result['site_name'];?></a>All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--End Main Footer -->

</div><!-- End Page Wrapper -->



<script src="js/jquery.js"></script>  
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.modal.min.js"></script>
<script src="js/mmenu.polyfills.js"></script>
<script src="js/mmenu.js"></script>
<script src="js/appear.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
<!-- Color Setting -->
<script src="js/color-settings.js"></script>
</body>
</html>