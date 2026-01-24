<?php
  session_start();
  require './class/atclass.php';
  $vendor_id=$_POST['vendor_id'];
  $user_id=$_POST['user_id'];
  $bdate=$_POST['bdate'];
  $bstatus=$_POST['bstatus'];
  $baddress=$_POST['baddress'];

  if(!isset($_SESSION['uid']))
  {
    header("location:login.php");
  }

  $q=mysqli_query($connection,"insert into tbl_booking(vendor_id,user_id,booking_date,booking_status,booking_address) 
  values('{$vendor_id}','{$user_id}','{$bdate}','{$bstatus}','{$baddress}')");

  header("location:thankyou.php");

?>
