<?php include 'include/header.php'; ?>
<!--Page Title-->
<?php
$p_link = $_GET['p_link'];

$services1 = $conn->query("SELECT * FROM  services WHERE p_link='$p_link' ");
$services = $services1->fetch(PDO::FETCH_ASSOC); ?>

<?php $header_images = $conn->query("SELECT * FROM header_images where id='1' ");
$header_images_row = $header_images->fetch(PDO::FETCH_ASSOC); ?>
<section class="page-title" style="background-image: url(uploads/<?php echo $header_images_row['image']; ?>);">
    <div class="auto-container">
        <div class="title-outer">
            <h1><?php echo $services['title']; ?></h1>
            <!--<ul class="page-breadcrumb">
                    <li><a href="index">Home</a></li>
                    <li><?php echo $services['title']; ?></li>
                </ul>-->
        </div>
    </div>
</section>
<!--End Page Title-->

<!--Sidebar Page Container-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side / Our Blog-->
            <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12 order-2">
                <div class="service-detail">
                    <div class="images-box">
                        <figure class="image wow fadeIn"><a href="uploads/<?php echo $services['image']; ?>" class="lightbox-image" data-fancybox="services"><img src="uploads/<?php echo $services['image']; ?>" alt=""></a></figure>
                    </div>

                    <div class="content-box">
                        <div class="title-box">
                            <h2><?php echo $services['title']; ?></h2>
                            <span class="theme_color"><?php echo $services['sub_title']; ?></span>
                        </div>
                        <p><?php echo $services['description1']; ?></p>
                        <!-- <p>This combination of continuous MR imaging and very highly focused acoustic sound waves provides the ability to provide pinpoint precision treatment at the planned target, without causing damage to any of the normal surrounding tissue. This precise local lesioning stops the improper transfer of electrical signals that induce the tremor, and it stops.</p> -->
                        <!-- Two Column -->
                        <div class="two-column">
                            <div class="row">
                                <div class="image-column col-xl-6 col-lg-12 col-md-12">
                                    <figure class="image"><a href="uploads/<?php echo $services['image']; ?>" class="lightbox-image"><img src="uploads/<?php echo $services['image']; ?>" alt=""></a></figure>
                                </div>
                                <div class="text-column col-xl-6 col-lg-12 col-md-12">
                                    <p><?php echo $services['description2']; ?></p>
                                    <!-- <ul class="list-style-one"> 
                                            <li>Enhancing Your Vision sit ametcon sec tetur</li>
                                            <li>adipisicing eiusmod tempor tread depth sit tread</li>
                                            <li>eiusmod Your Vision sit ametcon sec tetur sec</li>
                                            <li>adipisicing eiusmod tempor tread depth sit </li>
                                            <li>tread Your Vision sit ametcon sec tetur</li>
                                        </ul>-->
                                </div>
                            </div>
                        </div>



                        <?php $cms = $conn->query("SELECT * FROM cms where id='6' ");
                        $cms = $cms->fetch(PDO::FETCH_ASSOC); ?>
                        <h3><?php echo $cms['title']; ?></h3>

                        <p><?php echo $cms['description']; ?></p>

                        <!--Product Info Tabs-->
                        <div class="product-info-tabs">
                            <!--Product Tabs-->
                            <div class="prod-tabs tabs-box">
                                <!--Tab Btns-->
                                <ul class="tab-btns tab-buttons clearfix">

                                    <li data-tab="#prod-details" class="tab-btn">Precautions</li>
                                    <li data-tab="#prod-spec" class="tab-btn">Intelligence</li>
                                    <li data-tab="#prod-reviews" class="tab-btn">Specializations</li>

                                </ul>

                                <!--Tabs Container-->
                                <div class="tabs-content">

                                    <!--Tab / Active Tab-->

                                    <div class="tab active-tab" id="prod-details">
                                        <div class="content">
                                            <p><?php echo $services['precautions']; ?></p>
                                        </div>
                                    </div>

                                    <!--Tab -->
                                    <div class="tab" id="prod-spec">
                                        <div class="content">
                                            <p><?php echo $services['intelligence']; ?></p>
                                        </div>
                                    </div>


                                    <div class="tab" id="prod-reviews">
                                        <div class="content">
                                            <p><?php echo $services['specializations']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar services-sidebar">

                    <!-- Category Widget -->
                    <div class="sidebar-widget categories">
                        <div class="widget-content">
                            <!-- Services Category -->
                            <ul class="services-categories">
                                <?php
                                $side_services = $conn->query("SELECT * FROM services ORDER BY id DESC");
                                while ($services_row = $side_services->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <li><a href="service-details/<?php echo $services_row['p_link']; ?>"><?php echo $services_row['title']; ?></a></li><?php } ?>
                                <!-- <li><a href="#">Restorative Dentistry</a></li> 
                                    <li><a href="#">Root Canal Treatments</a></li>
                                    <li><a href="#">Crowns and Bridges</a></li>
                                    <li><a href="#">Dental Implants</a></li>
                                    <li><a href="#">Surgical Dentistry</a></li>
                                    <li><a href="#">Missing Teeth Replacement</a></li>
                                    <li><a href="#">Kids Dentistry</a></li>
                                    <li><a href="#">Cosmetic Dentistry</a></li>-->
                            </ul>
                        </div>
                    </div>

                    <?php $cms = $conn->query("SELECT * FROM cms where id='8' ");
                    $cms = $cms->fetch(PDO::FETCH_ASSOC); ?>
                    <div class="help-box">
                        <span><?php echo $cms['title']; ?></span>
                        <h4><?php echo $cms['sub_title']; ?></h4>
                        <p><?php echo $cms['description']; ?></p>
                        <a href="contact" class="theme-btn btn-style-one"><span class="btn-title">Contact</span></a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
<!-- End Sidebar Page Container -->

<?php include 'include/footer.php'; ?>