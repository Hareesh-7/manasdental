<?php include 'includes/header.php'; 
  $sql = $conn->query("SELECT * FROM social_links where id='1' ");
  $result = $sql->fetch(PDO::FETCH_ASSOC); ?>

<section>
   <div class="container-fluid">
      <div class="row justify-content-center">
         <div class="col-md-12">
            <div class="card">

            <form id="social_links" action="social_links.php" method="POST" enctype="multipart/form-data" autocomplete="off">
               <div style="padding-bottom: 20px;" class="card-header">Social Links <a href="index.php"><button style="float: right;" type="button" class="btn btn-outline-dark">Back to menu</button></a></div>
               <div class="card-body">  
                  <div class="form-group row">
                     <label class="col-md-2 col-form-label">Facebook</label>
                     <div class="col-md-5"><input type="text" class="form-control" name="facebook" value="<?php echo $result['facebook']; ?>" placeholder="Enter link" /></div>
                  </div>

                  <div class="form-group row">
                     <label class="col-md-2 col-form-label">Youtube</label>
                     <div class="col-md-5"><input type="text" class="form-control" name="youtube" value="<?php echo $result['youtube']; ?>" placeholder="Enter link" /></div>
                  </div>



                  <div class="form-group row">
                     <label class="col-md-2 col-form-label">Twitter</label>
                     <div class="col-md-5"><input type="text" class="form-control" name="twitter" value="<?php echo $result['twitter']; ?>" placeholder="Enter link" /></div>
                  </div>

                   <div class="form-group row">
                     <label class="col-md-2 col-form-label">Linkedin</label>
                     <div class="col-md-5"><input type="text" class="form-control" name="linkedin" value="<?php echo $result['linkedin']; ?>" placeholder="Enter link" /></div>
                  </div>

                  <div class="form-group row">
                     <label class="col-md-2 col-form-label">Google</label>
                     <div class="col-md-5"><input type="text" class="form-control" name="google" value="<?php echo $result['google']; ?>" placeholder="Enter link" /></div>
                  </div>

                  <div class="form-group row">
                     <label class="col-md-2 col-form-label">Skype</label>
                     <div class="col-md-5"><input type="text" class="form-control" name="skype" value="<?php echo $result['skype']; ?>" placeholder="Enter link" /></div>
                  </div>

                  <div class="form-group row">
                     <label class="col-md-2 col-form-label">Whatsapp</label>
                     <div class="col-md-5"><input type="text" class="form-control" name="whatsapp" value="<?php echo $result['whatsapp']; ?>" placeholder="Enter link" /></div>
                  </div>

                </div>

               <div class="card-header">Seo Tag's</div>
               <div class="card-body">

                  <div class="form-group row">
                     <label class="col-md-2 col-form-label">Meta Title</label>
                     <div class="col-md-5"><textarea class="form-control" rows="7" name="meta_title" placeholder="Meta Title"><?php echo $result['meta_title']; ?></textarea></div>
                  </div>

                  <div class="form-group row">
                     <label class="col-md-2 col-form-label">Meta keywords</label>
                     <div class="col-md-5"><textarea class="form-control" rows="7" name="meta_keywords" placeholder="Meta keywords"><?php echo $result['meta_keywords']; ?></textarea></div>
                  </div>

                 <div class="form-group row">
                     <label class="col-md-2 col-form-label">Meta Description</label>
                     <div class="col-md-5"><textarea class="form-control" rows="7" name="meta_description" placeholder="Meta Description"><?php echo $result['meta_description']; ?></textarea></div>
                  </div>


               <div class="form-group row">
                  <label class="col-md-2 col-form-label"></label>
                  <div class="col-md-5">
                     <button type="submit" name='submit' value='submit' class="btn btn-primary">Submit</button>
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

<?php include 'includes/footer.php';   ?>

<?php if(isset($_POST) && $_POST['submit'] != ''){
 
   foreach ($_POST AS $key => $value) {
       $_POST[$key] = addslashes($value);
   }
   extract($_POST);



$stmt = $conn->prepare("UPDATE social_links SET facebook = :facebook, youtube = :youtube, twitter = :twitter,
  linkedin=:linkedin,google=:google,skype=:skype,whatsapp=:whatsapp, meta_title = :meta_title, meta_keywords = :meta_keywords, meta_description=:meta_description WHERE id = 1 ");
    $stmt->bindParam(':facebook', $facebook);
    $stmt->bindParam(':youtube', $youtube);
    $stmt->bindParam(':twitter', $twitter);
    $stmt->bindParam(':linkedin', $linkedin);
    $stmt->bindParam(':google', $google);
    $stmt->bindParam(':skype', $skype);
    $stmt->bindParam(':whatsapp', $whatsapp);
    $stmt->bindParam(':meta_title', $meta_title);
    $stmt->bindParam(':meta_keywords', $meta_keywords);
    $stmt->bindParam(':meta_description', $meta_description);
   if($stmt->execute()){ ?>

<script type="text/javascript">
    window.location.href = "social_links.php?msg=success";
    </script>

<?php   }
}
 ?>

  <script type="text/javascript">
    $(function(){
      // Setup form validation on the #register-form element
        $("#social_links").validate({

        // Specify the validation rules
        rules: {
          facebook: {
              required: true
            },
          youtube: {
              required: true
            },
          
         twitter: {
              required: true
            },

            linkedin:
            {
              required: true
            },

            google:
            {
              required: true
            },

            skype:
            {
              required: true
            },

            whatsapp:
            {
              required: true
            },
            
            meta_title:{
                required: true
            },
            
            meta_keywords:
            {
                required: true
            },
            meta_description:
            {
                required:true
            }
        },       
        // Specify the validation error messages
        messages: {
          facebook: {
              required: 'Field should not be empty'
            },
          youtube: {
               required: 'Field should not be empty'
            },
          
          twitter: {
              required: 'Field should not be empty'
            },

            linkedin: {
              required: 'Field should not be empty'
            },
           
             google: {
              required: 'Field should not be empty'
            },

            skype: {
              required: 'Field should not be empty'
            },

            whatsapp: {
              required: 'Field should not be empty'
            },

           meta_title:
            {
                required: 'Field should not be empty'
            },
            meta_keywords:
            {
                required: 'Field should not be empty'
            },
            meta_description:
            {
                required: 'Field should not be empty'
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
  </script>


    
         <?php if($_GET['msg'] == 'success'){ ?>

      <script type="text/javascript">
      toastr.success('Details Updated successfully');
      </script>

    <?php }?>
    
    

