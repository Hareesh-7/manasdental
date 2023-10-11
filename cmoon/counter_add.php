<?php include 'includes/header.php'; 





if($_GET['id'] != ''){ 



  $id=$_GET['id'];

    $sql = $conn->query("SELECT * FROM counter where id='$id' ");

    $result = $sql->fetch(PDO::FETCH_ASSOC);
    
}

?>





<section>



    <div class="container-fluid">   

      <div class="row justify-content-center">

             

         <div class="col-md-12">

            <div class="card">

               <div class="card-header"> 


               <div style="padding-bottom: 20px;"><a href="counter_view.php"><button style="float: right;" class="btn btn-dark" type="button"><span class="far fa-arrow-alt-circle-left "> </span>  Back </button></a>
               Edit COUNTER</div>

             </div>

                  <div class="card-body">



                     <form id="edit_details" onsubmit="return validate()" method="POST" enctype="multipart/form-data" >

   

             

                <div class="form-group row">

                     <label class="col-md-2 col-form-label">Title</label>

                     <div class="col-md-5"><input type="text" class="form-control" id="title" name="title" value="<?php echo $result['title']; ?>"  placeholder="Title" />

                     </div>

                  </div>


              

                     

                <div class="form-group row">

                     <label class="col-md-2 col-form-label">Count</label>

                     <div class="col-md-5"><input type="text" class="form-control" id="count" name="count" value="<?php echo $result['count']; ?>"  placeholder="Count" />

                     </div>

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




$stmt1 = $conn->prepare("INSERT INTO counter (title,count) VALUES (:title,:count)");


 $stmt1->bindParam(':title', $title);

$stmt1->bindParam(':count', $count);



if($stmt1->execute()){ ?>

<script type="text/javascript">

    window.location.href = "counter_view.php?msg=success";

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



  $stmt1 = $conn->prepare("UPDATE counter SET title=:title,count = :count  WHERE id = :id ");

$stmt1->bindParam(':title', $title);

$stmt1->bindParam(':count', $count);




    $stmt1->bindParam(':id', $id);



   if($stmt1->execute()){ ?>



<script type="text/javascript">

    window.location.href = "counter_view.php?msg=edited";

    </script>



<?php   }



}

}



 ?>




