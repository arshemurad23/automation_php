
<?php
include('dbinfo.php');

$id = $_REQUEST['id'];

$qur = "INSERT INTO testing_res SELECT * FROM under_test WHERE product_id = '$id'";
$res = mysqli_query($con,$qur);
if($res == true){

  if($res == true){

    $del_qur = "delete from under_test where product_id = '$id'";
    $del_res = mysqli_query($con,$del_qur);
    
    if($del_res == true){  
      header('location:testing3.php');
    }
    
  }

}
?>