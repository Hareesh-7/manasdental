<?php error_reporting(0);

session_start();

include 'includes/dbconnect.php';



$sql = $conn->query("SELECT * FROM details where id='1' ");



$result = $sql->fetch(PDO::FETCH_ASSOC); 

?>

<!doctype html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="css/f5.css">

    <link rel="stylesheet" type="text/css" href="css/animate.css">

    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <script src="http://code.jquery.com/jquery.js"></script>

    <link rel='shortcut icon' href='../uploads/<?php echo $result['site_favicon']; ?>' type='image' />    



    

    <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

    <title>Dashboard/<?php echo $result['site_name'];?></title>

</head>

<body>

    <section class="login-interface d-flex align-items-center">

        <div class="flex-grow-1">

            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-md-6">

             <div class="card">

                 <div class="card-body p-4">

                



                         <h5 style="color: red;"><?php if($_GET['msg'] == 'error'){ echo " *Your Email-Id does not matches with the orginal Mail_ID";  } ?></h5>         

                         <h5 style="color: red;"><?php if($_GET['msg'] == 'failed'){ echo " *Unable to sent mail.Please try again..";  } ?></h5> 

                         <h5 style="color: blue;"><?php if($_GET['msg'] == 'sucess'){ echo " *Mail has been sent to your Mail-ID";  } ?></h5>        



               

                    <form method="POST" id="login" action="">



                       <div class="row">

                        <div class="col-md-12">

                           <div class="form-group">

                              <label>Email-Id</label>

                              <input type="email" class="form-control" name="email" id="email" placeholder="email">

                           </div>

                        </div>

                      

                        <div class="col-md-12 py-4 text-center">



                           <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>

                           <button type="reset" class="btn btn-secondary">Reset</button>

                              

                        </div>

                        <div class="col-md-12 text-center">

                             <a href="login.php" class="text-muted">LOGIN</a>

                        </div>

                     </div>

                  </form>

                 </div>

             </div>

                    </div>

                </div>

    

</div>

        </div>

    </section>





</body>

</html>

</body>

</html>





<?php



 if(isset($_POST['submit']) && $_POST['submit'] !=''){



 $email =$_POST['email'];



$stmt = $conn->prepare("SELECT  * FROM details WHERE forgot_email=:email");

$stmt->bindValue(':email',$email, PDO::PARAM_STR);

$stmt->execute();



if($stmt->rowCount($stmt) > 0){







$seed = str_split('abcdefghijklmnopqrstuvwxyz'

                .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'

                .'0123456789'); // and any other characters

shuffle($seed); // probably optional since array_is randomized; this may be redundant

$rand = '';

foreach (array_rand($seed, 10) as $k) 



$rand .= $seed[$k]; 





$result1=sha1($rand);





// echo "UPDATE login SET password = $result1";

// die;



$sql1 = $conn->query("UPDATE login SET password = '$result1' WHERE id='1'");





 if($sql1->execute()){





$message1 = "As per your request we have reset your password, your default password is :$rand";





       $site_details = $conn->query("SELECT * FROM details WHERE id=1")->fetch(PDO::FETCH_OBJ);







       $site = $site_details->site_name;



       require_once "../Mail/class.phpmailer.php";



       $email = new PHPMailer();



       $email->From = $site_details->from_email;



       $email->FromName = $site;



       $email->Subject = "PASSWORD RESET MAIL";



       $email->isHTML(true);



       $email->Body = $message1;



       $email->AddAddress("$site_details->forgot_email");



       $sucess = $email->Send();



       if ($sucess) {

    

           ?>

           <script type="text/javascript">

               window.location.href = "login.php?msg=sucess";

           </script>

       <?php } 

       else { ?>

           <script type="text/javascript">

               window.location.href = "forgot.php?msg=failed";

           </script>

           <?php

      

      }}}

else{ ?>





 <script type="text/javascript">

               window.location.href = "forgot.php?msg=error";

           </script>



<?php 

}

}



?>