<?php include 'includes/header.php'; 

?>

    <section>

        <div class="container-fluid">

       

                  <div class="card">

              <div class="card-header">

                <div class="row align-items-center">

                  <div class="col">Testimonials</div>

                        <div style="padding-bottom: 20px;"><a href="index.php"><button style="float: right;" class="btn btn-outline-dark" type="button"><span class="far fa-arrow-alt-circle-left "> </span>  Back to Menu </button></a></div>

                        <div style="padding-bottom: 20px;"><a href="testimonials_add.php"><button style="float: right;" class="btn btn-outline-dark" type="button"> 

                         ADD TESTIMONIALS </button></a></div>

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

        <th>Name</th>

        <th>Image</th>

        <th>Action</th>

      </tr>

    </thead>

    <tbody>

<?php $no=1; $sql = $conn->query("SELECT * FROM  testimonials ");

        while($result = $sql->fetch(PDO::FETCH_ASSOC)){ ?> 

            <tr>

                <td><?php echo $no; ?></td>

                <td><?php echo $result['name']; ?></td>

                <td> <a data-fancybox="gallery" href="../uploads/<?php echo $result['image']; ?>"><img width="200" height="200" src="../uploads/<?php echo $result['image']; ?>"class="img-fluid"></a>  </td>



                <td> <a href="testimonials_add.php?id=<?php echo $result['id']?>" class="btn btn-outline-success">Edit </a> 

                <a onclick="ConfirmDelete(<?php echo $result['id']; ?>)" href="JavaScript:Void(0);" class="btn btn-outline-danger">Delete</a> </td>

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



<?php



if($_GET['id'] != ''){

$id=$_GET['id'];



$sql = "DELETE from testimonials where id='$id'";

    // use exec() because no results are returned

   $conn->exec($sql);



   if($sql){ ?>



<script type="text/javascript">

    window.location.href = "testimonials_view.php?del_msg=success";

    </script>  

<?php } }

?>

<script type="text/javascript">

      function ConfirmDelete(id)

      {

        swal({



      title: "Are you sure?",



      text: "Once deleted, you will not be able to recover this data!",



      icon: "warning",



      buttons: true,



      dangerMode: true,



    })



    .then((willDelete) => {



      if (willDelete) {



window.location.href='testimonials_view.php?id=<?php echo $result['id']?>'+id;

}

});

}

      //   if (confirm("Are you sure you want to delete ?"))

      //    location.href='view_images.php?did='+id;

      // }

</script>