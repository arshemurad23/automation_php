<?php

include('dbinfo.php');

$id = $_REQUEST['id'];

$qry = "delete from product_tbl where product_id = '$id'";
if(mysqli_query($con, $qry)){
    header('location:product_in_production.php');
}else{
    echo "<script>alert('error')</script>";
}

mysqli_close($con);


?>