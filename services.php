<?php include 'include/header.php'; ?>
<section class="page-title" style="background-image: url(images/slider2.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1>Services</h1>

        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Sidebar Page Container -->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Content Side-->
            <div class="content-side col-lg-12 col-md-12 col-sm-12">
                <div class="shop-single">
                    <div class="product-details">
                        <!--Basic Details-->
                        <?php $service1 = $conn->query("SELECT * FROM service ");
                        while ($service = $service1->fetch(PDO::FETCH_ASSOC)) { ?>
                            <div class="basic-details">
                                <div class="row clearfix">
                                    <div class="image-column col-md-6 col-sm-12">
                                        <figure class="image-box"><a href="uploads/<?php echo $service['image']; ?>" class="lightbox-image" title="Image Caption Here"><img src="images/service1.jpg" alt=""></a></figure>
                                    </div>
                                    <div class="info-column col-md-6 col-sm-12">
                                        <div class="details-header">
                                            <h2><?php echo $service['title']; ?></h2>
                                        </div>

                                        <div class="text"><?php echo $service['description']; ?></div>

                                        <div class="services-info">
                                            <div class="services-link"><a href="patient-education">Learn more</a></div>
                                            <ul class="services-time">
                                                <li><?php echo $service['sub_title']; ?></li>
                                            </ul>
                                        </div>

                                        <div class="other-options clearfix">

                                            <a class="theme-btn btn-style-one add-to-cart services-appt-btn" href="appointment"><span class="btn-title">Book Now</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>
                        <!--Basic Details-->






                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Sidebar Container -->
<?php include 'include/footer.php'; ?>