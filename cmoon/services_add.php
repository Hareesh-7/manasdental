<?php include 'includes/header.php'; 





if($_GET['id'] != ''){ 



  $id=$_GET['id'];

    $sql = $conn->query("SELECT * FROM services where id='$id' ");

    $result = $sql->fetch(PDO::FETCH_ASSOC);

}



 ?>





<section>



    <div class="container-fluid">   

      <div class="row justify-content-center">

         <div class="col-md-12">

            <div class="card">

               <div class="card-header"> 

               <div style="padding-bottom: 20px;"><a href="services_view.php"><button style="float: right;" class="btn btn-dark" type="button"><span class="far fa-arrow-alt-circle-left "> </span>  Back </button></a>

               Add Or Edit Services</div>

             </div>

                  <div class="card-body">



                     <form id="edit_details" onsubmit="return validate()" method="POST" enctype="multipart/form-data" >

   

             

                <div class="form-group row">

                     <label class="col-md-2 col-form-label">Title</label>

                     <div class="col-md-5"><input type="text" class="form-control" id="title" name="title" value="<?php echo $result['title']; ?>" placeholder="Title" />

                     </div>

                  </div>

                 

             

                <div class="form-group row">

                     <label class="col-md-2 col-form-label">Sub Title</label>

                     <div class="col-md-5"><input type="text" class="form-control" id="sub_title" name="sub_title" value="<?php echo $result['sub_title']; ?>" placeholder="Sub Title" />

                     </div>

                  </div>



              <?php if($result['image'] != ''){ ?>



                  <div class="form-group row">

                     <label class="col-md-2 col-form-label"></label>

                    <div class="col-md-5"><a data-fancybox="gallery" href="../uploads/<?php echo $result['image']; ?>"><img style="width: 100px" src="../uploads/<?php echo $result['image']; ?>" class="img-fluid"></a></div>

                  </div>

              <?php } ?>

                 

                  <div class="form-group row">

                     <label class="col-md-2 col-form-label">Image</label>

                  <div class="col-md-5"><input type="file" class="form-control" name="image" id="file_type" accept="image/*" onchange="Checkfiles()"/>

                  <i><b>Note :</b> Only Jpeg, jpg, png format images are allowed <br> Please upload ( 860 X 572 ) pixel images to maintain design </i></div>

                  </div>



                <div class="form-group row">

                  <label class="col-md-2 col-form-label">Context</label>

                  <div class="col-md-9"><textarea rows="5" class="ckeditor" id="description1" name="description1" placeholder="description1" ><?php echo $result['description1'] ?></textarea>

                   </div>

              </div> 




                 

               

                   <div class="form-group row">

          <label class="col-md-2 col-form-label">Context</label>

          <div class="col-md-9"><textarea rows="5" class="ckeditor" id="description2" name="description2" placeholder="description2" ><?php echo $result['description2'] ?></textarea>

           </div>

      </div> 


                <div class="form-group row">

                  <label class="col-md-2 col-form-label">Precautions</label>

                  <div class="col-md-9"><textarea rows="5" class="ckeditor" id="precautions" name="precautions" placeholder="precautions" ><?php echo $result['precautions'] ?></textarea>

                   </div>

              </div> 
              
              
                <div class="form-group row">

                  <label class="col-md-2 col-form-label">Intelligence</label>

                  <div class="col-md-9"><textarea rows="5" class="ckeditor" id="intelligence" name="intelligence" placeholder="intelligence" ><?php echo $result['intelligence'] ?></textarea>

                   </div>

              </div> 
              
              
                <div class="form-group row">

                  <label class="col-md-2 col-form-label">Specialzations</label>

                  <div class="col-md-9"><textarea rows="5" class="ckeditor" id="specializations" name="specializations" placeholder="specializations" ><?php echo $result['specializations'] ?></textarea>

                   </div>

              </div> 



                    <div class="col-md-9 offset-md-3">

                                   <button type="submit" class="btn btn-primary" value="submit"name="submit">Submit</button>

                                   <button type="reset" class="btn btn-secondary">Reset</button>



                                  <!--  <button type="reset" class="btn btn-primary"><span class="far fa-undo "> </span></button> -->

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



<?php include 'includes/footer.php'; ?>



<?php if($_GET['msg'] == 'imgerror'){ 

        echo '<script type="text/javascript">';

    echo 'setTimeout(function () { swal("IMAGE ERROR!","Image is not selected or Image size exceeds 2MB ,Please select only jpg,jpeg and png format images below 2MB size","warning");';

    echo '}, 1000);</script>';  }  ?>



<?php if(isset($_POST) && $_POST['submit'] != ''){



if($_GET['id'] == ''){



if(isset($_FILES['image']) && $_FILES['image']['size']>0 && $_FILES['image']['size'] <= '2000000' ){



$time_stamp = time();

   $image = $_FILES['image']['name'];

   $image = $time_stamp.'_'.$image;

   $target_dir = "../uploads/";

   $target_file = $target_dir.basename($_FILES["image"]["name"]);

   $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

   $extensions_arr = array("jpg", "jpeg", "png", "gif");

   $location = '../uploads/'.$image;

   if (in_array($imageFileType, $extensions_arr)) {

       move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/'.$image);

   }



}else{ ?>

  <script type="text/javascript">

window.location.href = "services_add.php?msg=imgerror";

  </script>



<?php }




   foreach ($_POST AS $key => $value) {

       $_POST[$key] = ($value);

   }

   extract($_POST);





   

   $string = str_replace(" ", "-", $title); // Replaces all spaces with hyphens.

   $string = preg_replace('/[^A-Za-z0-9 \-]/', '-', $string); // Removes special chars.

   $p_link1 = preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.



  $p_link=$p_link1.'-'.rand(1,9999); 








   $stmt1 = $conn->prepare("INSERT INTO services (title,sub_title,image, description1,description2,precautions,intelligence,specializations, p_link) VALUES (:title,:sub_title,:image,:description1,:description2,:precautions,:intelligence,:specializations,:p_link)");



    $stmt1->bindParam(':title', $title);

    $stmt1->bindParam(':sub_title',$sub_title);

    $stmt1->bindParam(':image', $image);
    
  

    $stmt1->bindParam(':description1', $description1);

     $stmt1->bindParam(':description2', $description2);
     
       $stmt1->bindParam(':precautions', $precautions);
    
    $stmt1->bindParam(':intelligence', $intelligence);
    
      $stmt1->bindParam(':specializations', $specializations);

    $stmt1->bindParam(':p_link', $p_link);



   if($stmt1->execute()){ ?>





<script type="text/javascript">

    window.location.href = "services_view.php?msg=success";

    </script>



<?php   }

}



 else{



  if( $_FILES['image']['size'] <= '2000000'){



if(isset($_FILES['image']) && $_FILES['image']['size']>0){



$time_stamp = time();

   $image = $_FILES['image']['name'];

   $image = $time_stamp.'_'.$image;

   $target_dir = "../uploads/";

   $target_file = $target_dir.basename($_FILES["image"]["name"]);

   $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

   $extensions_arr = array("jpg", "jpeg", "png", "gif");

   $location = '../uploads/'.$image;

   if (in_array($imageFileType, $extensions_arr)) {

       move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/'.$image);

   }



}else{

$image=$result['image'];

}







   foreach ($_POST AS $key => $value) {

       $_POST[$key] = ($value);

   }

   extract($_POST);



  

   $string = str_replace(" ", "-", $title); // Replaces all spaces with hyphens.

   $string = preg_replace('/[^A-Za-z0-9 \-]/', '-', $string); // Removes special chars.

   $p_link1 = preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.



  $p_link=$p_link1.'-'.rand(1,9999); 



  $stmt1 = $conn->prepare("UPDATE services SET title=:title,sub_title=:sub_title,image = :image,description1=:description1,description2=:description2,precautions=:precautions,intelligence=:intelligence,specializations=:specializations,p_link=:p_link WHERE id = :id ");



    $stmt1->bindParam(':title', $title);

    $stmt1->bindParam(':sub_title',$sub_title);

    $stmt1->bindParam(':image', $image);



    $stmt1->bindParam(':description1', $description1);

    $stmt1->bindParam(':description2',$description2);
    
     $stmt1->bindParam(':precautions', $precautions);
 
    $stmt1->bindParam(':intelligence', $intelligence);
    
      $stmt1->bindParam(':specializations', $specializations);

    $stmt1->bindParam(':p_link', $p_link);

    $stmt1->bindParam(':id', $id);



   if($stmt1->execute()){ ?>



<script type="text/javascript">

    window.location.href = "services_view.php?msg=edited";

    </script>



<?php   }



}else{?>

   <script type="text/javascript">

window.location.href = "services_add.php?msg=imgerror";

  </script>



<?php 



}

}

}

 ?>





  <script type="text/javascript">

    $(function(){

      // Setup form validation on the #register-form element

        $("#edit_details").validate({
            ignore: [],
            debug: false,

          // Specify the validation rules

 rules: {

          title: {

              required: true

            },
              
              sub_title:
              {
                required: true
              },
             

            description1: {

              required: true

            },
            description2:
            {
              required:true
            },
             precautions:
              {
                required: true
              },
             intelligence:
              {
                required: true
              },
            specializations:
              {
                required: true
              }

            

        },       

        // Specify the validation error messages

        messages: {

          title: {

              required: 'Field should not be empty'

            },

           sub_title:
           {
            required: 'Field should not be empty'
           },
             
            description1: {

              required: 'Field should not be empty'

            },
            description2:
            {
              required: 'Field should not be empty'
            },
             precautions:
               {
                required: 'Field should not be empty'
              },
             intelligence:
              {
                required: 'Field should not be empty'
              },
            specializations:
              {
                required: 'Field should not be empty'
              }

        },

      });

    });





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