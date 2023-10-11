<?php include 'includes/header.php'; 

?>

    <section>

        <div class="container-fluid">

       

                  <div class="card">

              <div class="card-header">

                <div class="row align-items-center">

                  <div class="col">CMS</div>

                        <div style="padding-bottom: 20px;"><a href="index.php"><button style="float: right;" class="btn btn-outline-dark" type="button"><span class="far fa-arrow-alt-circle-left "> </span>  Back to Menu </button></a></div>
              </div>

          </div>



<?php if($_GET['msg'] == 'success'){ 

        echo '<script type="text/javascript">';

    echo 'setTimeout(function () { swal("GOOD JOB!","Sucessfully added to database!","success");';

    echo '}, 1000);</script>';  } 

      if($_GET['del_msg'] == 'success'){ 

        echo '<script type="text/javascript">';

    echo 'setTimeout(function () { swal("DELETED!","","success");';

    echo '}, 1000);</script>'; } 

    if($_GET['msg'] == 'edited'){ 

        echo '<script type="text/javascript">';

    echo 'setTimeout(function () { swal("UPDATED!","","success");';

    echo '}, 1000);</script>'; } 

 ?> 





<div class="card-body">

<div class="row mb-3">

</div>    

<div class="table-responsive">

        



   <table class="example table table-striped table-bordered nowrap" style="width:100%">

    <thead>

      <tr>

        <th>Sl.No</th>

        <th>Title</th>
        
       <th>Image</th>
  

        <th>Action</th>

      </tr>

    </thead>

    <tbody>

<?php $no=1; $sql = $conn->query("SELECT * FROM  cms ");

        while($result = $sql->fetch(PDO::FETCH_ASSOC)){ ?> 

            <tr>

                <td><?php echo $no; ?></td>

                 <td><?php echo $result['title']; ?></td>


                 
             <td>
               <?php if($result['id'] !=2 && $result['id'] !=3 && $result['id'] !=4 && $result['id'] !=6 && $result['id'] !=7 && $result['id'] !=8 ){ ?>
     
    <a data-fancybox="gallery" href="../uploads/<?php echo $result['image']; ?>"><img width="200" height="200" src="../uploads/<?php echo $result['image']; ?>"class="img-fluid"></a>  </td><?php }else{ echo 'N/A'; } ?>


                <td> <a href="cms_add.php?id=<?php echo $result['id']?>" class="btn btn-outline-success">Edit </a> 

              </td>

            </tr>

<?php  $no++;}?>    

    </tbody>

</table>

</div></div></div></div>

    </section>



<?php include 'includes/footer.php'; ?>

<script type="text/javascript">

    $('.example').DataTable({

  responsive: true

});

</script>


