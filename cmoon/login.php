<?php error_reporting(0);
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
                    <div class="col-md-4">
             <div class="card">
                 <div class="card-body p-4">
                
                    <img src="../uploads/<?php echo $result['site_logo']; ?>" height="80" class="d-block mx-auto mb-4">

                         <br>
                    <?php if($_GET['msg'] == 'faild'){ ?>
                    <h3 style="color: red;">Invalid login details</h3>
                  <?php } ?>
                    <br>
                    <form method="post" id="login" action="">

                       <div class="row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <label>User Name</label>
                              <input type="text" class="form-control" name="user_name" id="user_name" placeholder="User Name">
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <label>Password</label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                           </div>
                        </div>
                    
                        <div class="col-md-12 py-4 text-center">

                           <button type="submit" class="btn btn-primary">Submit</button>
                           <button type="reset" class="btn btn-secondary">Reset</button>
                              
                        </div>
                        <div class="col-md-12 text-center">
                             <a href="forgot.php" class="text-muted">Forgot Password ?</a>
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


<?php

 if(isset($_POST) && $_POST['password'] !=''){


 $user_name = $_POST['user_name'];
 $password = sha1($_POST['password']);


$stmt1 = $conn->prepare("SELECT  * FROM login WHERE user_name=:user_name AND password=:password");
    

$stmt1->bindValue(':user_name',$user_name, PDO::PARAM_STR);
$stmt1->bindValue(':password',$password, PDO::PARAM_STR);
$stmt1->execute();
  

if($stmt1->rowCount() > 0){


session_start();
 $_SESSION['user_name']=$user_name;
 $_SESSION['password']=$password;

$user_name='admin';

date_default_timezone_set('Asia/Kolkata');
$login_time = date( 'd-m-Y h:i:s A', time () );
$ip_address=$_SERVER['SERVER_ADDR'];
// $login_time=date("d-m-Y h:i A");

$stmt2= $conn->prepare("INSERT INTO logs (user_name,ip_address,login_time) VALUES (:user_name,:ip_address,:login_time) ");
$stmt2->bindValue(':user_name',$user_name, PDO::PARAM_STR);
$stmt2->bindValue(':ip_address',$ip_address, PDO::PARAM_STR);
$stmt2->bindValue(':login_time',$login_time, PDO::PARAM_STR);
$stmt2->execute();

    echo "<script>window.location.href='index.php'</script>";


}else{  

    echo "<script>window.location.href='login.php?msg=faild'</script>";

}
}


?> 
<script type="text/javascript">
    $(function(){
      // Setup form validation on the #register-form element
        $("#login").validate({

        // Specify the validation rules
        rules: {
          user_name: {
              required: true
            },
          password: {
              required: true
            }
        },       
        // Specify the validation error messages
        messages: {
          user_name: {
              required: 'Field should not be empty'
            },
          password: {
              required: 'Field should not be empty'
            }
        },
      });
    });
  </script>
</body>
</html>
</body>
</html>