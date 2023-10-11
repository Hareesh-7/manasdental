<?php include 'cmoon/includes/dbconnect.php';

error_reporting(0);

$sql = $conn->query("SELECT * FROM details where id='1' ");
$result = $sql->fetch(PDO::FETCH_ASSOC);
$page_name = basename($_SERVER['SCRIPT_NAME']);
?>
<?php
$social_links1 = $conn->query("SELECT * FROM social_links where id='1' ");
$social_links = $social_links1->fetch(PDO::FETCH_ASSOC); ?>


<!DOCTYPE html>
<html lang="en">
<!-- <base href="http://manasdentalcare.com/"> -->
<base href="http://localhost/projects/client-projects/4-manasdentalcare/">

<head>
    <meta charset="utf-8">
    <title><?php echo $result['site_name']; ?></title>


    <?php if ($page_name == 'index.php') {

        $header_images = $conn->query("SELECT * FROM header_images where id='8' ");
        $header_images_row = $header_images->fetch(PDO::FETCH_ASSOC);

        if ($header_images_row['meta_title'] != '') { ?>
            <meta name="title" content="<?php echo $header_images_row['meta_title']; ?>" />
        <?php } else {  ?>
            <meta name="title" content="<?php echo $social_links['meta_title']; ?>" />
        <?php }

        if ($header_images_row['meta_keywords'] != '') {
        ?>
            <meta name="keywords" content="<?php echo $header_images_row['meta_keywords']; ?>" />
        <?php } else {  ?>
            <meta name="keywords" content="<?php echo $social_links['meta_keywords']; ?>" />
        <?php }

        if ($header_images_row['meta_description'] != '') {  ?>
            <meta name="description" content="<?php echo $header_images_row['meta_description']; ?>" />
        <?php } else {  ?>
            <meta name="description" content="<?php echo $social_links['meta_description']; ?>" />
    <?php  }
    } ?>

    <?php if ($page_name == 'about.php') {

        $header_images = $conn->query("SELECT * FROM header_images where id='1' ");
        $header_images_row = $header_images->fetch(PDO::FETCH_ASSOC);

        if ($header_images_row['meta_title'] != '') { ?>
            <meta name="title" content="<?php echo $header_images_row['meta_title']; ?>" />
        <?php } else {  ?>
            <meta name="title" content="<?php echo $social_links['meta_title']; ?>" />
        <?php }

        if ($header_images_row['meta_keywords'] != '') {
        ?>
            <meta name="keywords" content="<?php echo $header_images_row['meta_keywords']; ?>" />
        <?php } else {  ?>
            <meta name="keywords" content="<?php echo $social_links['meta_keywords']; ?>" />
        <?php }

        if ($header_images_row['meta_description'] != '') {  ?>
            <meta name="description" content="<?php echo $header_images_row['meta_description']; ?>" />
        <?php } else {  ?>
            <meta name="description" content="<?php echo $social_links['meta_description']; ?>" />
    <?php  }
    } ?>

    <?php if ($page_name == 'facilities.php') {

        $header_images = $conn->query("SELECT * FROM header_images where id='2' ");
        $header_images_row = $header_images->fetch(PDO::FETCH_ASSOC);

        if ($header_images_row['meta_title'] != '') { ?>
            <meta name="title" content="<?php echo $header_images_row['meta_title']; ?>" />
        <?php } else {  ?>
            <meta name="title" content="<?php echo $social_links['meta_title']; ?>" />
        <?php }

        if ($header_images_row['meta_keywords'] != '') {
        ?>
            <meta name="keywords" content="<?php echo $header_images_row['meta_keywords']; ?>" />
        <?php } else {  ?>
            <meta name="keywords" content="<?php echo $social_links['meta_keywords']; ?>" />
        <?php }

        if ($header_images_row['meta_description'] != '') {  ?>
            <meta name="description" content="<?php echo $header_images_row['meta_description']; ?>" />
        <?php } else {  ?>
            <meta name="description" content="<?php echo $social_links['meta_description']; ?>" />
    <?php  }
    } ?>

    <?php if ($page_name == 'patient-education.php') {

        $header_images = $conn->query("SELECT * FROM header_images where id='3' ");
        $header_images_row = $header_images->fetch(PDO::FETCH_ASSOC);

        if ($header_images_row['meta_title'] != '') { ?>
            <meta name="title" content="<?php echo $header_images_row['meta_title']; ?>" />
        <?php } else {  ?>
            <meta name="title" content="<?php echo $social_links['meta_title']; ?>" />
        <?php }

        if ($header_images_row['meta_keywords'] != '') {
        ?>
            <meta name="keywords" content="<?php echo $header_images_row['meta_keywords']; ?>" />
        <?php } else {  ?>
            <meta name="keywords" content="<?php echo $social_links['meta_keywords']; ?>" />
        <?php }

        if ($header_images_row['meta_description'] != '') {  ?>
            <meta name="description" content="<?php echo $header_images_row['meta_description']; ?>" />
        <?php } else {  ?>
            <meta name="description" content="<?php echo $social_links['meta_description']; ?>" />
    <?php  }
    } ?>

    <?php if ($page_name == 'photos.php') {

        $header_images = $conn->query("SELECT * FROM header_images where id='4' ");
        $header_images_row = $header_images->fetch(PDO::FETCH_ASSOC);

        if ($header_images_row['meta_title'] != '') { ?>
            <meta name="title" content="<?php echo $header_images_row['meta_title']; ?>" />
        <?php } else {  ?>
            <meta name="title" content="<?php echo $social_links['meta_title']; ?>" />
        <?php }

        if ($header_images_row['meta_keywords'] != '') {
        ?>
            <meta name="keywords" content="<?php echo $header_images_row['meta_keywords']; ?>" />
        <?php } else {  ?>
            <meta name="keywords" content="<?php echo $social_links['meta_keywords']; ?>" />
        <?php }

        if ($header_images_row['meta_description'] != '') {  ?>
            <meta name="description" content="<?php echo $header_images_row['meta_description']; ?>" />
        <?php } else {  ?>
            <meta name="description" content="<?php echo $social_links['meta_description']; ?>" />
    <?php  }
    } ?>

    <?php if ($page_name == 'videos.php') {

        $header_images = $conn->query("SELECT * FROM header_images where id='5' ");
        $header_images_row = $header_images->fetch(PDO::FETCH_ASSOC);

        if ($header_images_row['meta_title'] != '') { ?>
            <meta name="title" content="<?php echo $header_images_row['meta_title']; ?>" />
        <?php } else {  ?>
            <meta name="title" content="<?php echo $social_links['meta_title']; ?>" />
        <?php }

        if ($header_images_row['meta_keywords'] != '') {
        ?>
            <meta name="keywords" content="<?php echo $header_images_row['meta_keywords']; ?>" />
        <?php } else {  ?>
            <meta name="keywords" content="<?php echo $social_links['meta_keywords']; ?>" />
        <?php }

        if ($header_images_row['meta_description'] != '') {  ?>
            <meta name="description" content="<?php echo $header_images_row['meta_description']; ?>" />
        <?php } else {  ?>
            <meta name="description" content="<?php echo $social_links['meta_description']; ?>" />
    <?php  }
    } ?>

    <?php if ($page_name == 'contact.php') {

        $header_images = $conn->query("SELECT * FROM header_images where id='6' ");
        $header_images_row = $header_images->fetch(PDO::FETCH_ASSOC);

        if ($header_images_row['meta_title'] != '') { ?>
            <meta name="title" content="<?php echo $header_images_row['meta_title']; ?>" />
        <?php } else {  ?>
            <meta name="title" content="<?php echo $social_links['meta_title']; ?>" />
        <?php }

        if ($header_images_row['meta_keywords'] != '') {
        ?>
            <meta name="keywords" content="<?php echo $header_images_row['meta_keywords']; ?>" />
        <?php } else {  ?>
            <meta name="keywords" content="<?php echo $social_links['meta_keywords']; ?>" />
        <?php }

        if ($header_images_row['meta_description'] != '') {  ?>
            <meta name="description" content="<?php echo $header_images_row['meta_description']; ?>" />
        <?php } else {  ?>
            <meta name="description" content="<?php echo $social_links['meta_description']; ?>" />
    <?php  }
    } ?>

    <?php if ($page_name == 'appointment.php') {

        $header_images = $conn->query("SELECT * FROM header_images where id='7' ");
        $header_images_row = $header_images->fetch(PDO::FETCH_ASSOC);

        if ($header_images_row['meta_title'] != '') { ?>
            <meta name="title" content="<?php echo $header_images_row['meta_title']; ?>" />
        <?php } else {  ?>
            <meta name="title" content="<?php echo $social_links['meta_title']; ?>" />
        <?php }

        if ($header_images_row['meta_keywords'] != '') {
        ?>
            <meta name="keywords" content="<?php echo $header_images_row['meta_keywords']; ?>" />
        <?php } else {  ?>
            <meta name="keywords" content="<?php echo $social_links['meta_keywords']; ?>" />
        <?php }

        if ($header_images_row['meta_description'] != '') {  ?>
            <meta name="description" content="<?php echo $header_images_row['meta_description']; ?>" />
        <?php } else {  ?>
            <meta name="description" content="<?php echo $social_links['meta_description']; ?>" />
    <?php  }
    } ?>

    <?php if ($page_name == 'services.php') {

        $header_images = $conn->query("SELECT * FROM header_images where id='9' ");
        $header_images_row = $header_images->fetch(PDO::FETCH_ASSOC);

        if ($header_images_row['meta_title'] != '') { ?>
            <meta name="title" content="<?php echo $header_images_row['meta_title']; ?>" />
        <?php } else {  ?>
            <meta name="title" content="<?php echo $social_links['meta_title']; ?>" />
        <?php }

        if ($header_images_row['meta_keywords'] != '') {
        ?>
            <meta name="keywords" content="<?php echo $header_images_row['meta_keywords']; ?>" />
        <?php } else {  ?>
            <meta name="keywords" content="<?php echo $social_links['meta_keywords']; ?>" />
        <?php }

        if ($header_images_row['meta_description'] != '') {  ?>
            <meta name="description" content="<?php echo $header_images_row['meta_description']; ?>" />
        <?php } else {  ?>
            <meta name="description" content="<?php echo $social_links['meta_description']; ?>" />
    <?php  }
    } ?>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">


    <!--Color Switcher Mockup-->
    <link href="css/color-switcher-design.css" rel="stylesheet">

    <link rel="shortcut icon" href="uploads/<?php echo $result['site_favicon']; ?>" type="image/x-icon">
    <link rel="icon" href="uploads/<?php echo $result['site_favicon']; ?>" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header-->
        <header class="main-header header-style-three">

            <!-- Header top -->
            <div class="header-top-three">
                <div class="auto-container">
                    <div class="inner-container">
                        <div class="top-left">
                            <ul class="contact-list clearfix">
                                <li><i class="flaticon-email"></i><?php echo $result['site_email']; ?></li>
                                <li><i class="flaticon-phone"></i><?php echo $result['site_number']; ?> , <?php echo $result['phone_number1']; ?></li>
                            </ul>
                        </div>
                        <div class="top-right">
                            <ul class="social-icon-one light">
                                <li><a href="<?php echo $social_links['facebook']; ?>" target="_blank"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="<?php echo $social_links['youtube']; ?>" target="_blank"><span class="fab fa-youtube"></span></a></li>
                                <li><a href="<?php echo $social_links['whatsapp']; ?>" target="_blank"><span class="fab fa-whatsapp"></span></a></li>
                                <li><a href="<?php echo $social_links['google']; ?>" target="_blank"><span class="fab fa-google"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header Top -->

            <!-- Header Lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <!-- Main box -->
                    <div class="main-box">

                        <div class="logo-box">
                            <div class="logo"><a href="index"><img src="uploads/<?php echo $result['site_logo']; ?>" alt="" title=""></a></div>
                        </div>

                        <!--Nav Box-->
                        <div class="nav-outer">
                            <nav class="nav main-menu">
                                <ul class="navigation" id="navbar">
                                    <li class="<?php if ($page_name == 'index.php') {
                                                    echo 'current';
                                                } ?>"><a href="index"><span>Home</span></a></li>
                                    <li class="<?php if ($page_name == 'about.php') {
                                                    echo 'current';
                                                } ?>"><a href="about"><span>About Us</span></a></li>
                                    <li class="dropdown">
                                        <a href="services">Services</a>
                                        <ul>
                                            <?php $services1 = $conn->query("SELECT * FROM services");
                                            while ($services = $services1->fetch(PDO::FETCH_ASSOC)) { ?>
                                                <li><a href="service-details/<?php echo $services['p_link']; ?>"><?php echo $services['title']; ?></a></li>
                                                <!-- <li><a href="service-details.php">Restorative Dentistry</a></li> 
                                        <li><a href="service-details.php">Root Canal Treatments</a></li>
                                        <li><a href="service-details.php">Crowns and Bridges</a></li>
                                        <li><a href="service-details.php">Dental Implants</a></li>
                                        <li><a href="service-details.php">Surgical Dentistry</a></li>
                                        <li><a href="service-details.php">Missing Teeth Replacement</a></li>
                                        <li><a href="service-details.php">Kids Dentistry</a></li>
                                        <li><a href="service-details.php">Cosmetic Dentistry</a></li> -->
                                            <?php } ?>
                                        </ul>
                                    </li>
                                    <li class="<?php if ($page_name == 'facilities.php') {
                                                    echo 'current';
                                                } ?>"><a href="facilities"><span>Facilities</span></a></li>
                                    <!-- <li><a href="#"><span>Safety &amp; Quality</span></a></li> -->
                                    <li class="<?php if ($page_name == 'patient-education.php') {
                                                    echo 'current';
                                                } ?>"><a href="patient-education"><span>Patient Education</span></a></li>
                                    <li class="dropdown">
                                        <span>Gallery</span>
                                        <ul>
                                            <li class="<?php if ($page_name == 'photos.php') {
                                                            echo 'current';
                                                        } ?>"><a href="photos">Photos</a></li>
                                            <li class="<?php if ($page_name == 'videos.php') {
                                                            echo 'current';
                                                        } ?>"><a href="videos">Videos</a></li>
                                        </ul>
                                    </li>
                                    <li class="<?php if ($page_name == 'contact.php') {
                                                    echo 'current';
                                                } ?>"><a href="contact">Contact</a></li>
                                </ul>
                            </nav>
                            <!-- Main Menu End-->

                            <div class="outer-box">
                                <a href="appointment" class="theme-btn btn-style-three"><span class="btn-title">Take Appointment</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sticky Header  -->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="main-box">
                        <div class="logo-box">
                            <div class="logo"><a href="#"><img src="uploads/<?php echo $result['site_logo']; ?>" alt="" title=""></a></div>
                        </div>

                        <!--Keep This Empty / Menu will come through Javascript-->
                    </div>
                </div>
            </div><!-- End Sticky Menu -->

            <!-- Mobile Header -->
            <div class="mobile-header">
                <div class="logo"><a href="index"><img src="uploads/<?php echo $result['site_logo']; ?>" alt="" title=""></a></div>

                <!--Nav Box-->
                <div class="nav-outer clearfix">

                    <div class="outer-box">
                        <!-- Search Btn -->
                        <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><span class="fa fa-bars"></span></a>
                    </div>
                </div>
            </div>

            <!-- Mobile Nav -->
            <div id="nav-mobile"></div>

        </header>
        <!--End Main Header -->