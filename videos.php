<?php include 'include/header.php'; ?>
<?php $header_images = $conn->query("SELECT * FROM header_images where id='5' ");
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

<!-- Portfolio Section -->
<section class="portfolio-section alternate">
    <div class="auto-container">

        <div class="mixitup-gallery">

            <div class="filter-list row mid-spacing">
                <?php $gallery1 = $conn->query("SELECT * FROM  gallery");
                while ($gallery = $gallery1->fetch(PDO::FETCH_ASSOC)) { ?>
                    <!-- Portfolio Block -->
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