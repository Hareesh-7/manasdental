<?php include 'include/header.php'; ?>
<?php $header_images = $conn->query("SELECT * FROM header_images where id='3' ");
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

<!-- Doctor Detail Section -->
<section class="doctor-detail-section">
    <div class="auto-container">
        <div class="row">
            <?php $cms = $conn->query("SELECT * FROM cms where id='5' ");
            $cms = $cms->fetch(PDO::FETCH_ASSOC); ?>
            <div class="content-side col-lg-4 col-md-12 col-sm-12">
                <img src="uploads/<?php echo $cms['image']; ?>" class="patient-edu-img" alt="">
            </div>
            <!-- Content Side -->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="docter-detail">
                    <h3 class="name"><?php echo $cms['title']; ?></h3>

                    <div class="text"><?php echo $cms['description']; ?></div>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Doctor Detail Section -->
<?php include 'include/footer.php'; ?>