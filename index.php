<?php include 'include/header.php'; ?>
<!-- Bnner Section Two -->
<section class="banner-section-two">
    <div class="banner-carousel owl-carousel owl-theme default-arrows dark">

        <?php $home_banners1 = $conn->query("SELECT * FROM  home_banners");
        while ($home_banners = $home_banners1->fetch(PDO::FETCH_ASSOC)) { ?>
            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url(uploads/<?php echo $home_banners['image']; ?>);">
                <div class="auto-container">
                    <div class="content-outer">
                        <div class="content-box">
                            <div class="icon-box"><span class="icon flaticon-dental-insurance"></span></div>
                            <h1><?php echo $home_banners['title']; ?></h1>

                            <div class="text"><?php echo $home_banners['description']; ?> </div>
                            <div class="btn-box"><a href="appointment" class="theme-btn btn-style-one bg-scarlet"><span class="btn-title">Book Appointment</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
<!-- End Bnner Section -->

<!-- About Section Three -->
<section class="about-section-three">
    <div class="auto-container">
        <div class="row">
            <?php $cms1 = $conn->query("SELECT * FROM  cms WHERE id='1'");
            $cms = $cms1->fetch(PDO::FETCH_ASSOC); ?>
            <!-- Content Column -->
            <div class="content-column col-lg-5 col-md-12 col-sm-12 order-2 wow zoomInRight">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="sub-title"><?php echo $cms['title']; ?></span>
                        <h2><?php echo $cms['sub_title']; ?></h2>
                        <p class="text-justify"><?php echo $cms['description']; ?></p>

                    </div>
                </div>
            </div>

            <!-- Images Column -->
            <div class="image-column col-lg-7 col-md-12 col-sm-12 wow zoomInLeft">
                <div class="image-box">
                    <figure class="image"><img src="uploads/<?php echo $cms['image']; ?>" alt=""></figure>
                </div>
            </div>



            <div class="blocks-column col-lg-12 order-3">
                <div class="row">
                    <?php $no = 1;
                    $cms1 = $conn->query("SELECT * FROM  cms WHERE id >=2 AND id <=4 ");
                    while ($cms = $cms1->fetch(PDO::FETCH_ASSOC)) {   ?>
                        <!-- Feature BLock -->
                        <div class="feature-block-three col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="inner-box">
                                <?php if ($no == 1) { ?>
                                    <span class="icon flaticon-target"></span>
                                <?php } elseif ($no == 2) { ?>
                                    <span class="icon flaticon-vision"></span>
                                <?php } elseif ($no == 3) { ?>
                                    <span class="icon flaticon-donation"></span>
                                <?php } ?>
                                <h4><?php echo $cms['title']; ?></h4>
                                <p><?php echo $cms['description']; ?></p>
                            </div>
                        </div>
                    <?php $no++;
                    } ?>
                    <!-- Feature BLock -->
                    <!-- <div class="feature-block-three col-lg-4 col-md-6 col-sm-12 wow fadeInUp"> 
                            <div class="inner-box">
                                 <?php $cms1 = $conn->query("SELECT * FROM  cms WHERE id='3'");
                                    $cms = $cms1->fetch(PDO::FETCH_ASSOC); ?>
                                <span class="icon flaticon-vision"></span>
                                <h4><?php echo $cms['title']; ?></h4>
                                <p><?php echo $cms['description']; ?></p>
                            </div>
                        </div>

                        
                        <div class="feature-block-three col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="inner-box">
                                 <?php $cms1 = $conn->query("SELECT * FROM  cms WHERE id='4'");
                                    $cms = $cms1->fetch(PDO::FETCH_ASSOC); ?>
                                <span class="icon flaticon-donation"></span>
                                <h4><?php echo $cms['title']; ?></h4>
                                <p><?php echo $cms['description']; ?></p>
                            </div>
                        </div>-->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Section Three -->

<!-- Fun Fact Section Three-->
<section class="fun-fact-section-three">
    <div class="auto-container">
        <div class="background-layer"></div>
        <div class="row">
            <!--Column-->
            <?php $no = 1;
            $counter1 = $conn->query("SELECT * FROM  counter");
            while ($counter = $counter1->fetch(PDO::FETCH_ASSOC)) { ?>
                <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="count-box">
                        <div class="icon-box">
                            <?php if ($no == 1) { ?>
                                <span class="icon flaticon-user-experience"></span>
                            <?php } elseif ($no == 2) { ?>
                                <span class="icon flaticon-team">
                                <?php } elseif ($no == 3) { ?>
                                    <span class="icon flaticon-hospital">
                                    <?php } elseif ($no == 4) { ?>
                                        <span class="icon flaticon-add-friend">
                                        <?php } ?>
                        </div>
                        <span class="count-text" data-speed="3000" data-stop="<?php echo $counter['count']; ?>">0</span>
                        <span class="count-plus"><?php if ($no == 1 || $no == 4) {
                                                        echo '+';
                                                    } ?></span>
                        <h4 class="counter-title"><?php echo $counter['title']; ?></h4>
                    </div>
                </div>
            <?php $no++;
            } ?>

            <!--Column-->
            <!-- <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms"> --
                    <div class="count-box">
                        <div class="icon-box"><span class="icon flaticon-team"></span></div>
                        <span class="count-text" data-speed="3000" data-stop="3">0</span>
                        <h4 class="counter-title">Medical Spesialities</h4>
                    </div>
                </div>

             
                <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="count-box">
                        <div class="icon-box"><span class="icon flaticon-hospital"></span></div>
                        <span class="count-text" data-speed="3000" data-stop="11">0</span>
                        <h4 class="counter-title">Dental Facilities</h4>
                    </div>
                </div>

              
                <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                    <div class="count-box">
                        <div class="icon-box"><span class="icon flaticon-add-friend"></span></div>
                        <span class="count-text" data-speed="3000" data-stop="5000">0</span>
                        <span class="count-plus">+</span>
                        <h4 class="counter-title">Smiles and growing</h4>
                    </div>
                </div>-->
        </div>
    </div>
</section>
<!-- Fun Fact Section Three -->

<!-- Team Section Two -->
<section class="team-section-two">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>MEET OUR EXPERIENCED TEAM</h2>
            <span class="divider"></span>
        </div>

        <div class="row">
            <!-- Team Block -->

            <?php $team1 = $conn->query("SELECT * FROM  team");
            while ($team = $team1->fetch(PDO::FETCH_ASSOC)) { ?>
                <div class="team-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="uploads/<?php echo $team['image']; ?>" alt=""></a></figure>

                        </div>
                        <div class="info-box">
                            <h5 class="name"><a href="#"><?php echo $team['name']; ?>, <span class="qualification">
                                        <?php echo $team['qualification']; ?></span></a></h5>
                            <span class="designation"><?php echo $team['designation']; ?></span>
                        </div>
                    </div>
                </div>

            <?php } ?>


        </div>

    </div>
</section>
<!--End Team Section -->

<!-- Skill Section -->
<!-- <section class="skill-section">
        <div class="outer-container clearfix">
            <div class="skill-column">
                <div class="inner-column">
                    <div class="sec-title">
                        <h2>Post Operative Instructions</h2>
                        <span class="divider"></span>
                        <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
                    </div>

                    
                    <div class="skills">
                       
                        <div class="skill-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">After Teeth Cleaning</div>
                                <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="3000" ></span></div></div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner"><div class="bar progress-line" data-width="100"></div></div>
                            </div>
                        </div>

                        
                        <div class="skill-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">After Root Canal Treatment</div>
                                <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="3000" ></span></div></div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner"><div class="bar progress-line" data-width="100"></div></div>
                            </div>
                        </div>

                        
                        <div class="skill-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">After Extraction / Surgery / Implant</div>
                                <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="3000" ></span></div></div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner"><div class="bar progress-line" data-width="100"></div></div>
                            </div>
                        </div>

                        
                        <div class="skill-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">After Crown Cementation</div>
                                <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="3000" ></span></div></div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner"><div class="bar progress-line" data-width="100"></div></div>
                            </div>
                        </div>

                        
                        <div class="skill-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">After Denture Insertion</div>
                                <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="3000" ></span></div></div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner"><div class="bar progress-line" data-width="100"></div></div>
                            </div>
                        </div>

                       
                        <div class="skill-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">After Orthodontic Treatment</div>
                                <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="3000" ></span></div></div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner"><div class="bar progress-line" data-width="100"></div></div>
                            </div>
                        </div>
                    </div>

                    <div class="btn-box"><a href="#" class="theme-btn btn-style-three"><span class="btn-title">Read More</span></a></div>
                </div>
            </div>

            <div class="image-column" style="background-image: url(images/image-7.jpg);">
                <div class="image-box">
                    <figure class="image"><img src="images/image-7.jpg" alt=""></figure>
                </div>
            </div>
        </div>
    </section> -->
<!--End Skill Section -->

<!-- Services Section Three-->
<section class="services-section-three">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>Our Services</h2>
            <span class="divider"></span>
        </div>

        <div class="row">
            <?php $no = 1;

            $services1 = $conn->query("SELECT * FROM  services ");

            while ($services = $services1->fetch(PDO::FETCH_ASSOC)) {   ?>
                <!-- Service Block -->
                <div class="service-block-three col-lg-6 col-md-6 col-sm-12 wow zoomIn">
                    <div class="inner-box">
                        <?php if ($no == 1) { ?>
                            <span class="icon flaticon-dentist"></span>
                        <?php } elseif ($no == 2) { ?>
                            <span class="icon flaticon-braces"></span>
                        <?php } elseif ($no == 3) { ?>
                            <span class="icon flaticon-implant"></span>
                        <?php } elseif ($no == 4) { ?>
                            <span class="icon flaticon-teeth"></span>
                        <?php } elseif ($no == 5) { ?>
                            <span class="icon flaticon-dental-insurance"></span>
                        <?php } elseif ($no == 6) { ?>
                            <span class="icon flaticon-tooth"></span>
                        <?php } elseif ($no == 7) { ?>
                            <span class="icon flaticon-dentist"></span>
                        <?php } elseif ($no == 8) { ?>
                            <span class="icon flaticon-braces"></span>
                        <?php } elseif ($no == 9) { ?>
                            <span class="icon flaticon-implant"></span>
                        <?php } elseif ($no == 10) { ?>
                            <span class="icon flaticon-dentist"></span>
                        <?php } ?>


                        <h5><a href="#"><?php echo $services['title']; ?></a></h5>
                        <div class="text"><?php echo $services['description1']; ?></div>
                        <!-- <span class="icon-float flaticon-dentist"></span>  -->
                    </div>
                </div>

            <?php $no++;
            } ?>






        </div>
    </div>
</section>
<!--End Services Section -->

<!-- Testimonial Section -->
<section class="testimonial-section-two">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title text-center">
            <h2>What Says Our Patients</h2>
        </div>

        <div class="testimonial-outer wow zoomIn">

            <!-- Product Thumbs Carousel -->

            <div class="client-thumb-outer">
                <div class="client-thumbs-carousel owl-carousel owl-theme">
                    <?php $testimonials1 = $conn->query("SELECT * FROM  testimonials");
                    while ($testimonials = $testimonials1->fetch(PDO::FETCH_ASSOC)) { ?>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="uploads/<?php echo $testimonials['image']; ?>" alt=""></figure>
                            <div class="author-info">
                                <span class="icon fa fa-quote-left"></span>
                                <div class="author-name"><?php echo $testimonials['name']; ?></div>
                            </div>
                        </div>
                    <?php } ?>


                </div>
            </div>

            <!-- Client Testimonial Carousel -->
            <div class="client-testimonial-carousel default-dots owl-carousel owl-theme">
                <?php $testimonials1 = $conn->query("SELECT * FROM  testimonials");
                while ($testimonials = $testimonials1->fetch(PDO::FETCH_ASSOC)) { ?>
                    <!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text"><?php echo $testimonials['description']; ?></div>
                        </div>
                    </div>
                <?php } ?>

            </div>

        </div>

        <!-- Call To Action -->
        <div class="call-to-action">
            <?php $cms1 = $conn->query("SELECT * FROM  cms WHERE id='7'");
            $cms = $cms1->fetch(PDO::FETCH_ASSOC); ?>
            <div class="inner-container">
                <div class="content-column wow zoomInLeft">
                    <h4><?php echo $cms['sub_title']; ?></h4>
                    <h2><?php echo $cms['description']; ?> </h2>
                    <a href="appointment" class="theme-btn btn-style-three"><span class="btn-title">Take Appointment</span></a>
                </div>

                <div class="video-column">
                    <div class="btn-box">
                        <a href="contact" class="play-now"><i class="icon flaticon-phone" aria-hidden="true"></i><span class="ripple"></span></a>
                        <span class="title">Contact Now</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonial Section -->

<!-- Portfolio Section -->
<section class="portfolio-section alternate">
    <div class="auto-container">
        <!--MixitUp Galery-->
        <div class="sec-title text-center">
            <h2>Our Gallery</h2>
        </div>
        <div class="mixitup-gallery">

            <div class="filter-list row mid-spacing">
                <!-- Portfolio Block -->
                <?php $gallery1 = $conn->query("SELECT * FROM  gallery");
                while ($gallery = $gallery1->fetch(PDO::FETCH_ASSOC)) { ?>
                    <div class="portfolio-block all mix detal-care dental col-lg-4 col-md-6 col-sm-12 wow zoomIn">
                        <div class="image-box">
                            <figure class="image"><img src="uploads/<?php echo $gallery['image']; ?>" alt=""></figure>
                            <div class="overlay">
                                <a href="uploads/<?php echo $gallery['image']; ?>" class="icon-box lightbox-image" data-fancybox="gallery"><span class="fa fa-expand"></span></a>
                                <div class="title-box">
                                    <h5><?php echo $gallery['title']; ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>




            </div>
        </div>

    </div>
</section>
<!-- End Portfolio Section -->
<?php include 'include/footer.php'; ?>