<?php session_start();
include 'include/header.php'; ?>
<?php $header_images = $conn->query("SELECT * FROM header_images where id='6' ");
$header_images_row = $header_images->fetch(PDO::FETCH_ASSOC); ?>
<!--Page Title-->
<!-- <section class="page-title" style="background-image: url(uploads/<?php echo $header_images_row['image']; ?>);"> -->
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

<!-- Contact Section -->
<section class="contact-section" id="contact">
    <div class="small-container">
        <div class="sec-title text-center">
            <span class="sub-title">Contact Now</span>
            <h2>Write us a Message !</h2>

        </div>


        <!-- Contact box -->
        <div class="contact-box">
            <div class="row">
                <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner">
                        <span class="icon flaticon-worldwide"></span>
                        <h4><strong>Address</strong></h4>
                        <p><?php echo $result['address']; ?></p>
                    </div>
                </div>

                <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner">
                        <span class="icon flaticon-phone"></span>
                        <h4><strong>Phone</strong></h4>
                        <p><?php echo $result['call_timings']; ?></p>
                        <p><a href="#"><?php echo $result['site_number']; ?></a></p>
                    </div>
                </div>

                <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner">
                        <span class="icon flaticon-email"></span>
                        <h4><strong>Email</strong></h4>
                        <p>Do you have a Question?</p>
                        <p><a href="mailto:<?php echo $result['site_email']; ?>"><?php echo $result['email']; ?></a></p>

                    </div>
                </div>
            </div>
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
        <!-- Form box -->
        <div class="form-box">
            <div class="contact-form">
                <form action="" method="POST" id="details" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-lg-12">
                            <div class="response"></div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <input type="text" name="username" class="username" placeholder="Full Name *">
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" class="email" placeholder="Email Address *">
                            </div>

                            <div class="form-group">
                                <input type="text" name="phone" class="phone" placeholder="Your Phone">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <textarea name="message" class="message" placeholder="Massage"></textarea>
                            </div>

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





                        <div class="form-group col-lg-12 text-center pt-3">
                            <button class="theme-btn btn-style-one" type="submit" id="submit" name="submit" value="submit"><span class="btn-title">Send Message</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--End Contact Section -->
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
        echo "<script>document.location.href='contact?msg=captcha_error'</script>";
    } else {
        foreach ($_POST as $key => $value) {
            $_POST[$key] = addslashes($value);
        }
        extract($_POST);

        $message1 = "Name : $username<br/>
                    Email :$email<br/>
                   Phone Number : $phone<br/>
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
                window.location.href = "contact?msg=success";
            </script>

        <?php } else { ?>

            <script type="text/javascript">
                window.location.href = "contact?msg=failed";
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


                message: {
                    required: '*Field should not be empty',
                    maxlength: 'only  500 charecters are allowed'

                }
            },
        });
    });
</script>