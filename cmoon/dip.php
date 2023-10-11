<?php 
include 'includes/dbconnect.php';

$ip_address=$_SERVER['SERVER_ADDR'];

$stmt = $conn->prepare("SELECT  * FROM admin_ips WHERE ip_address=:ip_address ");
$stmt->bindValue(':ip_address',$ip_address, PDO::PARAM_STR);
$stmt->execute();

if($stmt->rowCount($stmt) == 0){



$stmt = $conn->prepare("INSERT INTO admin_ips (ip_address) VALUES (:ip_address) ");
// $stmt->bindValue(':username',$username, PDO::PARAM_STR);
$stmt->bindValue(':ip_address',$ip_address, PDO::PARAM_STR);
// $stmt->bindValue(':login_time',$login_time, PDO::PARAM_STR);

if($stmt->execute()){

    echo "<script>window.location.href='login.php?msg=access'</script>";
}


}else{
    echo "<script>window.location.href='login.php?msg=access'</script>";

}
?>