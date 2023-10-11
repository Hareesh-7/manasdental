<?php include 'includes/header.php'; 



if($_GET['id'] != ''){ 

$id=$_GET['id'];

    $sql = $conn->query("SELECT * FROM why_us where id='$id' ");

    $result = $sql->fetch(PDO::FETCH_ASSOC);

}



 ?>

<section>


   <div class="container-fluid">   

      <div class="row justify-content-center">

         <div class="col-md-12">

            <div class="card">

               <div class="card-header"> 

               <div style="padding-bottom: 20px;"><a href="whyus_view.php"><button style="float: right;" class="btn btn-dark" type="button"><span class="far fa-arrow-alt-circle-left "> </span>  Back </button></a>

                Edit Why Us</div>

             </div>

                  <div class="card-body">



                     <form id="edit_details" onsubmit="return validate()" method="POST" enctype="multipart/form-data" >

   

             

                <div class="form-group row">

                     <label class="col-md-2 col-form-label">Title</label>

                     <div class="col-md-5"><input type="text" class="form-control" id="title" name="title" value="<?php echo $result['title']; ?>"  readonly placeholder="Title" />

                     </div>

                  </div>

                 

       


                <div class="form-group row">

                  <label class="col-md-2 col-form-label">Context</label>

                  <div class="col-md-9"><textarea rows="5" class="ckeditor" id="description" name="description" placeholder="description" ><?php echo $result['description'] ?></textarea>

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





<?php if(isset($_POST) && $_POST['submit'] != ''){



if($_GET['id'] == ''){





   foreach ($_POST AS $key => $value) {

       $_POST[$key] = ($value);

   }

   extract($_POST);





   

   $string = str_replace(" ", "-", $title); // Replaces all spaces with hyphens.

   $string = preg_replace('/[^A-Za-z0-9 \-]/', '-', $string); // Removes special chars.

   $p_link1 = preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.



  $p_link=$p_link1.'-'.rand(1,9999); 








   $stmt1 = $conn->prepare("INSERT INTO why_us (title,description) VALUES (:title,:description)");



    $stmt1->bindParam(':title', $title);

    $stmt1->bindParam(':description', $description);



   if($stmt1->execute()){ ?>





<script type="text/javascript">

    window.location.href = "whyus_view.php?msg=success";

    </script>



<?php   }

}



 else{




 foreach ($_POST AS $key => $value) {

       $_POST[$key] = ($value);

   }

   extract($_POST);



  

   $string = str_replace(" ", "-", $title); // Replaces all spaces with hyphens.

   $string = preg_replace('/[^A-Za-z0-9 \-]/', '-', $string); // Removes special chars.

   $p_link1 = preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.



  $p_link=$p_link1.'-'.rand(1,9999); 



  $stmt1 = $conn->prepare("UPDATE why_us SET title=:title,description=:description WHERE id = :id ");



    $stmt1->bindParam(':title', $title);

   
    $stmt1->bindParam(':description', $description);


    $stmt1->bindParam(':id', $id);



   if($stmt1->execute()){ ?>



<script type="text/javascript">

    window.location.href = "whyus_view.php?msg=edited";

    </script>



<?php   }
}
}



 ?>




