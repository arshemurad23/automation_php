
<?php
include('dbinfo.php');

$id = $_REQUEST['id'];

$qur = "INSERT INTO test_aproval SELECT * FROM product_tbl WHERE product_id = '$id'";

  $res = mysqli_query($con,$qur);

  if($res == true){

  $del_qur = "delete from product_tbl where product_id = '$id'";
  $del_res = mysqli_query($con,$del_qur);
  
  if($del_res == true){  
    header('location:testing1.php');
  }
  
}

?>