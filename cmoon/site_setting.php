<?php include 'includes/header.php'; 

   $sql = $conn->query("SELECT * FROM details where id='1' ");
          $result = $sql->fetch(PDO::FETCH_ASSOC); ?>

          
<section>
   <div class="container-fluid">
      <div class="row justify-content-center">
         <div class="col-md-12">
            <div class="card">

            <form id="site_settings" action="site_setting.php" method="POST" enctype="multipart/form-data" autocomplete="off">
               <div style="padding-bottom: 20px;" class="card-header">Site Details <a href="index.php"><button style="float: right;" type="button" class="btn btn-outline-dark">Back to menu</button></a></div>
               <div class="card-body">                  
                  <div class="form-group row">
                     <label class="col-md-2 col-form-label">Site Name</label>
                     <div class="col-md-5"><input type="text" class="form-control" name="site_name" value="<?php echo $result['site_name'] ?>" placeholder="Site Name" /></div>
                  </div>
                    
                  <div class="form-group row">
                     <label class="col-md-2 col-form-label">Site Phone Number</label>
                     <div class="col-md-5"><input type="text" class="form-control" name="site_number"  value="<?php echo $result['site_number'] ?>" placeholder="Phone Number" /></div>
                  </div>

                  <div class="form-group row">
                     <label class="col-md-2 col-form-label">Site Email-Id</label>
                     <div class="col-md-5"><input type="text" class="form-control" name="site_email" value="<?php echo $result['site_email'] ?>"  placeholder="Site Email-Id" /></div>
                  </div>  

                  <div class="form-group row">
                     <label class="col-md-2 col-form-label">From Email-Id</label>
                     <div class="col-md-5"><input type="text" class="form-control" name="from_email" value="<?php echo $result['from_email'] ?>"  placeholder="Site Email-Id" /></div>
                  </div>

                  <div class="form-group row">
                     <label class="col-md-2 col-form-label">Forgot password Email-Id</label>
                     <div class="col-md-5"><input type="text" class="form-control" name="forgot_email" value="<?php echo $result['forgot_email'] ?>"  placeholder="Site Email-Id" /></div>
                  </div>

                  </div>

               <div class="card-header">Site Logo's</div>
               <div class="card-body">

                 
                        <div class="form-group row">
                     <label class="col-md-2 col-form-label"></label>
                        <div class="col-3 mb-4"><a data-fancybox="gallery" href="../uploads/<?php echo $result['site_logo']; ?>"><img style="width: 300px" src="../uploads/<?php echo $result['site_logo']; ?>" class="img-fluid"></a></div>
                  </div>

                  <div class="form-group row">
                     <label class="col-md-2 col-form-label">Site Logo</label>
                     <div class="col-md-5"><input type="file" class="form-control" accept="image/*" name="site_logo" id="file_type" onchange="Checkfiles()"/ placeholder="Site Logo" />
                      <i><b>Note :</b> Only Jpeg, jpg, png format images are allowed <br> Please upload ( 190 X 64 ) pixel images to maintain design </i>
                     </div>
                  </div>


                  <div class="form-group row">
                     <label class="col-md-2 col-form-label"></label>
                        <div class="col-3 mb-4"><a data-fancybox="gallery" href="../uploads/<?php echo $result['site_favicon']; ?>"><img style="width: 100px" src="../uploads/<?php echo $result['site_favicon']; ?>" class="img-fluid"></a></div>
                  </div>

                  <div class="form-group row">
                     <label class="col-md-2 col-form-label">Site Favicon</label>
                     <div class="col-md-5"><input type="file" class="form-control" accept="image/*" name="site_favicon" id="file_type" onchange="Checkfiles()"/  placeholder="Logo" />
                      <i><b>Note :</b> Only Jpeg, jpg, png format images are allowed <br> Please upload ( 100 X 100 ) pixel images to maintain design </i></div>
                  </div>

                   <div class="form-group row">
                     <label class="col-md-2 col-form-label"></label>
                        <div class="col-3 mb-4"><a data-fancybox="gallery" href="../uploads/<?php echo $result['footer_logo']; ?>"><img style="width: 100px" src="../uploads/<?php echo $result['footer_logo']; ?>" class="img-fluid"></a></div>
                  </div>

                  <div class="form-group row">
                     <label class="col-md-2 col-form-label">Footer Logo</label>
                     <div class="col-md-5"><input type="file" class="form-control" accept="image/*" name="footer_logo" id="file_type" onchange="Checkfiles()"/  placeholder="Logo" />
                      <i><b>Note :</b> Only Jpeg, jpg, png format images are allowed <br> Please upload ( 1349 X 545 ) pixel images to maintain design </i></div>
                  </div>


                    <div class="form-group row">
                     <label class="col-md-2 col-form-label">Footer Name</label>
                     <div class="col-md-5"><input type="text" class="form-control" name="footer_name" value="<?php echo $result['footer_name'] ?>" placeholder="footer Name" /></div>
                  </div>

                  <div class="form-group row">
                     <label class="col-md-2 col-form-label">Footer context</label>
                     <div class="col-md-5"><textarea class="form-control" rows="4" name="footer_context" ><?php echo $result['footer_context'] ?></textarea></div>
                  </div>

                  
               </div>

             
               <div class="card-header">Contact Details</div>
               <div class="card-body">

                  <div class="form-group row">
                     <label class="col-md-2 col-form-label">Address</label>
                     <div class="col-md-5"><textarea class="form-control" rows="4" name="address" ><?php echo $result['address'] ?></textarea></div>
                  </div>


                 <div class="form-group row">
                     <label class="col-md-2 col-form-label"> Email-Id</label>
                     <div class="col-md-5"><input type="text" class="form-control" name="email" value="<?php echo $result['email'] ?>"  placeholder=" Email-Id" /></div>
                  </div>

                  <div class="form-group row">
                     <label class="col-md-2 col-form-label">Phone Number</label>
                     <div class="col-md-5"><input type="text" class="form-control" name="phone_number1" value="<?php echo $result['phone_number1'] ?>"  placeholder="Phone Number" /></div>
                  </div>

                   <div class="form-group row">
                     <label class="col-md-2 col-form-label">Office Timings</label>
                     <div class="col-md-5"><input type="text" class="form-control" name="office_timings" value="<?php echo $result['office_timings'] ?>"  placeholder="Office Timings" /></div>
                  </div>

                 <div class="form-group row">
                     <label class="col-md-2 col-form-label">Call Timings</label>
                     <div class="col-md-5"><input type="text" class="form-control" name="call_timings" value="<?php echo $result['call_timings'] ?>"  placeholder="Call Timings" /></div>
                  </div>

                       <div class="form-group row">
                     <label class="col-md-2 col-form-label">Close Timings</label>
                     <div class="col-md-5"><input type="text" class="form-control" name="close_timings" value="<?php echo $result['close_timings'] ?>"  placeholder="Close Timings" /></div>
                  </div>

               </div>

               
               <div class="form-group row">
                  <label class="col-md-2 col-form-label"></label>
                  <div class="col-md-5">
                     <button type="submit" name='submit' value='submit' class="btn btn-dark">Submit</button>   
                     <button type="reset" class="btn btn-secondary">Reset</button>
                  </div>
               </div>

                  </div>
                  </form>
             
               </div>
            </div>
         </div>
      </div>
   </div>
</section>


<?php if(isset($_POST) && $_POST['submit'] != ''){

 $site_name=$_POST['site_name'];
 $site_number =$_POST['site_number'];
 $site_email=$_POST['site_email'];
 $from_email=$_POST['from_email'];
 $forgot_email=$_POST['forgot_email'];
 $footer_context=$_POST['footer_context'];
 $address=$_POST['address']; 
 $email=$_POST['email'];
 $phone_number1=$_POST['phone_number1'];
 $office_timings=$_POST['office_timings'];
 $call_timings=$_POST['call_timings'];
 $close_timings=$_POST['close_timings'];
 $footer_name=$_POST['footer_name'];



 $bannerpath="../uploads/";


 if($site_logo=$_FILES['site_logo']['name']){

   $site_logo=$_FILES['site_logo']['name'];

    move_uploaded_file($_FILES["site_logo"]["tmp_name"],$bannerpath."".$site_logo);
//   unlink($_FILES["site_logo"]["tmp_name"],$bannerpath);
 }else{
   $site_logo=$result['site_logo'];
 }




 if($site_favicon=$_FILES['site_favicon']['name']){

   $site_favicon=$_FILES['site_favicon']['name'];
   move_uploaded_file($_FILES["site_favicon"]["tmp_name"],$bannerpath."".$site_favicon);
    // unlink($_FILES["site_favicon"]["tmp_name"],$bannerpath);
 }else{
   $site_favicon=$result['site_favicon'];
 }
 

 if($footer_logo=$_FILES['footer_logo']['name']){

   $footer_logo=$_FILES['footer_logo']['name'];
   move_uploaded_file($_FILES["footer_logo"]["tmp_name"],$bannerpath."".$footer_logo);
    // unlink($_FILES["site_favicon"]["tmp_name"],$bannerpath);
 }else{
   $footer_logo=$result['footer_logo'];
 }
 


     $stmt1 = $conn->prepare("UPDATE details SET site_name = :site_name, site_number = :site_number, site_email = :site_email, from_email = :from_email, forgot_email = :forgot_email, site_logo = :site_logo, site_favicon=:site_favicon,footer_logo=:footer_logo,footer_name=:footer_name, footer_context=:footer_context, address=:address,email = :email, phone_number1=:phone_number1,office_timings=:office_timings,call_timings=:call_timings,close_timings=:close_timings WHERE id = 1 ");

    $stmt1->bindParam(':site_name', $site_name);
    $stmt1->bindParam(':site_number', $site_number);
    $stmt1->bindParam(':site_email', $site_email);
    $stmt1->bindParam(':from_email', $from_email);
    $stmt1->bindParam(':forgot_email', $forgot_email);
    $stmt1->bindParam(':site_logo', $site_logo);
    $stmt1->bindParam(':site_favicon', $site_favicon);
     $stmt1->bindParam(':footer_logo', $footer_logo);
    $stmt1->bindParam(':footer_name', $footer_name);
    $stmt1->bindParam(':footer_context', $footer_context);
    $stmt1->bindParam(':address', $address);
   $stmt1->bindParam(':email', $email);
    $stmt1->bindParam(':phone_number1', $phone_number1);
    $stmt1->bindParam(':office_timings', $office_timings);
    $stmt1->bindParam(':call_timings', $call_timings);
    $stmt1->bindParam(':close_timings', $close_timings);
  
   if($stmt1->execute()){ ?>

<script type="text/javascript">
    window.location.href = "site_setting.php?msg=success";
    </script>

<?php   }
}
 ?>

<?php include 'includes/footer.php'; ?>

  <script type="text/javascript">
    $(function(){
      // Setup form validation on the #register-form element
        $("#site_settings").validate({

        // Specify the validation rules
        rules: {
          site_name: {
              required: true
            },
        site_number: {
              required: true,
               minlength: 10,
               maxlength: 16
            },
          site_email: {
              required: true,
              email: true
            },
             
          from_email: {
              required: true,
              email: true
            },
              
          forgot_email: {
              required: true,
              email: true
            },
          footer_name: {
              required: true
            },     
          footer_context: {
              required: true,
              maxlength:500
            },
                         
          address: {
              required: true,
              maxlength: 300
            },


             email: {
              required: true,
              email: true
            },
             phone_number1: {
              required: true,
               minlength: 10,
               maxlength: 16
            },
            office_timings:
            {
              required: true
            },

            call_timings:
            {
              required:true
            },
            close_timings:
            {
              required: true
            }
            
        },       
        // Specify the validation error messages
        messages: {
          site_name: {
              required: 'Field should not be empty'
            },
        site_number: {
               required: 'Field should not be empty',
               minlength: 'Please enter a valid mobile number',
               maxlength: 'Please enter a valid mobile number'
            },
          site_email: {
              required: 'Field should not be empty',
              email: 'Please enter a valid email id'
            },
          from_email: {
              required: 'Field should not be empty',
              email: 'Please enter a valid email id'
            },
        forgot_email: {
              required: 'Field should not be empty',
              email: 'Please enter a valid email id'
            },

            footer_name: {
              required: 'Field should not be empty'
            },
        footer_context: {
              required: 'Field should not be empty',
              maxlength: 'Only 300 characters are allowed'
            },
        
          address: {
              required: 'Field should not be empty',
              maxlength: 'Only 300 characters are allowed'
            },

          email: {
              required: 'Field should not be empty',
              email: 'Please enter a valid email id'
            },
        phone_number1: {
               required: 'Field should not be empty',
               minlength: 'Please enter a valid mobile number',
               maxlength: 'Please enter a valid mobile number'
            },
         office_timings:
         {
          required:'*Field should not be empty'
         },

          call_timings:
         {
          required:'*Field should not be empty'
         }, 
           
          close_timings:
         {
          required:'*Field should not be empty'
         }     

        },
      });
    });
  </script>
  <script type="text/javascript">
    
toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-bottom-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}


function Checkfiles()
{
var fup = document.getElementById('file_type');
var fileName = fup.value;
var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
if(ext == "jpeg"  || ext == "jpg" || ext == "png")
{
return true;
} 
else
{
alert("Upload jpeg,jpg,png Files only");
document.getElementById('file_type').value="";
fup.focus();
return false;
}
}
  </script>

  <?php if($_GET['msg'] == 'success'){ ?>

      <script type="text/javascript">
      toastr.success('Details Updated successfully');
      </script>

  <?php } ?>

