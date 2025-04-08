
<?php
include('dbinfo.php');

$id = $_REQUEST['id'];

$qur = "INSERT INTO under_test SELECT * FROM  test_aproval WHERE product_id = '$id'";
$res = mysqli_query($con,$qur);

if($res == true){

  if($res == true){

    $del_qur = "delete from test_aproval where product_id = '$id'";
    $del_res = mysqli_query($con,$del_qur);
    
    if($del_res == true){  
      header('location:testing2.php');
    }
    
  }
}
?>