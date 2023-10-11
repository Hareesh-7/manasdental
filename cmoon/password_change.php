<?php include 'includes/header.php'; 

include 'includes/dbconnect.php'; 

session_start();
if(!isset($_SESSION["user_name"])){
 header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<body>
<section>
   <div class="container-fluid">
      <div class="row justify-content-center">
         <div class="col-md-12">
            <div class="card">

            <form id="change_password" action="password_change.php" method="POST" enctype="multipart/form-data" autocomplete="off">
               <div style="padding-bottom: 20px;" class="card-header">Change Password <a href="index.php"><button style="float: right;" type="button" class="btn btn-dark"><span class="far fa-arrow-alt-circle-left "> </span> Back to menu</button></a></div>
               <div class="card-body">  

                  <div class="form-group row">
                     <label class="col-md-2 col-form-label">Current Password</label>
                     <div class="col-md-5"><input type="password" id="password" class="form-control" name="password" placeholder="Enter Old Password" /></div>
                  </div>

                  <div class="form-group row">
                     <label class="col-md-2 col-form-label">New Password</label>
                     <div class="col-md-5"><input type="password" id="newpassword" class="new_password form-control" name="newpassword" placeholder="Enter New Password" /></div>
                  </div>

                  <div class="form-group row">
                     <label class="col-md-2 col-form-label">Confirm New Password </label>
                     <div class="col-md-5"><input type="password" class="form-control"  id="confirmpassword" name="confirmpassword" placeholder="Confirm New Password" /></div>
                  </div>               


               <div class="form-group row">
                  <label class="col-md-2 col-form-label"></label>
                              <div class="col-md-9 ">
                                   <button type="submit" class="btn btn-primary" name="submit">Confirm</button>
                                   <button type="reset" class="btn btn-secondary">Reset</button>
               </div>

               </div>
                   
               </form>
             
               </div>
            </div>
         </div>
      </div>
   </div>
</section>


<?php include 'includes/footer.php'; ?>


<?php

 if(!empty($_POST['password']) && !empty($_POST['newpassword']) && !empty($_POST['confirmpassword'])){
 $password = sha1($_POST['password']);
 $newpassword = sha1($_POST['newpassword']);
 $confirmpassword = $_POST['confirmpassword'];

 
 if($password != "" )
 {
   $sql = "UPDATE login SET password = '$newpassword' WHERE id = 1";
   $conn->exec($sql);
 }
   else {
    echo "<script>window.location.href='password_change.php?msg=invalid_login'</script>";
       
        }

 //Redirect Browser
// header("Location:login.php");
 if($sql){
    session_destroy();
    echo "<script>window.location.href='index.php'</script>";
}
}


?> 
<script type="text/javascript">
    $(function(){
      // Setup form validation on the #register-form element
        $("#change_password").validate({
        // Specify the validation rules
       rules:
         {
           password:
           {
             required: true
           },
           newpassword: {
           required : true           
         },
            confirmpassword: {
             required : true,
             equalTo: "#newpassword"
           }
         },
         // Messages for form validation
         messages:
         {
           password:
           {
             required: 'Please enter Old Password'
           },
           newpassword:
           {
             required: 'Please enter New Password'
            
           },
           confirmpassword:
           {
             required: 'Confirm password',
             equalTo: 'Password doesnot match with new password'
           }
         }, 
      });
    });
  </script>

</body>
</html>