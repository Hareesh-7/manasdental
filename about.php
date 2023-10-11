<?php include 'include/header.php'; ?>
<?php $header_images = $conn->query("SELECT * FROM header_images where id='1' ");
$header_images_row = $header_images->fetch(PDO::FETCH_ASSOC); ?>
<!--Page Title-->
<section class="page-title" style="background-image: url(uploads/<?php echo $header_images_row['image']; ?>);">
    <div class="auto-container">
        <div class="title-outer">
            <h1><?php echo $header_images_row['title']; ?></h1>
            <!--<ul class="page-breadcrumb">
                    <li><a href="index">Home</a></li>
                    <li><?php echo $header_images_row['title']; ?></li>
                </ul>-->
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- About Section Three -->
<section class="about-section-three">
    <div class="auto-container">
        <div class="row">
            <!-- Content Column -->
            <div class="content-column col-lg-5 col-md-12 col-sm-12 order-2 wow zoomInRight">
                <div class="inner-column">
                    <?php $cms1 = $conn->query("SELECT * FROM  cms WHERE id='1'");
                    $cms = $cms1->fetch(PDO::FETCH_ASSOC); ?>
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
                            <figure class="image"><a href="#"><img src="images/team-5.jpg" alt=""></a></figure>

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
<?php include 'include/footer.php'; ?>