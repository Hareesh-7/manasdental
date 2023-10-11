<?php include 'includes/header.php'; 





if($_GET['id'] != ''){ 



  $id=$_GET['id'];

    $sql = $conn->query("SELECT * FROM header_images where id='$id' ");

    $result = $sql->fetch(PDO::FETCH_ASSOC);
    
}

?>

<section>
  
<div class="container-fluid">   

      <div class="row justify-content-center">

         <div class="col-md-12">

            <div class="card">

               <div class="card-header"> 

               <div style="padding-bottom: 20px;"><a href="header_imagesview.php"><button style="float: right;" class="btn btn-dark" type="button"><span class="far fa-arrow-alt-circle-left "> </span>  Back </button></a>
               Edit Heder Images</div>

             </div>

                  <div class="card-body">



                     <form id="edit_details" onsubmit="return validate()" method="POST" enctype="multipart/form-data" >

   

             

                <div class="form-group row">

                     <label class="col-md-2 col-form-label">Title</label>

                     <div class="col-md-5"><input type="text" class="form-control" id="title" name="title" value="<?php echo $result['title']; ?>" readonly placeholder="Title" />

                     </div>

                  </div>


              

                 



              <?php if($result['image'] != ''){ ?>



                  <div class="form-group row">

                     <label class="col-md-2 col-form-label"></label>

                    <div class="col-md-5"><a data-fancybox="gallery" href="../uploads/<?php echo $result['image']; ?>"><img style="width: 900px" "height: 300px" src="../uploads/<?php echo $result['image']; ?>" class="img-fluid"></a></div>

                  </div>

              <?php } ?>

                 

                  <div class="form-group row">

                     <label class="col-md-2 col-form-label">Image</label>

                  <div class="col-md-5"><input type="file" class="form-control" name="image" id="file_type" accept="image/*" onchange="Checkfiles()"/>

                  <i><b>Note :</b> Only Jpeg, jpg, png format images are allowed <br> Please upload ( 1349 X 256 ) pixel images to maintain design </i></div>

                  </div>



                    <div class="form-group row">
                     <label class="col-md-2 col-form-label">Meta Title</label>
                     <div class="col-md-5"><textarea class="form-control" rows="7" name="meta_title" placeholder="Meta Title"><?php echo $result['meta_title']; ?></textarea></div>
                  </div>
                  
                           <div class="form-group row">
                     <label class="col-md-2 col-form-label">Meta Keywords</label>
                     <div class="col-md-5"><textarea class="form-control" rows="7" name="meta_keywords" placeholder="Meta Keywords"><?php echo $result['meta_keywords']; ?></textarea></div>
                  </div>

                <div class="form-group row">
                     <label class="col-md-2 col-form-label">Meta Description</label>
                     <div class="col-md-5"><textarea class="form-control" rows="7" name="meta_description" placeholder="Meta Description"><?php echo $result['meta_description']; ?></textarea></div>
                  </div>

                    <div class="col-md-9 offset-md-3">

                                   <button type="submit" class="btn btn-primary" value="submit"name="submit">Submit</button>

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

window.location.href = "header_imagesadd.php?msg=imgerror";

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


$stmt1 = $conn->prepare("INSERT INTO header_images (title,meta_title,image, meta_keywords,meta_description) VALUES 
   (:title,:meta_title,:image,:meta_keywords,:meta_description)");


    $stmt1->bindParam(':title', $title);
    $stmt1->bindParam(':meta_title', $meta_title);

    $stmt1->bindParam(':image', $image);
    
    $stmt1->bindParam(':meta_keywords', $meta_keywords);

    $stmt1->bindParam(':meta_description', $meta_description);


if($stmt1->execute()){ ?>

<script type="text/javascript">

    window.location.href = "header_imagesview.php?msg=success";

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



  $stmt1 = $conn->prepare("UPDATE header_images SET title=:title,meta_title=:meta_title,image = :image,meta_keywords=:meta_keywords,meta_description=:meta_description  WHERE id = :id ");

$stmt1->bindParam(':title', $title);
$stmt1->bindParam(':meta_title', $meta_title);

    $stmt1->bindParam(':image', $image);
    $stmt1->bindParam(':meta_keywords', $meta_keywords);

    $stmt1->bindParam(':meta_description', $meta_description);


    $stmt1->bindParam(':id', $id);



   if($stmt1->execute()){ ?>



<script type="text/javascript">

    window.location.href = "header_imagesview.php?msg=edited";

    </script>



<?php   }



}else{?>

   <script type="text/javascript">

window.location.href = "header_imagesadd.php?msg=imgerror";

  </script>



<?php 



}

}

}

 ?>




