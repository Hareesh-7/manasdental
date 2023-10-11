<?php include 'includes/header.php'; ?>
    <section>
        <div class="container-fluid">
       
                  <div class="card">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">Site Logs</div>
                        <div style="padding-bottom: 20px;"><a href="index.php"><button style="float: right;" class="btn btn-outline-dark" type="button"><span class="far fa-arrow-alt-circle-left "> </span>  Back to Menu</button></a></div>
                        
              </div>
          </div>




<div class="card-body">
<div class="row mb-3">
</div>    
<div class="table-responsive">
        

   <table class="example table table-striped table-bordered nowrap" style="width:100%">
    <thead>
      <tr>
        <th>Sl.No</th>
        <th>User</th>
        <th>IP Address</th>
        <th>Login Time</th>
      </tr>
    </thead>
    <tbody>
<?php $no=1; $sql = $conn->query("SELECT * FROM  logs");
        while($result = $sql->fetch(PDO::FETCH_ASSOC)){ ?> 
            <tr>
                <td> <?php echo $no; ?> </td>
                <td> <?php echo $result['user_name']; ?> </td>
                <td> <?php echo $result['ip_address']; ?> </td>
                <td> <?php echo $result['login_time']; ?> </td>
<?php  $no++;}?>    
    </tbody>
    <tfoot>
      <tr>
         <th>Sl.No</th>
        <th>User</th>
        <th>IP Address</th>
        <th>Login Time</th>
      </tr>
    </tfoot>
</table>
</div></div></div></div>
    </section>

<?php include 'includes/footer.php'; ?>
