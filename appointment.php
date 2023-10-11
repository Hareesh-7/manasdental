<?php session_start();
include 'include/header.php'; ?>
<?php $header_images = $conn->query("SELECT * FROM header_images where id='7' ");
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

<!-- Appointment Form Section -->
<section class="appointment-form-section why-choose-us" style="background-image: url(images/background/3.jpg);">
    <div class="auto-container">
        <div class="appointment-box">
            <div class="row">
                <!-- Form Column -->
                <div class="form-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="appointment-form default-form">
                            <div class="sec-title">
                                <h2>Make An Appointment</h2>
                            </div>

                            <h2 style="color: #FD226A;"><?php if ($_GET['msg'] == 'captcha_error') {
                                                            echo "*Incorrect captcha";
                                                        } ?></h2>

                            <h2 style="color: #FD226A;"><?php if ($_GET['msg'] == 'success') {
                                                            echo " Message sent successfully";
                                                        } ?></h2>

                            <h2 style="color: #FD226A;"><?php if ($_GET['msg'] == 'failed') {
                                                            echo " *Failed Please try again later";
                                                        } ?></h2>
                            <!--Comment Form-->
                            <form action="" method="POST" id="details" enctype="multipart/form-data">
                                <div class="form-group">
                                    <div class="response"></div>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="username" placeholder="Your Name">
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Your Email *">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="phone" placeholder="Your Phone">
                                </div>

                                <div class="form-group">
                                    <select class="" name="services">
                                        <option value="">Service</option>
                                        <?php $no = 1;

                                        $services1 = $conn->query("SELECT * FROM services");
                                        while ($services = $services1->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <option value="<?php echo $services['title']; ?>"><?php echo $services['title']; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <textarea name="message" placeholder="Tell us about Pasent"></textarea>
                                </div>
                                <div class="col-12">

                                    <label class="col-md-6">

                                        <img src="captcha_code_file.php?rand=" width="120" height="40" class="capcha" id='captchaimg' />

                                        <a href='javascript: refreshCaptcha();'>

                                            <img src="refresh.png" style="background:#000000;" width="25" height="25" /></a>

                                    </label>

                                    <label class="col-md-3">

                                        <input type="text" class="form-control" name="captcha" width="25" height="25" />

                                    </label>

                                </div>

                                <div class="form-group">
                                    <button class="theme-btn btn-style-one bg-kellygreen" type="submit" name="submit" value="submit"><span class="btn-title">Submit</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <figure class="image"><img src="images/doctor.png" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Appointment Form Section -->
<?php include 'include/footer.php'; ?>


<script type='text/javascript'>
    function refreshCaptcha() {
        var img = document.images['captchaimg'];
        img.src = img.src.substring(0, img.src.lastIndexOf("?")) + "?rand=" + Math.random() * 1000;
    }
</script>

<?php if (isset($_POST['submit'])) {

    if (
        empty($_SESSION['6_letters_code']) ||
        strcasecmp($_SESSION['6_letters_code'], $_POST['captcha']) != 0
    ) {
        echo "<script>document.location.href='appointment?msg=captcha_error'</script>";
    } else {
        foreach ($_POST as $key => $value) {
            $_POST[$key] = addslashes($value);
        }
        extract($_POST);

        $message1 = "Name : $username<br/>
                    Email :$email<br/>
                   Phone Number : $phone<br/>
                   Services: $services<br/>
                   Message : $message";

        $site_details = $conn->query("SELECT * FROM details WHERE id=1")->fetch(PDO::FETCH_ASSOC);
        $site = $site_details['site_name'];


        require_once "Mail/class.phpmailer.php";
        $email = new PHPMailer();
        $email->From = $site_details['from_email'];
        $email->FromName = $site;
        $email->Subject = "Client  Enquiry mail";
        $email->isHTML(true);
        $email->Body = $message1;
        $email->AddAddress($site_details['site_email']);
        $sucess = $email->Send();


        if ($sucess) {   ?>

            <script type="text/javascript">
                window.location.href = "appointment?msg=success";
            </script>

        <?php } else { ?>

            <script type="text/javascript">
                window.location.href = "appointment?msg=failed";
            </script>

<?php }
    }
} ?>

<style>
    .error {
        color: #ff0000;
    }
</style>

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<script type="text/javascript">
    $(function() {
        // Setup form validation on the #register-form element
        $("#details").validate({

            // Specify the validation rules
            rules: {
                username: {
                    required: true
                },

                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 16
                },

                services: {
                    required: true
                },

                message: {
                    required: true,
                    maxlength: 500

                }
            },
            // Specify the validation error messages
            messages: {
                username: {
                    required: '*Field should not be empty'
                },

                email: {
                    required: '*Field should not be empty',
                    email: 'Please enter a valid email address'
                },

                phone: {
                    required: '*Field should not be empty',
                    digits: '*only numbers are allowed',
                    minlength: 'Please enter a valid mobile number',
                    maxlength: 'Please enter a valid mobile number'
                },

                services: {
                    required: '*Please select an option'
                },
                message: {
                    required: '*Field should not be empty',
                    maxlength: 'only  500 charecters are allowed'

                }
            },
        });
    });
</script>